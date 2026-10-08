<!DOCTYPE html>
<html lang="en" class="@include('partials.tailwind.poppins-font')
@include('partials.tailwind.pages-ai-1')
@include('partials.tailwind.website-chat')
@stack('tailwind_styles')">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HydraWorld — Apple-Level Water Park Homepage</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}?v={{ filemtime(public_path('assets/css/tailwind.css')) }}">
</head>
<body>
  <div class="bg-orbs"></div>
  <div class="noise"></div>
  <div class="vignette"></div>
  <div class="cursor"></div>
  <div class="cursor-ring"></div>

  <div class="site-wrap">
    <nav class="nav">
      <div class="nav-inner">
        <a href="#top" class="brand">
          <span class="brand-mark"></span>
          <span>HydraWorld</span>
        </a>
        <div class="nav-links">
          <a href="#vision">Vision</a>
          <a href="#attractions">Attractions</a>
          <a href="#story">Experience</a>
          <a href="#contact" class="nav-cta">Build With Us</a>
        </div>
      </div>
    </nav>

    <main id="top">
      <section class="hero">
        <div class="container hero-grid">
          <div class="hero-copy">
            <div class="eyebrow reveal-y"><span class="dot"></span> Amusement + Adventure Water Park Builder</div>
            <h1 class="hero-title">
              <span class="line hero-split"><span>Build</span></span>
              <span class="line hero-split"><span>Water Parks</span></span>
              <span class="line hero-split"><span>That Feel Alive.</span></span>
            </h1>
            <p class="hero-text reveal-y">
              Cinematic destinations. Sculpted slides. Electric night energy. We design immersive water worlds with Apple-level motion, futuristic depth, and unforgettable visitor flow.
            </p>
            <div class="hero-actions reveal-y">
              <a href="#contact" class="btn btn-primary magnetic">Start a Project</a>
              <a href="#vision" class="btn btn-secondary magnetic">Explore the Vision</a>
            </div>
            <div class="hero-meta">
              <div class="meta-card reveal-y"><strong>3D-first</strong><span>Visual storytelling with premium motion</span></div>
              <div class="meta-card reveal-y"><strong>Luxury flow</strong><span>Attractions, zoning, and family pathways</span></div>
              <div class="meta-card reveal-y"><strong>Night wow</strong><span>LED-ready iconic landmark experiences</span></div>
            </div>
          </div>

          <div class="hero-visual">
            <div class="hero-stage" id="heroStage">
              <div class="ring parallax-layer" data-depth="16"></div>
              <div class="beam parallax-layer" data-depth="22"></div>
              <div class="grid-surface parallax-layer" data-depth="8"></div>
              <div class="wave-path parallax-layer" data-depth="30"></div>
              <div class="planet parallax-layer" data-depth="42"></div>

              <div class="card-float card-1 parallax-layer" data-depth="36">
                <h4>Signature Slide Spine</h4>
                <p>Iconic forms engineered for skyline visibility, thrill, and brand identity.</p>
              </div>

              <div class="card-float card-2 parallax-layer" data-depth="20">
                <h4>Guest Flow</h4>
                <p>Smooth transitions between family, thrill, and premium lounge zones.</p>
              </div>

              <div class="card-float card-3 parallax-layer" data-depth="28">
                <h4>Night Atmosphere</h4>
                <p>Glow systems, reflections, and cinematic lighting for memorable evenings.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="showcase" id="vision">
        <div class="container">
          <div class="section-head">
            <div class="section-label reveal-y">Vision Engine</div>
            <h2 class="section-title reveal-y">A homepage that moves like a product film.</h2>
            <p class="section-copy reveal-y">
              This concept is built with layered panels, soft glass surfaces, cinematic contrast, and frictionless motion language so the brand feels premium before the visitor even scrolls halfway.
            </p>
          </div>

          <div class="showcase-grid">
            <div class="mega-panel tilt-card reveal-y">
              <div class="mega-water"></div>
              <div class="waterslide float-slow"></div>
              <div class="panel-overlay-card fade">
                <h3>Destination-scale visual identity</h3>
                <p>Monumental hero composition with strong focal depth, shaped gradients, and sculptural forms inspired by flagship product launches.</p>
              </div>
            </div>

            <div class="stack">
              <div class="stack-card tilt-card reveal-x">
                <h3>Precision motion</h3>
                <p>Elegant transitions, split text reveals, parallax drift, and restrained easing that feel premium instead of flashy.</p>
                <div class="pill-line">
                  <span class="pill">Lenis smooth scroll</span>
                  <span class="pill">GSAP timeline</span>
                  <span class="pill">Magnetic buttons</span>
                </div>
              </div>
              <div class="stack-card tilt-card reveal-x">
                <h3>Architectural storytelling</h3>
                <p>Each section behaves like a chapter — vision, attractions, experience flow, and project CTA — without visual clutter.</p>
                <div class="pill-line">
                  <span class="pill">Sticky rhythm</span>
                  <span class="pill">Glass surfaces</span>
                  <span class="pill">Depth layers</span>
                </div>
              </div>
              <div class="stack-card tilt-card reveal-x">
                <h3>Built for your business</h3>
                <p>Perfect for water parks, amusement destinations, wave pools, lazy rivers, signature towers, and themed family zones.</p>
                <div class="pill-line">
                  <span class="pill">Luxury leads</span>
                  <span class="pill">Strong CTA</span>
                  <span class="pill">Project-ready layout</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="features" id="attractions">
        <div class="container">
          <div class="section-head">
            <div class="section-label reveal-y">Attractions</div>
            <h2 class="section-title reveal-y">Designed for thrill, family time, and iconic destination value.</h2>
          </div>

          <div class="features-grid">
            <article class="feature-card tilt-card reveal-y">
              <div class="icon-orb">01</div>
              <h3>Skyline slides</h3>
              <p>Twisted, visible-from-a-distance structures that create identity and become the hero image of the property.</p>
              <div class="feature-visual float-fast"></div>
            </article>

            <article class="feature-card tilt-card reveal-y">
              <div class="icon-orb">02</div>
              <h3>Wave + plaza core</h3>
              <p>A social heart that blends wave pools, food decks, LED moments, and premium circulation across the park.</p>
              <div class="feature-visual float-slow"></div>
            </article>

            <article class="feature-card tilt-card reveal-y">
              <div class="icon-orb">03</div>
              <h3>Family discovery zones</h3>
              <p>Multi-age play systems, safe exploration, splash choreography, and beautiful theming that keeps guests engaged longer.</p>
              <div class="feature-visual float-fast"></div>
            </article>
          </div>
        </div>
      </section>

      <section class="story" id="story">
        <div class="container">
          <div class="section-head">
            <div class="section-label reveal-y">Experience Flow</div>
            <h2 class="section-title reveal-y">A scroll journey with flagship-product energy.</h2>
          </div>

          <div class="story-track">
            <div class="story-step">
              <div class="story-copy reveal-y">
                <div class="story-num">01</div>
                <h3>Arrive with impact.</h3>
                <p>The opening frame sells the dream instantly with giant typography, controlled glow, layered forms, and motion that feels expensive, not noisy.</p>
              </div>
              <div class="story-art tilt-card reveal-y">
                <div class="art-inner">
                  <div class="art-dome float-slow"></div>
                  <div class="art-track float-fast"></div>
                  <div class="art-grid"></div>
                </div>
              </div>
            </div>

            <div class="story-step">
              <div class="story-art tilt-card reveal-y">
                <div class="art-inner">
                  <div class="art-drop float-fast"></div>
                  <div class="art-track float-slow ![top:43%] ![left:14%] ![width:70%] ![transform:rotate(14deg)]"></div>
                  <div class="art-grid"></div>
                </div>
              </div>
              <div class="story-copy reveal-y">
                <div class="story-num">02</div>
                <h3>Guide the eye with clean chapters.</h3>
                <p>Instead of dumping everything at once, the content unfolds in disciplined layers — concept, attraction value, experience design, then conversion.</p>
              </div>
            </div>

            <div class="story-step">
              <div class="story-copy reveal-y">
                <div class="story-num">03</div>
                <h3>Finish with confidence.</h3>
                <p>A powerful CTA closes the narrative with enough emotional energy to feel aspirational and enough clarity to generate serious business inquiries.</p>
              </div>
              <div class="story-art tilt-card reveal-y">
                <div class="art-inner">
                  <div class="art-dome float-fast ![width:48%] ![height:48%] ![left:26%] ![top:20%]"></div>
                  <div class="art-drop float-slow ![width:18%] ![left:42%] ![top:28%] ![height:36%]"></div>
                  <div class="art-grid"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta" id="contact">
        <div class="container">
          <div class="cta-panel reveal-y">
            <div>
              <div class="section-label">Build the Future</div>
              <h3 class="![font-size:clamp(34px,5vw,72px)] ![line-height:.96] ![letter-spacing:-.06em] ![margin:0_0_16px]">Let your water park website feel as iconic as the destination itself.</h3>
              <p>Use this as the base for a premium homepage for your amusement adventure water park business. Replace text, add project images, and connect the CTA to your inquiry form or WhatsApp flow.</p>
              <div class="cta-actions">
                <a class="btn btn-primary magnetic" href="#top">Back to Top</a>
                <a class="btn btn-secondary magnetic" href="#attractions">See Attractions</a>
              </div>
            </div>
            <div class="cta-specs">
              <div class="spec"><span>Style</span><strong>Apple-level cinematic</strong></div>
              <div class="spec"><span>Motion</span><strong>GSAP + Lenis smooth flow</strong></div>
              <div class="spec"><span>Look</span><strong>Glass, depth, premium gradients</strong></div>
              <div class="spec"><span>Use case</span><strong>Water park / amusement builder</strong></div>
            </div>
          </div>
        </div>
      </section>

      <footer class="footer">
        <div class="container">HydraWorld concept homepage — cinematic interactive HTML landing page.</div>
      </footer>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/bundled/lenis.min.js"></script>
  <script>
    gsap.registerPlugin(ScrollTrigger);

    const lenis = new Lenis({
      duration: 1.15,
      wheelMultiplier: 0.92,
      smoothWheel: true,
      touchMultiplier: 1.2,
      infinite: false
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.lagSmoothing(0);

    const nav = document.querySelector('.nav');
    ScrollTrigger.create({
      start: 30,
      end: 99999,
      onUpdate: self => {
        if (self.direction === 1 && self.scroll() > 120) {
          nav.style.transform = 'translateY(-6px)';
        } else {
          nav.style.transform = 'translateY(0px)';
        }
      }
    });

    gsap.set('.hero-split span', { yPercent: 110, opacity: 0 });
    gsap.set('.reveal-y', { y: 60, opacity: 0 });
    gsap.set('.reveal-x', { x: 50, opacity: 0 });
    gsap.set('.fade', { opacity: 0, y: 24 });

    const intro = gsap.timeline({ defaults: { ease: 'power3.out' } });
    intro
      .to('.hero-split span', { yPercent: 0, opacity: 1, duration: 1.2, stagger: 0.1 })
      .to('.reveal-y', { y: 0, opacity: 1, duration: 1, stagger: 0.08 }, '-=0.8')
      .to('.fade', { opacity: 1, y: 0, duration: 1 }, '-=0.7')
      .from('.meta-card', { y: 40, opacity: 0, duration: 1, stagger: 0.08 }, '-=0.7')
      .from('.planet', { scale: 0.72, opacity: 0, duration: 1.4 }, '-=1.3')
      .from('.ring, .wave-path, .card-float, .beam, .grid-surface', { y: 50, opacity: 0, duration: 1.2, stagger: 0.07 }, '-=1.1');

    gsap.utils.toArray('.reveal-y').forEach((el) => {
      if (el.closest('.hero')) return;
      gsap.fromTo(el, { y: 60, opacity: 0 }, {
        y: 0,
        opacity: 1,
        duration: 1.1,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: el,
          start: 'top 85%'
        }
      });
    });

    gsap.utils.toArray('.reveal-x').forEach((el) => {
      gsap.fromTo(el, { x: 50, opacity: 0 }, {
        x: 0,
        opacity: 1,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: el,
          start: 'top 84%'
        }
      });
    });

    gsap.to('.bg-orbs', {
      yPercent: 10,
      ease: 'none',
      scrollTrigger: {
        trigger: 'body',
        start: 'top top',
        end: 'bottom bottom',
        scrub: 1
      }
    });

    gsap.to('.planet', {
      y: 70,
      rotate: 12,
      ease: 'none',
      scrollTrigger: {
        trigger: '.hero',
        start: 'top top',
        end: 'bottom top',
        scrub: 1.2
      }
    });

    gsap.to('.ring', {
      rotateZ: 30,
      y: 40,
      ease: 'none',
      scrollTrigger: {
        trigger: '.hero',
        start: 'top top',
        end: 'bottom top',
        scrub: 1.5
      }
    });

    gsap.utils.toArray('.parallax-layer').forEach((el) => {
      const depth = Number(el.dataset.depth || 20);
      gsap.to(el, {
        y: depth,
        x: depth * 0.18,
        ease: 'none',
        scrollTrigger: {
          trigger: '.hero',
          start: 'top top',
          end: 'bottom top',
          scrub: 1
        }
      });
    });

    gsap.utils.toArray('.float-slow').forEach((el) => {
      gsap.to(el, {
        y: 18,
        duration: 3.2,
        yoyo: true,
        repeat: -1,
        ease: 'sine.inOut'
      });
    });

    gsap.utils.toArray('.float-fast').forEach((el) => {
      gsap.to(el, {
        y: -14,
        duration: 2.4,
        yoyo: true,
        repeat: -1,
        ease: 'sine.inOut'
      });
    });

    gsap.utils.toArray('.tilt-card').forEach((card) => {
      card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = (e.clientX - rect.left) / rect.width - 0.5;
        const y = (e.clientY - rect.top) / rect.height - 0.5;
        gsap.to(card, {
          rotateY: x * 10,
          rotateX: y * -10,
          transformPerspective: 1000,
          transformOrigin: 'center',
          duration: 0.45,
          ease: 'power2.out'
        });
      });

      card.addEventListener('mouseleave', () => {
        gsap.to(card, {
          rotateX: 0,
          rotateY: 0,
          duration: 0.6,
          ease: 'power3.out'
        });
      });
    });

    gsap.utils.toArray('.magnetic').forEach((button) => {
      button.addEventListener('mousemove', (e) => {
        const rect = button.getBoundingClientRect();
        const x = e.clientX - rect.left - rect.width / 2;
        const y = e.clientY - rect.top - rect.height / 2;
        gsap.to(button, {
          x: x * 0.16,
          y: y * 0.16,
          duration: 0.35,
          ease: 'power2.out'
        });
      });
      button.addEventListener('mouseleave', () => {
        gsap.to(button, { x: 0, y: 0, duration: 0.55, ease: 'elastic.out(1, 0.4)' });
      });
    });

    const cursor = document.querySelector('.cursor');
    const ring = document.querySelector('.cursor-ring');
    let mouseX = window.innerWidth / 2, mouseY = window.innerHeight / 2;
    let ringX = mouseX, ringY = mouseY;

    window.addEventListener('mousemove', (e) => {
      mouseX = e.clientX;
      mouseY = e.clientY;
      gsap.to(cursor, { x: mouseX, y: mouseY, duration: 0.12, ease: 'power2.out' });
    });

    gsap.ticker.add(() => {
      ringX += (mouseX - ringX) * 0.18;
      ringY += (mouseY - ringY) * 0.18;
      gsap.set(ring, { x: ringX, y: ringY });
    });

    document.querySelectorAll('a, button, .tilt-card').forEach((el) => {
      el.addEventListener('mouseenter', () => {
        gsap.to(ring, { scale: 1.35, borderColor: 'rgba(125,231,255,.58)', duration: 0.25 });
      });
      el.addEventListener('mouseleave', () => {
        gsap.to(ring, { scale: 1, borderColor: 'rgba(255,255,255,.28)', duration: 0.25 });
      });
    });

    const heroStage = document.getElementById('heroStage');
    window.addEventListener('mousemove', (e) => {
      const x = (e.clientX / window.innerWidth - 0.5) * 18;
      const y = (e.clientY / window.innerHeight - 0.5) * 14;
      gsap.to(heroStage, {
        rotateY: x,
        rotateX: -y,
        duration: 1.1,
        ease: 'power3.out'
      });
    });
  </script>
@include('partials.website-chat')
</body>
</html>