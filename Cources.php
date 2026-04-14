<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">
<!-- Mirrored from html.themehour.net/escul/demo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2026 06:57:47 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Your Own Classes</title>
    <meta name="author" content="Escul">
    <meta name="description" content="Escul - Online Courses & Education HTML Template">
    <meta name="keywords" content="Escul - Online Courses & Education HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="shortcut icon" href="img/logo_class.png" type="image/x-icon">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&amp;family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;family=Noto+Serif:ital,wght@0,100..900;1,100..900&amp;family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        /* Desktop default image */
        .breadcumb-wrapper {
            background-image: url("img/banner_img-Photoroom.png");
            background-size: cover;
            background-position: center;
        }

        /* Mobile image */
        @media (max-width:768px) {

            .breadcumb-wrapper {
                background-image: url("img/mob_banner.png");
                /* mobile image */
            }

        }
    </style>



</head>

<body class="th-magic-cursor">

    <?php include 'nav.php'; ?>


    <div id="">
        <div id="">



            <div class="breadcumb-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="breadcumb-content">
                                <h1 class="breadcumb-title">અભ્યાસક્રમો</h1>
                                <ul class="breadcumb-menu">
                                    <li><a href="index">Home</a></li>
                                    <li>અભ્યાસક્રમો</li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-lg-5 align-self-end d-lg-block d-none">
                            <div class="breadcumb-thumb"><img src="assets/img/normal/breadcumb-thumb1-1.png" alt="img"></div>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- <div class="breadcumb-wrapper" data-bg-src="img/K1.jpeg" style="position: relative; background-size: cover; background-position: center 40%; min-height: 450px;">

                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.45); z-index: 1;"></div>

                <div class="container" style="position: relative; z-index: 2;">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="breadcumb-content">
                                <h1 class="breadcumb-title" style="color: #ffffff !important; font-family: 'Noto Serif', serif; text-shadow: 2px 2px 8px rgba(0,0,0,0.8);">સંપર્ક કરો</h1>
                                <ul class="breadcumb-menu">
                                    <li><a href="index.html" style="color: #ffffff !important; font-family: 'Noto Serif', serif; text-shadow: 1px 1px 4px rgba(0,0,0,0.8);">હોમ</a></li>
                                    <li style="color: #ffffff !important; font-family: 'Noto Serif', serif; text-shadow: 1px 1px 4px rgba(0,0,0,0.8);">સંપર્ક કરો</li>
                                </ul>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div> -->



            <style>
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                :root {
                    --orange: #FF6B1A;
                    --orange2: #FF9346;
                    --navy: #0D2137;
                    --navy2: #1A3558;
                    --bg: #F4F7FC;
                    --white: #fff;
                    --text: #4A5568;
                    --border: rgba(13, 33, 55, 0.07);
                    --yellow: #FFD600;
                    --light-gray: #F8FAFE;
                    --soft-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.05);
                }

                body {
                    font-family: 'Sora', sans-serif;
                    background: var(--bg);
                    color: var(--text);
                    overflow-x: hidden;
                }

                #bg-canvas {
                    position: fixed;
                    inset: 0;
                    z-index: 0;
                    pointer-events: none;
                }

                .navbar-custom {
                    position: fixed;
                    top: 0;
                    left: 0;
                    right: 0;
                    z-index: 999;
                    padding: 14px 24px;
                    background: rgba(13, 33, 55, 0.85);
                    backdrop-filter: blur(16px);
                    border-bottom: 1px solid rgba(255, 255, 255, 0.07);
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                }

                .nav-brand {
                    font-family: 'Baloo Bhai 2', cursive;
                    font-size: 22px;
                    font-weight: 800;
                    color: #fff;
                    text-decoration: none;
                }

                .nav-brand span {
                    color: var(--orange);
                }

                .btn-nav {
                    background: var(--orange);
                    color: #fff;
                    padding: 8px 20px;
                    border-radius: 50px;
                    font-size: 13px;
                    font-weight: 700;
                    text-decoration: none;
                }

                .hero {
                    position: relative;
                    z-index: 2;
                    /* min-height: 100vh; */
                    background: linear-gradient(135deg, var(--navy) 0%, var(--navy2) 60%, #1f4b78 100%);
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    text-align: center;
                    padding: 80px 20px 100px;
                }

                .hero-badge {
                    background: rgba(255, 107, 26, .15);
                    border: 1px solid rgba(255, 107, 26, .4);
                    color: var(--orange2);
                    padding: 7px 20px;
                    border-radius: 50px;
                    font-size: 12px;
                    font-weight: 700;
                    margin-bottom: 22px;
                    display: inline-flex;
                    gap: 8px;
                }

                .hero-title {
                    font-family: 'Baloo Bhai 2', cursive;
                    font-size: clamp(36px, 7vw, 72px);
                    font-weight: 800;
                    color: #fff;
                    line-height: 1.1;
                    margin-bottom: 16px;
                }

                .hero-title span {
                    color: var(--orange);
                }

                .hero-sub {
                    font-size: 16px;
                    color: rgba(255, 255, 255, .65);
                    max-width: 560px;
                    margin-bottom: 36px;
                }

                .hero-stats {
                    display: flex;
                    gap: 40px;
                    flex-wrap: wrap;
                    justify-content: center;
                    margin-bottom: 48px;
                }

                .hstat-num {
                    font-family: 'Baloo Bhai 2', cursive;
                    font-size: 36px;
                    font-weight: 800;
                    color: var(--orange);
                }

                .hero-scroll {
                    position: absolute;
                    bottom: 30px;
                    left: 50%;
                    transform: translateX(-50%);
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    gap: 6px;
                    color: rgba(255, 255, 255, .4);
                    font-size: 11px;
                }

                .scroll-dot {
                    width: 20px;
                    height: 34px;
                    border: 2px solid rgba(255, 255, 255, .2);
                    border-radius: 12px;
                    display: flex;
                    justify-content: center;
                    padding-top: 5px;
                }

                .scroll-dot::after {
                    content: '';
                    width: 4px;
                    height: 8px;
                    background: var(--orange);
                    border-radius: 2px;
                    animation: scrollDot 1.6s ease-in-out infinite;
                }

                @keyframes scrollDot {

                    0%,
                    100% {
                        transform: translateY(0);
                        opacity: 1
                    }

                    50% {
                        transform: translateY(10px);
                        opacity: .3
                    }
                }

                .section {
                    position: relative;
                    z-index: 2;
                    padding: 70px 0;
                }

                /* .section-light {
                    background: #fff;
                } */

                .section-bg {
                    background: var(--bg);
                }



                .sec-label {
                    display: inline-flex;
                    align-items: center;
                    gap: 8px;
                    background: white;
                    border: 1px solid rgba(255, 107, 26, .2);
                    color: black;
                    padding: 6px 16px;
                    border-radius: 50px;
                    font-size: 11px;
                    font-weight: 700;
                    margin-bottom: 14px;
                }

                .sec-heading {
                    font-family: 'Baloo Bhai 2', cursive;
                    font-size: clamp(28px, 4vw, 44px);
                    font-weight: 800;
                    color: var(--navy);
                    line-height: 1.2;
                    margin-bottom: 10px;
                }

                .sec-heading span {
                    color: var(--orange);
                }

                .sec-sub {
                    font-size: 15px;
                    color: var(--text);
                    max-width: 520px;
                    line-height: 1.8;
                }

                .text-center {
                    text-align: center;
                }

                .mx-auto {
                    margin-left: auto;
                    margin-right: auto;
                }

                .mb-2 {
                    margin-bottom: 1rem;
                }

                .mb-5 {
                    margin-bottom: 2rem;
                }

                /* TABS same */
                .std-tabs {
                    display: flex;
                    gap: 10px;
                    flex-wrap: wrap;
                    justify-content: center;
                    margin-bottom: 40px;
                }

                .std-tab {
                    padding: 10px 28px;
                    border-radius: 50px;
                    border: 2px solid var(--border);
                    background: var(--white);
                    color: var(--navy);
                    font-weight: 700;
                    font-size: 14px;
                    cursor: pointer;
                    font-family: 'Baloo Bhai 2', cursive;
                    transition: all .3s;
                    box-shadow: 0 4px 12px rgba(13, 33, 55, .05);
                }

                .std-tab.active,
                .std-tab:hover {
                    background: var(--orange);
                    border-color: var(--orange);
                    color: #fff;
                    transform: translateY(-2px);
                }

                .subjects-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
                    gap: 20px;
                    justify-content: center;
                    /* horizontal center */
                    justify-items: center;
                    /* items center */
                    text-align: center;
                }

                .subject-card {
                    background: var(--white);
                    border: 1.5px solid var(--border);
                    border-radius: 20px;
                    padding: 28px 20px 24px;
                    text-align: center;
                    transition: all .35s cubic-bezier(.34, 1.56, .64, 1);
                    cursor: pointer;
                    position: relative;
                    overflow: hidden;
                    width: 100%;
                    max-width: 180px;
                }

                .subject-card::before {
                    content: '';
                    position: absolute;
                    inset: 0;
                    background: linear-gradient(135deg, var(--orange), var(--orange2));
                    opacity: 0;
                    transition: opacity .35s;
                    border-radius: 20px;
                }

                .subject-card:hover::before {
                    opacity: 1;
                }

                .subject-card:hover .sc-icon,
                .subject-card:hover .sc-name,
                .subject-card:hover .sc-std {
                    color: #fff;
                }

                .sc-icon-wrap {
                    width: 60px;
                    height: 60px;
                    border-radius: 16px;
                    background: rgba(255, 107, 26, .1);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin: 0 auto 14px;
                    position: relative;
                    z-index: 1;
                    transition: .3s;
                }

                .sc-icon {
                    font-size: 24px;
                    color: var(--orange);
                    transition: .3s;
                }

                .sc-name {
                    font-family: 'Baloo Bhai 2', cursive;
                    font-size: 17px;
                    font-weight: 700;
                    color: var(--navy);
                    margin-bottom: 6px;
                    position: relative;
                    z-index: 1;
                }

                .sc-std {
                    font-size: 12px;
                    position: relative;
                    z-index: 1;
                }

                /* ============================================= */
                /* 🎯 BRAND NEW CREATIVE CURRICULUM: FLOATING BUBBLE CARDS - PROFESSIONAL LIGHT THEME */
                /* ============================================= */
                .curriculum-master {
                    background: transparent;
                    margin-top: 20px;
                }

                /* Grade filter chips - elegant & minimal */
                .grade-filter {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 12px;
                    margin-bottom: 48px;
                }

                .grade-chip {
                    background: white;
                    border: 1.5px solid #E2E8F0;
                    padding: 10px 24px;
                    border-radius: 60px;
                    font-family: 'Baloo Bhai 2', cursive;
                    font-weight: 700;
                    font-size: 16px;
                    color: #4A5568;
                    cursor: pointer;
                    transition: all 0.25s ease;
                    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
                }

                .grade-chip i {
                    margin-right: 8px;
                    font-size: 14px;
                    color: var(--orange);
                    opacity: 0.7;
                }

                .grade-chip.active-grade {
                    background: var(--orange);
                    border-color: var(--orange);
                    color: white;
                    box-shadow: 0 8px 18px rgba(255, 107, 26, 0.2);
                }

                .grade-chip.active-grade i {
                    color: white;
                    opacity: 1;
                }

                .grade-chip:hover:not(.active-grade) {
                    border-color: var(--orange);
                    transform: translateY(-3px);
                    background: #FFF8F2;
                }

                /* Floating Bubbles Grid - completely new structure */
                .bubbles-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                    gap: 28px;
                    transition: all 0.3s;
                }

                /* Bubble card design */
                .bubble-card {
                    background: #FFFFFF;
                    border-radius: 32px;
                    padding: 0;
                    transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
                    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.03), 0 0 0 1px rgba(0, 0, 0, 0.02);
                    backdrop-filter: blur(0px);
                    overflow: hidden;
                    cursor: default;
                    border: 1px solid #F0F2F5;
                }

                .bubble-card:hover {
                    transform: translateY(-8px);
                    box-shadow: 0 24px 36px -12px rgba(0, 0, 0, 0.12);
                    border-color: rgba(255, 107, 26, 0.2);
                }

                .card-glow {
                    position: relative;
                }

                .std-bubble-header {
                    padding: 24px 24px 16px 24px;
                    background: linear-gradient(135deg, #FFFFFF 0%, #FEFAF7 100%);
                    border-bottom: 2px solid rgba(255, 107, 26, 0.15);
                    display: flex;
                    align-items: center;
                    gap: 16px;
                }

                .bubble-number {
                    width: 58px;
                    height: 58px;
                    background: rgba(255, 107, 26, 0.08);
                    border-radius: 28px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-family: 'Baloo Bhai 2', cursive;
                    font-size: 28px;
                    font-weight: 800;
                    color: var(--orange);
                    transition: all 0.2s;
                }

                .bubble-card:hover .bubble-number {
                    background: var(--orange);
                    color: white;
                    transform: scale(1.02);
                }

                .bubble-title h3 {
                    font-family: 'Baloo Bhai 2', cursive;
                    font-size: 24px;
                    font-weight: 800;
                    color: #1E2A3A;
                    margin: 0;
                    letter-spacing: -0.3px;
                }

                .bubble-title p {
                    font-size: 12px;
                    color: #7F8C9A;
                    margin: 6px 0 0;
                    display: flex;
                    align-items: center;
                    gap: 6px;
                }

                .subjects-bubble-list {
                    padding: 20px 24px 28px;
                    display: flex;
                    flex-wrap: wrap;
                    gap: 12px;
                    background: white;
                }

                .subject-bubble {
                    background: #F8FAFE;
                    border-radius: 60px;
                    padding: 8px 18px;
                    font-size: 13px;
                    font-weight: 600;
                    color: #2D3E50;
                    display: inline-flex;
                    align-items: center;
                    gap: 10px;
                    transition: all 0.25s;
                    border: 1px solid #E9EDF2;
                    cursor: default;
                }

                .subject-bubble i {
                    font-size: 13px;
                    color: var(--orange);
                }

                .subject-bubble:hover {
                    background: var(--orange);
                    color: white;
                    border-color: var(--orange);
                    transform: translateY(-3px) scale(1.02);
                }

                .subject-bubble:hover i {
                    color: white;
                }

                /* stats mini row */
                .bubble-stats {
                    padding: 12px 24px 20px;
                    border-top: 1px solid #F0F2F5;
                    background: #FCFDFF;
                    font-size: 12px;
                    color: #7B8A9B;
                    display: flex;
                    gap: 18px;
                }

                .bubble-stats span i {
                    color: var(--orange);
                    margin-right: 6px;
                }

                /* empty & animation */
                .no-subjects {
                    text-align: center;
                    padding: 50px;
                    background: #FFFFFF;
                    border-radius: 48px;
                    color: #94A3B8;
                }

                /* features and cta remain consistent */
                .feature-strip {
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                    gap: 20px;
                }

                .feat-card {
                    background: #fff;
                    border-radius: 18px;
                    padding: 24px 20px;
                    display: flex;
                    gap: 16px;
                    align-items: flex-start;
                    box-shadow: 0 4px 16px rgba(13, 33, 55, .05);
                    transition: all .3s;
                    border: 1px solid var(--border);
                }

                .feat-card:hover {
                    transform: translateY(-5px);
                    border-color: var(--orange);
                }

                .feat-icon {
                    width: 50px;
                    height: 50px;
                    background: rgba(255, 107, 26, .1);
                    border-radius: 14px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: var(--orange);
                    font-size: 20px;
                }

                .feat-title {
                    font-family: 'Baloo Bhai 2', cursive;
                    font-size: 16px;
                    font-weight: 700;
                    color: var(--navy);
                }

                .cta-wrap {
                    background: linear-gradient(135deg, var(--navy), var(--navy2));
                    border-radius: 28px;
                    padding: 50px 30px;
                    text-align: center;
                }

                .cta-title {
                    font-family: 'Baloo Bhai 2', cursive;
                    font-size: clamp(26px, 5vw, 42px);
                    font-weight: 800;
                    color: #fff;
                }

                .btn-cta {
                    background: linear-gradient(135deg, var(--orange), var(--orange2));
                    color: #fff;
                    padding: 14px 32px;
                    border-radius: 50px;
                    font-weight: 700;
                    display: inline-flex;
                    gap: 10px;
                    text-decoration: none;
                    /* box-shadow: 0 10px 20px rgba(255, 107, 26, .4); */
                }

                .gsap-fade {
                    opacity: 0;
                    transform: translateY(35px);
                }

                @media (max-width: 680px) {
                    .bubbles-grid {
                        grid-template-columns: 1fr;
                        gap: 24px;
                    }

                    .std-bubble-header {
                        padding: 20px;
                    }

                    .bubble-number {
                        width: 48px;
                        height: 48px;
                        font-size: 24px;
                    }

                    .bubble-title h3 {
                        font-size: 22px;
                    }

                    .subjects-bubble-list {
                        padding: 16px 20px 24px;
                    }

                    .subject-bubble {
                        padding: 6px 14px;
                        font-size: 12px;
                    }

                    .grade-chip {
                        padding: 7px 18px;
                        font-size: 14px;
                    }
                }

                @media (max-width: 480px) {
                    .subject-bubble {
                        width: calc(50% - 8px);
                        justify-content: center;
                    }
                }

                .text-accent {
                    color: var(--orange);
                }
            </style>

            <canvas id="bg-canvas"></canvas>
            <section class="hero" id="top">
                <br>
                <br>
                <br>
                <!-- <div class="hero-badge"><i class="fas fa-star"></i> ISO Certified · AGM EduTech LLP</div> -->
                <h1 class="hero-title" id="hero-title">
                    ગુજરાતી માધ્યમ<br><span>કોર્સ</span>
                </h1>

                <p class="hero-sub">
                    ધોરણ ૫ થી ૧૦ માટે — અનુભવી શિક્ષકો દ્વારા ગુજરાતી ભાષામાં LIVE અને રેકોર્ડેડ ક્લાસ. ઘરે બેઠા સરળતાથી અભ્યાસ કરો.
                </p>


                <br>
                <br>
                <br>

            </section>

            <!-- COURSES SECTION (subject cards) -->
            <section class="section section-bg" id="courses">
                <div class="container">

                    <div class="text-center gsap-fade mb-2">
                        <div class="sec-label mx-auto">
                            <i class="fas fa-book-open"></i> અમારા કોર્સ
                        </div>
                    </div>

                    <h2 class="sec-heading text-center gsap-fade">
                        ધોરણ મુજબ <span>વિષયો</span>
                    </h2>

                    <p class="sec-sub text-center mx-auto mb-5 gsap-fade">
                        તમામ ઉપલબ્ધ વિષયો જોવા માટે ધોરણ પસંદ કરો
                    </p>

                    <div class="std-tabs gsap-fade" id="std-tabs">
                        <div class="std-tab active" data-std="5">ધો. ૫</div>
                        <div class="std-tab" data-std="6">ધો. ૬</div>
                        <div class="std-tab" data-std="7">ધો. ૭</div>
                        <div class="std-tab" data-std="8">ધો. ૮</div>
                        <div class="std-tab" data-std="9">ધો. ૯</div>
                        <div class="std-tab" data-std="10">ધો. ૧૦</div>
                    </div>

                    <div class="subjects-grid" id="subjects-grid"></div>

                </div>
            </section>



            <!-- FEATURES -->
            <section class="section section-bg" id="features">
                <div class="container">

                    <div class="text-center gsap-fade mb-4">
                        <div class="sec-label mx-auto">
                            <i class="fas fa-star"></i> અમને કેમ પસંદ કરો
                        </div>
                    </div>

                    <h2 class="sec-heading text-center gsap-fade">
                        સફળતા માટે જરૂરી <span>બધું અહીં ઉપલબ્ધ</span>
                    </h2>

                    <div class="feature-strip mt-4">

                        <div class="feat-card">
                            <div class="feat-icon" style="width: 117px">
                                <i class="fas fa-video"></i>
                            </div>
                            <div>
                                <div class="feat-title">LIVE + રેકોર્ડેડ ક્લાસ</div>
                                <div class="feat-desc">લાઇવ ક્લાસમાં જોડાઓ અથવા કોઈપણ સમયે જુઓ</div>
                            </div>
                        </div>

                        <div class="feat-card">
                            <div class="feat-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <div>
                                <div class="feat-title">ગુજરાતી ભાષા</div>
                                <div class="feat-desc">100% ગુજરાતી માધ્યમમાં શિક્ષણ</div>
                            </div>
                        </div>

                        <div class="feat-card">
                            <div class="feat-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div>
                                <div class="feat-title">24/7 સહાય</div>
                                <div class="feat-desc">તાત્કાલિક શંકા નિવારણ</div>
                            </div>
                        </div>

                        <div class="feat-card">
                            <div class="feat-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div>
                                <div class="feat-title">ગ્રામિણ વિદ્યાર્થીઓ માટે</div>
                                <div class="feat-desc">ગામડાંમાં બેઠા બેઠા ગુણવત્તાસભર શિક્ષણ</div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- CTA -->

            <style>
                .cta-buttons {
                    display: flex;
                    gap: 15px;
                    justify-content: center;
                    flex-wrap: wrap;
                }
            </style>
            <!-- CTA -->
            <section class="section section-light" id="enroll">
                <div class="container">
                    <div class="cta-wrap gsap-fade">
                        <h2 class="cta-title">આજે જ જોડાઓ 🎓</h2>

                        <p class="cta-sub" style="color:rgba(255,255,255,0.7);">
                            5000+ વિદ્યાર્થીઓ પહેલેથી જ Your Own Class સાથે અભ્યાસ કરી રહ્યા છે.
                        </p>

                        <div class="cta-buttons">
                            <a href="#" class="btn-cta">
                                <i class="fas fa-video mt-1"></i> લાઈવ ટીચર વિડીયો
                            </a>

                            <!-- Button -->
                            <a href="#" class="btn-cta" onclick="pmOpen(); return false;">
                                <i class="fas fa-users mt-1"></i> માતા-પિતા સમીક્ષા વિડિઓ
                            </a>


                        </div>

                    </div>
                </div>
            </section>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

            <script>
                // ---------- DATA ----------
                const curriculum = {
                    5: ['Mathematics', 'English', 'Gujarati', 'Environment'],
                    6: ['Mathematics', 'Science', 'English', 'Gujarati', 'Hindi', 'Social Science', 'Sanskrit'],
                    7: ['Mathematics', 'Science', 'English', 'Gujarati', 'Hindi', 'Social Science', 'Sanskrit'],
                    8: ['Mathematics', 'Science', 'English', 'Gujarati', 'Hindi', 'Social Science', 'Sanskrit'],
                    9: ['Mathematics', 'Science', 'English', 'Gujarati', 'Hindi', 'Social Science', 'Sanskrit'],
                    10: ['Mathematics', 'Science', 'English', 'Gujarati', 'Hindi', 'Social Science', 'Sanskrit'],
                };

                const subjectIcons = {
                    'Mathematics': 'fas fa-square-root-alt',
                    'Science': 'fas fa-flask',
                    'English': 'fas fa-book',
                    'Gujarati': 'fas fa-pen-nib',
                    'Hindi': 'fas fa-feather-alt',
                    'Social Science': 'fas fa-globe-asia',
                    'Environment': 'fas fa-leaf',
                    'Sanskrit': 'fas fa-scroll'
                };

                const stdColors = {
                    5: '#FF6B1A',
                    6: '#19BE78',
                    7: '#4F82E6',
                    8: '#F050AA',
                    9: '#6450F0',
                    10: '#E6A800'
                };

                // render standard subject cards (top section)
                function renderCards(std) {
                    const grid = document.getElementById('subjects-grid');
                    const subjects = curriculum[std];
                    if (!subjects) return;
                    grid.innerHTML = subjects.map(s => `
            <div class="subject-card">
                <div class="sc-icon-wrap"><i class="${subjectIcons[s] || 'fas fa-book'} sc-icon"></i></div>
                <div class="sc-name">${s}</div><div class="sc-std">Standard ${std}</div>
            </div>`).join('');
                    gsap.fromTo('.subject-card', {
                        opacity: 0,
                        y: 35,
                        scale: 0.96
                    }, {
                        opacity: 1,
                        y: 0,
                        scale: 1,
                        duration: 0.5,
                        stagger: 0.07,
                        ease: "back.out(1.2)"
                    });
                }

                // tabs event
                document.querySelectorAll('.std-tab').forEach(tab => {
                    tab.addEventListener('click', function() {
                        document.querySelectorAll('.std-tab').forEach(t => t.classList.remove('active'));
                        this.classList.add('active');
                        renderCards(parseInt(this.dataset.std));
                    });
                });
                renderCards(5);

                // ========== BUILD NEW FLOATING BUBBLE CURRICULUM ==========
                function renderBubbleCurriculum(filterGrade = 'all') {
                    const container = document.getElementById('bubble-curriculum-grid');
                    if (!container) return;
                    const standards = [5, 6, 7, 8, 9, 10];
                    let filteredStandards = standards;
                    if (filterGrade !== 'all') {
                        filteredStandards = standards.filter(s => s === parseInt(filterGrade));
                    }

                    if (filteredStandards.length === 0) {
                        container.innerHTML = `<div class="no-subjects"><i class="fas fa-school"></i> No standards selected</div>`;
                        return;
                    }

                    container.innerHTML = '';
                    filteredStandards.forEach(std => {
                        const subjects = curriculum[std];
                        const primaryColor = stdColors[std] || '#FF6B1A';
                        const card = document.createElement('div');
                        card.className = 'bubble-card gsap-fade-card';
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';

                        // header with bubble number
                        card.innerHTML = `
                    <div class="std-bubble-header">
                        <div class="bubble-number" style="background: ${primaryColor}10; color: ${primaryColor};">${std}</div>
                        <div class="bubble-title">
                            <h3>Standard ${std}</h3>
                            <p><i class="fas fa-chalkboard-user"></i> GSEB · Gujarati Medium</p>
                        </div>
                    </div>
                    <div class="subjects-bubble-list" id="subj-list-${std}">
                        ${subjects.map(sub => {
                            const icon = subjectIcons[sub] || 'fas fa-book';
                            return `<div class="subject-bubble"><i class="${icon}"></i> ${sub}</div>`;
                        }).join('')}
                    </div>
                    <div class="bubble-stats">
                        <span><i class="fas fa-book-open"></i> ${subjects.length} Subjects</span>
                        <span><i class="fas fa-star"></i> Complete Syllabus</span>
                    </div>
                `;
                        container.appendChild(card);
                    });

                    // animation for each card with stagger
                    gsap.fromTo('.bubble-card', {
                        opacity: 0,
                        y: 35,
                        scale: 0.97
                    }, {
                        opacity: 1,
                        y: 0,
                        scale: 1,
                        duration: 0.65,
                        stagger: 0.12,
                        ease: "power3.out",
                        clearProps: "opacity"
                    });
                }

                // filter interactions for new curriculum
                function setupGradeFilters() {
                    const filters = document.querySelectorAll('.grade-chip');
                    filters.forEach(chip => {
                        chip.addEventListener('click', function() {
                            const gradeValue = this.dataset.filterGrade;
                            filters.forEach(c => c.classList.remove('active-grade'));
                            this.classList.add('active-grade');
                            renderBubbleCurriculum(gradeValue);
                            // smooth scroll to curriculum section for better UX
                            const curriculumSection = document.getElementById('curriculum');
                            if (curriculumSection && gradeValue !== 'all') {
                                setTimeout(() => {
                                    curriculumSection.scrollIntoView({
                                        behavior: 'smooth',
                                        block: 'start'
                                    });
                                }, 100);
                            }
                        });
                    });
                }

                // initial load with all standards
                renderBubbleCurriculum('all');
                setupGradeFilters();




                // GSAP animations for rest sections
                gsap.registerPlugin(ScrollTrigger);
                gsap.from('#hero-title', {
                    duration: 1.1,
                    y: 55,
                    opacity: 0,
                    ease: "power4.out",
                    delay: 0.2
                });
                gsap.from('.hero-badge, .hero-sub', {
                    duration: 0.9,
                    y: 30,
                    opacity: 0,
                    stagger: 0.2,
                    delay: 0.4
                });
                gsap.utils.toArray('.gsap-fade').forEach(el => {
                    gsap.to(el, {
                        scrollTrigger: {
                            trigger: el,
                            start: 'top 88%'
                        },
                        opacity: 1,
                        y: 0,
                        duration: 0.8,
                        ease: "power3.out"
                    });
                });
                gsap.utils.toArray('.feat-card').forEach((c, i) => {
                    gsap.from(c, {
                        scrollTrigger: {
                            trigger: c,
                            start: 'top 92%'
                        },
                        opacity: 0,
                        y: 40,
                        duration: 0.6,
                        delay: i * 0.1
                    });
                });
            </script>




            <!-- Modal -->
            <div id="pmModal" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,0.85);z-index:99999;align-items:center;justify-content:center;padding:16px;box-sizing:border-box;">
                <div style="background:#fff;border-radius:16px;width:100%;max-width:520px;overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,0.5);">

                    <!-- Header -->
                    <div style="display:flex;align-items:center;justify-content:space-between;padding:14px 16px;background:#173050;">
                        <span style="font-size:15px;font-weight:600;color:#fff;">માતા-પિતા સમીક્ષા</span>
                        <div style="display:flex;align-items:center;gap:10px;">
                            <span id="pmCounter" style="font-size:13px;color:rgba(255,255,255,0.7);">1 / 4</span>
                            <button onclick="pmClose()" style="background:rgba(255,255,255,0.15);border:none;border-radius:8px;width:32px;height:32px;cursor:pointer;font-size:18px;color:#fff;line-height:1;">✕</button>
                        </div>
                    </div>

                    <!-- Video -->
                    <div style="background:#000;width:100%;aspect-ratio:9/16;max-height:55vh;display:flex;align-items:center;justify-content:center;overflow:hidden;">
                        <video id="pmVideo" controls playsinline style="width:100%;height:100%;object-fit:contain;display:block;"></video>
                    </div>

                    <!-- Navigation -->
                    <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;background:#173050;">
                        <button id="pmPrev" onclick="pmChange(-1)" style="background:rgba(255,255,255,0.12);border:1px solid rgba(255,255,255,0.2);border-radius:8px;padding:8px 18px;font-size:14px;cursor:pointer;color:#fff;">← પાછળ</button>
                        <div id="pmDots" style="display:flex;gap:8px;align-items:center;"></div>
                        <button id="pmNext" onclick="pmChange(1)" style="background:#FF8032;border:none;border-radius:8px;padding:8px 18px;font-size:14px;cursor:pointer;color:#fff;font-weight:600;">આગળ →</button>
                    </div>
                </div>
            </div>

            <script>
                const pmVideos = [{
                        src: "img/v1.mp4"
                    },
                    {
                        src: "img/v2.mp4"
                    },
                    {
                        src: "img/v3.mp4"
                    },
                    {
                        src: "img/v4.mp4"
                    },
                    {
                        src: "img/v5.mp4"
                    },
                ];
                let pmCur = 0;

                function pmLoad() {
                    const v = pmVideos[pmCur];
                    const vid = document.getElementById('pmVideo');
                    vid.pause();
                    vid.src = v.src;
                    vid.load();
                    vid.play().catch(() => {});
                    document.getElementById('pmCounter').textContent = (pmCur + 1) + ' / ' + pmVideos.length;

                    const prevBtn = document.getElementById('pmPrev');
                    const nextBtn = document.getElementById('pmNext');
                    prevBtn.disabled = pmCur === 0;
                    nextBtn.disabled = pmCur === pmVideos.length - 1;
                    prevBtn.style.opacity = pmCur === 0 ? '0.35' : '1';
                    nextBtn.style.opacity = pmCur === pmVideos.length - 1 ? '0.35' : '1';

                    const dots = document.getElementById('pmDots');
                    dots.innerHTML = '';
                    pmVideos.forEach((_, i) => {
                        const d = document.createElement('div');
                        d.style.cssText = 'width:9px;height:9px;border-radius:50%;cursor:pointer;transition:background 0.2s;background:' + (i === pmCur ? '#FF8032' : 'rgba(255,255,255,0.35)');
                        d.onclick = () => {
                            pmCur = i;
                            pmLoad();
                        };
                        dots.appendChild(d);
                    });
                }

                function pmOpen() {
                    pmCur = 0;
                    document.getElementById('pmModal').style.display = 'flex';
                    document.body.style.overflow = 'hidden';
                    pmLoad();
                }

                function pmClose() {
                    const vid = document.getElementById('pmVideo');
                    vid.pause();
                    vid.src = '';
                    document.getElementById('pmModal').style.display = 'none';
                    document.body.style.overflow = '';
                }

                function pmChange(d) {
                    const n = pmCur + d;
                    if (n >= 0 && n < pmVideos.length) {
                        pmCur = n;
                        pmLoad();
                    }
                }

                document.getElementById('pmModal').addEventListener('click', function(e) {
                    if (e.target === this) pmClose();
                });

                document.addEventListener('keydown', function(e) {
                    if (document.getElementById('pmModal').style.display !== 'flex') return;
                    if (e.key === 'Escape') pmClose();
                    if (e.key === 'ArrowRight') pmChange(1);
                    if (e.key === 'ArrowLeft') pmChange(-1);
                });
            </script>

            <?php include 'footer.php'; ?>

        </div>
    </div>

    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/hover-effect.umd.js"></script>
    <script src="assets/js/main.js"></script>
</body>
<!-- Mirrored from html.themehour.net/escul/demo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2026 06:57:47 GMT -->

</html>