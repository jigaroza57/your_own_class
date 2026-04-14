<!DOCTYPE html>
<html lang="gu">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Own Class </title>
    <link rel="shortcut icon" href="img/logo_class.png" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">

  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">


  <style>
    :root {
      --orange: #FF6B1A;
      --orange2: #ff4500;
      --dark: #1e2a3a;
      --dark2: #0d1621;
      --cream: #fdf8f4;
      --cream2: #fff4ec;
      --white: #ffffff;
      --muted: #7a8a9a;
    }

    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--cream);
      color: var(--dark);
      overflow-x: hidden;
    }

    ::-webkit-scrollbar {
      width: 5px;
    }

    ::-webkit-scrollbar-thumb {
      background: var(--orange);
      border-radius: 3px;
    }

    /* ── HERO ── */
    .hero {
      position: relative;
      min-height: 100vh;
      display: flex;
      align-items: center;
      overflow: hidden;
    }

    .hero-bg {
      position: absolute;
      inset: 0;
      /* background-image: url('https://images.unsplash.com/photo-1577896851231-70ef18881754?w=1600&q=80'); */
      background-image: url('img/your1.jpeg');

      background-size: cover;
      background-position: center;
    }

    .hero-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(110deg, rgba(13, 22, 33, 0.92) 45%, rgba(13, 22, 33, 0.55) 100%);
    }

    .hero-content {
      position: relative;
      z-index: 2;
      padding: 120px 5% 80px;
      width: 100%;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 60px;
      align-items: center;
    }

    .hero-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255, 107, 26, 0.15);
      border: 1px solid rgba(255, 107, 26, 0.3);
      color: var(--orange);
      padding: 6px 16px;
      border-radius: 100px;
      font-size: .75rem;
      font-weight: 700;
      letter-spacing: .06em;
      text-transform: uppercase;
      margin-bottom: 22px;
    }

    .hero-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2.6rem, 5vw, 4rem);
      font-weight: 900;
      color: white;
      line-height: 1.19;
      letter-spacing: -0.03em;
      margin-bottom: 20px;
    }

    .hero-title em {
      font-style: normal;
      color: var(--orange);
    }

    .hero-sub {
      font-size: 1.05rem;
      color: rgba(255, 255, 255, 0.65);
      line-height: 1.75;
      margin-bottom: 36px;
    }

    .hero-mosaic {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-template-rows: auto auto;
      gap: 12px;
    }

    .mosaic-img {
      border-radius: 18px;
      overflow: hidden;
      height: 200px;
    }

    .mosaic-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform .5s ease;
    }

    .mosaic-img:hover img {
      transform: scale(1.05);
    }

    .mosaic-img.tall {
      grid-row: span 2;
      height: 100%;
      min-height: 412px;
    }

    .mosaic-wrap {
      position: relative;
    }

    /* ── STRIP ── */
    .strip {
      background: var(--orange);
      padding: 18px 5%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      gap: 28px;
    }

    .strip-item {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: .88rem;
      font-weight: 700;
      color: white;
    }

    .strip-sep {
      color: rgba(255, 255, 255, .35);
      font-size: 1.2rem;
    }

    /* ── SECTION LABELS ── */
    .sec-label {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255, 107, 26, 0.12);
      color: var(--orange);
      padding: 5px 15px;
      border-radius: 100px;
      font-size: .75rem;
      font-weight: 700;
      letter-spacing: .06em;
      text-transform: uppercase;
      margin-bottom: 14px;
    }

    .sec-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(1.9rem, 3.5vw, 2.9rem);
      font-weight: 900;
      line-height: 1.15;
      letter-spacing: -0.02em;
    }

    .sec-title .hl {
      color: var(--orange);
    }

    .sec-sub {
      font-size: 1rem;
      color: var(--muted);
      line-height: 1.7;
      margin-top: 12px;
    }

    /* ─────────────────────────────────────────
       SECTION 1: YOC ના અનોખા ફાયદા — LIGHT THEME
       Squircle icons like Image 1
    ───────────────────────────────────────── */
    .feat-section {
      background: var(--cream);
      padding: 90px 0;
    }

    /* Squircle icon style */
    .feat-item {
      text-align: center;
      padding: 28px 18px;
    }

    .squircle-icon {
      width: 80px;
      height: 80px;
      border-radius: 24px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      font-size: 1.6rem;
      transition: transform .3s, box-shadow .3s;
    }

    .squircle-icon.orange {
      background: #FF6B1A;
      color: white;
      box-shadow: 0 12px 28px -6px rgba(255, 107, 26, .4);
    }

    .squircle-icon.green {
      background: #2EC4A5;
      color: white;
      box-shadow: 0 12px 28px -6px rgba(46, 196, 165, .4);
    }

    .squircle-icon.blue {
      background: #6B9FD4;
      color: white;
      box-shadow: 0 12px 28px -6px rgba(107, 159, 212, .4);
    }

    .squircle-icon.red {
      background: #F05A3E;
      color: white;
      box-shadow: 0 12px 28px -6px rgba(240, 90, 62, .4);
    }

    .feat-item:hover .squircle-icon {
      transform: translateY(-6px) scale(1.06);
    }

    .feat-item-title {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: .95rem;
      color: var(--dark);
      margin-bottom: 8px;
    }

    .feat-item-desc {
      font-size: .82rem;
      color: var(--muted);
      line-height: 1.6;
    }

    .feat-tag {
      display: inline-block;
      margin-top: 10px;
      background: rgba(255, 107, 26, .1);
      color: var(--orange);
      padding: 3px 12px;
      border-radius: 100px;
      font-size: .7rem;
      font-weight: 700;
    }

    /* ─────────────────────────────────────────
       TRUST SECTION — DARK THEME (only this section dark)
       Fixed: no overlap, proper two-column layout
    ───────────────────────────────────────── */
    .trust-section {
      background: var(--dark);
      padding: 100px 0;
      position: relative;
      overflow: hidden;
    }

    .trust-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: linear-gradient(90deg, transparent, var(--orange), transparent);
    }

    /* Left image column — clean, no overlap */
    .trust-img-wrap {
      border-radius: 24px;
      overflow: hidden;
      height: 440px;
      box-shadow: 0 40px 80px -20px rgba(0, 0, 0, .5);
    }

    .trust-img-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* Info badge below image */
    .trust-year-badge {
      display: inline-flex;
      align-items: center;
      gap: 14px;
      background: var(--orange);
      border-radius: 16px;
      padding: 16px 24px;
      margin-top: 20px;
      box-shadow: 0 12px 28px -8px rgba(255, 107, 26, .5);
    }

    .trust-year-badge .tb-num {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      font-weight: 900;
      color: white;
      line-height: 1;
    }

    .trust-year-badge .tb-lbl {
      font-size: .78rem;
      color: rgba(255, 255, 255, .85);
    }

    .trust-quote {
      background: rgba(255, 255, 255, .05);
      border-left: 4px solid var(--orange);
      border-radius: 0 14px 14px 0;
      padding: 22px 24px;
      margin: 24px 0;
    }

    .trust-quote p {
      color: rgba(255, 255, 255, .8);
      font-size: .97rem;
      line-height: 1.7;
    }

    /* District info grid */
    .district-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
      margin: 24px 0;
    }

    .district-card {
      background: rgba(255, 255, 255, .05);
      border: 1px solid rgba(255, 255, 255, .08);
      border-radius: 14px;
      padding: 16px 18px;
      transition: background .25s, border-color .25s;
    }

    .district-card:hover {
      background: rgba(255, 107, 26, .08);
      border-color: rgba(255, 107, 26, .25);
    }

    .district-card-icon {
      color: var(--orange);
      font-size: .95rem;
      margin-bottom: 6px;
    }

    .district-card-title {
      font-size: .82rem;
      font-weight: 700;
      color: rgba(255, 255, 255, .85);
      margin-bottom: 3px;
    }

    .district-card-sub {
      font-size: .72rem;
      color: rgba(255, 255, 255, .35);
      line-height: 1.5;
    }

    .trust-chips {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 20px;
    }

    .chip {
      display: flex;
      align-items: center;
      gap: 7px;
      background: rgba(255, 255, 255, .07);
      border: 1px solid rgba(255, 255, 255, .1);
      border-radius: 100px;
      padding: 7px 16px;
      font-size: .82rem;
      font-weight: 600;
      color: rgba(255, 255, 255, .7);
      transition: all .2s;
    }

    .chip:hover {
      border-color: var(--orange);
      color: var(--orange);
    }

    .chip i {
      color: var(--orange);
    }

    /* ─────────────────────────────────────────
       SECTION 2: YOC નો ઉદ્દેશ — LIGHT THEME
       All boxes same size, clean grid
    ───────────────────────────────────────── */
    .uddeshy-section {
      background: var(--cream);
      padding: 90px 0;
    }

    .uddeshy-card {
      background: white;
      border: 1px solid rgba(0, 0, 0, .07);
      border-radius: 18px;
      padding: 28px 24px;
      height: 100%;
      transition: box-shadow .25s, transform .25s, border-color .25s;
      display: flex;
      flex-direction: column;
    }

    .uddeshy-card:hover {
      box-shadow: 0 16px 40px -10px rgba(255, 107, 26, .18);
      transform: translateY(-4px);
      border-color: rgba(255, 107, 26, .25);
    }

    /* Squircle icons for uddeshy — same style */
    .uddeshy-icon {
      width: 56px;
      height: 56px;
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.25rem;
      margin-bottom: 16px;
      flex-shrink: 0;
    }

    .uddeshy-icon.orange {
      background: rgba(255, 107, 26, .12);
      color: var(--orange);
    }

    .uddeshy-icon.green {
      background: rgba(46, 196, 165, .12);
      color: #2EC4A5;
    }

    .uddeshy-icon.blue {
      background: rgba(107, 159, 212, .12);
      color: #6B9FD4;
    }

    .uddeshy-icon.red {
      background: rgba(240, 90, 62, .12);
      color: #F05A3E;
    }

    .uddeshy-icon.purple {
      background: rgba(139, 92, 246, .12);
      color: #8B5CF6;
    }

    .uddeshy-icon.teal {
      background: rgba(20, 184, 166, .12);
      color: #14B8A6;
    }

    .uddeshy-card:hover .uddeshy-icon.orange {
      background: var(--orange);
      color: white;
    }

    .uddeshy-card:hover .uddeshy-icon.green {
      background: #2EC4A5;
      color: white;
    }

    .uddeshy-card:hover .uddeshy-icon.blue {
      background: #6B9FD4;
      color: white;
    }

    .uddeshy-card:hover .uddeshy-icon.red {
      background: #F05A3E;
      color: white;
    }

    .uddeshy-card:hover .uddeshy-icon.purple {
      background: #8B5CF6;
      color: white;
    }

    .uddeshy-card:hover .uddeshy-icon.teal {
      background: #14B8A6;
      color: white;
    }

    .uddeshy-card-title {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: 1rem;
      color: var(--dark);
      margin-bottom: 8px;
    }

    .uddeshy-card-desc {
      font-size: .83rem;
      color: var(--muted);
      line-height: 1.65;
      flex: 1;
    }

    .uddeshy-badge-light {
      display: inline-block;
      margin-top: 14px;
      background: rgba(255, 107, 26, .1);
      color: var(--orange);
      padding: 4px 14px;
      border-radius: 100px;
      font-size: .7rem;
      font-weight: 700;
      align-self: flex-start;
    }

    /* ─────────────────────────────────────────
       CTA + CONTACT — DARK THEME
    ───────────────────────────────────────── */
    .cta-section {
      position: relative;
      overflow: hidden;
      background: var(--dark2);
      padding: 90px 0 0;
    }

    .cta-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: linear-gradient(90deg, transparent, var(--orange), transparent);
    }

    .cta-deco {
      position: absolute;
      top: 0;
      right: 0;
      width: 45%;
      height: 100%;
      background: rgba(255, 107, 26, .04);
      clip-path: polygon(12% 0, 100% 0, 100% 100%, 0% 100%);
      pointer-events: none;
    }

    .cta-stats-bar {
      display: flex;
      margin-bottom: 48px;
      border-radius: 16px;
      overflow: hidden;
      border: 1px solid rgba(255, 107, 26, .2);
    }

    .csb-item {
      flex: 1;
      padding: 20px 16px;
      text-align: center;
      background: rgba(255, 107, 26, .05);
      border-right: 1px solid rgba(255, 107, 26, .15);
      transition: background .2s;
    }

    .csb-item:last-child {
      border-right: none;
    }

    .csb-item:hover {
      background: rgba(255, 107, 26, .1);
    }

    .csb-num {
      font-family: 'Playfair Display', serif;
      font-size: 1.8rem;
      font-weight: 900;
      color: var(--orange);
      line-height: 1;
    }

    .csb-lbl {
      font-size: .72rem;
      color: rgba(255, 255, 255, .4);
      margin-top: 5px;
      font-weight: 500;
    }

    .cta-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2rem, 3.5vw, 2.8rem);
      font-weight: 900;
      color: white;
      line-height: 1.2;
      letter-spacing: -0.02em;
      margin-bottom: 14px;
    }

    .cta-title span {
      color: var(--orange);
    }

    .cta-sub {
      color: rgba(255, 255, 255, .5);
      font-size: .97rem;
      line-height: 1.7;
      margin-bottom: 28px;
    }

    .checklist {
      list-style: none;
      padding: 0;
      margin-bottom: 32px;
    }

    .checklist li {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      color: rgba(255, 255, 255, .7);
      font-size: .9rem;
      margin-bottom: 12px;
    }

    .check-dot {
      width: 22px;
      height: 22px;
      flex-shrink: 0;
      margin-top: 1px;
      background: rgba(255, 107, 26, .15);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .check-dot i {
      color: var(--orange);
      font-size: .6rem;
    }

    .cta-big-btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: linear-gradient(135deg, var(--orange), var(--orange2));
      color: white;
      padding: 16px 36px;
      border-radius: 100px;
      font-weight: 700;
      font-size: 1rem;
      text-decoration: none;
      box-shadow: 0 14px 32px -8px rgba(255, 107, 26, .5);
      transition: all .3s;
    }

    .cta-big-btn:hover {
      transform: translateY(-4px);
      color: white;
      box-shadow: 0 20px 40px -10px rgba(255, 107, 26, .65);
    }

    .contact-strip {
      background: rgba(255, 255, 255, .03);
      border: 1px solid rgba(255, 255, 255, .07);
      border-radius: 20px;
      padding: 32px 30px;
      height: 100%;
    }

    .contact-strip-head {
      font-size: 1.7rem;
      font-weight: 700;
      color: white;
      text-transform: uppercase;
      letter-spacing: .12em;
      margin-bottom: 24px;
    }

    .contact-row {
      display: flex;
      align-items: center;
      gap: 16px;
      padding: 14px 0;
      border-bottom: 1px solid rgba(255, 255, 255, .06);
    }

    .contact-row:last-of-type {
      border-bottom: none;
    }

    .c-ico {
      width: 44px;
      height: 44px;
      flex-shrink: 0;
      background: rgba(255, 107, 26, .1);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--orange);
      font-size: 1rem;
    }

    .c-main {
      font-size: .92rem;
      font-weight: 600;
      color: rgba(255, 255, 255, .88);
    }

    .c-sub {
      /* font-size: .74rem; */
      color: rgba(255, 255, 255, 0.52);
      margin-top: 2px;
    }

    .contact-cta-btn {
      display: block;
      width: 100%;
      margin-top: 24px;
      background: linear-gradient(135deg, var(--orange), var(--orange2));
      color: white;
      padding: 15px;
      border-radius: 100px;
      font-weight: 700;
      font-size: .95rem;
      text-align: center;
      text-decoration: none;
      /* box-shadow: 0 12px 28px -8px rgba(255, 107, 26, .45); */
      transition: all .3s;
    }

    .contact-cta-btn:hover {
      transform: translateY(-3px);
      color: white;
      /* box-shadow: 0 20px 40px -10px rgba(255, 107, 26, .6); */
    }

    /* Bottom padding for cta section (no footer strip) */
    .cta-section .container {
      padding-bottom: 80px;
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 768px) {
      .hero-content {
        grid-template-columns: 1fr;
      }

     .hero-mosaic{
      grid-template-columns: 1fr;
     }

      .cta-deco {
        display: none;
      }

      .cta-stats-bar {
        flex-wrap: wrap;
      }

      .csb-item {
        flex: 1 0 50%;
        border-right: 1px solid rgba(255, 107, 26, .15);
      }

      .district-grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 480px) {
      .strip {
        gap: 14px;
      }

      .strip-sep {
        display: none;
      }
    }
  </style>

</head>

<body>

  <?php include 'nav.php'; ?>

  <style>
    .breadcumb-wrapper {
      background-image: url("img/banner_img-Photoroom.png");
      background-size: cover;
      background-position: center;
    }

    @media (max-width:768px) {
      .breadcumb-wrapper {
        background-image: url("img/mob_banner.png");
      }
    }

    @media screen and (min-width: 768px) {

      html,
      body {
        overflow-x: hidden !important;
      }
    }
  </style>

  <div class="breadcumb-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="breadcumb-content">
            <h1 class="breadcumb-title">અમારા વિશે</h1>
            <ul class="breadcumb-menu">
              <li><a href="index">Home</a></li>
              <li>અમારા વિશે</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════ HERO ══════════════════════════════ -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <div>
        <div class="hero-eyebrow"><i class="fas fa-star-of-life"></i> ગ્રામીણ ડિજિટલ ક્રાંતિ</div>
        <h1 class="hero-title">
          <em>વિદ્યાદાન પણ અને સાથે</em>
          આર્થિક વિકાસ પણ
        </h1>
        <p class="hero-sub">ગ્રામીણ શિક્ષણમાં ક્રાંતિ! ઘર બેઠા ઉચ્ચ સ્તરનું<br>ગુણવત્તાવાળું, સુરક્ષિત અને લાઈવ શિક્ષણ.</p>
      </div>
      <div class="mosaic-wrap">
        <div class="hero-mosaic">
          <div class="mosaic-img tall" style="border: 5px solid white;">
            <img src="img/about_2.png" alt="students learning">
          </div>
          <div class="mosaic-img" style="border: 5px solid white;">
            <img src="img/your5.jpeg" alt="classroom">
          </div>
          <div class="mosaic-img" style="border: 5px solid white;">
            <img src="img/section_3.png" alt="online learning">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- STRIP -->
  <div class="strip">
    <div class="strip-item"><i class="fas fa-check-circle"></i> ૧૦૦% લાઇવ ઇન્ટરેક્ટિવ</div>
    <div class="strip-sep">|</div>
    <div class="strip-item"><i class="fas fa-record-vinyl"></i> રેકોર્ડિંગ ઉપલબ્ધ</div>
    <!-- <div class="strip-sep">|</div>
    <div class="strip-item"><i class="fas fa-mobile-alt"></i> વાલી પ્રોગ્રેસ એપ</div> -->
    <div class="strip-sep">|</div>
    <div class="strip-item"><i class="fas fa-rupee-sign"></i> પોસાય તેવી ફી</div>
    <div class="strip-sep">|</div>
    <div class="strip-item"><i class="fas fa-shield-alt"></i> સુરક્ષિત અભ્યાસ</div>
  </div>

  <!-- ══════════════════════════════
       SECTION 1: YOC ના અનોખા ફાયદા — LIGHT THEME
       Squircle icons (Image 1 style)
  ══════════════════════════════ -->
  <section class="feat-section" id="features">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-7">
          <div class="sec-label mb-5"><i class="fas fa-star-of-life"></i> YOC ના અનોખા ફાયદા</div>
          <div class="sec-title"><span class="hl">વિદ્યાર્થીઓ અને </span>વાલીઓ માટે ખાસ</div>
          <p class="sec-sub">ગુણવત્તાયુક્ત, સુરક્ષિત અને લાઈવ શિક્ષણ — YOC ની ખાસ સુવિધા</p>
        </div>
      </div>

      <div class="row g-4 justify-content-center">

        <div class="col-12 col-md-3">
          <div class="feat-item">
            <div class="squircle-icon orange"><i class="fas fa-chalkboard"></i></div>
            <div class="feat-item-title">૧૦૦% લાઇવ ઇન્ટરેક્ટિવ ક્લાસ</div>
            <p class="feat-item-desc">શિક્ષક સાથે લાઈવ ભણતર. તાત્કાલિક શંકા સમાધાન.</p>
            <span class="feat-tag">લાઇવ ભણતર</span>
          </div>
        </div>

        <div class="col-12 col-md-3">
          <div class="feat-item">
            <div class="squircle-icon green"><i class="fas fa-user-graduate"></i></div>
            <div class="feat-item-title"> નિષ્ણાત શિક્ષકો</div>
            <p class="feat-item-desc">દરેક વિષય માટે નિષ્ણાત ફેકલ્ટી. Gujarat ની શ્રેષ્ઠ શિક્ષક ટીમ.</p>
            <span class="feat-tag">નિષ્ણાત શિક્ષકો</span>
          </div>
        </div>

        <div class="col-12 col-md-3">
          <div class="feat-item">
            <div class="squircle-icon blue"><i class="fas fa-shield-alt"></i></div>
            <div class="feat-item-title">સુરક્ષિત અને અનુકૂળ</div>
            <p class="feat-item-desc">ઘર બેઠા સુરક્ષિત અભ્યાસનું વાતાવરણ. ગ્રામીણ દીકરીઓ માટે ખાસ.</p>
            <span class="feat-tag">સુરક્ષિત ભણતર</span>
          </div>
        </div>

        <div class="col-12 col-md-3">
          <div class="feat-item">
            <div class="squircle-icon red"><i class="fas fa-chart-line"></i></div>
            <div class="feat-item-title">વાલીઓ સાથે સીધું જોડાણ</div>
            <p class="feat-item-desc">પ્રોગ્રેસ રિપોર્ટ, ક્લાસ રેકોર્ડિંગ અને પેરેન્ટ એપ સાથે ૧૦૦% પારદર્શક સિસ્ટમ.</p>
            <span class="feat-tag">વાલી મોનિટરિંગ</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ══════════════════════════════
       TRUST SECTION — DARK THEME
       Fixed layout: no overlap, district-level info, all Gujarati
  ══════════════════════════════ -->
  <section class="trust-section" id="trust">
    <div class="container">
      <div class="row align-items-start g-5">

        <!-- LEFT: Image + badge below -->
        <div class="col-lg-5">
          <div class="trust-img-wrap">
            <img src="img/about_2.png" alt="YOC Online Class">
          </div>
          <div class="trust-year-badge">
            <div>
              <div class="tb-num">1992</div>
              <div class="tb-lbl">સ્થાપના વર્ષ</div>
            </div>
            <div style="width:1px; height:40px; background:rgba(255,255,255,.3);"></div>
            <div>
              <div class="tb-num">34+</div>
              <div class="tb-lbl">વર્ષ અનુભવ</div>
            </div>
          </div>
        </div>

        <!-- RIGHT: Text content -->
        <div class="col-lg-7">
          <div class="sec-label mb-5"><i class="fas fa-building"></i> મજબૂત નેતૃત્વ</div>
          <div class="sec-title" style="color:white;"><span class="hl">જીલ્લા  સ્તરે ઓનલાઇન</span>   ક્લાસ ની ક્રાંતિ</div>

          <div class="trust-quote">
            <p>"Your Own Class" — <strong>શેઠ સાગા પ્રા. લી.</strong> નું સાહસ, <strong>શેઠ ગ્રુપ</strong> (સ્થાપના ૧૯૯૨, ભાવનગર/અમદાવાદ) દ્વારા સંચાલિત. ગ્રામીણ ગુજરાતના દરેક જીલ્લા માં ઉચ્ચ ગુણવત્તાનું લાઈવ ઓનલાઇન શિક્ષણ.</p>
          </div>

          <div class="district-grid">
            <div class="district-card">
              <div class="district-card-icon"><i class="fas fa-map-marker-alt"></i></div>
              <div class="district-card-title">ગ્રામીણ & અર્ધ-શહેરી વિસ્તાર</div>
              <div class="district-card-sub">ગુજરાતના દરેક જીલ્લા  ના વિદ્યાર્થીઓ માટે</div>
            </div>
            <div class="district-card">
              <div class="district-card-icon"><i class="fas fa-wifi"></i></div>
              <div class="district-card-title">ઇન્ટરનેટ પર Live ક્લાસ</div>
              <div class="district-card-sub">ઘર બેઠા શહેરી ગુણવત્તા — ૦% Travel</div>
            </div>
            <div class="district-card">
              <div class="district-card-icon"><i class="fas fa-female"></i></div>
              <div class="district-card-title">દીકરીઓ માટે સુરક્ષિત</div>
              <div class="district-card-sub">ગ્રામીણ દીકરીઓ માટે ઘરે બેઠા સુરક્ષિત અભ્યાસની સુવિધા</div>
            </div>
            <div class="district-card">
              <div class="district-card-icon"><i class="fas fa-trophy"></i></div>
              <div class="district-card-title">Board Result ઉત્કૃષ્ટ</div>
              <div class="district-card-sub">નિષ્ણાત શિક્ષકો અને લાઈવ ડાઉટ સોલ્વિંગ</div>
            </div>
          </div>

          <div class="trust-chips">
            <div class="chip"><i class="fas fa-calendar-alt"></i> સ્થાપના ૧૯૯૨</div>
            <div class="chip"><i class="fas fa-city"></i> ભાવનગર / અમદાવાદ</div>
            <div class="chip"><i class="fas fa-chart-bar"></i> ૩૪+ વર્ષ</div>
            <div class="chip"><i class="fas fa-handshake"></i> વિશ્વસનીય વિશ્વાસ</div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ══════════════════════════════
       SECTION 2: YOC નો ઉદ્દેશ — LIGHT THEME
       All equal-size cards, light theme
  ══════════════════════════════ -->
  <section class="uddeshy-section" id="uddeshy">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-7">
          <div class="sec-label mb-5"><i class="fas fa-chart-line"></i> YOC નો ઉદ્દેશ</div>
          <div class="sec-title"><span class="hl">જ્ઞાન પણ, વિકાસ </span> પણ અને સમૃદ્ધિ પણ</div>
          <p class="sec-sub">YOC ગ્રામીણ યુવાનોને ડિજિટલ શિક્ષણ
            દ્વારા સશક્ત બનાવે છે.</p>
        </div>
      </div>

      <div class="row g-4">

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="uddeshy-card">
            <div class="uddeshy-icon orange"><i class="fas fa-laptop-code"></i></div>
            <div class="uddeshy-card-title">ડિજિટલ સાક્ષરતા</div>
            <p class="uddeshy-card-desc">શહેરી ગુણવત્તા, ગ્રામીણ વિસ્તારમાં. ઘર બેઠા ટેક આધારિત ભણતર — ઇન્ટરનેટ ઉપર.</p>
            <span class="uddeshy-badge-light">ડિજિટલ</span>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="uddeshy-card">
            <div class="uddeshy-icon green"><i class="fas fa-rupee-sign"></i></div>
            <div class="uddeshy-card-title">પોસાય તેવી ફી</div>
            <p class="uddeshy-card-desc">ગ્રામીણ, અર્ધ-શહેરી, શહેરી — સૌ ને સુલભ ફી માળખું. ઓછા ખર્ચે ઉત્તમ ભણતર.</p>
            <span class="uddeshy-badge-light">પોસાય</span>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="uddeshy-card">
            <div class="uddeshy-icon blue"><i class="fas fa-globe-asia"></i></div>
            <div class="uddeshy-card-title">રોજગાર માટે તૈયારી</div>
            <p class="uddeshy-card-desc">કેરિયર માર્ગદર્શન, કૌશલ્ય વિકાસ અને પ્રોજેક્ટ આધારિત અભ્યાસ દ્વારા ઉજ્જ્વળ ભવિષ્ય.</p>
            <span class="uddeshy-badge-light">રોજગાર</span>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="uddeshy-card">
            <div class="uddeshy-icon red"><i class="fas fa-shield-heart"></i></div>
            <div class="uddeshy-card-title">સુરક્ષિત અભ્યાસ</div>
            <p class="uddeshy-card-desc">ઘરે બેઠા સુરક્ષિત ડિજિટલ પ્લેટફોર્મ — ખાસ ગ્રામિણ દીકરીઓ માટે. મુસાફરી શૂન્ય, જોખમ શૂન્ય.</p>
            <span class="uddeshy-badge-light">Safe</span>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="uddeshy-card">
            <div class="uddeshy-icon purple"><i class="fas fa-chart-simple"></i></div>
            <div class="uddeshy-card-title">સ્માર્ટ ક્લાસરૂમ</div>
            <p class="uddeshy-card-desc">૨૪/૭ ઍક્સેસ, મૉક ટેસ્ટ અને પ્રોગ્રેસ ટ્રેકિંગ — અત્યાધુનિક ટેકનોલોજી પ્લેટફોર્મ.</p>
            <span class="uddeshy-badge-light">સ્માર્ટ</span>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="uddeshy-card">
            <div class="uddeshy-icon teal"><i class="fas fa-users"></i></div>
            <div class="uddeshy-card-title">સમુદાય સહયોગ</div>
            <p class="uddeshy-card-desc">વાલીઓ, વિદ્યાર્થીઓ અને શિક્ષકો — ત્રણેને જોડતું YOC ઇકોસિસ્ટમ. એક પરિવાર.</p>
            <span class="uddeshy-badge-light">સમુદાય</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ══════════════════════════════
       CTA + Contact — DARK THEME
  ══════════════════════════════ -->
  <section class="cta-section" id="cta">
    <div class="cta-deco"></div>
    <div class="container" style="position:relative; z-index:2;">

      <div class="row g-5 align-items-start">

        <!-- LEFT: CTA text -->
        <div class="col-lg-7">
          <div class="sec-label mb-5"><i class="fas fa-graduation-cap"></i> YOC સાથે જોડાઓ</div>
          <div class="cta-title"><span>ઘર બેઠા ઉચ્ચ સ્તરનું</span> <br>શહેરી ગુણવત્તા શિક્ષણ</div>
          <p class="cta-sub">YOC ની લાઈવ ક્લાસેસ, સ્માર્ટ પ્લેટફોર્મ અને નિષ્ણાત શિક્ષકો — હવે તમારા ઘર સુધી. ગ્રામિણ ગુજરાત માટે ડિજિટલ શિક્ષણની નવી ક્રાંતિ.</p>

          <ul class="checklist">

            <li>
              <div class="check-dot"><i class="fas fa-check"></i></div>
              મોબાઇલ એપ — વાલીઓ માટે પ્રોગ્રેસ ટ્રેકિંગ
            </li>

            <li>
              <div class="check-dot"><i class="fas fa-check"></i></div>
              માસિક મૉક ટેસ્ટ અને વિગતવાર વિશ્લેષણ
            </li>

            <li>
              <div class="check-dot"><i class="fas fa-check"></i></div>
              શેઠ ગ્રુપ — ૩૪+ વર્ષથી વિશ્વસનીય પ્લેટફોર્મ
            </li>

            <li>
              <div class="check-dot"><i class="fas fa-check"></i></div>
              ગ્રામિણ દીકરીઓ માટે સંપૂર્ણ સુરક્ષિત પ્લેટફોર્મ
            </li>

          </ul>


        </div>

        <!-- RIGHT: Contact -->
        <div class="col-lg-5">
          <div class="contact-strip">
            <div class="contact-strip-head">સંપર્ક કરો</div>

            <div class="contact-row">
              <div class="c-ico"><i class="fab fa-whatsapp"></i></div>
              <div>
                <div class="c-main">+91 6356 555 404</div>
                <div class="c-sub">WhatsApp / કૉલ — સોમ–શનિ, સવારે ૯ થી સાંજે ૭</div>
              </div>
            </div>

            <div class="contact-row">
              <div class="c-ico"><i class="far fa-envelope"></i></div>
              <div>
                <div class="c-main">yrownclass@gmail.com</div>
                <div class="c-sub">ગમે ત્યારે ઇમેલ કરો</div>
              </div>
            </div>

            <div class="contact-row">
              <div class="c-ico"><i class="fas fa-map-marker-alt"></i></div>
              <div>
                <br>
                <div class="c-main">C/o, "શેઠ ગ્રુપ", બી-૩૦૨,
                  સપથ હેક્ષા, કારગિલ પેટ્રોલ પંપ સામે,
                  એસ. જી. રોડ, અમદાવાદ.</div>
                <div class="c-sub">શેઠ ગ્રુપ મુખ્ય કાર્યાલય — મુલાકાત લો</div>
              </div>
            </div>

            <!-- <div class="contact-row">
              <div class="c-ico"><i class="fab fa-instagram"></i></div>
              <div>
                <div class="c-main">@yourownclass</div>
                <div class="c-sub">Instagram પર ફોલો કરો</div>
              </div>
            </div> -->

            <a href="contact" class="contact-cta-btn">
              <i class="fas fa-paper-plane"></i> &nbsp; પૂછપરછ મોકલો
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <script>
    const io = new IntersectionObserver((entries) => {
      entries.forEach((e) => {
        if (e.isIntersecting) {
          setTimeout(() => {
            e.target.style.opacity = '1';
            e.target.style.transform = 'translateY(0)';
          }, (e.target.dataset.d || 0));
          io.unobserve(e.target);
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -30px 0px'
    });

    document.querySelectorAll('.feat-item, .uddeshy-card, .chip, .csb-item, .district-card').forEach((el, i) => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(24px)';
      el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
      el.dataset.d = (i % 4) * 80;
      io.observe(el);
    });
  </script>

  <style>
    :root {
      --orange: #FF5C2A;
      --navy: #1a3558;
      --navy-dark: #0f2038;
      --orange-light: #fff2ee;
      --white: #ffffff;
      --smoke: #f5f7fa;
      --text: #2d3748;
      --muted: #718096;
    }

    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--smoke);
      /* padding: 40px 15px; */
    }

    /* Header */
    .section-heading {
      text-align: center;
      margin-bottom: 55px;
    }

    .section-heading .eyebrow {
      font-size: 11px;
      letter-spacing: 4px;
      color: var(--orange);
      background: var(--orange-light);
      padding: 6px 18px;
      border-radius: 30px;
      display: inline-block;
      margin-bottom: 16px;
    }

    .section-heading h2 {
      font-family: 'Playfair Display', serif;
      font-size: 36px;
      color: var(--navy);
    }

    .section-heading em {
      color: var(--orange);
    }

    /* Card */
    .member-card {
      background: var(--white);
      border-radius: 18px;
      overflow: hidden;
      display: grid;
      grid-template-columns: 220px 1fr;
      box-shadow: 0 2px 20px rgba(26, 53, 88, 0.08);
      transition: 0.3s;
      height: 100%;
    }

    .member-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 40px rgba(255, 92, 42, 0.15);
    }

    /* Photo */
    .card-photo {
      background: linear-gradient(160deg, var(--navy), var(--navy-dark));
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 25px;
      color: white;
    }

    .avatar-wrap img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      border: 3px solid var(--orange);
      object-fit: cover;
    }

    .member-name {
      margin-top: 10px;
      font-weight: bold;
    }

    .member-role {
      font-size: 12px;
      color: var(--orange);
    }

    /* Info */
    .card-info {
      padding: 20px;
      display: grid;
      /* grid-template-columns: 1fr 1fr; */
      gap: 15px;
    }

    .qual-list li {
      background: var(--orange-light);
      margin-bottom: 5px;
      padding: 5px 10px;
      border-left: 3px solid var(--orange);
      list-style: none;
    }

    .vision-text {
      background: #f0f4fa;
      padding: 10px;
      border-left: 3px solid var(--navy);
      font-style: italic;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .member-card {
        grid-template-columns: 1fr;
      }

      .card-info {
        grid-template-columns: 1fr;
      }
    }
  </style>

  <div class="container" id="Leadership">

    <br>
    <br>
    <br>
    <br>


    <div class="section-heading">
      <h2 style="font-size: 45px;font-weight:700;color:#1a3558;margin:0 0 14px;line-height:1.25;">
        <span style="color:#e8834a;position:relative;display:inline-block;">
          અમારી નિષ્ણાત
          <!-- <span style="position:absolute;bottom:-4px;left:0;right:0;height:3px;background:#e8834a;border-radius:2px;"></span> -->
        </span>
        લીડરશીપ ટીમ
        <!-- <span style="color:#e8834a;position:relative;display:inline-block;">
                                વિસ્તરણ
                                <span style="position:absolute;bottom:-4px;left:0;right:0;height:3px;background:#e8834a;border-radius:2px;"></span>
                            </span> -->
      </h2>
    </div>

    <div class="row g-4">

      <!-- Card 1 -->
      <div class="col-12 col-lg-6">
        <div class="member-card">
          <div class="card-photo">
            <img src="img/Apurva-Sheth.jpg">
            <div class="member-name">શ્રી અપૂર્વ શેઠ</div>
            <div class="member-role">ફાઉન્ડર અને મેનેજિંગ ડિરેક્ટર</div>
          </div>
          <div class="card-info">
            <div>
              <h6>Qualifications</h6>
              <ul class="qual-list">
                <li>B.E Civil</li>
                <li>Post Graduation in Structure Engineering - BITS Pilani</li>
                <li>PGD in Mktg & Comp App</li>
                <li>LL.B</li>
              </ul>
            </div>
            <div>
              <h6>Achievement</h6>
              <p class="vision-text">યુનિવર્સિટી ટોપર</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-lg-6">
        <div class="member-card">
          <div class="card-photo">
            <img src="img/Gitanj-Sheth.jpg">
            <div class="member-name">શ્રી ગિતાંજ શેઠ</div>
            <div class="member-role">ડિરેક્ટર</div>
          </div>
          <div class="card-info">
            <div>
              <h6>Qualifications</h6>
              <ul class="qual-list">
                <li>MBA in HR - XLRI Jamshedpur</li>
                <li>B.Tech Mechanical - Nirma University</li>
              </ul>
            </div>
            <div>
              <h6>Achievement</h6>
              <p class="vision-text">CAT ના નેશનલ ટોપર</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-lg-6">
        <div class="member-card">
          <div class="card-photo">
            <img src="img/Viraj-Sheth.jpg">
            <div class="member-name">શ્રી વિરાજ શેઠ</div>
            <div class="member-role">ડિરેક્ટર</div>
          </div>
          <div class="card-info">
            <div>
              <h6>Qualifications</h6>
              <ul class="qual-list">
                <li>MBA in Marketing & Finance - XLRI Jamshedpur</li>
                <li>B.Tech Computer Science - DA-IICT</li>
              </ul>
            </div>
            <div>
              <h6>Achievement</h6>
              <p class="vision-text">CAT ના નેશનલ ટોપર</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-12 col-lg-6">
        <div class="member-card">
          <div class="card-photo">
            <img src="img/Milan_Patel.jpeg">
            <div class="member-name">શ્રી મિલન પટેલ</div>
            <div class="member-role">ડિરેક્ટર - ગ્રાઉન્ડ ઓપરેશન્સ</div>
          </div>
          <div class="card-info">
            <div>
              <h6>Qualifications</h6>
              <ul class="qual-list">
                <li>Graduate in Arts</li>
                <li>વધારો વ્યવસાયિક અનુભવ</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-12 col-lg-6">
        <div class="member-card">
          <div class="card-photo">
            <img src="img/Ashwin_Patel.jpeg">
            <div class="member-name">શ્રી અશ્વિન પટેલ</div>
            <div class="member-role">ડિરેક્ટર - ગ્રાઉન્ડ ઓપરેશન્સ</div>
          </div>
          <div class="card-info">
            <div>
              <h6>Qualifications</h6>
              <ul class="qual-list">
                <li>B.Tech Dairy & Food Technology</li>
                <li>શ્રેષ્ઠ વ્યવસાયિક અનુભવ</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

  <br>
  <br>
  <br>

  <?php include 'footer.php'; ?>

  <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/js/hover-effect.umd.js"></script>
  <script src="assets/js/main.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>