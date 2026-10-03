/* ===================================================
   Ageless Entertainments - Parallax & Kinetic Animation Engine
   =================================================== */

document.addEventListener("DOMContentLoaded", function () {
    "use strict";

    // ----------------------------------------------------
    // 1. LENIS SMOOTH SCROLL INITIALIZATION
    // ----------------------------------------------------
    let lenis;
    if (typeof Lenis !== "undefined") {
        lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            orientation: "vertical",
            smoothWheel: true,
            wheelMultiplier: 1,
            touchMultiplier: 2,
            infinite: false
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        // Connect Lenis to GSAP ScrollTrigger if available
        if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
            lenis.on('scroll', ScrollTrigger.update);
            gsap.ticker.add((time) => {
                lenis.raf(time * 1000);
            });
            gsap.ticker.lagSmoothing(0);
        }
    }

    // ----------------------------------------------------
    // 2. GSAP & SCROLLTRIGGER SETUP
    // ----------------------------------------------------
    if (typeof gsap !== "undefined") {
        if (typeof ScrollTrigger !== "undefined") {
            gsap.registerPlugin(ScrollTrigger);
        }

        // Hero Background Parallax Scrub
        const heroBg = document.querySelector(".hero-bg-layer");
        const heroText = document.querySelector(".hero-text-block");
        const heroBadges = document.querySelectorAll(".float-badge");

        if (heroBg) {
            gsap.to(heroBg, {
                yPercent: 15,
                scale: 1.02,
                ease: "none",
                scrollTrigger: {
                    trigger: ".hero-parallax-wrapper",
                    start: "top top",
                    end: "bottom top",
                    scrub: true
                }
            });
        }

        if (heroText) {
            gsap.to(heroText, {
                yPercent: 35,
                opacity: 0.3,
                ease: "none",
                scrollTrigger: {
                    trigger: ".hero-parallax-wrapper",
                    start: "top top",
                    end: "bottom top",
                    scrub: true
                }
            });
        }

        if (heroBadges.length > 0) {
            heroBadges.forEach((badge, index) => {
                const depth = (index + 1) * 20;
                gsap.to(badge, {
                    yPercent: -depth,
                    opacity: 0.2,
                    ease: "none",
                    scrollTrigger: {
                        trigger: ".hero-parallax-wrapper",
                        start: "top top",
                        end: "bottom top",
                        scrub: true
                    }
                });
            });
        }

        // About Section Parallax Scrub
        const aboutStack = document.querySelector(".about-image-stack");
        if (aboutStack) {
            gsap.to(aboutStack, {
                yPercent: -15,
                ease: "none",
                scrollTrigger: {
                    trigger: ".about-section",
                    start: "top bottom",
                    end: "bottom top",
                    scrub: true
                }
            });
        }

        // Services Section Floating Parallax Decor
        const serviceDecors = document.querySelectorAll(".service-parallax-decor");
        serviceDecors.forEach((decor, idx) => {
            const speed = (idx % 2 === 0 ? 1 : -1) * 35;
            gsap.to(decor, {
                yPercent: speed,
                rotation: idx % 2 === 0 ? 15 : -15,
                ease: "none",
                scrollTrigger: {
                    trigger: ".service-section",
                    start: "top bottom",
                    end: "bottom top",
                    scrub: true
                }
            });
        });

        // Skill Bars ScrollTrigger Animation
        const progressBars = document.querySelectorAll(".progress-bar-glow");
        progressBars.forEach((bar) => {
            const count = bar.getAttribute("data-count") || "80%";
            ScrollTrigger.create({
                trigger: bar,
                start: "top 90%",
                onEnter: () => {
                    bar.style.width = count;
                }
            });
        });

        // Counter Cards Stagger Reveal
        const counterCards = document.querySelectorAll(".counter-card-glass");
        if (counterCards.length > 0) {
            gsap.from(counterCards, {
                y: 60,
                opacity: 0,
                stagger: 0.15,
                duration: 1,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: ".counter-section-parallax",
                    start: "top 80%"
                }
            });
        }
    }

    // ----------------------------------------------------
    // 3. INTERACTIVE 3D MOUSE PARALLAX ON HERO & ABOUT
    // ----------------------------------------------------
    const heroWrapper = document.querySelector(".hero-parallax-wrapper");
    const isFinePointer = window.matchMedia("(pointer: fine)").matches && !("ontouchstart" in window);
    
    if (heroWrapper && window.innerWidth > 992 && isFinePointer) {
        const textBlock = heroWrapper.querySelector(".hero-text-block");
        const badges = heroWrapper.querySelectorAll(".float-badge");
        const heroBg = heroWrapper.querySelector(".hero-bg-layer");

        heroWrapper.addEventListener("mousemove", function (e) {
            const rect = heroWrapper.getBoundingClientRect();
            const mouseX = (e.clientX - rect.left) / rect.width - 0.5;
            const mouseY = (e.clientY - rect.top) / rect.height - 0.5;

            if (textBlock) {
                textBlock.style.transform = `perspective(1000px) rotateY(${mouseX * 12}deg) rotateX(${-mouseY * 12}deg) translateZ(20px)`;
            }

            if (heroBg) {
                heroBg.style.transform = `scale(1.01) translate3d(${-mouseX * 12}px, ${-mouseY * 12}px, 0)`;
            }

            badges.forEach((badge, index) => {
                const depth = (index + 1) * 20;
                badge.style.transform = `translate3d(${mouseX * depth}px, ${mouseY * depth}px, ${depth}px)`;
            });
        });

        heroWrapper.addEventListener("mouseleave", function () {
            if (textBlock) {
                textBlock.style.transform = "perspective(1000px) rotateY(0deg) rotateX(0deg) translateZ(0px)";
                textBlock.style.transition = "transform 0.6s ease";
            }
            if (heroBg) {
                heroBg.style.transform = "scale(1) translate3d(0, 0, 0)";
                heroBg.style.transition = "transform 0.6s ease";
            }
            badges.forEach((badge) => {
                badge.style.transform = "translate3d(0, 0, 0)";
                badge.style.transition = "transform 0.6s ease";
            });
            setTimeout(() => {
                if (textBlock) textBlock.style.transition = "";
                if (heroBg) heroBg.style.transition = "";
                badges.forEach((b) => (b.style.transition = ""));
            }, 600);
        });
    }

    // ----------------------------------------------------
    // 4. 3D CARD TILT EFFECT (Services, Projects, Counters)
    // ----------------------------------------------------
    const tiltElements = document.querySelectorAll(".tilt-card");
    tiltElements.forEach((card) => {
        card.addEventListener("mousemove", function (e) {
            if (window.innerWidth < 992 || !isFinePointer) return;
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = ((y - centerY) / centerY) * -10;
            const rotateY = ((x - centerX) / centerX) * 10;

            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-8px) scale3d(1.02, 1.02, 1.02)`;
        });

        card.addEventListener("mouseleave", function () {
            card.style.transform = "perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0px) scale3d(1, 1, 1)";
            card.style.transition = "transform 0.5s ease";
            setTimeout(() => {
                card.style.transition = "";
            }, 500);
        });
    });

    // ----------------------------------------------------
    // 5. HERO PARTICLE CANVAS (LUMINOUS AMBIENT GLOW)
    // ----------------------------------------------------
    const canvas = document.getElementById("hero-particle-canvas");
    if (canvas) {
        const ctx = canvas.getContext("2d");
        let particles = [];
        let animationFrameId;

        function resizeCanvas() {
            canvas.width = canvas.parentElement.offsetWidth;
            canvas.height = canvas.parentElement.offsetHeight;
        }
        resizeCanvas();
        window.addEventListener("resize", resizeCanvas);

        class Particle {
            constructor() {
                this.reset();
            }
            reset() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2.5 + 0.8;
                this.speedX = (Math.random() - 0.5) * 0.4;
                this.speedY = -Math.random() * 0.6 - 0.2;
                this.alpha = Math.random() * 0.7 + 0.2;
                this.color = Math.random() > 0.4 ? "#f5a100" : "#00d2ff";
            }
            update() {
                this.x += this.speedX;
                this.y += this.speedY;
                if (this.y < 0 || this.x < 0 || this.x > canvas.width) {
                    this.reset();
                    this.y = canvas.height + 5;
                }
            }
            draw() {
                ctx.save();
                ctx.globalAlpha = this.alpha;
                ctx.fillStyle = this.color;
                ctx.shadowBlur = 12;
                ctx.shadowColor = this.color;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
                ctx.restore();
            }
        }

        const particleCount = window.innerWidth < 768 ? 14 : Math.min(Math.floor(window.innerWidth / 30), 45);
        for (let i = 0; i < particleCount; i++) {
            particles.push(new Particle());
        }

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach((p) => {
                p.update();
                p.draw();
            });
            animationFrameId = requestAnimationFrame(animateParticles);
        }
        animateParticles();
    }

    // ----------------------------------------------------
    // 6. MAGNETIC BUTTONS
    // ----------------------------------------------------
    const magneticBtns = document.querySelectorAll(".btn-glow-primary, .btn-glass-secondary, .play-btn-pulse");
    magneticBtns.forEach((btn) => {
        btn.addEventListener("mousemove", function (e) {
            if (window.innerWidth < 992 || !isFinePointer) return;
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            btn.style.transform = `translate(${x * 0.25}px, ${y * 0.25}px) scale(1.05)`;
        });

        btn.addEventListener("mouseleave", function () {
            btn.style.transform = "";
            btn.style.transition = "transform 0.4s ease";
            setTimeout(() => {
                btn.style.transition = "";
            }, 400);
        });
    });

    // ----------------------------------------------------
    // 7. SMOOTH SCROLL DOWN CUE
    // ----------------------------------------------------
    const scrollCue = document.querySelector(".hero-scroll-cue");
    if (scrollCue) {
        scrollCue.addEventListener("click", function () {
            const nextSection = document.querySelector(".about-section");
            if (nextSection) {
                if (lenis) {
                    lenis.scrollTo(nextSection, { offset: -20 });
                } else {
                    nextSection.scrollIntoView({ behavior: "smooth" });
                }
            }
        });
    }

    // ----------------------------------------------------
    // 8. INTERACTIVE CLICK-TO-SWIPE ABOUT IMAGE STACK (MULTI-CARD)
    // ----------------------------------------------------
    const imageStack = document.querySelector(".about-image-stack");
    if (imageStack) {
        let isAnimating = false;
        let currentIndex = 0;
        const cards = Array.from(imageStack.querySelectorAll(".stack-card"));
        const totalCards = cards.length;

        function updateStackCards() {
            if (!totalCards) return;
            cards.forEach((card, idx) => {
                card.classList.remove("is-front", "is-back", "is-hidden-stack", "swiping-out");
                if (idx === currentIndex) {
                    card.classList.add("is-front");
                } else if (idx === (currentIndex + 1) % totalCards) {
                    card.classList.add("is-back");
                } else {
                    card.classList.add("is-hidden-stack");
                }
            });
        }

        function swapImages() {
            if (isAnimating || totalCards < 2) return;
            const frontCard = cards[currentIndex];
            if (!frontCard) return;

            isAnimating = true;
            frontCard.classList.add("swiping-out");

            setTimeout(() => {
                currentIndex = (currentIndex + 1) % totalCards;
                updateStackCards();
                isAnimating = false;
            }, 600);
        }

        // Initialize stack state
        updateStackCards();

        // Mouse click swap
        imageStack.addEventListener("click", function (e) {
            swapImages();
        });

        // Touch swipe gesture support for mobile devices
        let startX = 0;
        imageStack.addEventListener("touchstart", function (e) {
            startX = e.touches[0].clientX;
        }, { passive: true });

        imageStack.addEventListener("touchend", function (e) {
            const endX = e.changedTouches[0].clientX;
            const diffX = endX - startX;
            if (Math.abs(diffX) > 30) {
                swapImages();
            }
        }, { passive: true });

        // Auto-cycle timer
        let autoStackTimer = setInterval(swapImages, 4500);
        imageStack.addEventListener("mouseenter", function() {
            clearInterval(autoStackTimer);
        });
        imageStack.addEventListener("mouseleave", function() {
            clearInterval(autoStackTimer);
            autoStackTimer = setInterval(swapImages, 4500);
        });
    }
});
