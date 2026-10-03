/**
 * Ageless Entertainments - Trackless Zigzag Roller Coaster Animation
 * Reference Design: Orange & White Coaster Cars with Sunny Yellow Lighting
 * 
 * Features:
 * - 100% Trackless: Glides freely across the screen without track rails.
 * - Extra Large Scale (~158px per car, massive front-and-center presence).
 * - Fast & Thrilling Movement (~2.2s dynamic plunge with downward gravity surge).
 * - One-time run on page load (stops cleanly once finished, canvas clears).
 * - Color Scheme: Vibrant Ageless Orange & Crisp White Coaster Body.
 * - Lighting Scheme: Bright, Luminous Sunny Yellow Fairground Bulbs, Underglow, & Headlight Beams.
 * - Cheering riders/children with wind-blown hair, dangling legs, and arms high in the air (\o/).
 * - No floating buttons or UI overlays (completely clean page view).
 */

(function () {
    'use strict';

    if (document.getElementById('ageless-coaster-canvas')) return;

    // Create Canvas
    const canvas = document.createElement('canvas');
    canvas.id = 'ageless-coaster-canvas';
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
        buildPath();
    }

    // Zigzag Path Calculation
    let pathPoints = [];
    let pathTotalLength = 0;
    let pathSamples = [];
    let pathVariant = 0;

    function buildPath() {
        const w = width;
        const h = height;

        const startLeft = (pathVariant % 2 === 0);

        // Control points calibrated for extra large train scale
        const controlPoints = startLeft ? [
            { x: w * 0.15, y: -380 },
            { x: w * 0.20, y: -120 },
            { x: w * 0.82, y: h * 0.24 },  // Swoop Right
            { x: w * 0.16, y: h * 0.51 },  // Bank Left
            { x: w * 0.84, y: h * 0.77 },  // Power Swoop Right
            { x: w * 0.40, y: h + 220 },   // Glide Down-Left
            { x: w * 0.36, y: h + 520 }
        ] : [
            { x: w * 0.85, y: -380 },
            { x: w * 0.80, y: -120 },
            { x: w * 0.18, y: h * 0.24 },  // Swoop Left
            { x: w * 0.84, y: h * 0.51 },  // Bank Right
            { x: w * 0.16, y: h * 0.77 },  // Power Swoop Left
            { x: w * 0.60, y: h + 220 },   // Glide Down-Right
            { x: w * 0.64, y: h + 520 }
        ];

        // Catmull-Rom Spline Samples
        pathSamples = [];
        const numSegments = controlPoints.length - 3;
        const samplesPerSegment = 140;

        for (let i = 0; i < numSegments; i++) {
            const p0 = controlPoints[i];
            const p1 = controlPoints[i + 1];
            const p2 = controlPoints[i + 2];
            const p3 = controlPoints[i + 3];

            for (let j = 0; j < samplesPerSegment; j++) {
                const t = j / samplesPerSegment;
                pathSamples.push(catmullRom(p0, p1, p2, p3, t));
            }
        }
        pathSamples.push(controlPoints[controlPoints.length - 2]);

        // Arc-length parameterization
        pathPoints = [{ x: pathSamples[0].x, y: pathSamples[0].y, dist: 0, angle: 0 }];
        let total = 0;
        for (let i = 1; i < pathSamples.length; i++) {
            const prev = pathSamples[i - 1];
            const curr = pathSamples[i];
            const d = Math.hypot(curr.x - prev.x, curr.y - prev.y);
            total += d;
            const angle = Math.atan2(curr.y - prev.y, curr.x - prev.x);
            pathPoints.push({ x: curr.x, y: curr.y, dist: total, angle: angle });
        }
        pathTotalLength = total;
    }

    function catmullRom(p0, p1, p2, p3, t) {
        const t2 = t * t;
        const t3 = t2 * t;
        const f0 = -0.5 * t3 + t2 - 0.5 * t;
        const f1 = 1.5 * t3 - 2.5 * t2 + 1.0;
        const f2 = -1.5 * t3 + 2.0 * t2 + 0.5 * t;
        const f3 = 0.5 * t3 - 0.5 * t2;

        return {
            x: p0.x * f0 + p1.x * f1 + p2.x * f2 + p3.x * f3,
            y: p0.y * f0 + p1.y * f1 + p2.y * f2 + p3.y * f3
        };
    }

    function getPointAtDistance(distance) {
        if (distance <= 0) {
            return { x: pathPoints[0].x, y: pathPoints[0].y, angle: pathPoints[0].angle };
        }
        if (distance >= pathTotalLength) {
            const last = pathPoints[pathPoints.length - 1];
            return { x: last.x, y: last.y, angle: last.angle };
        }

        let low = 0;
        let high = pathPoints.length - 1;
        while (low <= high) {
            const mid = (low + high) >> 1;
            if (pathPoints[mid].dist < distance) low = mid + 1;
            else high = mid - 1;
        }

        const i = Math.max(1, Math.min(low, pathPoints.length - 1));
        const pA = pathPoints[i - 1];
        const pB = pathPoints[i];
        const segLen = pB.dist - pA.dist;
        const t = segLen > 0 ? (distance - pA.dist) / segLen : 0;

        return {
            x: pA.x + (pB.x - pA.x) * t,
            y: pA.y + (pB.y - pA.y) * t,
            angle: pA.angle + angleDiff(pB.angle, pA.angle) * t
        };
    }

    function angleDiff(a, b) {
        let diff = (a - b) % (Math.PI * 2);
        if (diff < -Math.PI) diff += Math.PI * 2;
        if (diff > Math.PI) diff -= Math.PI * 2;
        return diff;
    }

    // Extra Large Train Configuration (~158px length per car)
    const carCount = 7;
    const carSpacing = 176;
    const baseSpeed = 19.5; // Fast, high-energy plunge (~2.2s rush across the screen)

    let isRunning = false;
    let progressDistance = -1100;
    let lastTime = 0;
    let lightTrailHistory = [];
    let embers = [];

    // Sunny Yellow Embers & Sparks
    function spawnEmbers(x, y, angle) {
        const count = 3 + Math.floor(Math.random() * 3);
        for (let i = 0; i < count; i++) {
            const a = angle + Math.PI + (Math.random() - 0.5) * 1.5;
            const spd = 2.0 + Math.random() * 5.5;
            embers.push({
                x: x,
                y: y,
                vx: Math.cos(a) * spd,
                vy: Math.sin(a) * spd,
                life: 1.0,
                decay: 0.018 + Math.random() * 0.025,
                color: Math.random() > 0.3 ? '#ffea00' : '#ffff00',
                size: 4.5 + Math.random() * 5.0
            });
        }
    }

    function updateEmbers() {
        for (let i = embers.length - 1; i >= 0; i--) {
            const p = embers[i];
            p.x += p.vx;
            p.y += p.vy;
            p.vx *= 0.94;
            p.vy *= 0.94;
            p.life -= p.decay;
            if (p.life <= 0) embers.splice(i, 1);
        }
    }

    function drawEmbers() {
        for (let i = 0; i < embers.length; i++) {
            const p = embers[i];
            ctx.save();
            ctx.globalAlpha = p.life * 0.95;
            ctx.fillStyle = p.color;
            ctx.shadowColor = p.color;
            ctx.shadowBlur = 16;
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.size * p.life, 0, Math.PI * 2);
            ctx.fill();
            ctx.restore();
        }
    }

    // Draw Coaster Car - Color Scheme: Orange & Crisp White Body, Sunny Yellow Lights
    function drawCoasterCar(x, y, angle, carIndex, time) {
        ctx.save();
        ctx.translate(x, y);
        ctx.rotate(angle);

        const carLength = 158;
        const halfL = carLength / 2;

        // Dynamic high-speed suspension sway
        const sway = Math.sin(time * 0.009 + carIndex * 0.9) * 2.0;
        ctx.translate(0, sway);

        // 1. Sunny Yellow Underglow Halo (light as yellow)
        ctx.save();
        const underglow = ctx.createRadialGradient(0, 0, 14, 0, 0, 135);
        underglow.addColorStop(0, 'rgba(255, 234, 0, 0.65)');
        underglow.addColorStop(0.5, 'rgba(255, 215, 0, 0.28)');
        underglow.addColorStop(1, 'rgba(255, 215, 0, 0)');
        ctx.fillStyle = underglow;
        ctx.beginPath();
        ctx.arc(0, 0, 135, 0, Math.PI * 2);
        ctx.fill();
        ctx.restore();

        // 2. Chassis Base & Dual Heavy-Duty Wheel Bogies
        const wheelY = 24;
        [-halfL + 28, halfL - 28].forEach((wx) => {
            // Tire (dark metallic steel with white trim)
            ctx.fillStyle = '#0f172a';
            ctx.beginPath();
            ctx.arc(wx, wheelY, 16, 0, Math.PI * 2);
            ctx.fill();

            // Inner rim (Polished white alloy)
            ctx.fillStyle = '#ffffff';
            ctx.beginPath();
            ctx.arc(wx, wheelY, 9, 0, Math.PI * 2);
            ctx.fill();

            // Center hub pin (Ageless Orange)
            ctx.fillStyle = '#ff6a00';
            ctx.beginPath();
            ctx.arc(wx, wheelY, 4.5, 0, Math.PI * 2);
            ctx.fill();
        });

        // 3. Chassis Main Structural Tube
        ctx.fillStyle = '#ffffff';
        ctx.fillRect(-halfL + 14, 10, carLength - 28, 12);

        // 4. Car Body Structure - Orange & White Palette
        ctx.beginPath();
        if (carIndex === 0) {
            // Lead Bullet Engine Nose
            ctx.moveTo(-halfL + 8, 10);
            ctx.lineTo(halfL - 22, 10);
            ctx.quadraticCurveTo(halfL + 24, 0, halfL + 32, -24);
            ctx.quadraticCurveTo(halfL + 18, -44, halfL - 10, -44);
            ctx.lineTo(-halfL + 10, -44);
            ctx.lineTo(-halfL + 8, 10);
        } else if (carIndex === carCount - 1) {
            // Tail Car with Aerodynamic Wing/Spoiler
            ctx.moveTo(-halfL, 10);
            ctx.lineTo(halfL - 10, 10);
            ctx.lineTo(halfL - 10, -40);
            ctx.lineTo(-halfL + 14, -40);
            ctx.lineTo(-halfL - 16, -58);
            ctx.lineTo(-halfL - 22, -52);
            ctx.lineTo(-halfL, 10);
        } else {
            // Standard Passenger Car Tub
            ctx.moveTo(-halfL + 8, 10);
            ctx.lineTo(halfL - 8, 10);
            ctx.lineTo(halfL - 8, -40);
            ctx.lineTo(-halfL + 8, -40);
            ctx.closePath();
        }

        // Vibrant Ageless Orange Car Body Gradient
        const bodyGrad = ctx.createLinearGradient(-halfL, -44, halfL, 14);
        bodyGrad.addColorStop(0, '#ff5500');
        bodyGrad.addColorStop(0.5, '#ff7700');
        bodyGrad.addColorStop(1, '#ff9100');
        ctx.fillStyle = bodyGrad;
        ctx.fill();

        // Crisp White Outer Outline Bevel & Borders
        ctx.strokeStyle = '#ffffff';
        ctx.lineWidth = 4.0;
        ctx.stroke();

        // Crisp White Aerodynamic Side Panel Racing Inset
        ctx.fillStyle = '#ffffff';
        ctx.beginPath();
        ctx.roundRect(-halfL + 16, -24, carLength - 32, 12, 3);
        ctx.fill();

        // Inner Orange Accent Line inside White Panel
        ctx.fillStyle = '#ff6a00';
        ctx.fillRect(-halfL + 20, -20, carLength - 40, 4);

        // 5. Empty Coaster Bucket Seats & Locked Safety Harnesses (No riders/children)
        const seatPositions = [halfL - 46, -halfL + 46];
        seatPositions.forEach((rx) => {
            const ry = -36;

            // Crisp White High-Back Bucket Seat Outer Shell
            ctx.fillStyle = '#ffffff';
            ctx.beginPath();
            ctx.roundRect(rx - 18, ry - 20, 36, 42, [8, 8, 3, 3]);
            ctx.fill();

            // Padded Seat Inner Cushion (Deep charcoal)
            ctx.fillStyle = '#0f172a';
            ctx.beginPath();
            ctx.roundRect(rx - 14, ry - 16, 28, 34, 5);
            ctx.fill();

            // Headrest Cushion Contour (Ageless Orange Stitch)
            ctx.strokeStyle = '#ff6a00';
            ctx.lineWidth = 2.0;
            ctx.beginPath();
            ctx.roundRect(rx - 11, ry - 13, 22, 12, 3);
            ctx.stroke();

            // Locked Over-the-Shoulder Safety Harness (OTSR) in resting/locked position
            // White Outer Glow & Orange Harness Core
            ctx.strokeStyle = '#ffffff';
            ctx.lineWidth = 8.0;
            ctx.lineCap = 'round';
            ctx.beginPath();
            ctx.arc(rx, ry + 2, 11.5, Math.PI * 0.85, Math.PI * 2.15);
            ctx.stroke();

            ctx.strokeStyle = '#ff7700';
            ctx.lineWidth = 5.5;
            ctx.beginPath();
            ctx.arc(rx, ry + 2, 11.5, Math.PI * 0.85, Math.PI * 2.15);
            ctx.stroke();

            // Chrome Safety Buckle / Center Lock Bar
            ctx.fillStyle = '#ffffff';
            ctx.beginPath();
            ctx.roundRect(rx - 6, ry + 8, 12, 6, 2.5);
            ctx.fill();

            // Chrome Grab Handles on sides of harness
            ctx.strokeStyle = '#cbd5e1';
            ctx.lineWidth = 2.8;
            ctx.beginPath();
            ctx.moveTo(rx - 14, ry + 1);
            ctx.lineTo(rx - 14, ry + 10);
            ctx.moveTo(rx + 14, ry + 1);
            ctx.lineTo(rx + 14, ry + 10);
            ctx.stroke();
        });

        // 6. Rows of 5 Sunny Yellow Glowing Bulbs lining the coaster ("light as yellow")
        const bulbCount = 5;
        const bulbStep = (carLength - 30) / (bulbCount - 1);
        for (let b = 0; b < bulbCount; b++) {
            const bx = -halfL + 15 + b * bulbStep;
            const by = -2;

            // Outer Sunny Yellow glow halo
            ctx.save();
            ctx.shadowColor = '#ffea00';
            ctx.shadowBlur = 32;
            ctx.fillStyle = 'rgba(255, 234, 0, 0.65)';
            ctx.beginPath();
            ctx.arc(bx, by, 14, 0, Math.PI * 2);
            ctx.fill();

            // Luminous Yellow bulb body
            ctx.fillStyle = '#ffea00';
            ctx.beginPath();
            ctx.arc(bx, by, 6.5, 0, Math.PI * 2);
            ctx.fill();

            // Intense white-hot filament center
            ctx.fillStyle = '#ffffff';
            ctx.beginPath();
            ctx.arc(bx, by, 3.0, 0, Math.PI * 2);
            ctx.fill();
            ctx.restore();
        }

        // 7. Lead Car Headlights - Sunny Yellow High Beams ("light as yellow")
        if (carIndex === 0) {
            ctx.save();
            ctx.fillStyle = '#ffffff';
            ctx.shadowColor = '#ffea00';
            ctx.shadowBlur = 36;
            ctx.beginPath();
            ctx.arc(halfL + 22, -12, 8.5, 0, Math.PI * 2);
            ctx.arc(halfL + 16, -28, 7.5, 0, Math.PI * 2);
            ctx.fill();

            // Sunny Yellow Atmospheric Forward Light Cone Sweep
            const beamGrad = ctx.createLinearGradient(halfL + 22, -20, halfL + 310, -20);
            beamGrad.addColorStop(0, 'rgba(255, 234, 0, 0.85)');
            beamGrad.addColorStop(0.3, 'rgba(255, 215, 0, 0.45)');
            beamGrad.addColorStop(1, 'rgba(255, 215, 0, 0)');
            ctx.fillStyle = beamGrad;
            ctx.beginPath();
            ctx.moveTo(halfL + 22, -32);
            ctx.lineTo(halfL + 320, -90);
            ctx.lineTo(halfL + 320, 60);
            ctx.lineTo(halfL + 22, -10);
            ctx.closePath();
            ctx.fill();
            ctx.restore();
        }

        // 8. Tail Car Red Marker Glow
        if (carIndex === carCount - 1) {
            ctx.save();
            ctx.fillStyle = '#ef4444';
            ctx.shadowColor = '#ef4444';
            ctx.shadowBlur = 28;
            ctx.beginPath();
            ctx.arc(-halfL - 10, -42, 7.0, 0, Math.PI * 2);
            ctx.fill();
            ctx.restore();
        }

        ctx.restore();
    }

    // Coupler linkage between adjacent cars (White & Chrome)
    function drawCoupler(pFront, pBack) {
        ctx.save();
        ctx.strokeStyle = '#ffffff';
        ctx.lineWidth = 8.0;
        ctx.lineCap = 'round';
        ctx.beginPath();
        ctx.moveTo(pFront.x, pFront.y);
        ctx.lineTo(pBack.x, pBack.y);
        ctx.stroke();

        // Joint pin
        const midX = (pFront.x + pBack.x) * 0.5;
        const midY = (pFront.y + pBack.y) * 0.5;
        ctx.fillStyle = '#ffea00';
        ctx.beginPath();
        ctx.arc(midX, midY, 6.5, 0, Math.PI * 2);
        ctx.fill();
        ctx.restore();
    }

    // Shortened Fading Light Trail - Sunny Yellow Glow ("light as yellow")
    function drawLightRibbons(trailHistory) {
        if (trailHistory.length < 2) return;

        ctx.save();
        ctx.lineCap = 'round';
        ctx.lineJoin = 'round';

        for (let i = 1; i < trailHistory.length; i++) {
            const p1 = trailHistory[i - 1];
            const p2 = trailHistory[i];
            const progress = i / trailHistory.length;

            ctx.strokeStyle = `rgba(255, 234, 0, ${progress * 0.8})`;
            ctx.lineWidth = 6.0 * progress;
            ctx.shadowColor = '#ffea00';
            ctx.shadowBlur = 16 * progress;

            ctx.beginPath();
            ctx.moveTo(p1.x, p1.y);
            ctx.lineTo(p2.x, p2.y);
            ctx.stroke();
        }

        ctx.restore();
    }

    // Launch Coaster (Plays once on page load)
    function launchCoaster() {
        buildPath();
        progressDistance = -carSpacing * carCount - 250;
        isRunning = true;
        lightTrailHistory = [];
    }

    // Main Animation Loop
    function animate(currentTime) {
        requestAnimationFrame(animate);

        if (!lastTime) lastTime = currentTime;
        const dt = Math.min((currentTime - lastTime) / 16.67, 2.0);
        lastTime = currentTime;

        // Clear canvas
        ctx.clearRect(0, 0, width, height);

        // If not running, keep screen clean and idle
        if (!isRunning) {
            updateEmbers();
            drawEmbers();
            return;
        }

        // Dynamic Thrill Acceleration: high-speed plunge with gravity surge
        const leadPt = getPointAtDistance(progressDistance);
        const downwardFactor = Math.max(0, Math.sin(leadPt.angle));
        const currentSpeed = (baseSpeed + downwardFactor * 9.5) * dt;

        progressDistance += currentSpeed;

        // Track trail history for short fading light tail
        const tailDist = progressDistance - carSpacing * (carCount - 1);
        if (tailDist > 0) {
            const tailPt = getPointAtDistance(tailDist);
            lightTrailHistory.push({ x: tailPt.x, y: tailPt.y, angle: tailPt.angle });
            if (lightTrailHistory.length > 10) lightTrailHistory.shift();
        }

        // Emit sunny yellow fairground embers around turns
        if (progressDistance > 100 && progressDistance < pathTotalLength - 100) {
            const nextPt = getPointAtDistance(progressDistance + 50);
            const curvature = Math.abs(angleDiff(nextPt.angle, leadPt.angle));
            if (curvature > 0.04) {
                spawnEmbers(leadPt.x, leadPt.y, leadPt.angle);
            }
        }

        // Draw Sunny Yellow Light Ribbons
        drawLightRibbons(lightTrailHistory);

        // Calculate positions for all 7 cars
        const carPositions = [];
        for (let c = 0; c < carCount; c++) {
            const d = progressDistance - (c * carSpacing);
            carPositions.push(getPointAtDistance(d));
        }

        // Draw Couplers between adjacent cars
        for (let c = carCount - 1; c > 0; c--) {
            const pBack = carPositions[c];
            const pFront = carPositions[c - 1];
            if (progressDistance - c * carSpacing > -220) {
                drawCoupler(pFront, pBack);
            }
        }

        // Draw 7 Extra-Large Illuminated Coaster Cars (Back to Front)
        for (let c = carCount - 1; c >= 0; c--) {
            const d = progressDistance - (c * carSpacing);
            if (d > -240 && d < pathTotalLength + 240) {
                const pt = carPositions[c];
                drawCoasterCar(pt.x, pt.y, pt.angle, c, currentTime);
            }
        }

        // Update & Render Embers
        updateEmbers();
        drawEmbers();

        // Check if full train has exited off the bottom of the screen
        const lastCarDist = progressDistance - (carCount * carSpacing);
        if (lastCarDist > pathTotalLength + 220) {
            isRunning = false;
            lightTrailHistory = [];
            // Clear canvas completely so no lingering artifacts
            ctx.clearRect(0, 0, width, height);
        }
    }

    // Handle Resize
    window.addEventListener('resize', resizeCanvas);

    // Initialize: Runs ONLY ONCE when page loads
    function init() {
        resizeCanvas();
        // Settle page and then launch the ONE-TIME thrill ride!
        setTimeout(() => {
            launchCoaster();
            requestAnimationFrame(animate);
        }, 500);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
