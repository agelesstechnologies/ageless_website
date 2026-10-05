(function () {
    'use strict';

    var frame = document.querySelector('.park-media-showcase .story-main-img-card');
    if (!frame) return;

    var image = frame.querySelector('img');
    if (!image) return;

    var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    var mousePointer = window.matchMedia('(hover: hover) and (pointer: fine)');
    var section = frame.parentElement;
    var pointerX = 0;
    var pointerY = 0;
    var pending = false;

    function update() {
        pending = false;
        if (reducedMotion.matches) {
            image.style.removeProperty('transform');
            image.style.removeProperty('transition');
            frame.style.removeProperty('transform');
            return;
        }

        // Measure the stationary wrapper so tilting cannot feed back into pointer coordinates.
        var rect = section.getBoundingClientRect();
        var viewport = window.innerHeight;
        if (rect.bottom < 0 || rect.top > viewport || rect.height === 0) return;
        var progress = (viewport / 2 - rect.top - rect.height / 2) / ((viewport + rect.height) / 2);
        var travel = window.innerWidth < 768 ? 28 : 60;
        var offset = Math.max(-1, Math.min(1, progress)) * travel;
        // Scale supplies enough overscan to keep the card covered throughout the scroll.
        var scale = 1 + (travel * 2 + 18) / Math.max(frame.offsetHeight, 1);
        image.style.transition = 'none';
        image.style.transform = 'translate3d(' + (pointerX * 6) + 'px, ' + (offset + pointerY * 6) + 'px, 0) scale(' + scale + ')';
        frame.style.transform = 'perspective(1000px) rotateX(' + (-pointerY * 5) + 'deg) rotateY(' + (pointerX * 5) + 'deg)';
    }

    function schedule() {
        if (pending) return;
        pending = true;
        window.requestAnimationFrame(update);
    }

    function resetPointer() {
        pointerX = 0;
        pointerY = 0;
        schedule();
    }

    section.addEventListener('pointermove', function (event) {
        if (reducedMotion.matches || !mousePointer.matches || event.pointerType !== 'mouse') return;
        var rect = section.getBoundingClientRect();
        if (!rect.width || !rect.height) return;
        pointerX = Math.max(-1, Math.min(1, (event.clientX - rect.left) / rect.width * 2 - 1));
        pointerY = Math.max(-1, Math.min(1, (event.clientY - rect.top) / rect.height * 2 - 1));
        schedule();
    }, { passive: true });
    section.addEventListener('pointerleave', resetPointer);
    section.addEventListener('pointercancel', resetPointer);
    window.addEventListener('blur', resetPointer);
    mousePointer.addEventListener('change', resetPointer);
    window.addEventListener('scroll', schedule, { passive: true });
    window.addEventListener('resize', schedule);
    window.addEventListener('load', schedule, { once: true });
    reducedMotion.addEventListener('change', resetPointer);
    schedule();
}());
