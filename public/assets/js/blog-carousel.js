(() => {
    'use strict';

    document.querySelectorAll('[data-journal-carousel]').forEach((carousel) => {
        const track = carousel.querySelector('.blog-card-grid');
        const cards = Array.from(track.querySelectorAll('.journal-card'));
        if (!cards.length) return;

        const controls = carousel.querySelector('.journal-carousel-controls');
        const previous = controls.querySelector('[data-arc-prev]');
        const next = controls.querySelector('[data-arc-next]');
        const counter = controls.querySelector('.journal-carousel-count');
        let active = 0;
        let step = 13;
        let drag = null;
        let suppressClick = false;
        const clamp = (value) => Math.max(0, Math.min(cards.length - 1, value));
        const isMobile = () => window.matchMedia('(max-width: 767.98px)').matches;
        const cardStride = () => cards[0].offsetWidth + (isMobile() ? 20 : 30);

        cards.forEach((card, index) => {
            card.setAttribute('role', 'group');
            card.setAttribute('aria-roledescription', 'slide');
            card.setAttribute('aria-label', `${index + 1} of ${cards.length}`);
            card.querySelectorAll('img').forEach((img) => { img.draggable = false; });
        });

        function positionCards(position) {
            const stride = cardStride();
            cards.forEach((card, index) => {
                const distance = index - position;
                card.style.setProperty('--arc-angle', `${distance * step}deg`);
                card.style.setProperty('--slide-offset', `${distance * stride}px`);
                card.style.zIndex = String(cards.length - Math.round(Math.abs(distance)));
                card.classList.toggle('is-current', index === active);
                // Nearby cards remain interactive; distant cards must not trap keyboard focus.
                card.inert = isMobile() ? index !== active : Math.abs(index - active) > 1;
            });
        }

        function select(index) {
            active = clamp(index);
            positionCards(active);
            previous.disabled = active === 0;
            next.disabled = active === cards.length - 1;
            counter.textContent = `${String(active + 1).padStart(2, '0')} / ${String(cards.length).padStart(2, '0')}`;
        }

        function measure() {
            const width = cards[0].offsetWidth;
            const radius = window.innerWidth < 576 ? 1250 : 1850;
            step = 2 * Math.asin((width + 30) / (2 * radius)) * 180 / Math.PI;
            track.style.setProperty('--arc-radius', `${radius}px`);
            track.style.height = `${Math.max(...cards.map((card) => card.offsetHeight)) + (isMobile() ? 24 : 180)}px`;
            positionCards(active);
        }

        carousel.classList.add('is-arc-ready');
        controls.hidden = false;
        carousel.querySelector('.journal-carousel-hint').hidden = cards.length < 2;
        measure();
        select(0);

        previous.addEventListener('click', () => select(active - 1));
        next.addEventListener('click', () => select(active + 1));
        carousel.addEventListener('keydown', (event) => {
            const actions = { ArrowLeft: active - 1, ArrowRight: active + 1, Home: 0, End: cards.length - 1 };
            if (!(event.key in actions)) return;
            event.preventDefault();
            const wasInCard = event.target.closest('.journal-card');
            select(actions[event.key]);
            if (wasInCard) cards[active].querySelector('a').focus({ preventScroll: true });
        });
        cards.forEach((card, index) => {
            card.addEventListener('focusin', () => {
                if (active !== index) select(index);
            });
        });

        track.addEventListener('dragstart', (event) => event.preventDefault());
        track.addEventListener('pointerdown', (event) => {
            if (!event.isPrimary || event.button !== 0 || cards.length < 2) return;
            suppressClick = false;
            drag = { id: event.pointerId, x: event.clientX, y: event.clientY, start: active, moved: false };
        });
        track.addEventListener('pointermove', (event) => {
            if (!drag || event.pointerId !== drag.id) return;
            const delta = event.clientX - drag.x;
            if (!drag.moved) {
                if (Math.abs(event.clientY - drag.y) > Math.abs(delta)) { drag = null; return; }
                if (Math.abs(delta) < 8) return;
                drag.moved = true;
                track.setPointerCapture(event.pointerId);
                carousel.classList.add('is-dragging');
            }
            positionCards(clamp(drag.start - delta / cardStride()));
        });
        function endDrag(event) {
            if (!drag || event.pointerId !== drag.id) return;
            const ended = drag;
            drag = null;
            carousel.classList.remove('is-dragging');
            if (ended.moved) {
                suppressClick = true;
                const delta = event.clientX - ended.x;
                const target = event.type === 'pointercancel' ? ended.start : ended.start - delta / cardStride();
                select(Math.round(clamp(target)));
                if (track.hasPointerCapture(event.pointerId)) track.releasePointerCapture(event.pointerId);
                window.setTimeout(() => { suppressClick = false; }, 0);
            }
        }
        track.addEventListener('pointerup', endDrag);
        track.addEventListener('pointercancel', endDrag);
        track.addEventListener('lostpointercapture', () => {
            if (!drag) return;
            drag = null;
            carousel.classList.remove('is-dragging');
            select(active);
        });
        track.addEventListener('click', (event) => {
            if (suppressClick) { event.preventDefault(); event.stopPropagation(); }
        }, true);

        if ('ResizeObserver' in window) {
            const observer = new ResizeObserver(measure);
            cards.forEach((card) => observer.observe(card));
        }
        window.addEventListener('resize', measure);
    });
})();
