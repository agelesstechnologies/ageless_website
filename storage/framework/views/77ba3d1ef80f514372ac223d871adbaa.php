<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HydraWorld — Apple-Level Water Park Homepage</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #050816;
      --bg-2: #071224;
      --text: #f5f7fb;
      --muted: rgba(245, 247, 251, 0.68);
      --line: rgba(255, 255, 255, 0.08);
      --glass: rgba(255,255,255,0.06);
      --cyan: #7de7ff;
      --blue: #5c7cff;
      --pink: #ff59da;
      --teal: #57ffd6;
      --shadow: 0 20px 80px rgba(0,0,0,.38);
      --radius: 32px;
      --max: 1280px;
    }

    * { box-sizing: border-box; }
    html { scroll-behavior: auto; }
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      color: var(--text);
      background:
        radial-gradient(circle at 20% 10%, rgba(92,124,255,.18), transparent 25%),
        radial-gradient(circle at 85% 18%, rgba(255,89,218,.12), transparent 22%),
        radial-gradient(circle at 50% 100%, rgba(87,255,214,.08), transparent 28%),
        linear-gradient(180deg, #040611 0%, #061122 40%, #050816 100%);
      overflow-x: hidden;
      cursor: default;
    }

    ::selection {
      background: rgba(125,231,255,.25);
      color: #fff;
    }

    .noise,
    .vignette,
    .bg-orbs,
    .cursor,
    .cursor-ring {
      pointer-events: none;
      position: fixed;
      inset: 0;
      z-index: 1;
    }

    .noise {
      opacity: .045;
      background-image: radial-gradient(#fff 0.7px, transparent 0.7px);
      background-size: 8px 8px;
      mix-blend-mode: soft-light;
    }

    .vignette {
      background: radial-gradient(circle at center, transparent 45%, rgba(0,0,0,.32) 100%);
    }

    .bg-orbs::before,
    .bg-orbs::after {
      content: "";
      position: absolute;
      width: 42vw;
      height: 42vw;
      border-radius: 50%;
      filter: blur(90px);
      opacity: .28;
      will-change: transform;
    }

    .bg-orbs::before {
      top: -10vw;
      left: -8vw;
      background: radial-gradient(circle, rgba(125,231,255,.9), rgba(92,124,255,.25) 48%, transparent 70%);
    }

    .bg-orbs::after {
      right: -10vw;
      top: 18vh;
      background: radial-gradient(circle, rgba(255,89,218,.85), rgba(92,124,255,.2) 48%, transparent 70%);
    }

    .cursor,
    .cursor-ring {
      width: 18px;
      height: 18px;
      top: 0;
      left: 0;
      transform: translate(-50%, -50%);
      border-radius: 50%;
      z-index: 120;
    }

    .cursor {
      position: fixed;
      background: rgba(255,255,255,.9);
      mix-blend-mode: difference;
    }

    .cursor-ring {
      position: fixed;
      width: 48px;
      height: 48px;
      border: 1px solid rgba(255,255,255,.28);
      backdrop-filter: blur(3px);
    }

    a { color: inherit; text-decoration: none; }
    img { max-width: 100%; display: block; }

    .site-wrap { position: relative; z-index: 2; }
    .container {
      width: min(calc(100% - 40px), var(--max));
      margin: 0 auto;
    }

    .nav {
      position: fixed;
      top: 16px;
      left: 0;
      width: 100%;
      z-index: 100;
      transition: transform .45s ease, background .45s ease, border-color .45s ease;
    }

    .nav-inner {
      width: min(calc(100% - 24px), 1220px);
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 14px 18px;
      border: 1px solid rgba(255,255,255,.08);
      background: rgba(7,12,26,.45);
      backdrop-filter: blur(20px);
      border-radius: 999px;
      box-shadow: 0 10px 40px rgba(0,0,0,.25);
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      font-weight: 700;
      letter-spacing: .02em;
    }

    .brand-mark {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--cyan), var(--blue), var(--pink));
      box-shadow: 0 0 35px rgba(125,231,255,.35);
      position: relative;
      overflow: hidden;
    }

    .brand-mark::after {
      content: "";
      position: absolute;
      inset: 6px;
      border-radius: 50%;
      border: 1px solid rgba(255,255,255,.4);
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 28px;
      color: rgba(255,255,255,.78);
      font-size: 14px;
    }

    .nav-cta {
      padding: 12px 18px;
      border-radius: 999px;
      background: linear-gradient(90deg, rgba(125,231,255,.18), rgba(92,124,255,.22));
      border: 1px solid rgba(255,255,255,.1);
      color: #fff;
    }

    section {
      position: relative;
    }

    .hero {
      min-height: 100svh;
      display: flex;
      align-items: center;
      padding: 120px 0 70px;
    }

    .hero-grid {
      display: grid;
      grid-template-columns: 1.05fr .95fr;
      gap: 32px;
      align-items: center;
    }

    .eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 10px 14px;
      border-radius: 999px;
      background: rgba(255,255,255,.05);
      border: 1px solid rgba(255,255,255,.08);
      font-size: 13px;
      color: rgba(255,255,255,.78);
      letter-spacing: .02em;
      backdrop-filter: blur(14px);
    }

    .dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--teal), var(--cyan));
      box-shadow: 0 0 20px rgba(125,231,255,.75);
    }

    .hero-title {
      margin: 18px 0 18px;
      font-size: clamp(52px, 9vw, 118px);
      line-height: .92;
      letter-spacing: -.06em;
      font-weight: 900;
    }

    .hero-title .line {
      display: block;
      overflow: hidden;
      padding-bottom: .08em;
    }

    .hero-title .line span {
      display: block;
      background: linear-gradient(180deg, #fff 0%, #d8eaff 38%, #9fdcff 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      text-shadow: 0 0 22px rgba(125,231,255,.08);
    }

    .hero-text {
      max-width: 620px;
      font-size: 18px;
      line-height: 1.72;
      color: var(--muted);
    }

    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 14px;
      margin-top: 28px;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 15px 22px;
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,.1);
      transition: transform .35s ease, background .35s ease, border-color .35s ease;
      font-weight: 600;
    }

    .btn:hover { transform: translateY(-2px); }

    .btn-primary {
      background: linear-gradient(135deg, rgba(125,231,255,.22), rgba(92,124,255,.28) 52%, rgba(255,89,218,.2));
      box-shadow: 0 10px 30px rgba(92,124,255,.25);
    }

    .btn-secondary {
      background: rgba(255,255,255,.04);
      backdrop-filter: blur(12px);
    }

    .hero-meta {
      margin-top: 44px;
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 14px;
    }

    .meta-card {
      padding: 18px 18px 16px;
      border-radius: 24px;
      background: rgba(255,255,255,.04);
      border: 1px solid rgba(255,255,255,.08);
      backdrop-filter: blur(18px);
      box-shadow: var(--shadow);
    }

    .meta-card strong {
      display: block;
      font-size: 22px;
      letter-spacing: -.04em;
      margin-bottom: 6px;
    }

    .meta-card span {
      color: rgba(255,255,255,.62);
      font-size: 13px;
    }

    .hero-visual {
      position: relative;
      height: 74vh;
      min-height: 640px;
      perspective: 1800px;
    }

    .hero-stage {
      position: absolute;
      inset: 0;
      transform-style: preserve-3d;
    }

    .ring,
    .planet,
    .card-float,
    .beam,
    .grid-surface,
    .wave-path {
      position: absolute;
      inset: auto;
      will-change: transform;
    }

    .planet {
      width: 420px;
      height: 420px;
      right: 8%;
      top: 12%;
      border-radius: 50%;
      background:
        radial-gradient(circle at 30% 25%, rgba(255,255,255,.85), rgba(125,231,255,.35) 20%, rgba(92,124,255,.22) 38%, rgba(5,8,22,.18) 62%, rgba(0,0,0,.05) 70%),
        linear-gradient(135deg, rgba(125,231,255,.18), rgba(255,89,218,.16));
      box-shadow:
        inset -30px -30px 90px rgba(0,0,0,.28),
        inset 20px 20px 80px rgba(255,255,255,.08),
        0 40px 120px rgba(92,124,255,.25),
        0 0 100px rgba(125,231,255,.16);
      transform: translateZ(40px);
      overflow: hidden;
    }

    .planet::before,
    .planet::after {
      content: "";
      position: absolute;
      border-radius: 50%;
      inset: 12%;
      border: 1px solid rgba(255,255,255,.12);
    }

    .planet::after {
      inset: 26%;
      border-color: rgba(125,231,255,.22);
    }

    .ring {
      width: 560px;
      height: 560px;
      right: -4%;
      top: 2%;
      border-radius: 50%;
      border: 1px solid rgba(125,231,255,.14);
      box-shadow: inset 0 0 80px rgba(125,231,255,.04);
      transform: rotateX(71deg) rotateZ(12deg) translateZ(-30px);
    }

    .beam {
      width: 420px;
      height: 14px;
      right: 5%;
      top: 59%;
      background: linear-gradient(90deg, transparent, rgba(125,231,255,.8), rgba(255,255,255,.28), transparent);
      filter: blur(3px);
      transform: rotate(-10deg) translateZ(10px);
      opacity: .8;
    }

    .grid-surface {
      width: 92%;
      height: 44%;
      left: 4%;
      bottom: 0;
      border-radius: 40px;
      background:
        linear-gradient(to bottom, rgba(125,231,255,.1), transparent 60%),
        linear-gradient(rgba(255,255,255,.06) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.06) 1px, transparent 1px);
      background-size: auto, 42px 42px, 42px 42px;
      border: 1px solid rgba(255,255,255,.08);
      transform: rotateX(72deg) translateZ(-10px);
      transform-origin: center bottom;
      box-shadow: 0 20px 60px rgba(0,0,0,.38);
      opacity: .8;
    }

    .wave-path {
      width: 430px;
      height: 150px;
      left: 4%;
      top: 18%;
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,.08);
      background: linear-gradient(135deg, rgba(255,255,255,.08), rgba(255,255,255,.03));
      backdrop-filter: blur(14px);
      transform: rotate(-14deg) translateZ(70px);
      box-shadow: var(--shadow);
    }

    .wave-path::before,
    .wave-path::after {
      content: "";
      position: absolute;
      inset: 16px;
      border-radius: inherit;
      border: 1px dashed rgba(125,231,255,.22);
    }

    .wave-path::after {
      inset: 34px 46px;
      border-style: solid;
      border-color: rgba(255,89,218,.18);
    }

    .card-float {
      width: 220px;
      padding: 18px;
      border-radius: 26px;
      background: rgba(255,255,255,.06);
      border: 1px solid rgba(255,255,255,.09);
      backdrop-filter: blur(22px);
      box-shadow: var(--shadow);
      transform: translateZ(90px);
    }

    .card-float h4 {
      margin: 0 0 10px;
      font-size: 15px;
      letter-spacing: -.02em;
    }

    .card-float p {
      margin: 0;
      font-size: 12px;
      line-height: 1.55;
      color: rgba(255,255,255,.62);
    }

    .card-1 { top: 12%; left: 6%; }
    .card-2 { top: 56%; left: 16%; width: 200px; }
    .card-3 { right: 4%; bottom: 8%; width: 240px; }

    .section-head {
      max-width: 800px;
      margin-bottom: 32px;
    }

    .section-label {
      display: inline-block;
      font-size: 13px;
      color: rgba(255,255,255,.56);
      letter-spacing: .18em;
      text-transform: uppercase;
      margin-bottom: 18px;
    }

    .section-title {
      font-size: clamp(34px, 5vw, 72px);
      line-height: .98;
      margin: 0 0 18px;
      letter-spacing: -.06em;
    }

    .section-copy {
      font-size: 18px;
      line-height: 1.75;
      color: var(--muted);
      max-width: 720px;
    }

    .showcase {
      padding: 120px 0 80px;
    }

    .showcase-grid {
      display: grid;
      grid-template-columns: 1.1fr .9fr;
      gap: 28px;
      align-items: stretch;
    }

    .mega-panel,
    .stack-card,
    .feature-card,
    .cta-panel {
      border: 1px solid rgba(255,255,255,.08);
      background: linear-gradient(180deg, rgba(255,255,255,.06), rgba(255,255,255,.03));
      backdrop-filter: blur(20px);
      box-shadow: var(--shadow);
    }

    .mega-panel {
      position: relative;
      min-height: 640px;
      border-radius: 36px;
      overflow: hidden;
      padding: 30px;
    }

    .mega-water {
      position: absolute;
      inset: 0;
      background:
        radial-gradient(circle at 20% 25%, rgba(125,231,255,.35), transparent 28%),
        radial-gradient(circle at 75% 35%, rgba(255,89,218,.18), transparent 24%),
        linear-gradient(180deg, rgba(255,255,255,.04), transparent 28%),
        linear-gradient(160deg, #091426 5%, #08192f 45%, #0b1d38 100%);
    }

    .mega-water::before,
    .mega-water::after {
      content: "";
      position: absolute;
      left: 8%;
      width: 84%;
      height: 18%;
      border-radius: 999px;
      background: linear-gradient(90deg, rgba(125,231,255,.1), rgba(255,255,255,.25), rgba(92,124,255,.1));
      filter: blur(2px);
      opacity: .68;
    }

    .mega-water::before { top: 26%; }
    .mega-water::after { top: 56%; }

    .waterslide {
      position: absolute;
      width: 70%;
      height: 70%;
      top: 14%;
      left: 14%;
      border-radius: 38% 62% 46% 54% / 39% 39% 61% 61%;
      border: 1px solid rgba(255,255,255,.1);
      background:
        radial-gradient(circle at 32% 26%, rgba(255,255,255,.4), transparent 12%),
        conic-gradient(from 120deg, rgba(125,231,255,.78), rgba(92,124,255,.62), rgba(255,89,218,.58), rgba(87,255,214,.65), rgba(125,231,255,.78));
      filter: saturate(1.2) brightness(1.05);
      box-shadow: inset -25px -35px 70px rgba(0,0,0,.25), 0 40px 120px rgba(0,0,0,.25);
      transform: rotate(-18deg);
      opacity: .94;
    }

    .waterslide::before {
      content: "";
      position: absolute;
      inset: 18px;
      border-radius: inherit;
      border: 14px solid rgba(255,255,255,.18);
      mix-blend-mode: screen;
    }

    .panel-overlay-card {
      position: absolute;
      right: 28px;
      bottom: 28px;
      width: 280px;
      padding: 20px;
      border-radius: 24px;
      background: rgba(8,15,30,.55);
      border: 1px solid rgba(255,255,255,.08);
      backdrop-filter: blur(20px);
    }

    .stack {
      display: grid;
      gap: 24px;
    }

    .stack-card {
      border-radius: 28px;
      padding: 26px;
      min-height: 196px;
      position: relative;
      overflow: hidden;
    }

    .stack-card h3,
    .feature-card h3,
    .cta-panel h3 {
      margin: 0 0 10px;
      font-size: 28px;
      letter-spacing: -.05em;
    }

    .stack-card p,
    .feature-card p,
    .cta-panel p,
    .panel-overlay-card p {
      color: var(--muted);
      line-height: 1.7;
      font-size: 15px;
      margin: 0;
    }

    .pill-line {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 18px;
    }

    .pill {
      padding: 8px 12px;
      border-radius: 999px;
      background: rgba(255,255,255,.06);
      border: 1px solid rgba(255,255,255,.09);
      font-size: 12px;
      color: rgba(255,255,255,.74);
    }

    .features {
      padding: 80px 0 120px;
    }

    .features-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 22px;
    }

    .feature-card {
      border-radius: 30px;
      padding: 28px;
      min-height: 360px;
      position: relative;
      overflow: hidden;
    }

    .feature-card::before {
      content: "";
      position: absolute;
      width: 220px;
      height: 220px;
      border-radius: 50%;
      top: -60px;
      right: -60px;
      opacity: .28;
      filter: blur(20px);
      background: linear-gradient(135deg, rgba(125,231,255,.75), rgba(255,89,218,.45));
    }

    .icon-orb {
      width: 58px;
      height: 58px;
      border-radius: 50%;
      display: grid;
      place-items: center;
      margin-bottom: 18px;
      border: 1px solid rgba(255,255,255,.12);
      background: rgba(255,255,255,.07);
      box-shadow: inset 0 0 24px rgba(255,255,255,.05);
      font-size: 20px;
    }

    .feature-visual {
      margin-top: 28px;
      height: 170px;
      border-radius: 24px;
      border: 1px solid rgba(255,255,255,.08);
      background:
        linear-gradient(180deg, rgba(255,255,255,.06), transparent 20%),
        linear-gradient(135deg, rgba(125,231,255,.13), rgba(92,124,255,.08), rgba(255,89,218,.1));
      position: relative;
      overflow: hidden;
    }

    .feature-visual::before,
    .feature-visual::after {
      content: "";
      position: absolute;
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,.1);
    }

    .feature-visual::before {
      width: 72%;
      height: 26px;
      left: 14%;
      top: 38%;
      transform: rotate(-11deg);
    }

    .feature-visual::after {
      width: 48%;
      height: 72px;
      left: 26%;
      top: 24%;
      transform: rotate(10deg);
      border-color: rgba(125,231,255,.22);
    }

    .story {
      padding: 10px 0 120px;
    }

    .story-track {
      position: relative;
      display: grid;
      gap: 22px;
    }

    .story-step {
      display: grid;
      grid-template-columns: .9fr 1.1fr;
      gap: 22px;
      align-items: stretch;
      min-height: 420px;
    }

    .story-copy,
    .story-art {
      border-radius: 32px;
      border: 1px solid rgba(255,255,255,.08);
      background: linear-gradient(180deg, rgba(255,255,255,.05), rgba(255,255,255,.03));
      backdrop-filter: blur(18px);
      box-shadow: var(--shadow);
      overflow: hidden;
      position: relative;
    }

    .story-copy {
      padding: 34px;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
    }

    .story-num {
      position: absolute;
      top: 26px;
      right: 26px;
      font-size: 13px;
      color: rgba(255,255,255,.4);
      letter-spacing: .18em;
    }

    .story-copy h3 {
      font-size: clamp(30px, 4vw, 50px);
      line-height: .98;
      margin: 0 0 14px;
      letter-spacing: -.05em;
    }

    .story-copy p {
      margin: 0;
      color: var(--muted);
      line-height: 1.8;
      max-width: 560px;
    }

    .story-art::before,
    .story-art::after {
      content: "";
      position: absolute;
      border-radius: 50%;
      filter: blur(40px);
      opacity: .5;
    }

    .story-art::before {
      width: 220px;
      height: 220px;
      background: rgba(125,231,255,.35);
      top: -30px;
      left: -20px;
    }

    .story-art::after {
      width: 160px;
      height: 160px;
      background: rgba(255,89,218,.3);
      right: 18px;
      bottom: 18px;
    }

    .art-inner {
      position: absolute;
      inset: 24px;
      border-radius: 28px;
      border: 1px solid rgba(255,255,255,.1);
      overflow: hidden;
      background:
        linear-gradient(180deg, rgba(255,255,255,.05), transparent 25%),
        linear-gradient(135deg, rgba(125,231,255,.15), rgba(92,124,255,.12), rgba(255,89,218,.12));
    }

    .art-track,
    .art-drop,
    .art-dome,
    .art-grid {
      position: absolute;
    }

    .art-grid {
      inset: auto 0 0 0;
      height: 45%;
      background:
        linear-gradient(rgba(255,255,255,.08) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.08) 1px, transparent 1px);
      background-size: 30px 30px;
      transform: perspective(700px) rotateX(70deg);
      transform-origin: bottom;
      opacity: .45;
    }

    .art-track {
      width: 62%;
      height: 28px;
      left: 18%;
      top: 30%;
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,.12);
      transform: rotate(-16deg);
      box-shadow: inset 0 0 24px rgba(255,255,255,.08);
    }

    .art-drop {
      width: 22%;
      height: 46%;
      left: 40%;
      top: 20%;
      border-radius: 30px;
      border: 1px solid rgba(125,231,255,.18);
      background: linear-gradient(180deg, rgba(125,231,255,.22), rgba(92,124,255,.1));
    }

    .art-dome {
      width: 42%;
      height: 42%;
      left: 30%;
      top: 26%;
      border-radius: 50%;
      border: 1px solid rgba(255,255,255,.1);
      background: radial-gradient(circle at 35% 35%, rgba(255,255,255,.35), rgba(125,231,255,.1), transparent 70%);
    }

    .cta {
      padding: 0 0 120px;
    }

    .cta-panel {
      border-radius: 40px;
      padding: 40px;
      display: grid;
      grid-template-columns: 1.1fr .9fr;
      gap: 26px;
      overflow: hidden;
      position: relative;
    }

    .cta-panel::before {
      content: "";
      position: absolute;
      width: 420px;
      height: 420px;
      border-radius: 50%;
      right: -120px;
      top: -150px;
      background: radial-gradient(circle, rgba(125,231,255,.22), transparent 60%);
      filter: blur(10px);
    }

    .cta-actions {
      display: flex;
      gap: 14px;
      flex-wrap: wrap;
      margin-top: 24px;
    }

    .cta-specs {
      display: grid;
      gap: 14px;
      align-content: center;
    }

    .spec {
      padding: 16px 18px;
      border: 1px solid rgba(255,255,255,.08);
      border-radius: 22px;
      background: rgba(255,255,255,.04);
      display: flex;
      justify-content: space-between;
      gap: 18px;
      font-size: 14px;
      color: rgba(255,255,255,.78);
    }

    .footer {
      padding: 0 0 44px;
      color: rgba(255,255,255,.42);
      font-size: 13px;
    }

    .reveal-y,
    .reveal-x,
    .hero-split span,
    .fade {
      will-change: transform, opacity;
    }

    @media (max-width: 1100px) {
      .hero-grid,
      .showcase-grid,
      .story-step,
      .cta-panel,
      .features-grid {
        grid-template-columns: 1fr;
      }

      .hero-visual {
        height: 62vh;
        min-height: 560px;
      }

      .nav-links {
        display: none;
      }
    }

    @media (max-width: 760px) {
      .cursor,
      .cursor-ring {
        display: none;
      }

      .container {
        width: min(calc(100% - 28px), var(--max));
      }

      .hero {
        padding-top: 108px;
      }

      .hero-meta {
        grid-template-columns: 1fr;
      }

      .hero-visual {
        height: 78vw;
        min-height: 480px;
      }

      .planet {
        width: 280px;
        height: 280px;
      }

      .ring {
        width: 390px;
        height: 390px;
      }

      .card-float { width: 170px; }
      .mega-panel { min-height: 500px; }
      .feature-card { min-height: auto; }
      .cta-panel { padding: 28px; border-radius: 30px; }
      .nav-inner { padding: 12px 16px; }
    }
  </style>
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
                  <div class="art-track float-slow" style="top:43%;left:14%;width:70%;transform:rotate(14deg);"></div>
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
                  <div class="art-dome float-fast" style="width:48%;height:48%;left:26%;top:20%;"></div>
                  <div class="art-drop float-slow" style="width:18%;left:42%;top:28%;height:36%;"></div>
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
              <h3 style="font-size:clamp(34px,5vw,72px);line-height:.96;letter-spacing:-.06em;margin:0 0 16px;">Let your water park website feel as iconic as the destination itself.</h3>
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
<?php echo $__env->make('partials.website-chat', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\pages\ai.blade.php ENDPATH**/ ?>