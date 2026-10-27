const fs = require('node:fs');
const path = require('node:path');
const postcss = require('postcss');
const tailwind = require('tailwindcss');
const selectorParser = require('postcss-selector-parser');
const cssnano = require('cssnano');
const config = require('../tailwind.config.cjs');
const source = path.resolve('resources/css');
const target = path.resolve('public/assets/css');

function compactProfiles(container) {
  const stack = [];
  const signature = rule => JSON.stringify(rule.nodes.map(node =>
    node.type === 'decl' ? [node.prop, node.value, !!node.important] : node.toString()));
  for (const node of [...(container.nodes || [])]) {
    if (node.type === 'atrule' && node.nodes && !/keyframes$|font-face/.test(node.name)) compactProfiles(node);
    const previous = stack[stack.length - 1];
    if (previous && previous.type === 'atrule' && node.type === 'atrule' && previous.name === node.name &&
        previous.params === node.params && previous.nodes && node.nodes && !/keyframes$|font-face/.test(node.name)) {
      for (const child of [...node.nodes]) previous.append(child);
      node.remove(); compactProfiles(previous); continue;
    }
    if (previous && previous.type === 'rule' && node.type === 'rule' && previous.raws.tailwindProfile && node.raws.tailwindProfile) {
      if (previous.selector === node.selector) {
        for (const child of [...node.nodes]) previous.append(child);
        node.remove(); continue;
      }
      if (signature(previous) === signature(node)) {
        previous.selector += ',' + node.selector;
        node.remove();
        const earlier = stack[stack.length - 2];
        if (earlier && earlier.type === 'rule' && earlier.selector === previous.selector) {
          for (const child of [...previous.nodes]) earlier.append(child);
          previous.remove(); stack.pop();
        }
        continue;
      }
    }
    stack.push(node);
  }
}

async function build() {
  for (const name of ['tailwind.css']) {
    const from = path.join(source, name);
    const result = await postcss([tailwind(config)]).process(fs.readFileSync(from, 'utf8'), {
      from, to: path.join(target, name), map: false
    });
    // Utility profiles use short activation classes. This preserves the legacy
    // JS selector contracts without adding thousands of classes to each page.
    const root = result.root;
    root.walkRules(rule => {
      if (!rule.selector.includes('s-')) return;
      rule.selector = selectorParser(selectors => selectors.walkClasses(node => {
        const match = /^s-(.+)-\d+:/.exec(node.value);
        if (match) {
          rule.raws.tailwindProfile = true;
          node.value = `tw-profile-${match[1]}`;
        }
        // Tailwind prefixes classes in custom variant selectors as well as
        // utility names. Existing component and JS state hooks keep their names.
        else if (node.value.startsWith('tw-')) node.value = node.value.slice(3);
      })).processSync(rule.selector);
    });
    // Explicit utilities used on elements historically followed component
    // styles. Retain their precedence, including important inline migrations.
    const direct = [];
    root.each(node => {
      let hasProfile = false;
      let hasClasses = false;
      const inspect = rule => {
        hasProfile ||= !!rule.raws.tailwindProfile;
        hasClasses ||= /\./.test(rule.selector);
      };
      if (node.type === 'rule') inspect(node);
      else if (node.type === 'atrule' && !/keyframes$/.test(node.name)) node.walkRules(inspect);
      if (hasClasses && !hasProfile) direct.push(node);
    });
    for (const node of direct) { node.remove(); root.append(node); }
    compactProfiles(root);
    const optimized = await postcss([cssnano({ preset: ['default', {
      // Font unicode ranges and inline SVG data must retain their spelling.
      normalizeUrl: false, normalizeUnicode: false
    }] })]).process(root, { from, map: false });
    fs.writeFileSync(path.join(target, name), optimized.css);
  }
  console.log('Tailwind styles compiled.');
}
let running = false;
let pending = false;
async function run() {
  if (running) { pending = true; return; }
  running = true;
  try { await build(); } catch (error) { console.error(error.message); process.exitCode = 1; }
  finally {
    running = false;
    if (pending) { pending = false; run(); }
  }
}
run();
if (process.argv.includes('--watch')) {
  let timer;
  const rebuild = () => { clearTimeout(timer); timer = setTimeout(run, 150); };
  fs.watch(source, { recursive: true }, rebuild);
  fs.watch(path.resolve('resources/views'), { recursive: true }, rebuild);
  fs.watch(path.resolve('public/assets/js'), { recursive: true }, rebuild);
  fs.watch(path.resolve('tailwind.config.cjs'), rebuild);
  fs.watch(path.resolve('resources/tailwind'), { recursive: true }, rebuild);
}
