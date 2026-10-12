window.initProjectRing = function () {
    const stage = document.getElementById('projectSlideshow');
    if (!stage) return;
    const cards = Array.from(stage.querySelectorAll('.project-portfolio-item'));
    const previous = document.getElementById('previousProjectSlide');
    const next = document.getElementById('nextProjectSlide');
    const status = document.getElementById('projectSlideStatus');
    const toggle = document.getElementById('toggleProjectAutoplay');
    const motion = matchMedia('(prefers-reduced-motion: reduce)');
    const empty = document.createElement('p');
    empty.className = 'project-ring-empty';
    empty.textContent = 'No projects available in this category yet.';
    stage.appendChild(empty);
    let filtered = cards, selected = 0, photo = 0, paused = motion.matches;
    let startX = null, moved = false;
    function paint() {
        cards.forEach(card => {
            const active = card === filtered[selected];
            card.hidden = !active;
            card.setAttribute('aria-hidden', String(!active));
            card.querySelectorAll('a, button').forEach(control => control.tabIndex = active ? 0 : -1);
        });
        const active = filtered[selected];
        if (active) {
            active.querySelector('.project-photo-track').style.transform = `translateX(-${photo * 100}%)`;
            active.querySelectorAll('.project-photo-dots span').forEach((dot, index) => dot.classList.toggle('is-active', index === photo));
        }
        empty.hidden = !!filtered.length;
        previous.disabled = next.disabled = filtered.length < 2;
        toggle.disabled = !filtered.length;
        status.textContent = filtered.length ? `Project ${selected + 1} of ${filtered.length} · Photo ${photo + 1} of 3` : 'No projects';
    }
    function changeProject(direction) {
        if (!filtered.length) return;
        selected = (selected + direction + filtered.length) % filtered.length;
        photo = 0; paint();
    }
    previous.addEventListener('click', () => changeProject(-1));
    next.addEventListener('click', () => changeProject(1));
    stage.addEventListener('keydown', event => {
        if (!['ArrowLeft', 'ArrowRight'].includes(event.key)) return;
        event.preventDefault(); photo = (photo + (event.key === 'ArrowLeft' ? 2 : 1)) % 3; paint();
    });
    stage.addEventListener('pointerdown', event => { if (event.button === 0) { startX = event.clientX; moved = false; } });
    window.addEventListener('pointermove', event => { if (startX !== null && Math.abs(event.clientX - startX) > 12) moved = true; });
    window.addEventListener('pointerup', event => {
        if (startX === null) return;
        const distance = event.clientX - startX; startX = null;
        if (Math.abs(distance) > 40) { photo = (photo + (distance > 0 ? 2 : 1)) % 3; paint(); }
    });
    window.addEventListener('pointercancel', () => { startX = null; moved = false; });
    stage.addEventListener('dragstart', event => event.preventDefault());
    stage.addEventListener('click', event => { if (moved) { event.preventDefault(); event.stopImmediatePropagation(); moved = false; } }, true);
    document.querySelectorAll('.filter-tab-btn').forEach(button => button.addEventListener('click', () => {
        document.querySelectorAll('.filter-tab-btn').forEach(btn => { btn.classList.toggle('is-active', btn === button); btn.setAttribute('aria-pressed', String(btn === button)); });
        filtered = cards.filter(card => button.dataset.filter === 'all' || card.dataset.category === button.dataset.filter);
        selected = photo = 0; paint();
    }));
    function updateToggle() {
        toggle.setAttribute('aria-label', paused ? 'Start automatic photos' : 'Pause automatic photos');
        toggle.setAttribute('aria-pressed', String(paused));
        toggle.firstElementChild.className = paused ? 'las la-play' : 'las la-pause';
    }
    toggle.addEventListener('click', () => { paused = !paused; updateToggle(); });
    motion.addEventListener('change', () => { paused = motion.matches; updateToggle(); });
    setInterval(() => {
        if (paused || startX !== null || document.hidden || stage.matches(':focus-within') || document.querySelector('.quote-modal-overlay.is-active')) return;
        const rect = stage.getBoundingClientRect();
        if (rect.bottom <= 0 || rect.top >= innerHeight || !filtered.length) return;
        photo = (photo + 1) % 3; paint();
    }, 3000);
    updateToggle(); paint();
};
