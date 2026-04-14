<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Online Education Expansion Plan</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
  :root {
    --orange: #FF7323;
    --navy: #10263F;
    --light-bg: #FDF9F6;
    --cream: #FFF5EE;
    --orange-light: #FF924A;
    --orange-pale: #FFE8D9;
    --navy-light: #1A3A5C;
    --text-dark: #0D1F31;
    --text-mid: #3D5670;
    --text-light: #7A96B0;
    --white: #FFFFFF;
    --shadow-sm: 0 2px 12px rgba(16,38,63,0.08);
    --shadow-md: 0 8px 32px rgba(16,38,63,0.12);
    --shadow-lg: 0 20px 60px rgba(16,38,63,0.15);
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  html { scroll-behavior: smooth; }

  body {
    background: var(--light-bg);
    font-family: 'DM Sans', sans-serif;
    color: var(--text-dark);
    overflow-x: hidden;
  }

  /* ===== CANVAS BACKGROUND ===== */
  #bg-canvas {
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    z-index: 0;
    pointer-events: none;
  }

  /* ===== NAVBAR ===== */
  .navbar {
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 1000;
    padding: 0 2rem;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: rgba(253,249,246,0.92);
    backdrop-filter: blur(18px);
    border-bottom: 1px solid rgba(255,115,35,0.15);
    box-shadow: var(--shadow-sm);
  }

  .navbar-brand {
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
  }

  .brand-icon {
    width: 38px; height: 38px;
    background: linear-gradient(135deg, var(--orange), var(--orange-light));
    border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    color: white;
    font-size: 1rem;
    box-shadow: 0 4px 12px rgba(255,115,35,0.4);
  }

  .brand-text {
    font-family: 'Playfair Display', serif;
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--navy);
    line-height: 1.1;
  }

  .brand-text span { color: var(--orange); }

  .nav-links {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    list-style: none;
  }

  .nav-links a {
    font-size: 0.82rem;
    font-weight: 500;
    color: var(--text-mid);
    text-decoration: none;
    padding: 6px 12px;
    border-radius: 20px;
    transition: all 0.3s;
    letter-spacing: 0.02em;
  }

  .nav-links a:hover {
    background: var(--orange-pale);
    color: var(--orange);
  }

  .nav-cta {
    background: var(--orange) !important;
    color: white !important;
    font-weight: 600 !important;
    padding: 8px 20px !important;
    box-shadow: 0 4px 14px rgba(255,115,35,0.35);
    border-radius: 20px !important;
  }

  .nav-cta:hover {
    background: var(--navy) !important;
    box-shadow: 0 4px 14px rgba(16,38,63,0.3) !important;
  }

  /* ===== HERO ===== */
  .hero {
    position: relative;
    z-index: 1;
    min-height: 100vh;
    display: flex;
    align-items: center;
    padding: 100px 0 60px;
    overflow: hidden;
  }

  .hero-blob {
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    opacity: 0.12;
    pointer-events: none;
  }

  .hero-blob-1 {
    width: 700px; height: 700px;
    background: var(--orange);
    top: -200px; right: -200px;
  }

  .hero-blob-2 {
    width: 500px; height: 500px;
    background: var(--navy);
    bottom: -100px; left: -150px;
  }

  .hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--orange-pale);
    border: 1px solid rgba(255,115,35,0.3);
    color: var(--orange);
    font-size: 0.78rem;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    padding: 7px 16px;
    border-radius: 50px;
    margin-bottom: 1.5rem;
    opacity: 0;
  }

  .hero-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2.8rem, 5vw, 4.5rem);
    font-weight: 900;
    line-height: 1.05;
    color: var(--navy);
    margin-bottom: 1.5rem;
    opacity: 0;
  }

  .hero-title .accent { color: var(--orange); }

  .hero-title .underline-accent {
    position: relative;
    display: inline-block;
  }

  .hero-title .underline-accent::after {
    content: '';
    position: absolute;
    bottom: -4px; left: 0;
    width: 100%; height: 4px;
    background: linear-gradient(90deg, var(--orange), transparent);
    border-radius: 2px;
  }

  .hero-desc {
    font-size: 1.1rem;
    color: var(--text-mid);
    line-height: 1.75;
    max-width: 520px;
    margin-bottom: 2.5rem;
    opacity: 0;
  }

  .hero-btns {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    opacity: 0;
  }

  .btn-primary-custom {
    background: linear-gradient(135deg, var(--orange), #FF5A00);
    color: white;
    border: none;
    padding: 14px 32px;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 600;
    letter-spacing: 0.02em;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    box-shadow: 0 8px 28px rgba(255,115,35,0.4);
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
  }

  .btn-primary-custom:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 36px rgba(255,115,35,0.5);
    color: white;
  }

  .btn-outline-custom {
    background: transparent;
    color: var(--navy);
    border: 2px solid rgba(16,38,63,0.2);
    padding: 12px 30px;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.35s;
    cursor: pointer;
  }

  .btn-outline-custom:hover {
    border-color: var(--orange);
    color: var(--orange);
    transform: translateY(-2px);
  }

  /* Hero stats */
  .hero-stats {
    display: flex;
    gap: 2.5rem;
    margin-top: 3rem;
    opacity: 0;
  }

  .stat-item { text-align: left; }
  .stat-number {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 900;
    color: var(--navy);
    line-height: 1;
  }

  .stat-number span { color: var(--orange); }
  .stat-label {
    font-size: 0.78rem;
    color: var(--text-light);
    font-weight: 500;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    margin-top: 4px;
  }

  /* Hero 3D Visual */
  .hero-visual {
    position: relative;
    opacity: 0;
  }

  #hero-canvas {
    width: 100%;
    max-width: 560px;
    height: 500px;
    margin: auto;
    display: block;
  }

  /* ===== SECTION STYLES ===== */
  section { position: relative; z-index: 1; }

  .section-tag {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--orange);
    margin-bottom: 0.75rem;
  }

  .section-tag::before {
    content: '';
    display: inline-block;
    width: 20px; height: 2px;
    background: var(--orange);
    border-radius: 1px;
  }

  .section-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 900;
    color: var(--navy);
    line-height: 1.15;
    margin-bottom: 1rem;
  }

  .section-desc {
    font-size: 1rem;
    color: var(--text-mid);
    line-height: 1.75;
    max-width: 600px;
  }

  /* ===== COURSES SECTION ===== */
  #courses {
    padding: 100px 0;
    background: var(--white);
  }

  .course-card {
    background: var(--white);
    border: 1px solid rgba(16,38,63,0.08);
    border-radius: 20px;
    padding: 2rem;
    height: 100%;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    opacity: 0;
    transform: translateY(30px);
  }

  .course-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 4px;
    background: linear-gradient(90deg, var(--orange), var(--orange-light));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s ease;
  }

  .course-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
    border-color: transparent;
  }

  .course-card:hover::before { transform: scaleX(1); }

  .card-icon-wrap {
    width: 56px; height: 56px;
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.4rem;
    margin-bottom: 1.25rem;
    transition: transform 0.3s;
  }

  .course-card:hover .card-icon-wrap { transform: scale(1.1) rotate(-5deg); }

  .card-number {
    font-family: 'Space Mono', monospace;
    font-size: 0.7rem;
    color: var(--text-light);
    font-weight: 700;
    letter-spacing: 0.1em;
    margin-bottom: 0.5rem;
  }

  .card-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 1rem;
    line-height: 1.3;
  }

  .card-items {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 6px;
  }

  .card-items li {
    font-size: 0.85rem;
    color: var(--text-mid);
    display: flex;
    align-items: flex-start;
    gap: 8px;
    line-height: 1.4;
  }

  .card-items li::before {
    content: '▸';
    color: var(--orange);
    font-size: 0.7rem;
    margin-top: 2px;
    flex-shrink: 0;
  }

  .card-footer-count {
    position: absolute;
    bottom: 1.5rem; right: 1.5rem;
    font-family: 'Space Mono', monospace;
    font-size: 2.5rem;
    font-weight: 700;
    color: rgba(16,38,63,0.05);
    line-height: 1;
    transition: color 0.3s;
  }

  .course-card:hover .card-footer-count { color: rgba(255,115,35,0.08); }

  /* Color variants */
  .icon-orange { background: rgba(255,115,35,0.12); color: var(--orange); }
  .icon-navy { background: rgba(16,38,63,0.1); color: var(--navy); }
  .icon-teal { background: rgba(16,128,150,0.1); color: #108096; }
  .icon-green { background: rgba(34,150,90,0.1); color: #22965A; }
  .icon-purple { background: rgba(120,80,200,0.1); color: #7850C8; }
  .icon-rose { background: rgba(220,60,90,0.1); color: #DC3C5A; }
  .icon-amber { background: rgba(200,140,30,0.1); color: #C88C1E; }
  .icon-sky { background: rgba(30,140,220,0.1); color: #1E8CDC; }
  .icon-indigo { background: rgba(60,80,200,0.1); color: #3C50C8; }
  .icon-pink { background: rgba(210,60,160,0.1); color: #D23CA0; }

  /* ===== HIGHLIGHTS STRIP ===== */
  #highlights {
    padding: 80px 0;
    background: linear-gradient(135deg, var(--navy) 0%, var(--navy-light) 100%);
    position: relative;
    overflow: hidden;
  }

  #highlights::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  }

  .highlight-item {
    text-align: center;
    padding: 1.5rem;
    opacity: 0;
  }

  .highlight-number {
    font-family: 'Playfair Display', serif;
    font-size: 3rem;
    font-weight: 900;
    color: var(--orange);
    line-height: 1;
    margin-bottom: 0.5rem;
  }

  .highlight-label {
    font-size: 0.88rem;
    color: rgba(255,255,255,0.7);
    font-weight: 500;
    letter-spacing: 0.05em;
  }

  .highlight-divider {
    width: 1px;
    background: rgba(255,255,255,0.1);
    align-self: stretch;
  }

  /* ===== TIMELINE SECTION ===== */
  #roadmap {
    padding: 100px 0;
    background: var(--cream);
  }

  .timeline {
    position: relative;
    padding: 2rem 0;
  }

  .timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0; bottom: 0;
    width: 2px;
    background: linear-gradient(180deg, var(--orange) 0%, var(--navy) 100%);
    transform: translateX(-50%);
  }

  .timeline-item {
    display: flex;
    justify-content: flex-end;
    padding-right: calc(50% + 2.5rem);
    margin-bottom: 3rem;
    opacity: 0;
    transform: translateX(-30px);
  }

  .timeline-item:nth-child(even) {
    justify-content: flex-start;
    padding-right: 0;
    padding-left: calc(50% + 2.5rem);
    transform: translateX(30px);
  }

  .timeline-dot {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 18px; height: 18px;
    background: var(--orange);
    border: 3px solid var(--white);
    border-radius: 50%;
    box-shadow: 0 0 0 4px rgba(255,115,35,0.2);
    z-index: 1;
  }

  .timeline-card {
    background: var(--white);
    border-radius: 16px;
    padding: 1.5rem 2rem;
    max-width: 360px;
    box-shadow: var(--shadow-sm);
    border: 1px solid rgba(16,38,63,0.06);
    transition: all 0.3s;
  }

  .timeline-card:hover {
    box-shadow: var(--shadow-md);
    transform: scale(1.02);
  }

  .timeline-phase {
    font-family: 'Space Mono', monospace;
    font-size: 0.7rem;
    color: var(--orange);
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    margin-bottom: 0.4rem;
  }

  .timeline-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 0.5rem;
  }

  .timeline-desc {
    font-size: 0.85rem;
    color: var(--text-mid);
    line-height: 1.6;
  }

  /* ===== CTA SECTION ===== */
  #cta {
    padding: 100px 0;
    background: var(--white);
  }

  .cta-box {
    background: linear-gradient(135deg, var(--navy) 0%, #0A1E35 100%);
    border-radius: 28px;
    padding: 5rem 4rem;
    position: relative;
    overflow: hidden;
    text-align: center;
  }

  .cta-box::before {
    content: '';
    position: absolute;
    top: -100px; right: -100px;
    width: 400px; height: 400px;
    background: var(--orange);
    border-radius: 50%;
    opacity: 0.06;
  }

  .cta-box::after {
    content: '';
    position: absolute;
    bottom: -80px; left: -80px;
    width: 300px; height: 300px;
    background: var(--orange);
    border-radius: 50%;
    opacity: 0.04;
  }

  .cta-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 3.5vw, 2.8rem);
    font-weight: 900;
    color: var(--white);
    margin-bottom: 1rem;
    position: relative; z-index: 1;
  }

  .cta-desc {
    font-size: 1rem;
    color: rgba(255,255,255,0.6);
    max-width: 480px;
    margin: 0 auto 2.5rem;
    line-height: 1.75;
    position: relative; z-index: 1;
  }

  /* ===== FOOTER ===== */
  footer {
    background: var(--navy);
    padding: 3rem 0;
    border-top: 1px solid rgba(255,255,255,0.08);
  }

  .footer-brand {
    font-family: 'Playfair Display', serif;
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--white);
    margin-bottom: 0.5rem;
  }

  .footer-brand span { color: var(--orange); }

  .footer-tagline {
    font-size: 0.85rem;
    color: rgba(255,255,255,0.4);
    line-height: 1.6;
  }

  .footer-copy {
    font-size: 0.8rem;
    color: rgba(255,255,255,0.3);
    text-align: right;
  }

  /* ===== SCROLL TO TOP ===== */
  .scroll-top {
    position: fixed;
    bottom: 2rem; right: 2rem;
    width: 48px; height: 48px;
    background: var(--orange);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    color: white;
    font-size: 1rem;
    cursor: pointer;
    box-shadow: 0 4px 20px rgba(255,115,35,0.4);
    z-index: 999;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.3s;
    border: none;
    text-decoration: none;
  }

  .scroll-top.visible { opacity: 1; transform: translateY(0); }
  .scroll-top:hover { transform: translateY(-4px); background: var(--navy); }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 991px) {
    .nav-links { display: none; }

    .timeline::before { left: 28px; }
    .timeline-item,
    .timeline-item:nth-child(even) {
      justify-content: flex-start;
      padding-right: 0;
      padding-left: 70px;
      transform: translateX(-20px);
    }
    .timeline-dot { left: 28px; }

    .cta-box { padding: 3rem 2rem; }
    .hero-stats { gap: 1.5rem; }
    #hero-canvas { height: 340px; }
  }

  @media (max-width: 767px) {
    .hero { padding: 90px 0 50px; }
    .highlight-divider { display: none; }
    .footer-copy { text-align: left; margin-top: 1rem; }
    .hero-btns { flex-direction: column; }
    .btn-primary-custom, .btn-outline-custom { justify-content: center; }
  }

  /* Loading state */
  .card-visible { opacity: 1 !important; transform: translateY(0) !important; }
  .hero-animate { opacity: 1 !important; }
</style>
</head>
<body>

<!-- Background Canvas -->
<canvas id="bg-canvas"></canvas>

<!-- Navbar -->
<nav class="navbar">
  <a class="navbar-brand" href="#">
    <div class="brand-icon"><i class="fas fa-graduation-cap"></i></div>
    <div class="brand-text">Edu<span>Expand</span></div>
  </a>
  <ul class="nav-links">
    <li><a href="#courses">Courses</a></li>
    <li><a href="#highlights">Overview</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#cta" class="nav-cta">Enroll Now</a></li>
  </ul>
</nav>

<!-- Hero -->
<section class="hero" id="home">
  <div class="hero-blob hero-blob-1"></div>
  <div class="hero-blob hero-blob-2"></div>
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <div class="hero-badge" id="hero-badge">
          <i class="fas fa-star" style="font-size:0.65rem;"></i>
          Online Education Expansion Plan
        </div>
        <h1 class="hero-title" id="hero-title">
          Shape the <span class="accent">Future</span> of<br>
          <span class="underline-accent">Online Learning</span>
        </h1>
        <p class="hero-desc" id="hero-desc">
          A comprehensive roadmap to expand digital education — from academic excellence and language mastery to career-oriented skills and personality development.
        </p>
        <div class="hero-btns" id="hero-btns">
          <a href="#courses" class="btn-primary-custom">
            <i class="fas fa-rocket"></i> Explore Courses
          </a>
          <a href="#roadmap" class="btn-outline-custom">
            <i class="fas fa-map"></i> View Roadmap
          </a>
        </div>
        <div class="hero-stats" id="hero-stats">
          <div class="stat-item">
            <div class="stat-number">10<span>+</span></div>
            <div class="stat-label">Categories</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">50<span>+</span></div>
            <div class="stat-label">Courses</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">∞</div>
            <div class="stat-label">Possibilities</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hero-visual" id="hero-visual">
          <canvas id="hero-canvas"></canvas>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Courses Section -->
<section id="courses">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7">
        <div class="section-tag">Our Curriculum</div>
        <h2 class="section-title">10 Powerful<br><span style="color:var(--orange)">Learning Pathways</span></h2>
        <p class="section-desc">From foundational academics to cutting-edge skills — every learner finds their path.</p>
      </div>
    </div>
    <div class="row g-4" id="cards-grid">

      <!-- Card 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="course-card">
          <div class="card-number">01 / 10</div>
          <div class="card-icon-wrap icon-orange"><i class="fas fa-book-open"></i></div>
          <h3 class="card-title">Academic Expansion</h3>
          <ul class="card-items">
            <li>Gujarati Medium (Std 5–10)</li>
            <li>English & Hindi Medium</li>
            <li>Maths, Science, English, Social Science</li>
            <li>Std 11–12 (Science & Commerce)</li>
            <li>JEE / NEET Foundation</li>
            <li>Olympiad Preparation</li>
          </ul>
          <div class="card-footer-count">01</div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="course-card">
          <div class="card-number">02 / 10</div>
          <div class="card-icon-wrap icon-teal"><i class="fas fa-language"></i></div>
          <h3 class="card-title">Language Courses</h3>
          <ul class="card-items">
            <li>Spoken English & Advanced English</li>
            <li>Hindi Speaking</li>
            <li>Sanskrit Basics</li>
            <li>IELTS English</li>
            <li>German (A1 – B1)</li>
            <li>French (A1 – B1)</li>
          </ul>
          <div class="card-footer-count">02</div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="course-card">
          <div class="card-number">03 / 10</div>
          <div class="card-icon-wrap icon-navy"><i class="fas fa-laptop-code"></i></div>
          <h3 class="card-title">Computer & IT Courses</h3>
          <ul class="card-items">
            <li>Basic Computer (MS Office, Typing)</li>
            <li>Advanced Excel</li>
            <li>Tally + GST</li>
            <li>Graphic Designing (Photoshop, Canva)</li>
            <li>Video Editing</li>
            <li>Coding: Scratch, Python, Web Dev</li>
          </ul>
          <div class="card-footer-count">03</div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-lg-4 col-md-6">
        <div class="course-card">
          <div class="card-number">04 / 10</div>
          <div class="card-icon-wrap icon-green"><i class="fas fa-briefcase"></i></div>
          <h3 class="card-title">Career-Oriented Courses</h3>
          <ul class="card-items">
            <li>Digital Marketing</li>
            <li>Stock Market Basics</li>
            <li>Entrepreneurship</li>
            <li>Freelancing (Upwork, Fiverr)</li>
          </ul>
          <div class="card-footer-count">04</div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-lg-4 col-md-6">
        <div class="course-card">
          <div class="card-number">05 / 10</div>
          <div class="card-icon-wrap icon-rose"><i class="fas fa-palette"></i></div>
          <h3 class="card-title">Hobby & Interest Classes</h3>
          <ul class="card-items">
            <li>Drawing & Painting</li>
            <li>Handwriting Improvement</li>
            <li>Abacus & Vedic Maths</li>
            <li>Chess</li>
            <li>Music (Vocal, Instruments)</li>
            <li>Dance</li>
          </ul>
          <div class="card-footer-count">05</div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-lg-4 col-md-6">
        <div class="course-card">
          <div class="card-number">06 / 10</div>
          <div class="card-icon-wrap icon-purple"><i class="fas fa-user-tie"></i></div>
          <h3 class="card-title">Personality Development</h3>
          <ul class="card-items">
            <li>Public Speaking</li>
            <li>Confidence Building</li>
            <li>Communication Skills</li>
            <li>Interview Skills</li>
            <li>Leadership Training</li>
          </ul>
          <div class="card-footer-count">06</div>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="col-lg-4 col-md-6">
        <div class="course-card">
          <div class="card-number">07 / 10</div>
          <div class="card-icon-wrap icon-amber"><i class="fas fa-chalkboard-teacher"></i></div>
          <h3 class="card-title">Teacher Training Programs</h3>
          <ul class="card-items">
            <li>Online Teaching Certification</li>
            <li>Gujarati Teacher Training</li>
            <li>Lesson Planning</li>
            <li>EdTech Tools</li>
          </ul>
          <div class="card-footer-count">07</div>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="col-lg-4 col-md-6">
        <div class="course-card">
          <div class="card-number">08 / 10</div>
          <div class="card-icon-wrap icon-sky"><i class="fas fa-users"></i></div>
          <h3 class="card-title">Parent-Oriented Courses</h3>
          <ul class="card-items">
            <li>Parenting Workshops</li>
            <li>Supporting Child Education</li>
            <li>Screen Time Management</li>
            <li>Career Guidance</li>
          </ul>
          <div class="card-footer-count">08</div>
        </div>
      </div>

      <!-- Card 9 -->
      <div class="col-lg-4 col-md-6">
        <div class="course-card">
          <div class="card-number">09 / 10</div>
          <div class="card-icon-wrap icon-indigo"><i class="fas fa-pencil-alt"></i></div>
          <h3 class="card-title">Test Series & Doubt Solving</h3>
          <ul class="card-items">
            <li>Board Exam Test Series</li>
            <li>Weekly MCQs</li>
            <li>Daily Doubt Sessions</li>
            <li>Crash Courses</li>
          </ul>
          <div class="card-footer-count">09</div>
        </div>
      </div>

      <!-- Card 10 -->
      <div class="col-lg-4 col-md-6">
        <div class="course-card">
          <div class="card-number">10 / 10</div>
          <div class="card-icon-wrap icon-pink"><i class="fas fa-trophy"></i></div>
          <h3 class="card-title">Competitive Exam Prep</h3>
          <ul class="card-items">
            <li>GPSC Foundation</li>
            <li>Talati / Clerk</li>
            <li>Police Exams</li>
            <li>Banking Basics</li>
          </ul>
          <div class="card-footer-count">10</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Highlights Strip -->
<section id="highlights">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-6 col-md-3">
        <div class="highlight-item">
          <div class="highlight-number" data-target="10">0</div>
          <div class="highlight-label">Course Categories</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="highlight-item">
          <div class="highlight-number" data-target="50">0</div>
          <div class="highlight-label">Unique Subjects</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="highlight-item">
          <div class="highlight-number" data-target="6">0</div>
          <div class="highlight-label">Languages Offered</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="highlight-item">
          <div class="highlight-number" data-target="100">0</div>
          <div class="highlight-label">% Online Access</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Roadmap Section -->
<section id="roadmap">
  <div class="container">
    <div class="row mb-5 justify-content-center text-center">
      <div class="col-lg-7">
        <div class="section-tag" style="justify-content:center;">Implementation Roadmap</div>
        <h2 class="section-title">Growth <span style="color:var(--orange)">Phases</span></h2>
        <p class="section-desc mx-auto">Our structured expansion journey from launch to full scale.</p>
      </div>
    </div>
    <div class="timeline position-relative" id="timeline">

      <div class="timeline-item position-relative" style="transition-delay:0s">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-phase">Phase 1 · Foundation</div>
          <div class="timeline-title">Academic & Language Core</div>
          <div class="timeline-desc">Launch Gujarati, English & Hindi medium classes for Std 5–12. Introduce Spoken English and foundational language courses.</div>
        </div>
      </div>

      <div class="timeline-item position-relative" style="transition-delay:0.1s">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-phase">Phase 2 · Digital Skills</div>
          <div class="timeline-title">Computer & IT Expansion</div>
          <div class="timeline-desc">Roll out coding, graphic design, video editing, Tally+GST, and website development courses for all age groups.</div>
        </div>
      </div>

      <div class="timeline-item position-relative" style="transition-delay:0.2s">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-phase">Phase 3 · Career Ready</div>
          <div class="timeline-title">Career & Competitive Prep</div>
          <div class="timeline-desc">Add digital marketing, entrepreneurship, freelancing, and competitive exam preparation (GPSC, Police, Banking).</div>
        </div>
      </div>

      <div class="timeline-item position-relative" style="transition-delay:0.3s">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-phase">Phase 4 · Community</div>
          <div class="timeline-title">Holistic Ecosystem</div>
          <div class="timeline-desc">Launch hobby classes, personality development, parent workshops, teacher training, and live doubt-solving sessions.</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section id="cta">
  <div class="container">
    <div class="cta-box">
      <h2 class="cta-title">Ready to Transform<br>Education?</h2>
      <p class="cta-desc">Join our growing platform and bring world-class online learning to every student — from Bhavnagar to beyond.</p>
      <div style="position:relative;z-index:1;">
        <a href="#courses" class="btn-primary-custom" style="display:inline-flex;">
          <i class="fas fa-arrow-right"></i> Get Started Today
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="footer-brand">Edu<span>Expand</span></div>
        <div class="footer-tagline">Expanding horizons through online education.<br>Building tomorrow's learners today.</div>
      </div>
      <div class="col-md-6">
        <div class="footer-copy">
          © 2025 EduExpand. Online Education Expansion Plan.<br>
          Bhavnagar, Gujarat, India.
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Scroll to Top -->
<a href="#home" class="scroll-top" id="scrollTop">
  <i class="fas fa-chevron-up"></i>
</a>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<script>
gsap.registerPlugin(ScrollTrigger);

// ===== BACKGROUND PARTICLES (Canvas 2D) =====
(function() {
  const canvas = document.getElementById('bg-canvas');
  const ctx = canvas.getContext('2d');
  let W, H, particles = [];

  function resize() {
    W = canvas.width = window.innerWidth;
    H = canvas.height = window.innerHeight;
  }

  class Particle {
    constructor() { this.reset(); }
    reset() {
      this.x = Math.random() * W;
      this.y = Math.random() * H;
      this.r = Math.random() * 2 + 0.5;
      this.alpha = Math.random() * 0.25 + 0.05;
      this.vx = (Math.random() - 0.5) * 0.3;
      this.vy = (Math.random() - 0.5) * 0.3;
      this.color = Math.random() > 0.5 ? '#FF7323' : '#10263F';
    }
    update() {
      this.x += this.vx; this.y += this.vy;
      if (this.x < 0 || this.x > W || this.y < 0 || this.y > H) this.reset();
    }
    draw() {
      ctx.save();
      ctx.globalAlpha = this.alpha;
      ctx.fillStyle = this.color;
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
      ctx.fill();
      ctx.restore();
    }
  }

  resize();
  for (let i = 0; i < 80; i++) particles.push(new Particle());
  window.addEventListener('resize', resize);

  function loop() {
    ctx.clearRect(0, 0, W, H);
    particles.forEach(p => { p.update(); p.draw(); });
    requestAnimationFrame(loop);
  }
  loop();
})();

// ===== THREE.JS HERO VISUAL =====
(function() {
  const canvas = document.getElementById('hero-canvas');
  const renderer = new THREE.WebGLRenderer({ canvas, alpha: true, antialias: true });
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.setSize(canvas.clientWidth, canvas.clientHeight);
  renderer.setClearColor(0x000000, 0);

  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(50, canvas.clientWidth / canvas.clientHeight, 0.1, 100);
  camera.position.z = 5;

  // Ambient light
  scene.add(new THREE.AmbientLight(0xffffff, 0.4));
  const dirLight = new THREE.DirectionalLight(0xFF7323, 1.2);
  dirLight.position.set(5, 5, 5);
  scene.add(dirLight);
  const dirLight2 = new THREE.DirectionalLight(0x10263F, 0.8);
  dirLight2.position.set(-5, -5, -5);
  scene.add(dirLight2);

  // Main sphere
  const sphereGeo = new THREE.SphereGeometry(1.2, 64, 64);
  const sphereMat = new THREE.MeshPhongMaterial({
    color: 0x10263F,
    emissive: 0x0A1A2E,
    shininess: 80,
    transparent: true,
    opacity: 0.9,
    wireframe: false
  });
  const sphere = new THREE.Mesh(sphereGeo, sphereMat);
  scene.add(sphere);

  // Wireframe overlay
  const wireMat = new THREE.MeshBasicMaterial({ color: 0xFF7323, wireframe: true, transparent: true, opacity: 0.08 });
  const wire = new THREE.Mesh(new THREE.SphereGeometry(1.22, 20, 20), wireMat);
  scene.add(wire);

  // Orbiting rings
  function makeRing(radius, tube, color, tiltX, tiltZ) {
    const geo = new THREE.TorusGeometry(radius, tube, 8, 80);
    const mat = new THREE.MeshPhongMaterial({ color, transparent: true, opacity: 0.6, shininess: 100 });
    const mesh = new THREE.Mesh(geo, mat);
    mesh.rotation.x = tiltX;
    mesh.rotation.z = tiltZ;
    return mesh;
  }

  const ring1 = makeRing(1.8, 0.025, 0xFF7323, 1.2, 0.3);
  const ring2 = makeRing(2.1, 0.018, 0x3D8AB0, 0.5, 1.1);
  const ring3 = makeRing(2.45, 0.012, 0xFF924A, 0.2, 0.7);
  scene.add(ring1, ring2, ring3);

  // Floating particles
  const pCount = 120;
  const pGeo = new THREE.BufferGeometry();
  const pPos = new Float32Array(pCount * 3);
  for (let i = 0; i < pCount; i++) {
    const phi = Math.random() * Math.PI * 2;
    const theta = Math.random() * Math.PI;
    const r = 2.8 + Math.random() * 1.5;
    pPos[i * 3] = r * Math.sin(theta) * Math.cos(phi);
    pPos[i * 3 + 1] = r * Math.sin(theta) * Math.sin(phi);
    pPos[i * 3 + 2] = r * Math.cos(theta);
  }
  pGeo.setAttribute('position', new THREE.BufferAttribute(pPos, 3));
  const pMat = new THREE.PointsMaterial({ color: 0xFF7323, size: 0.04, transparent: true, opacity: 0.7 });
  scene.add(new THREE.Points(pGeo, pMat));

  // Icons floating around — small boxes
  const iconMeshes = [];
  const iconColors = [0xFF7323, 0x10263F, 0x3D8AB0, 0xFF924A, 0x22965A];
  for (let i = 0; i < 8; i++) {
    const g = new THREE.BoxGeometry(0.12, 0.12, 0.12);
    const m = new THREE.MeshPhongMaterial({ color: iconColors[i % iconColors.length], shininess: 120 });
    const mesh = new THREE.Mesh(g, m);
    const angle = (i / 8) * Math.PI * 2;
    mesh.position.set(Math.cos(angle) * 2.6, (Math.random() - 0.5) * 2, Math.sin(angle) * 2.6);
    mesh.userData.speed = 0.3 + Math.random() * 0.5;
    mesh.userData.angle = angle;
    mesh.userData.radius = 2.4 + Math.random() * 0.5;
    iconMeshes.push(mesh);
    scene.add(mesh);
  }

  let mouseX = 0, mouseY = 0;
  document.addEventListener('mousemove', e => {
    mouseX = (e.clientX / window.innerWidth - 0.5) * 2;
    mouseY = -(e.clientY / window.innerHeight - 0.5) * 2;
  });

  const clock = new THREE.Clock();
  function animate() {
    requestAnimationFrame(animate);
    const t = clock.getElapsedTime();
    sphere.rotation.y = t * 0.2;
    sphere.rotation.x = Math.sin(t * 0.15) * 0.1;
    wire.rotation.y = -t * 0.1;
    ring1.rotation.y = t * 0.4;
    ring2.rotation.x = t * 0.3;
    ring3.rotation.z = t * 0.5;
    camera.position.x += (mouseX * 0.5 - camera.position.x) * 0.05;
    camera.position.y += (mouseY * 0.3 - camera.position.y) * 0.05;
    camera.lookAt(0, 0, 0);
    iconMeshes.forEach(mesh => {
      mesh.userData.angle += 0.005 * mesh.userData.speed;
      mesh.position.x = Math.cos(mesh.userData.angle) * mesh.userData.radius;
      mesh.position.z = Math.sin(mesh.userData.angle) * mesh.userData.radius;
      mesh.rotation.x += 0.02; mesh.rotation.y += 0.02;
    });
    renderer.render(scene, camera);
  }
  animate();

  window.addEventListener('resize', () => {
    const w = canvas.clientWidth, h = canvas.clientHeight;
    renderer.setSize(w, h);
    camera.aspect = w / h;
    camera.updateProjectionMatrix();
  });
})();

// ===== GSAP HERO ANIMATIONS =====
const heroTl = gsap.timeline({ delay: 0.3 });
heroTl
  .to('#hero-badge', { opacity: 1, y: 0, duration: 0.6, ease: 'power2.out' })
  .to('#hero-title', { opacity: 1, y: 0, duration: 0.7, ease: 'power2.out' }, '-=0.3')
  .to('#hero-desc', { opacity: 1, y: 0, duration: 0.6, ease: 'power2.out' }, '-=0.4')
  .to('#hero-btns', { opacity: 1, y: 0, duration: 0.5, ease: 'power2.out' }, '-=0.3')
  .to('#hero-stats', { opacity: 1, y: 0, duration: 0.5, ease: 'power2.out' }, '-=0.3')
  .to('#hero-visual', { opacity: 1, x: 0, duration: 0.8, ease: 'power2.out' }, '-=0.6');

// Initial states
gsap.set(['#hero-badge','#hero-title','#hero-desc','#hero-btns','#hero-stats'], { opacity: 0, y: 30 });
gsap.set('#hero-visual', { opacity: 0, x: 40 });

// ===== COURSE CARDS SCROLL ANIMATION =====
const cards = document.querySelectorAll('.course-card');
cards.forEach((card, i) => {
  gsap.fromTo(card,
    { opacity: 0, y: 40 },
    {
      opacity: 1, y: 0, duration: 0.6, ease: 'power2.out',
      delay: (i % 3) * 0.1,
      scrollTrigger: { trigger: card, start: 'top 85%' }
    }
  );
});

// ===== HIGHLIGHTS COUNTER =====
const counters = document.querySelectorAll('.highlight-number[data-target]');
counters.forEach(el => {
  ScrollTrigger.create({
    trigger: el,
    start: 'top 80%',
    once: true,
    onEnter: () => {
      const target = parseInt(el.dataset.target);
      gsap.to({ val: 0 }, {
        val: target,
        duration: 1.5,
        ease: 'power2.out',
        onUpdate: function() { el.textContent = Math.round(this.targets()[0].val) + (target === 100 ? '%' : '+'); }
      });
      gsap.to(el.closest('.highlight-item'), { opacity: 1, y: 0, duration: 0.6, ease: 'power2.out' });
    }
  });
  gsap.set(el.closest('.highlight-item'), { opacity: 0, y: 20 });
});

// ===== TIMELINE ANIMATION =====
const timelineItems = document.querySelectorAll('.timeline-item');
timelineItems.forEach((item, i) => {
  const isRight = i % 2 === 1;
  gsap.fromTo(item,
    { opacity: 0, x: isRight ? 30 : -30 },
    {
      opacity: 1, x: 0, duration: 0.7, ease: 'power2.out',
      scrollTrigger: { trigger: item, start: 'top 80%' }
    }
  );
});

// ===== SCROLL TO TOP =====
const scrollBtn = document.getElementById('scrollTop');
window.addEventListener('scroll', () => {
  scrollBtn.classList.toggle('visible', window.scrollY > 400);
});

// ===== SECTION TAG ANIMATIONS =====
gsap.utils.toArray('.section-title, .section-tag, .section-desc').forEach(el => {
  gsap.fromTo(el,
    { opacity: 0, y: 25 },
    { opacity: 1, y: 0, duration: 0.7, ease: 'power2.out', scrollTrigger: { trigger: el, start: 'top 85%' } }
  );
});
</script>
</body>
</html>