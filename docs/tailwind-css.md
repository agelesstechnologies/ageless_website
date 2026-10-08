# Tailwind styles

Run `npm ci` once, then `npm run build` after editing a Blade template or utility
profile. `npm run dev` watches templates, JavaScript, and Tailwind configuration.
Use Node.js 22 or newer. PHP deployments serve the committed generated bundle;
they do not need Node running.

`resources/css/tailwind.css` contains only Tailwind directives. The browser loads
one generated file, `public/assets/css/tailwind.css`. Do not edit that output.
All former page, admin, Bootstrap, and plugin stylesheet files have been removed.

Use ordinary Tailwind classes directly on elements for new work. Named utilities
have the `tw-` prefix, for example `tw-flex`, `tw-items-center`, and
`md:tw-grid-cols-2`. Arbitrary property utilities are unprefixed, for example
`[padding:80px_0]`. Literal classes are required for content scanning.

The existing designs use utility profiles in `resources/views/partials/tailwind`.
Each profile lists Tailwind utilities under a comment identifying its original
component selector. These utility lists are build input: Tailwind scans Blade
comments as well as rendered markup. The profile renders one short activation
class, such as `tw-profile-products-page`, on the document root. The build aliases
its generated candidates to that activation class, keeping page markup small.

Ordered variants in `resources/tailwind/variants.json` connect these utilities to
component selectors, media queries, and plugin states. This preserves specificity,
fallback declaration order, and selectors used by existing JavaScript. Changing
a profile's utility changes its styling; replacing or adding selectors requires
updating the corresponding variant. Explicit utilities placed directly on an
element are emitted after profile styles, preserving the prior override order.

Font definitions and animation keyframes live in `resources/tailwind/native.json`
and are registered by the Tailwind plugin. Those browser primitives cannot be
replaced by layout utilities. Runtime image URLs and gallery heights are passed
as CSS variables; their presentation properties are Tailwind utilities.

Preflight and Tailwind's container utility remain disabled because the former
reset and container behavior are already represented by utility profiles.
JavaScript plugins are retained, but their standalone CSS files are no longer
loaded. The build minifies the final bundle with PostCSS and cssnano.
