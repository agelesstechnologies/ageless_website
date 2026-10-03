/**
 * Ageless Entertainments - Animated Kite Pointer Cursor
 * 
 * Features:
 * - Diamond kite head follows mouse pointer precisely for crisp interaction.
 * - Multi-node ribbon tail ("kite end") with realistic spring physics & continuous wind wave.
 * - 3D sunlit orange diamond facets with bamboo frame & corner tassels.
 * - Interactive hover reactions over links & buttons (glow & scale).
 * - Click spark particle effects.
 * - Automatically muted on touch devices.
 */

(function () {
    'use strict';

    // Only activate on devices with fine pointer (mouse/trackpad)
    if (window.matchMedia && window.matchMedia('(pointer: coarse)').matches) return;
    if (document.getElementById('kite-cursor-canvas')) return;

    // Enable custom cursor CSS on <html> element
    document.documentElement.classList.add('has-kite-cursor');

    // Create Overlay Canvas
    const canvas = document.createElement('canvas');
    canvas.id = 'kite-cursor-canvas';
    canvas.setAttribute('aria-hidden', 'true');
    document.body.appendChild(canvas);

    const ctx = canvas.getContext('2d');
    if (!ctx) return;

    let width = window.innerWidth;
    let height = window.innerHeight;
    let dpr = Math.min(window.devicePixelRatio || 1, 2);

    function resizeCanvas() {
        width = window.innerWidth;
        height = window.innerHeight;
        canvas.width = Math.floor(width * dpr);
        canvas.height = Math.floor(height * dpr);
        ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
    }
    resizeCanvas();
    window.addEventListener('resize', resizeCanvas);

    // Mouse Tracking State
    let mouse = { x: width / 2, y: height / 2, targetX: width / 2, targetY: height / 2 };
    let isHovering = false;
    let isVisible = false;

    // Kite Physics State
    const kiteSize = 0.65;
    let kitePos = { x: width / 2, y: height / 2, angle: 0 };

    // Ribbon Tail ("Kite End") Nodes
    const tailNodeCount = 14;
    const nodeSpacing = 9; // Distance between tail segment nodes
    let tailNodes = [];

    for (let i = 0; i < tailNodeCount; i++) {
        tailNodes.push({
            x: width / 2,
            y: height / 2 + (i + 1) * nodeSpacing,
            vx: 0,
            vy: 0
        });
    }

    // Click Spark Particles
    let sparkles = [];

    function spawnClickSparkles(x, y) {
        for (let i = 0; i < 8; i++) {
            const angle = Math.random() * Math.PI * 2;
            const spd = 2 + Math.random() * 4;
            sparkles.push({
                x: x,
                y: y,
                vx: Math.cos(angle) * spd,
                vy: Math.sin(angle) * spd,
                life: 1.0,
                decay: 0.04 + Math.random() * 0.03,
                color: Math.random() > 0.5 ? '#ffea00' : '#ff7700',
                size: 2 + Math.random() * 3
            });
        }
    }

    // Event Listeners for Mouse Motion
    window.addEventListener('mousemove', function (e) {
        mouse.targetX = e.clientX;
        mouse.targetY = e.clientY;
        if (!isVisible) {
            isVisible = true;
            mouse.x = e.clientX;
            mouse.y = e.clientY;
            kitePos.x = e.clientX;
            kitePos.y = e.clientY;
            for (let i = 0; i < tailNodeCount; i++) {
                tailNodes[i].x = e.clientX;
                tailNodes[i].y = e.clientY + (i + 1) * nodeSpacing;
            }
        }

        // Check hover over interactive elements
        const target = e.target;
        if (target) {
            const isInteractive = target.closest('a, button, input, select, textarea, .btn, [role="button"], .interactive');
            isHovering = !!isInteractive;
        }
    }, { passive: true });

    window.addEventListener('mouseleave', function () {
        isVisible = false;
    });

    window.addEventListener('mousedown', function (e) {
        spawnClickSparkles(e.clientX, e.clientY);
    });

    // Draw Diamond Kite Head (3D Sunlit Orange matching reference photo)
    function drawKiteHead(x, y, angle, scale, time) {
        ctx.save();
        ctx.translate(x, y);
        ctx.rotate(angle);
        ctx.scale(scale, scale);

        const w = 24;  // Half width
        const hTop = 18; // Distance to top tip
        const hBot = 22; // Distance to bottom tip
        const crossY = -3; // Horizontal strut offset

        // Soft Amber Glow (Enhanced when hovering over links/buttons)
        ctx.save();
        ctx.shadowColor = isHovering ? '#ffea00' : '#ff7700';
        ctx.shadowBlur = isHovering ? 18 : 8;
        ctx.fillStyle = 'rgba(255, 120, 0, 0.15)';
        ctx.beginPath();
        ctx.moveTo(0, -hTop);
        ctx.lineTo(w, crossY);
        ctx.lineTo(0, hBot);
        ctx.lineTo(-w, crossY);
        ctx.closePath();
        ctx.fill();
        ctx.restore();

        // 1. Facet 1: Top-Left (Sunlit Bright Orange)
        ctx.fillStyle = '#ffa000';
        ctx.beginPath();
        ctx.moveTo(0, -hTop);
        ctx.lineTo(0, crossY);
        ctx.lineTo(-w, crossY);
        ctx.closePath();
        ctx.fill();

        // 2. Facet 2: Top-Right (Sunlit Golden Amber)
        ctx.fillStyle = '#ffc107';
        ctx.beginPath();
        ctx.moveTo(0, -hTop);
        ctx.lineTo(w, crossY);
        ctx.lineTo(0, crossY);
        ctx.closePath();
        ctx.fill();

        // 3. Facet 3: Bottom-Left (Deep Metallic Orange)
        ctx.fillStyle = '#ff6d00';
        ctx.beginPath();
        ctx.moveTo(-w, crossY);
        ctx.lineTo(0, crossY);
        ctx.lineTo(0, hBot);
        ctx.closePath();
        ctx.fill();

        // 4. Facet 4: Bottom-Right (Vibrant Ageless Orange)
        ctx.fillStyle = '#ff8f00';
        ctx.beginPath();
        ctx.moveTo(0, crossY);
        ctx.lineTo(w, crossY);
        ctx.lineTo(0, hBot);
        ctx.closePath();
        ctx.fill();

        // 5. Outer Sail Bevel Border
        ctx.strokeStyle = '#fff8e1';
        ctx.lineWidth = 1.2;
        ctx.beginPath();
        ctx.moveTo(0, -hTop);
        ctx.lineTo(w, crossY);
        ctx.lineTo(0, hBot);
        ctx.lineTo(-w, crossY);
        ctx.closePath();
        ctx.stroke();

        // 6. Bamboo / Wooden Cross-Struts Frame
        ctx.strokeStyle = '#78350f';
        ctx.lineWidth = 1.6;
        ctx.lineCap = 'round';

        // Vertical Spine
        ctx.beginPath();
        ctx.moveTo(0, -hTop - 2);
        ctx.lineTo(0, hBot + 2);
        ctx.stroke();

        // Horizontal Crossbar
        ctx.beginPath();
        ctx.moveTo(-w - 2, crossY);
        ctx.lineTo(w + 2, crossY);
        ctx.stroke();

        // Center Ring / Hub Reinforcement
        ctx.fillStyle = '#d97706';
        ctx.beginPath();
        ctx.arc(0, crossY, 2.5, 0, Math.PI * 2);
        ctx.fill();

        // 7. Decorative Corner Flutter Ribbons / Tassels
        const flutter = Math.sin(time * 0.01) * 3;
        ctx.strokeStyle = '#ff9800';
        ctx.lineWidth = 1.5;

        // Left Corner Tassel
        ctx.beginPath();
        ctx.moveTo(-w, crossY);
        ctx.lineTo(-w - 6, crossY - 4 + flutter);
        ctx.stroke();

        // Right Corner Tassel
        ctx.beginPath();
        ctx.moveTo(w, crossY);
        ctx.lineTo(w + 6, crossY - 4 - flutter);
        ctx.stroke();

        // 8. Bridle String (White/Golden Line extending from top tip)
        ctx.strokeStyle = 'rgba(255, 255, 255, 0.7)';
        ctx.lineWidth = 1.0;
        ctx.beginPath();
        ctx.moveTo(0, crossY);
        ctx.lineTo(-12, -22);
        ctx.stroke();

        ctx.restore();
    }

    // Draw Wavy Animated Ribbon Tail ("Kite End Moving")
    function drawRibbonTail(headX, headY, nodes, time) {
        if (nodes.length < 2) return;

        ctx.save();
        ctx.lineCap = 'round';
        ctx.lineJoin = 'round';

        // Ribbon Body Points
        const points = [{ x: headX, y: headY + 16 }].concat(nodes);

        // Draw Layer 1: Outer Soft Orange Glow
        ctx.beginPath();
        ctx.moveTo(points[0].x, points[0].y);
        for (let i = 1; i < points.length - 1; i++) {
            const xc = (points[i].x + points[i + 1].x) / 2;
            const yc = (points[i].y + points[i + 1].y) / 2;
            ctx.quadraticCurveTo(points[i].x, points[i].y, xc, yc);
        }
        ctx.strokeStyle = 'rgba(255, 106, 0, 0.45)';
        ctx.lineWidth = 7.0;
        ctx.shadowColor = '#ff8800';
        ctx.shadowBlur = 10;
        ctx.stroke();

        // Draw Layer 2: Core Vibrant Orange Ribbon Tapering to Golden Tip
        for (let i = 0; i < points.length - 1; i++) {
            const p1 = points[i];
            const p2 = points[i + 1];
            const progress = i / points.length; // 0 at kite, 1 at tail tip

            // Tapering width from 5.5px down to 2.0px at the moving end
            const width = Math.max(1.8, (1 - progress * 0.65) * 5.5);

            // Color gradient along tail
            const grad = ctx.createLinearGradient(p1.x, p1.y, p2.x, p2.y);
            grad.addColorStop(0, `rgba(255, 106, 0, ${1 - progress * 0.3})`);
            grad.addColorStop(1, `rgba(255, 183, 3, ${1 - progress * 0.2})`);

            ctx.strokeStyle = grad;
            ctx.lineWidth = width;
            ctx.beginPath();
            ctx.moveTo(p1.x, p1.y);
            ctx.lineTo(p2.x, p2.y);
            ctx.stroke();

            // Draw Decorative Waving Ribbon Bow Ties along the tail (Nodes 3, 7, 11)
            if (i === 3 || i === 7 || i === 11) {
                const bowFlutter = Math.sin(time * 0.012 + i) * 4;
                ctx.save();
                ctx.translate(p1.x, p1.y);
                ctx.fillStyle = i % 2 === 0 ? '#ffea00' : '#ffffff';

                // Left wing of bow
                ctx.beginPath();
                ctx.ellipse(-4, bowFlutter * 0.5, 4, 2, Math.PI / 4, 0, Math.PI * 2);
                ctx.fill();

                // Right wing of bow
                ctx.beginPath();
                ctx.ellipse(4, -bowFlutter * 0.5, 4, 2, -Math.PI / 4, 0, Math.PI * 2);
                ctx.fill();
                ctx.restore();
            }
        }

        ctx.restore();
    }

    // Main Render Animation Loop
    function render(time) {
        requestAnimationFrame(render);

        ctx.clearRect(0, 0, width, height);

        if (!isVisible) return;

        // 1. Smooth Spring Easing for Cursor Head
        const ease = isHovering ? 0.35 : 0.28;
        mouse.x += (mouse.targetX - mouse.x) * ease;
        mouse.y += (mouse.targetY - mouse.y) * ease;

        // Calculate velocity and tilt angle of kite motion
        const dx = mouse.targetX - kitePos.x;
        const dy = mouse.targetY - kitePos.y;
        kitePos.x += (mouse.x - kitePos.x) * 0.4;
        kitePos.y += (mouse.y - kitePos.y) * 0.4;

        // Calculate motion angle (banking into movement)
        const targetAngle = Math.atan2(dy, dx) + Math.PI / 2;
        const angleDiff = (targetAngle - kitePos.angle) % (Math.PI * 2);
        kitePos.angle += angleDiff * 0.15;

        // Gentle wind bobbing when cursor is still
        const windBobX = Math.sin(time * 0.003) * 2;
        const windBobY = Math.cos(time * 0.004) * 2;

        const kiteX = kitePos.x + windBobX;
        const kiteY = kitePos.y + windBobY;

        // 2. Physics Update for Wavy Ribbon Tail ("Kite End Moving")
        const attachX = kiteX;
        const attachY = kiteY + 16;

        let prevX = attachX;
        let prevY = attachY;

        const windSpeed = isHovering ? 0.009 : 0.006;

        for (let i = 0; i < tailNodeCount; i++) {
            const node = tailNodes[i];

            // Target position following previous node
            const targetX = prevX;
            const targetY = prevY + nodeSpacing;

            // Continuous Sinusoidal Wind Wave propagating down the tail
            // This makes the "kite end" continuously weave and wave in the wind!
            const waveX = Math.sin(time * windSpeed - i * 0.4) * (4 + i * 0.75);
            const waveY = Math.cos(time * windSpeed * 0.8 - i * 0.3) * (2 + i * 0.3);

            // Follow physics with spring damping
            node.vx = (targetX + waveX - node.x) * 0.25;
            node.vy = (targetY + waveY - node.y) * 0.25;

            node.x += node.vx;
            node.y += node.vy;

            // Maintain segment spacing constraint
            const segDx = node.x - prevX;
            const segDy = node.y - prevY;
            const dist = Math.hypot(segDx, segDy);
            if (dist > nodeSpacing * 1.5) {
                const angle = Math.atan2(segDy, segDx);
                node.x = prevX + Math.cos(angle) * nodeSpacing * 1.5;
                node.y = prevY + Math.sin(angle) * nodeSpacing * 1.5;
            }

            prevX = node.x;
            prevY = node.y;
        }

        // 3. Render Tail Ribbon ("Kite End")
        // Scale the entire kite around its pointer position, including the tail.
        ctx.save();
        ctx.translate(kiteX, kiteY);
        ctx.scale(kiteSize, kiteSize);
        ctx.translate(-kiteX, -kiteY);
        drawRibbonTail(kiteX, kiteY, tailNodes, time);

        // 4. Render Diamond Kite Head
        const scale = isHovering ? 1.25 : 1.0;
        drawKiteHead(kiteX, kiteY, kitePos.angle * 0.3, scale, time);
        ctx.restore();

        // 5. Render Sparkle Particles on Click
        for (let i = sparkles.length - 1; i >= 0; i--) {
            const p = sparkles[i];
            p.x += p.vx;
            p.y += p.vy;
            p.vx *= 0.94;
            p.vy *= 0.94;
            p.life -= p.decay;

            if (p.life <= 0) {
                sparkles.splice(i, 1);
                continue;
            }

            ctx.save();
            ctx.globalAlpha = p.life;
            ctx.fillStyle = p.color;
            ctx.shadowColor = p.color;
            ctx.shadowBlur = 8;
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.size * p.life, 0, Math.PI * 2);
            ctx.fill();
            ctx.restore();
        }
    }

    requestAnimationFrame(render);
})();
