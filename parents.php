<!DOCTYPE html>
<html lang="gu" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Your Own Classes </title>
    <link rel="shortcut icon" href="img/logo_class.png" type="image/x-icon">

    <!-- Google Fonts & Font Awesome -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Noto+Sans+Gujarati:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg: #F4F4F0;
            --surface: #EFEFEB;
            --surface2: #E8E8E4;
            --white: #FFFFFF;
            --ink: #1A3558;
            --ink2: #3D3D38;
            --ink3: #6B6B65;
            --gold: #F58025;
            --gold-light: #F58025;
            --gold-pale: #F9EDD5;
            --gold-border: rgba(200, 146, 42, 0.25);
            --dark: #141410;
            --dark2: #1F1F1A;
            --radius: 20px;
            --radius-lg: 32px;
            --radius-xl: 48px;
            --shadow: 0 4px 24px rgba(0, 0, 0, 0.07);
            --shadow-md: 0 8px 40px rgba(0, 0, 0, 0.10);
            --shadow-lg: 0 20px 60px rgba(0, 0, 0, 0.14);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--ink);
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }


        /* Container */
        .wrap {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 48px;
        }

        /* Hero */
        .hero {
            padding: 100px 0 0;
            /* overflow: hidden; */
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
            padding-bottom: 100px;
        }

        .hero-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--gold-pale);
            border: 1px solid var(--gold-border);
            color: var(--gold);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            padding: 6px 18px;
            border-radius: 100px;
            margin-bottom: 28px;
        }

        .hero h1 {
            font-family: 'DM Serif Display', serif;
            font-size: clamp(44px, 3vw, 72px);
            line-height: 1.1;
            color: var(--ink);
            margin-bottom: 28px;
            letter-spacing: 3px;
        }

        .hero h1 em {
            font-style: italic;
            color: var(--gold);
        }

        .hero-desc {
            font-size: 17px;
            color: var(--ink3);
            line-height: 1.7;
            margin-bottom: 44px;
            max-width: 440px;
        }

        .hero-actions {
            display: flex;
            gap: 16px;
            align-items: center;
        }

        .btn-primary {
            background: #1A3558;
            /* color: var(--gold-light); */
            padding: 16px 34px;
            border-radius: 100px;
            font-size: 15px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            background: var(--gold);
            color: var(--dark);
            transform: translateY(-2px);
        }

        .btn-ghost {
            color: var(--ink2);
            font-size: 15px;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: color 0.2s;
            padding: 16px 34px;
            border: 3px solid #F58025;
            border-radius: 15pxj8;
        }

        .btn-ghost:hover {
            color: var(--gold);
        }

        .hero-right {
            position: relative;
        }

        .hero-img-wrap {
            border-radius: var(--radius-xl);
            overflow: hidden;
            position: relative;
            box-shadow: var(--shadow-lg);
        }

        .hero-img-wrap img {
            width: 100%;
            height: 540px;
            object-fit: cover;
            display: block;
            transition: transform 0.6s ease;
        }

        .hero-img-wrap:hover img {
            transform: scale(1.03);
        }

        .hero-img-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(20, 20, 16, 0.5) 0%, transparent 50%);
        }

        .hero-float-1 {
            position: absolute;
            top: -20px;
            left: -30px;
            background: var(--white);
            border-radius: var(--radius);
            padding: 18px 24px;
            box-shadow: var(--shadow-md);
            display: flex;
            align-items: center;
            gap: 14px;
            border: 1px solid var(--surface2);
        }

        .hero-float-1 .big-num {
            font-family: 'DM Serif Display', serif;
            font-size: 36px;
            color: var(--ink);
            line-height: 1;
        }

        .hero-float-1 .small-txt {
            font-size: 12px;
            color: var(--ink3);
            font-weight: 500;
        }

        .hero-float-2 {
            position: absolute;
            bottom: 30px;
            right: -20px;
            background: var(--dark);
            border-radius: var(--radius);
            padding: 16px 22px;
            display: flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
        }

        .hero-float-2 i {
            color: var(--gold-light);
            font-size: 22px;
        }

        .hero-float-2 .f2-text {
            color: #fff;
            font-size: 13px;
            font-weight: 600;
            line-height: 1.4;
        }

        .hero-stats-row {
            background: var(--dark2);
            border-radius: var(--radius-xl);
            padding: 36px 48px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0;
            margin-top: 0;
        }

        .stat-item {
            text-align: center;
            padding: 8px 0;
            border-right: 1px solid rgba(255, 255, 255, 0.07);
        }

        .stat-item:last-child {
            border-right: none;
        }

        .stat-item .num {
            font-family: 'DM Serif Display', serif;
            font-size: 42px;
            color: var(--gold-light);
            line-height: 1;
            display: block;
        }

        .stat-item .lbl {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.5);
            margin-top: 6px;
            font-weight: 500;
        }

        /* Section label */
        .section-kicker {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2.5px;
            color: var(--gold);
            text-transform: uppercase;
            margin-bottom: 16px;
        }

        .section-title {
            font-family: 'DM Serif Display', serif;
            font-size: clamp(32px, 3.5vw, 52px);
            color: var(--ink);
            line-height: 1.15;
            letter-spacing: -0.5px;
        }

        .section-title em {
            font-style: italic;
            color: var(--gold);
        }

        /* Benefits section (Premium Design) */
        /* .benefits-section {
            padding: 120px 0;
            min-height: 900px;
        } */

        .benefits-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: flex-start;
        }

        .benefits-right {
            position: sticky;
            top: 120px;
            /* navbar height પ્રમાણે adjust કરો */
            height: fit-content;
        }

        .benefits-left {
            padding-right: 20px;
        }

        .benefits-desc {
            font-size: 17px;
            color: var(--ink3);
            line-height: 1.7;
            margin: 20px 0 48px;
            max-width: 420px;
        }

        .benefit-item {
            display: flex;
            gap: 20px;
            align-items: flex-start;
            padding: 24px 0;
            border-bottom: 1px solid var(--surface2);
            transition: all 0.3s;
            cursor: default;
        }

        .benefit-item:last-child {
            border-bottom: none;
        }

        .benefit-item:hover .b-icon {
            background: var(--dark);
            color: var(--gold-light);
        }

        .benefit-item:hover .b-title {
            color: var(--gold);
        }

        .b-icon {
            width: 52px;
            height: 52px;
            background: var(--gold-pale);
            border: 1px solid var(--gold-border);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: var(--gold);
            flex-shrink: 0;
            transition: all 0.3s;
        }

        .b-title {
            font-size: 17px;
            font-weight: 700;
            color: var(--ink);
            margin-bottom: 6px;
            transition: color 0.3s;
        }

        .b-desc {
            font-size: 14px;
            color: var(--ink3);
            line-height: 1.6;
        }

        .benefits-right {
            position: sticky;
            top: 100px;
        }

        .benefits-img-stack {
            position: relative;
        }

        .benefits-right:hover .big-benefit-img {
            transform: scale(1.03);
        }

        .big-benefit-img {
            width: 100%;
            height: 500px !important;
            object-fit: cover;
            border-radius: var(--radius-xl);
            display: block;
            box-shadow: var(--shadow-lg);
            transition: transform .4s ease;
        }

        .cert-badge {
            position: absolute;
            bottom: -20px;
            left: 30px;
            background: var(--white);
            border-radius: var(--radius);
            padding: 20px 28px;
            display: flex;
            align-items: center;
            gap: 16px;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--surface2);
        }

        .cert-badge .c-icon {
            font-size: 36px;
            color: var(--gold);
        }

        .cert-badge .c-title {
            font-size: 16px;
            font-weight: 700;
            color: var(--ink);
        }

        .cert-badge .c-sub {
            font-size: 12px;
            color: var(--ink3);
        }

        .tags-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 48px;
        }

        .chip {
            background: var(--surface);
            border: 1px solid var(--surface2);
            color: var(--ink2);
            font-size: 13px;
            font-weight: 600;
            padding: 8px 18px;
            border-radius: 100px;
            display: inline-flex;
            align-items: center;
            gap: 7px;
            transition: all 0.2s;
        }

        .chip:hover {
            background: var(--dark);
            color: var(--gold-light);
            border-color: var(--dark);
        }

        .chip i {
            font-size: 12px;
            color: var(--gold);
        }

        /* Testimonials Section (from second file) */
        .testimonials-premium {
            background: var(--surface);
            padding: 100px 0;
        }

        .testi-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            margin-bottom: 56px;
        }

        .scroll-controls {
            display: flex;
            gap: 12px;
        }

        .sc-btn {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 1px solid var(--surface2);
            background: var(--white);
            font-size: 16px;
            color: var(--ink2);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        }

        .sc-btn:hover {
            background: var(--dark);
            color: var(--gold-light);
            border-color: var(--dark);
        }

        .video-row {
            display: flex;
            gap: 24px;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            padding-bottom: 8px;
            scrollbar-width: none;
        }

        .video-row::-webkit-scrollbar {
            display: none;
        }

        .v-card {
            flex: 0 0 calc(25% - 18px);
            scroll-snap-align: start;
            background: var(--white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            border: 1px solid var(--surface2);
            transition: all 0.3s;
        }

        .v-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-md);
        }

        .v-thumb {
            position: relative;
            height: 260px;
            background: var(--dark);
            cursor: pointer;
            overflow: hidden;
        }

        .v-thumb video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .v-card:hover .v-thumb video {
            transform: scale(1.05);
        }

        .v-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s;
        }

        .v-card:hover .v-overlay {
            background: rgba(0, 0, 0, 0.2);
        }

        .play-btn {
            width: 56px;
            height: 56px;
            background: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            color: var(--gold);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
        }

        .v-card:hover .play-btn {
            transform: scale(1.1);
        }

        .v-footer {
            padding: 16px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-top: 1px solid var(--surface);
        }

        .v-stars {
            display: flex;
            gap: 3px;
        }

        .v-stars i {
            color: var(--gold);
            font-size: 13px;
        }

        .v-label {
            font-size: 13px;
            font-weight: 600;
            color: var(--ink2);
        }

        /* Pamphlet Section (Merged from second file into premium container) */
        .pamphlet-section-premium {
            padding: 120px 0;
        }

        .pamphlet-card {
            background: var(--white);
            border-radius: var(--radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }

        .pamphlet-top-stripe {
            background: linear-gradient(90deg, #1a3882 0%, #2456cc 100%);
            padding: 30px 44px;
            text-align: center;
        }

        .pamphlet-top-stripe h2 {
            color: #fff;
            font-size: 19px;
            font-weight: 700;
            line-height: 1.7;
            font-family: 'Noto Sans Gujarati', sans-serif;
        }

        .pamphlet-accent-bar {
            height: 10px;
            background: linear-gradient(90deg, #1a3882 65%, #F38125 100%);
        }

        .pamphlet-sub-stripe {
            background: #1a3882;
            padding: 13px 40px;
            text-align: center;
        }

        .pamphlet-sub-stripe p {
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 3px;
            font-family: 'Noto Sans Gujarati', sans-serif;
        }

        .pamphlet-logo-box {
            background: linear-gradient(135deg, #dce8ff 0%, #eaf3ff 100%);
            padding: 36px 44px 28px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .yoc-logo-text {
            font-family: 'Baloo 2', cursive;
            line-height: 1;
            text-align: center;
        }

        .yoc-logo-text .your {
            font-size: 58px;
            font-weight: 900;
            color: #1A3558;
        }

        .yoc-logo-text .own {
            font-size: 30px;
            font-weight: 700;
            color: #F38125;
            font-style: italic;
            vertical-align: super;
        }

        .yoc-logo-text .cls {
            font-size: 58px;
            font-weight: 900;
            color: #F38125;
        }

        .pamphlet-body {
            padding: 30px 44px 40px;
        }

        .pamphlet-body-title {
            font-size: 16px;
            font-weight: 800;
            color: #0D2137;
            margin-bottom: 24px;
            font-family: 'Noto Sans Gujarati', sans-serif;
        }

        .pamp-row {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding-bottom: 18px;
            margin-bottom: 18px;
            border-bottom: 1px solid #f0f4f8;
        }

        .pamp-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .pamp-key {
            font-size: 15px;
            font-weight: 800;
            color: #F38125;
            min-width: 215px;
            flex-shrink: 0;
            font-family: 'Noto Sans Gujarati', sans-serif;
            line-height: 1.5;
        }

        .pamp-val {
            font-size: 15px;
            color: #1A3558;
            line-height: 1.7;
            font-family: 'Noto Sans Gujarati', sans-serif;
        }

        .info-gu-bar {
            background: var(--surface);
            border-bottom: 1px solid var(--surface2);
            padding: 14px 56px;
            font-size: 14px;
            font-weight: 600;
            color: var(--ink3);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-cta {
            background: var(--dark);
            border-radius: var(--radius-xl);
            padding: 80px 64px;
            text-align: center;
            margin: 0 0 80px;
            position: relative;
            overflow: hidden;
        }

        .footer-cta::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse at 50% 0%, rgba(200, 146, 42, 0.15), transparent 60%);
        }

        .footer-cta h2 {
            font-family: 'DM Serif Display', serif;
            font-size: clamp(32px, 4vw, 56px);
            color: var(--white);
            letter-spacing: -1px;
            margin-bottom: 20px;
            position: relative;
        }

        .footer-cta h2 em {
            color: var(--gold-light);
            font-style: italic;
        }

        .footer-cta p {
            font-size: 17px;
            color: rgba(255, 255, 255, 0.5);
            margin-bottom: 40px;
            position: relative;
        }

        .footer-cta .btn-primary {
            font-size: 16px;
            padding: 18px 44px;
            position: relative;
        }

        /* Modal */
        .modal-video {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.92);
            z-index: 99999;
            align-items: center;
            justify-content: center;
        }

        .modal-video.open {
            display: flex;
        }

        .modal-box {
            width: 90%;
            max-width: 1100px;
            aspect-ratio: 16/9;
            background: #000;
            border-radius: var(--radius-lg);
            overflow: hidden;
            position: relative;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.6);
        }

        .modal-close {
            position: absolute;
            top: 18px;
            right: 18px;
            background: rgba(255, 255, 255, 0.12);
            border: none;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            color: white;
            font-size: 18px;
            cursor: pointer;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s;
        }

        .modal-close:hover {
            background: rgba(255, 255, 255, 0.25);
        }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width:768px) {

            /* .benefits-layout {
                flex-direction: column;
            } */

            .benefits-right {
                order: 1;
                /* Image પહેલા */
            }

            .benefits-left {
                order: 2;
                /* Content પછી */
            }

            .mob_online_img {
                height: 300px !important;
            }

            .cert-badge {
                bottom: -74px;
                left: 53px;
            }

        }

        /* Responsive */
        @media (max-width: 1024px) {
            .hero-grid {
                grid-template-columns: 1fr;
                gap: 60px;
            }



            .hero-stats-row {
                grid-template-columns: repeat(3, 1fr);
            }

            .benefits-layout {
                grid-template-columns: 1fr;
            }



            .benefits-right {
                position: static;
            }

            .testi-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }

            .v-card {
                flex: 0 0 calc(50% - 12px);
            }

            .pamp-key {
                min-width: 150px;
                font-size: 13px;
            }

            .pamp-val {
                font-size: 13px;
            }

            .wrap {
                padding: 0 24px;
            }

            .nav-inner {
                padding: 0 24px;
            }

            .info-gu-bar {
                padding: 14px 24px;
            }

            .pamphlet-top-stripe {
                padding: 22px 20px;
            }

            .pamphlet-body {
                padding: 24px 20px 32px;
            }
        }

        @media (max-width: 640px) {
            .hero-stats-row {
                grid-template-columns: 1fr;
                gap: 0;
                padding: 28px 32px;
            }

            .stat-item {
                border-right: none;
                border-bottom: 1px solid rgba(255, 255, 255, 0.07);
                padding: 16px 0;
            }

            .stat-item:last-child {
                border-bottom: none;
            }

            .v-card {
                flex: 0 0 85%;
            }

            .footer-cta {
                padding: 56px 32px;
            }

            .pamp-row {
                flex-direction: column;
                gap: 6px;
            }

            .pamp-key {
                min-width: auto;
            }
        }
    </style>

</head>

<body>


    <?php include 'nav.php'; ?>

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

    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">માતા-પિતા</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index">Home</a></li>
                            <li>માતા-પિતા</li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-5 align-self-end d-lg-block d-none">
                            <div class="breadcumb-thumb"><img src="assets/img/normal/breadcumb-thumb1-1.png" alt="img"></div>
                        </div> -->
            </div>
        </div>
    </div>


    <!-- HERO -->
    <!-- HERO -->
    <div class="wrap">
        <div class="hero">
            <div class="hero-grid">
                <div class="hero-right reveal">
                    <div class="hero-img-wrap">
                        <img src="img/your6.jpeg" class="mob_online_img" style="object-fit: cover;" alt="Students learning">
                        <div class="hero-img-overlay"></div>
                    </div>

                    <!-- <div class="hero-float-1">
                        <i class="fas fa-graduation-cap" style="font-size:32px; color:var(--gold);"></i>
                        <div>
                            <div class="big-num">98%</div>
                            <div class="small-txt">વાલીઓનો વિશ્વાસ</div>
                        </div>
                    </div> -->

                    <div class="hero-float-2">
                        <i class="fas fa-award"></i>
                        <div class="f2-text">શ્રેષ્ઠ ગુણવત્તાનું<br>શિક્ષણ</div>
                    </div>
                </div>


                <div class="hero-left reveal">

                    <h2 class="sec-title mt-4">
                        <span style="color: #FF5C2A;">ગુજરાતના સૌથી વિશ્વસનીય </span>
                        <span style="color: #1A3558;">ઓનલાઈન ક્લાસ</span>
                    </h2>

                    <p class="hero-desc">
                        ગુજરાતના દરેક વિદ્યાર્થી માટે વિશ્વસ્તરનું લાઇવ અને ઇન્ટરેક્ટિવ શિક્ષણ.
                        અનુભવી અને નિષ્ણાત શિક્ષકો દ્વારા સરળ સમજ સાથે અભ્યાસ, નિયમિત ટેસ્ટ,
                        ડાઉટ સોલ્વિંગ અને રિઝલ્ટ ઓરિએન્ટેડ માર્ગદર્શન.
                    </p>

                    <p class="hero-desc">
                        હવે ઘર બેઠા જ ગુણવત્તાસભર શિક્ષણ મેળવો —
                        લાઈવ ક્લાસ, રેકોર્ડેડ લેકચર્સ, સ્ટડી મટિરિયલ અને સતત સપોર્ટ સાથે
                        તમારા સપનાઓને સાકાર બનાવો.
                    </p>

                </div>


            </div>
        </div>
    </div>

    <!-- BENEFITS (Premium style + Gujarati content merged from second file) -->
    <div class="wrap">
        <div class="benefits-section">
            <div class="benefits-layout">

                <div class="benefits-left reveal">



                    <h2 class="sec-title mt-4">
                        <span style="color: #FF5C2A;">ઇ-લર્નિંગનું </span>
                        <span style="color: #1A3558;">સુવર્ણ ધોરણ</span>
                    </h2>

                    <!-- <h2 class="section-title"> ઇ-લર્નિંગનું સુવર્ણ ધોરણ </h2> -->

                    <p class="benefits-desc">
                        IITians અને વૈશ્વિક શિક્ષણ નિષ્ણાતો દ્વારા બનાવાયેલ અભ્યાસક્રમ હવે તમારા ઘર સુધી.

                    </p>

                    <div class="benefit-item">
                        <div class="b-icon"><i class="fas fa-home"></i></div>
                        <div>
                            <div class="b-title">ઘર બેઠા શહેર જેવી ગુણવત્તા</div>
                            <div class="b-desc">
                                ઘરે બેઠા શહેર જેવી પ્રીમિયમ શિક્ષણ ગુણવત્તા — મુસાફરી વગર.
                            </div>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="b-icon"><i class="fas fa-chalkboard"></i></div>
                        <div>
                            <div class="b-title">વિષય મુજબ નિષ્ણાત શિક્ષક</div>
                            <div class="b-desc">
                                ૮૦+ વિષય નિષ્ણાત શિક્ષકો દ્વારા ગહન સમજ સાથે ભણતર.
                            </div>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="b-icon"><i class="fas fa-chart-line"></i></div>
                        <div>
                            <div class="b-title">પ્રગતિ પર નજર અને રેકોર્ડિંગ</div>
                            <div class="b-desc">
                                વાલીઓ બાળકની પ્રગતિ જોઈ શકે અને દરેક ક્લાસનું રેકોર્ડિંગ ઉપલબ્ધ.
                            </div>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="b-icon"><i class="fas fa-shield-alt"></i></div>
                        <div>
                            <div class="b-title">સુરક્ષિત અને અનુકૂળ વાતાવરણ</div>
                            <div class="b-desc">
                                મુસાફરી વગર સુરક્ષિત ભણતર — ખાસ કરીને દીકરીઓ માટે વધુ સુરક્ષિત.
                            </div>
                        </div>
                    </div>



                </div>


                <div class="benefits-right reveal">
                    <div class="benefits-img-stack">

                        <br>
                        <br>
                        <br>
                        <img class="big-benefit-img mob_online_img" src="img/your7.jpeg" alt="Student learning">

                        <!-- <div class="cert-badge">
                            <div class="c-icon"><i class="fas fa-medal"></i></div>
                            <div>
                                <div class="c-title">ISO પ્રમાણિત</div>
                                <div class="c-sub">21001:2018 પ્રમાણપત્ર</div>
                            </div>
                        </div> -->

                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- TESTIMONIALS (Premium layout + videos from second file) -->
    <div class="testimonials-premium">
        <div class="wrap">
            <div class="testi-header reveal">
                <div>
                    <!-- <div class="section-kicker">વાલીઓના અભિપ્રાય</div> -->

                    <h3 class="sec-title mt-4">
                        <span style="color: #FF5C2A;">વાસ્તવિક વાર્તાઓ, </span>
                        <span style="color: #1A3558;">વાસ્તવિક અસર</span>
                    </h3>

                    <!-- <h2 class="section-title">Real Stories,Real Impact</h2> -->
                </div>
                <div class="scroll-controls"><button class="sc-btn" id="scrollLeft"><i class="fas fa-chevron-left"></i></button><button class="sc-btn" id="scrollRight"><i class="fas fa-chevron-right"></i></button></div>
            </div>
            <div class="video-row" id="videoRow">
                <div class="v-card">
                    <div class="v-thumb" onclick="openModalVideo('img/v1.mp4')"><video src="img/v1.mp4" muted preload="metadata"></video>
                        <div class="v-overlay">
                            <div class="play-btn"><i class="fas fa-play"></i></div>
                        </div>
                    </div>
                    <!-- <div class="v-footer">
                        <div class="v-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><span class="v-label">Parent Review</span>
                    </div> -->
                </div>
                <div class="v-card">
                    <div class="v-thumb" onclick="openModalVideo('img/v2.mp4')"><video src="img/v2.mp4" muted preload="metadata"></video>
                        <div class="v-overlay">
                            <div class="play-btn"><i class="fas fa-play"></i></div>
                        </div>
                    </div>
                    <!-- <div class="v-footer">
                        <div class="v-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><span class="v-label">Success Story</span>
                    </div> -->
                </div>
                <div class="v-card">
                    <div class="v-thumb" onclick="openModalVideo('img/v3.mp4')"><video src="img/v3.mp4" muted preload="metadata"></video>
                        <div class="v-overlay">
                            <div class="play-btn"><i class="fas fa-play"></i></div>
                        </div>
                    </div>
                    <!-- <div class="v-footer">
                        <div class="v-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><span class="v-label">Student Journey</span>
                    </div> -->
                </div>
                <div class="v-card">
                    <div class="v-thumb" onclick="openModalVideo('img/v4.mp4')"><video src="img/v4.mp4" muted preload="metadata"></video>
                        <div class="v-overlay">
                            <div class="play-btn"><i class="fas fa-play"></i></div>
                        </div>
                    </div>
                    <!-- <div class="v-footer">
                        <div class="v-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><span class="v-label">Mother's Voice</span>
                    </div> -->
                </div>
                <div class="v-card">
                    <div class="v-thumb" onclick="openModalVideo('img/v5.mp4')"><video src="img/v5.mp4" muted preload="metadata"></video>
                        <div class="v-overlay">
                            <div class="play-btn"><i class="fas fa-play"></i></div>
                        </div>
                    </div>
                    <!-- <div class="v-footer">
                        <div class="v-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><span class="v-label">Village to Victory</span>
                    </div> -->
                </div>
            </div>
        </div>
    </div>


    <style>
        .pamp-wrap {
            font-family: 'Noto Sans Gujarati', 'DM Sans', sans-serif;
            padding: 2rem 0;
        }

        .pamp-hero-band {
            background: #1A3558;
            border-radius: 20px 20px 0 0;
            padding: 36px 48px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .logo-box {
            flex-shrink: 0;
        }

        .logo-text {
            line-height: 1;
            font-family: 'Baloo 2', 'DM Sans', cursive;
        }

        .logo-text .your {
            font-size: 42px;
            font-weight: 900;
            color: #fff;
        }

        .logo-text .own {
            font-size: 20px;
            font-weight: 700;
            color: #F58025;
            font-style: italic;
        }

        .logo-text .cls {
            font-size: 42px;
            font-weight: 900;
            color: #F58025;
        }

        .divider-v {
            width: 1px;
            background: rgba(255, 255, 255, 0.15);
            align-self: stretch;
            flex-shrink: 0;
        }

        .hero-tagline {
            flex: 1;
        }

        .hero-tagline .badge {
            display: inline-block;
            background: rgba(245, 128, 37, 0.18);
            border: 1px solid rgba(245, 128, 37, 0.4);
            color: #F58025;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            padding: 4px 14px;
            border-radius: 100px;
            margin-bottom: 12px;
        }

        .hero-tagline h2 {
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            line-height: 1.6;
            margin: 0 0 10px;
        }

        .hero-tagline .sub {
            color: rgba(255, 255, 255, 0.55);
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 1.5px;
        }

        .accent-bar {
            height: 5px;
            background: linear-gradient(90deg, #F58025 0%, #1A3558 100%);
        }

        .pamp-body {
            background: #fff;
            border-radius: 0 0 20px 20px;
            padding: 36px 48px 40px;
            border: 1px solid #E8E8E4;
            border-top: none;
        }

        .pamp-section-label {
            font-size: 25px;
            font-weight: 700;
            letter-spacing: 2px;
            color: #F58025;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
        }

        .feat-item {
            display: flex;
            gap: 16px;
            align-items: flex-start;
            padding: 20px 24px 20px 0;
            border-bottom: 1px solid #F0F4F8;
        }

        .feat-item:nth-child(even) {
            padding: 20px 0 20px 24px;
            border-left: 1px solid #F0F4F8;
        }

        .feat-item:nth-last-child(-n+2) {
            border-bottom: none;
        }

        .feat-icon {
            width: 44px;
            height: 44px;
            background: #FFF4E8;
            border: 1px solid rgba(245, 128, 37, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 18px;
        }

        .feat-key {
            font-size: 18px;
            font-weight: 800;
            color: #F58025;
            margin-bottom: 4px;
            line-height: 1.4;
        }

        .feat-val {
            font-size: 16px;
            color: #6B6B65;
            line-height: 1.6;
        }

        @media (max-width: 640px) {
            .pamp-hero-band {
                flex-direction: column;
                padding: 24px 20px;
            }

            .divider-v {
                display: none;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .feat-item:nth-child(even) {
                padding: 20px 0;
                border-left: none;
            }

            .pamp-body {
                padding: 24px 20px 32px;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Noto+Sans+Gujarati:wght@400;600;700;800&display=swap" rel="stylesheet">

    <div class="container">
        <div class="pamp-wrap">
            <div class="pamp-hero-band">
                <div class="logo-box">
                    <div class="logo-text">
                        <span class="your">Your</span><span class="own"> Own</span><br>
                        <span class="cls">Class</span>
                    </div>
                </div>
                <div class="divider-v"></div>
                <div class="hero-tagline">
                    <div class="badge">આપણા ગુજરાતના</div>
                    <h2>મોટા શહેર તથા ગામના દરેક વિદ્યાર્થીને ઘર બેઠા, પોસાય તેવી ફી માં ઉચ્ચ સ્તરનું શહેરી ગુણવત્તાવાળું શિક્ષણ.</h2>
                    <div class="sub">ગુજરાતી ઓનલાઈન ક્લાસ &nbsp;·&nbsp; &nbsp; 33+ વર્ષ અનુભવ</div>
                </div>
            </div>
            <div class="accent-bar"></div>
            <div class="pamp-body">
                <div class="pamp-section-label">YOC ના અનોખા ફાયદા</div>
                <div class="features-grid">

                    <div class="feat-item">
                        <div class="feat-icon live"><i class="fa-solid fa-video"></i></div>
                        <div>
                            <div class="feat-key">૧૦૦% લાઇવ ઇન્ટરેક્ટિવ ક્લાસ</div>
                            <div class="feat-val">માત્ર રેકોર્ડ વિડિયો નહીં, પરંતુ શિક્ષક સાથે સીધું લાઇવ ભણતર.</div>
                        </div>
                    </div>

                    <div class="feat-item">
                        <div class="feat-icon teacher"><i class="fa-solid fa-chalkboard-user"></i></div>
                        <div>
                            <div class="feat-key">૮૦+ વિષયવાર નિષ્ણાત શિક્ષકો</div>
                            <div class="feat-val">દરેક વિષય માટે અલગ નિષ્ણાત શિક્ષકો દ્વારા ઊંડું શિક્ષણ.</div>
                        </div>
                    </div>

                    <div class="feat-item">
                        <div class="feat-icon safe"><i class="fa-solid fa-shield-halved"></i></div>
                        <div>
                            <div class="feat-key">સુરક્ષિત અને અનુકૂળ</div>
                            <div class="feat-val">ઘર બેઠા સુરક્ષિત વાતાવરણ, સમય અને મુસાફરીના ખર્ચની બચત.</div>
                        </div>
                    </div>

                    <div class="feat-item">
                        <div class="feat-icon report"><i class="fa-solid fa-chart-column"></i></div>
                        <div>
                            <div class="feat-key">વાલીઓનું સીધું જોડાણ</div>
                            <div class="feat-val">બાળકની પ્રગતિ રિપોર્ટ અને દરેક લેક્ચરનું રેકોર્ડિંગ ઉપલબ્ધ.</div>
                        </div>
                    </div>

                    <div class="feat-item">
                        <div class="feat-icon trust"><i class="fa-solid fa-trophy"></i></div>
                        <div>
                            <div class="feat-key">મજબૂત નેતૃત્વ અને વિશ્વસનીયતા</div>
                            <div class="feat-val">33+ વર્ષ અનુભવ ધરાવતી સંસ્થા.</div>
                        </div>
                    </div>

                    <div class="feat-item">
                        <div class="feat-icon global"><i class="fa-solid fa-earth-asia"></i></div>
                        <div>
                            <div class="feat-key">ગામ-શહેર — સૌ માટે</div>
                            <div class="feat-val">Gujarat ના દરેક ખૂણે, દરેક વિદ્યાર્થી સુધી ઉચ્ચ ગુણવત્તા.</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <style>
        .feat-icon {
            font-size: 28px;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            margin-right: 15px;
        }

        .live {
            background: #ffe9e9;
            color: #ff3b3b;
        }

        .teacher {
            background: #e8f4ff;
            color: #1a73e8;
        }

        .safe {
            background: #e9fff3;
            color: #00a86b;
        }

        .report {
            background: #fff4e6;
            color: #ff8c00;
        }

        .trust {
            background: #fff0f6;
            color: #d63384;
        }

        .global {
            background: #eef2ff;
            color: #5a4bff;
        }
    </style>

    <br>
    <br>
    <br>

    <!-- VIDEO MODAL -->
    <div class="modal-video" id="videoModal">
        <div class="modal-box"><button class="modal-close" onclick="closeModalVideo()"><i class="fas fa-times"></i></button>
            <div id="modalPlayer" style="width:100%;height:100%;"></div>
        </div>
    </div>

    <?php include 'footer.php'; ?>


    <script>
        function openModalVideo(src) {
            document.getElementById('modalPlayer').innerHTML = `<video src="${src}" controls autoplay style="width:100%;height:100%;object-fit:contain;"></video>`;
            document.getElementById('videoModal').classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeModalVideo() {
            document.getElementById('modalPlayer').innerHTML = '';
            document.getElementById('videoModal').classList.remove('open');
            document.body.style.overflow = '';
        }
        window.addEventListener('click', e => {
            if (e.target === document.getElementById('videoModal')) closeModalVideo();
        });
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') closeModalVideo();
        });

        const row = document.getElementById('videoRow');
        document.getElementById('scrollLeft')?.addEventListener('click', () => row.scrollBy({
            left: -320,
            behavior: 'smooth'
        }));
        document.getElementById('scrollRight')?.addEventListener('click', () => row.scrollBy({
            left: 320,
            behavior: 'smooth'
        }));

        const reveals = document.querySelectorAll('.reveal');
        const io = new IntersectionObserver((entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    setTimeout(() => entry.target.classList.add('visible'), i * 80);
                    io.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });
        reveals.forEach(el => io.observe(el));
    </script>


    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/hover-effect.umd.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>