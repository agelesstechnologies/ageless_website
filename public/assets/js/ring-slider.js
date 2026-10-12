// Circular 3D slider: cards on a cylinder, drag to spin with momentum, gentle auto-rotation.
window.initRingSlider = function () {
    const stage = document.getElementById('projectSlideshow');
    const ring = stage && stage.querySelector('.project-ring');
    if (!ring) return;
    const cards = Array.from(ring.querySelectorAll('.project-portfolio-item'));
    const n = cards.length;
    if (!n) return;
    const motion = matchMedia('(prefers-reduced-motion: reduce)');
    const step = 360 / n;
    let radius = 0, angle = 0, velocity = 0;
    let dragging = false, lastX = 0, lastT = 0, moved = 0, hovering = false;

    function layout() {
        const width = cards[0].offsetWidth;
        const gap = innerWidth < 768 ? 18 : 36;
        radius = n > 2 ? (width + gap) / 2 / Math.tan(Math.PI / n) : width;
        cards.forEach((card, i) => { card.style.transform = `rotateY(${i * step}deg) translateZ(${radius}px)`; });
        paint();
    }
    function paint() {
        ring.style.transform = `rotateX(-7deg) translateZ(${-radius}px) rotateY(${angle}deg)`;
        cards.forEach((card, i) => {
            const a = ((((i * step + angle) % 360) + 540) % 360) - 180; // -180..180, 0 = facing the viewer
            const back = Math.abs(a) > 90;
            card.classList.toggle('is-back', back);
            card.setAttribute('aria-hidden', String(back));
            card.querySelectorAll('a, button').forEach(control => control.tabIndex = back ? -1 : 0);
        });
    }
    function frame() {
        if (!dragging) {
            angle += velocity;
            velocity *= 0.95;
            if (Math.abs(velocity) < 0.02) {
                velocity = 0;
                if (!motion.matches && !hovering && !document.hidden) angle -= 0.08;
            }
        }
        paint();
        requestAnimationFrame(frame);
    }
    stage.addEventListener('pointerdown', event => {
        if (event.button !== 0) return;
        dragging = true; moved = 0; velocity = 0;
        lastX = event.clientX; lastT = performance.now();
        stage.classList.add('is-dragging');
    });
    window.addEventListener('pointermove', event => {
        if (!dragging) return;
        const dx = event.clientX - lastX, now = performance.now();
        moved += Math.abs(dx);
        const delta = dx * 0.32;
        angle += delta;
        velocity = delta / Math.max(1, (now - lastT) / 16);
        lastX = event.clientX; lastT = now;
    });
    function release() {
        if (!dragging) return;
        dragging = false;
        stage.classList.remove('is-dragging');
        if (performance.now() - lastT > 90) velocity = 0;
        velocity = Math.max(-9, Math.min(9, velocity));
    }
    window.addEventListener('pointerup', release);
    window.addEventListener('pointercancel', release);
    stage.addEventListener('click', event => { if (moved > 6) { event.preventDefault(); event.stopImmediatePropagation(); moved = 0; } }, true);
    stage.addEventListener('dragstart', event => event.preventDefault());
    stage.addEventListener('mouseenter', () => { hovering = true; });
    stage.addEventListener('mouseleave', () => { hovering = false; });
    stage.addEventListener('keydown', event => {
        if (event.key === 'ArrowLeft') velocity += 5;
        if (event.key === 'ArrowRight') velocity -= 5;
    });
    addEventListener('resize', layout);
    layout();
    requestAnimationFrame(frame);
};
