<!DOCTYPE html>
<html lang="gu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Your Own Classes </title>
    <link rel="shortcut icon" href="img/logo_class.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Gujarati:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --cream: #F8F4EE;
            --ink: #0E0C0A;
            --orange: #E8470A;
            --orange2: #FF6B2B;
            --gold: #C8922A;
            --navy: #0B1F35;
            --warm: #FAF7F2;
            --glass-white: rgba(255, 255, 255, 0.96);
            --shadow-sm: 0 20px 35px -12px rgba(0, 0, 0, 0.08);
            --shadow-hover: 0 30px 45px -18px rgba(0, 0, 0, 0.2);
        }

        body {
            background: var(--cream);
            font-family: 'Outfit', sans-serif;
            color: var(--ink);
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .hero {
            min-height: 100svh;
            position: relative;
            display: grid;
            grid-template-columns: 1fr 1fr;
            overflow: hidden;
        }

        .hero-panel-l {
            background: var(--navy);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 4rem 3.5rem 5rem;
            position: relative;
            z-index: 2;
        }

        .deco-letter {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 42vw;
            position: absolute;
            right: -8vw;
            top: -4vw;
            line-height: 1;
            color: rgba(255, 255, 255, 0.025);
            pointer-events: none;
            user-select: none;
        }

        .hero-issue {
            font-family: 'Outfit', sans-serif;
            font-size: 0.65rem;
            font-weight: 600;
            letter-spacing: 0.28em;
            text-transform: uppercase;
            color: var(--orange2);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .hero-issue::before {
            content: '';
            width: 30px;
            height: 1px;
            background: var(--orange2);
            flex-shrink: 0;
        }

        .hero-h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2rem, 5vw, 5rem);
            font-weight: 900;
            line-height: 1.1;
            color: #FFFFFF;
            margin-bottom: 1.8rem;
        }

        .hero-h1 em {
            font-style: italic;
            color: var(--orange2);
            display: block;
        }

        .hero-sub {
            font-family: 'Noto Sans Gujarati', sans-serif;
            font-size: 0.92rem;
            color: rgba(255, 255, 255, 0.5);
            line-height: 1.8;
            max-width: 360px;
            margin-bottom: 3rem;
        }

        .stat-strip {
            display: flex;
            gap: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1.8rem;
        }

        .s-n {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.6rem;
            color: var(--orange2);
            line-height: 1;
        }

        .s-l {
            font-family: 'Noto Sans Gujarati', sans-serif;
            font-size: 0.65rem;
            color: rgba(255, 255, 255, 0.4);
            margin-top: 3px;
            font-weight: 500;
            letter-spacing: 0.06em;
        }

        .hero-panel-r {
            position: relative;
            overflow: hidden;
        }

        .hero-img-main {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.75) saturate(1.1);
        }

        .hero-panel-r::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(11, 31, 53, 0.55) 0%, rgba(232, 71, 10, 0.12) 100%);
            z-index: 1;
        }

        .img-badge {
            position: absolute;
            bottom: 3rem;
            right: 2.5rem;
            background: var(--orange);
            color: white;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.1rem;
            letter-spacing: 0.1em;
            padding: 0.8rem 1.4rem;
            border-radius: 4px;
            z-index: 2;
            transform: rotate(-2deg);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
        }

        .img-count {
            position: absolute;
            top: 2rem;
            left: 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 3rem;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            z-index: 2;
            line-height: 1;
        }

        .img-count small {
            display: block;
            font-family: 'Outfit', sans-serif;
            font-size: 0.55rem;
            letter-spacing: 0.15em;
            opacity: 0.7;
            text-transform: uppercase;
        }

        .scroll-hint {
            position: absolute;
            bottom: 1.5rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 5;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            color: rgba(255, 255, 255, 0.35);
            font-size: 0.55rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
        }

        .scroll-hint span {
            display: block;
            width: 1px;
            height: 32px;
            background: rgba(255, 255, 255, 0.25);
            animation: scrollbar 1.8s ease infinite;
        }

        @keyframes scrollbar {
            0% {
                transform: scaleY(0);
                transform-origin: top;
            }

            50% {
                transform: scaleY(1);
                transform-origin: top;
            }

            51% {
                transform: scaleY(1);
                transform-origin: bottom;
            }

            100% {
                transform: scaleY(0);
                transform-origin: bottom;
            }
        }

        /* ===== PAGE LAYOUT ===== */
        .pg {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 3rem;
        }

        .sec-intro {
            display: flex;
            align-items: center;
            gap: 1.2rem;
            padding: 5rem 0 2.5rem;
        }

        .sec-num {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 5rem;
            line-height: 1;
            color: var(--orange);
            opacity: 0.15;
            flex-shrink: 0;
        }

        .sec-info h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--ink);
            line-height: 1.2;
        }

        .sec-info p {
            font-family: 'Outfit', sans-serif;
            font-size: 0.72rem;
            font-weight: 500;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: var(--gold);
            margin-top: 4px;
        }

        .sec-rule {
            flex: 1;
            height: 1px;
            background: var(--ink);
            opacity: 0.1;
            min-width: 20px;
        }

        /* ===== UNIFIED CARD ===== */
        .unified-card {
            background: var(--glass-white);
            border-radius: 24px;
            transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
            box-shadow: var(--shadow-sm);
            border: 1px solid rgba(255, 255, 255, 0.7);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .unified-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
            border-color: rgba(232, 71, 10, 0.25);
            background: white;
        }

        .unified-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--orange), var(--orange2), var(--gold));
            z-index: 2;
        }

        .card-icon-area {
            padding: 1.5rem 1.5rem 0.4rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 0.6rem;
        }

        .card-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #FEF0E8, #FFF4EC);
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
            transition: transform 0.3s;
        }

        .unified-card:hover .card-icon {
            transform: scale(1.05) rotate(2deg);
        }

        .card-category-pill {
            font-size: 0.58rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: var(--orange);
            background: rgba(232, 71, 10, 0.1);
            padding: 0.28rem 0.75rem;
            border-radius: 40px;
            white-space: nowrap;
        }

        .card-content-area {
            padding: 0.7rem 1.5rem 1.4rem;
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 0.6rem;
        }

        .card-title {
            font-family: 'Noto Sans Gujarati', sans-serif;
            font-size: 0.95rem;
            font-weight: 800;
            line-height: 1.5;
            color: var(--ink);
        }

        .card-description {
            font-size: 0.72rem;
            color: #5a5a5a;
            line-height: 1.55;
            font-family: 'Outfit', sans-serif;
            opacity: 0.85;
        }

        .card-tags {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-top: 0.3rem;
        }

        .card-tag {
            background: #F4F0EA;
            padding: 3px 10px;
            border-radius: 30px;
            font-size: 0.58rem;
            font-weight: 600;
            color: var(--navy);
        }

        /* ===== GRIDS ===== */
        .grid-3cols {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.6rem;
            margin-bottom: 4rem;
        }

        .grid-5cols {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 1.4rem;
            margin-bottom: 4rem;
        }

        .grid-2cols {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.6rem;
            margin-bottom: 4rem;
        }

        .lecture-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.6rem;
            margin-bottom: 4rem;
        }

        /* ===== TECH CARD (dark) ===== */
        .tech-card-unified {
            background: linear-gradient(135deg, #0F2A3B, #0B1F35);
            border-radius: 24px;
            transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
            box-shadow: var(--shadow-sm);
            border: 1px solid rgba(255, 107, 43, 0.3);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .tech-card-unified:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 45px -18px rgba(0, 0, 0, 0.4);
            border-color: rgba(255, 107, 43, 0.6);
        }

        .tech-card-unified::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--orange), var(--orange2), var(--gold));
            z-index: 2;
        }

        .tech-card-unified .card-icon {
            background: rgba(255, 107, 43, 0.2);
        }

        .tech-card-unified .card-category-pill {
            background: rgba(255, 107, 43, 0.2);
            color: var(--orange2);
        }

        .tech-card-unified .card-title {
            color: white;
        }

        .tech-card-unified .card-description {
            color: rgba(255, 255, 255, 0.7);
        }

        .tech-card-unified .card-tag {
            background: rgba(255, 255, 255, 0.12);
            color: var(--orange2);
        }

        /* ===== FINALE ===== */
        .finale {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 420px;
            overflow: hidden;
            background: var(--navy);
            margin-top: 2rem;
        }

        .finale-img-side {
            position: relative;
            overflow: hidden;
        }

        .finale-img-side img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .finale-text-side {
            background: var(--navy);
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 3.5rem;
        }

        .fin-eyebrow {
            font-family: 'Outfit', sans-serif;
            font-size: 0.65rem;
            font-weight: 600;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            color: var(--orange2);
            margin-bottom: 1.2rem;
        }

        .fin-h2 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(1.8rem, 3vw, 2.8rem);
            font-weight: 900;
            line-height: 1.2;
            color: white;
            margin-bottom: 1.2rem;
        }

        .fin-h2 em {
            font-style: italic;
            color: var(--orange2);
        }

        .fin-p {
            font-family: 'Noto Sans Gujarati', sans-serif;
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.5);
            line-height: 1.85;
            margin-bottom: 2rem;
        }

        /* ===== ANIMATIONS ===== */
        .reveal {
            opacity: 0;
            transform: translateY(32px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .reveal-l {
            opacity: 0;
            transform: translateX(-32px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .reveal-r {
            opacity: 0;
            transform: translateX(32px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .reveal.in,
        .reveal-l.in,
        .reveal-r.in {
            opacity: 1;
            transform: none;
        }

        /* ===================================================================
           RESPONSIVE — TABLET  (≤ 1000px)
        =================================================================== */
        @media (max-width: 1000px) {
            .pg {
                padding: 0 1.8rem;
            }

            /* Hero: stack vertically */
            .hero {
                grid-template-columns: 1fr;
                min-height: auto;
            }

            .hero-panel-l {
                padding: 5rem 2rem 3rem;
                min-height: 55vh;
            }

            .hero-panel-r {
                min-height: 42vw;
            }

            .deco-letter {
                font-size: 60vw;
            }

            /* Grids */
            .grid-3cols {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.2rem;
            }

            .grid-5cols {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.2rem;
            }

            .grid-2cols {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.2rem;
            }

            .lecture-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.2rem;
            }

            /* Section intro */
            .sec-intro {
                padding: 3.5rem 0 2rem;
            }

            .sec-num {
                font-size: 3.5rem;
            }

            .sec-info h2 {
                font-size: 1.5rem;
            }

            /* Finale */
            .finale {
                grid-template-columns: 1fr;
            }

            .finale-img-side {
                min-height: 240px;
            }

            .finale-text-side {
                padding: 2.5rem 2rem;
            }
        }

        /* ===================================================================
           RESPONSIVE — MOBILE  (≤ 640px)
        =================================================================== */
        @media (max-width: 640px) {
            .pg {
                padding: 0 1rem;
            }

            /* Hero */
            .hero-panel-l {
                padding: 4.5rem 1.2rem 2.5rem;
                min-height: auto;
            }

            .hero-h1 {
                font-size: clamp(1.8rem, 8vw, 2.8rem);
                margin-bottom: 1rem;
            }

            .hero-sub {
                font-size: 0.82rem;
                margin-bottom: 2rem;
            }

            .stat-strip {
                gap: 1.2rem;
                flex-wrap: wrap;
            }

            .s-n {
                font-size: 2rem;
            }

            .s-l {
                font-size: 0.6rem;
            }

            .hero-panel-r {
                min-height: 52vw;
            }

            .img-count {
                font-size: 2.2rem;
                padding: 0.4rem 0.8rem;
                top: 1rem;
                left: 1rem;
            }

            .img-badge {
                font-size: 0.7rem;
                padding: 0.55rem 1rem;
                bottom: 1rem;
                right: 1rem;
            }

            .scroll-hint {
                display: none;
            }

            /* Section intro */
            .sec-intro {
                padding: 2.8rem 0 1.5rem;
                gap: 0.8rem;
            }

            .sec-num {
                font-size: 2.5rem;
            }

            .sec-info h2 {
                font-size: 1.2rem;
            }

            .sec-info p {
                font-size: 0.65rem;
            }

            /* All grids → single column */
            .grid-3cols,
            .grid-5cols,
            .grid-2cols,
            .lecture-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
                margin-bottom: 2.5rem;
            }

            /* Cards */
            .card-icon-area {
                padding: 1.2rem 1.2rem 0.3rem;
            }

            .card-content-area {
                padding: 0.6rem 1.2rem 1.2rem;
                gap: 0.5rem;
            }

            .card-icon {
                width: 44px;
                height: 44px;
                font-size: 1.3rem;
            }

            .card-title {
                font-size: 0.9rem;
            }

            .card-description {
                font-size: 0.7rem;
            }

            .card-category-pill {
                font-size: 0.55rem;
                padding: 0.22rem 0.65rem;
            }

            .card-tag {
                font-size: 0.55rem;
                padding: 3px 9px;
            }

            /* Dark section padding */
            .dark-section {
                padding: 1.5rem 0 2.5rem !important;
            }

            /* Finale */
            .finale {
                grid-template-columns: 1fr;
            }

            .finale-img-side {
                min-height: 200px;
            }

            .finale-text-side {
                padding: 2rem 1.2rem;
            }

            .fin-h2 {
                font-size: 1.5rem;
            }

            .fin-p {
                font-size: 0.78rem;
                line-height: 1.75;
            }
        }

        /* ===================================================================
           EXTRA SMALL  (≤ 380px)
        =================================================================== */
        @media (max-width: 380px) {
            .hero-panel-l {
                padding: 4rem 1rem 2rem;
            }

            .hero-h1 {
                font-size: 1.65rem;
            }

            .pg {
                padding: 0 0.8rem;
            }

            .card-icon-area {
                flex-wrap: wrap;
                gap: 0.5rem;
            }

            .card-category-pill {
                font-size: 0.5rem;
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

            html,
            body {
                overflow-x: hidden;
            }

        }
    </style>

    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">શિક્ષકો </h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index">Home</a></li>
                            <li>શિક્ષકો </li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-5 align-self-end d-lg-block d-none">
                            <div class="breadcumb-thumb"><img src="assets/img/normal/breadcumb-thumb1-1.png" alt="img"></div>
                        </div> -->
            </div>
        </div>
    </div>


    <!-- ===== HERO ===== -->
    <section class="hero">
        <div class="hero-panel-l">
            <div class="deco-letter">S</div>
            <!-- <p class="hero-issue">Teacher Selection Framework 2025</p> -->
            <h1 class="hero-h1">
                અમે શ્રેષ્ઠ
                <em>શિક્ષક</em>
                પસંદ કરીએ છીએ
            </h1>
            <p class="hero-sub">
                અમે શિક્ષક પસંદગીમાં નીચેની બાબતો જોઈએ છીએ, જેથી આપના બાળકને ઉત્તમ શિક્ષણ મળી શકે.
            </p>
        </div>
        <div class="hero-panel-r">
            <img class="hero-img-main" style="height: stretch !important;" src="img/your1.jpeg" alt="Teacher">
            <div class="img-count">15<small>Criteria</small></div>
            <div class="img-badge">શ્રેષ્ઠ ગુણવત્તા ✦ ઉત્તમ પરિણામ</div>
        </div>
    </section>

    <!-- ===== SECTION 01 ===== -->
    <div class="pg">
        <div class="sec-intro reveal">
            <div class="sec-num">01</div>
            <div class="sec-info">
                <h2>લાયકાત અને અનુભવ</h2>
                <p>Qualifications &amp; Experience</p>
            </div>
            <div class="sec-rule"></div>
        </div>

        <div class="grid-3cols">
            <div class="unified-card reveal-l">
                <div class="card-icon-area">
                    <div class="card-icon">🎓</div><span class="card-category-pill">શૈક્ષણિક ગુણવત્તા</span>
                </div>
                <div class="card-content-area">
                    <div class="card-title">એન્જિ., આર્ટ્સ, કોમર્સ, બીએડ / પીટીસી — ઉચ્ચતમ ધોરણ</div>
                    <div class="card-description">શૈક્ષણિક લાયકાત, વિષય નિપુણતા અને શિક્ષણ પ્રમાણપત્ર</div>
                    <div class="card-tags"><span class="card-tag">Qualification First</span><span class="card-tag">Accredited</span></div>
                </div>
            </div>
            <div class="unified-card reveal">
                <div class="card-icon-area">
                    <div class="card-icon">📖</div><span class="card-category-pill">શિક્ષણ ગુણવત્તા</span>
                </div>
                <div class="card-content-area">
                    <div class="card-title">ભણાવવાની પદ્ધતિ અને ગુણવત્તા કેવી છે?</div>
                    <div class="card-description">નવીનતા, સ્પષ્ટતા, વિદ્યાર્થી કેન્દ્રિત અભિગમ</div>
                    <div class="card-tags"><span class="card-tag">Student First</span><span class="card-tag">Innovative</span></div>
                </div>
            </div>
            <div class="unified-card reveal-r">
                <div class="card-icon-area">
                    <div class="card-icon">🌟</div><span class="card-category-pill">વ્યક્તિત્વ વિકાસ</span>
                </div>
                <div class="card-content-area">
                    <div class="card-title">વ્યક્તિત્વ અને વર્તન — આદર્શ, સંયમી, બાળકો માટે પ્રેરણાદાયી</div>
                    <div class="card-description">સહાનુભૂતિશીલ સંચાલન, પ્રોફેશનલ ડ્રેસ કોડ અને શિસ્ત</div>
                    <div class="card-tags"><span class="card-tag">Role Model</span><span class="card-tag">Empathy</span></div>
                </div>
            </div>
            <div class="unified-card reveal-l">
                <div class="card-icon-area">
                    <div class="card-icon">⏳</div><span class="card-category-pill">અનુભવ</span>
                </div>
                <div class="card-content-area">
                    <div class="card-title">શિક્ષકનો અનુભવ : ૧૦+ વર્ષ સિદ્ધહસ્ત, અનુકૂલનક્ષમ</div>
                    <div class="card-description">લાંબા ગાળાનો શિક્ષણ અનુભવ, શ્રેષ્ઠ પરિણામો</div>
                    <div class="card-tags"><span class="card-tag">10+ Years</span><span class="card-tag">Expertise</span></div>
                </div>
            </div>
            <div class="unified-card reveal">
                <div class="card-icon-area">
                    <div class="card-icon">💡</div><span class="card-category-pill">શૈક્ષણિક દ્રષ્ટિ</span>
                </div>
                <div class="card-content-area">
                    <div class="card-title">પરંપરાગત અને ડિજિટલ શિક્ષણનો સમન્વય, સતત મૂલ્યાંકન કૌશલ્ય</div>
                    <div class="card-description">ટેકનોલોજી સાથે ક્લાસિક પદ્ધતિનું મિશ્રણ</div>
                    <div class="card-tags"><span class="card-tag">Blended Learning</span></div>
                </div>
            </div>
            <div class="unified-card reveal-r">
                <div class="card-icon-area">
                    <div class="card-icon">🏆</div><span class="card-category-pill">વર્ગખંડ વ્યવસ્થાપન</span>
                </div>
                <div class="card-content-area">
                    <div class="card-title">શિસ્ત અને સંવાદિતા, બાળકોને સક્રિય રાખવાની ક્ષમતા</div>
                    <div class="card-description">અસરકારક નિયંત્રણ, સકારાત્મક વાતાવરણ</div>
                    <div class="card-tags"><span class="card-tag">Classroom Leader</span></div>
                </div>
            </div>
        </div>

        <!-- ===== SECTION 02 ===== -->
        <div class="sec-intro reveal">
            <div class="sec-num">02</div>
            <div class="sec-info">
                <h2>ભણાવવાની પ્રક્રિયા</h2>
                <p>Teaching Methodology</p>
            </div>
            <div class="sec-rule"></div>
        </div>

        <div class="grid-5cols">
            <div class="unified-card reveal">
                <div class="card-icon-area">
                    <div class="card-icon">💻</div><span class="card-category-pill">ટેકનિકલ</span>
                </div>
                <div class="card-content-area">
                    <div class="card-title">ટેકનિકલ જ્ઞાન અને કૌશલ્ય કેવું છે?</div>
                    <div class="card-tags"><span class="card-tag">Technical Skill</span></div>
                </div>
            </div>
            <div class="unified-card reveal">
                <div class="card-icon-area">
                    <div class="card-icon">🎤</div><span class="card-category-pill">આત્મવિશ્વાસ</span>
                </div>
                <div class="card-content-area">
                    <div class="card-title">ભણાવતા વખતે આત્મ-વિશ્વાસ કેવો છે?</div>
                    <div class="card-tags"><span class="card-tag">Confidence</span></div>
                </div>
            </div>
            <div class="unified-card reveal">
                <div class="card-icon-area">
                    <div class="card-icon">📊</div><span class="card-category-pill">પ્રેઝન્ટેશન</span>
                </div>
                <div class="card-content-area">
                    <div class="card-title">વિષયને સમજાવવાની પ્રેઝન્ટેશન સ્કિલ કેવી છે?</div>
                    <div class="card-tags"><span class="card-tag">Presentation</span></div>
                </div>
            </div>
            <div class="unified-card reveal">
                <div class="card-icon-area">
                    <div class="card-icon">🎨</div><span class="card-category-pill">વિઝ્યુઅલ</span>
                </div>
                <div class="card-content-area">
                    <div class="card-title">ચિત્રો અને ઉદાહરણોનો ઉપયોગ કરે છે?</div>
                    <div class="card-tags"><span class="card-tag">Visual Examples</span></div>
                </div>
            </div>
            <div class="unified-card reveal">
                <div class="card-icon-area">
                    <div class="card-icon">😊</div><span class="card-category-pill">સ્વર અને સ્મિત</span>
                </div>
                <div class="card-content-area">
                    <div class="card-title">મીઠો અવાજ અને સ્મિત સાથે ભણાવે છે?</div>
                    <div class="card-tags"><span class="card-tag">Tone &amp; Smile</span></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== SECTION 03 — dark bg ===== -->
    <div style="background: var(--navy); margin-top: 1rem; padding: 2rem 0 4rem;" class="dark-section">
        <div class="pg">
            <div class="sec-intro reveal">
                <div class="sec-num" style="color:rgb(254,84,11);">03</div>
                <div class="sec-info">
                    <h2 style="color:white;">ટેકનિકલ અને ભાષા</h2>
                    <p style="color:var(--gold);">Technical Skills &amp; Language</p>
                </div>
                <div class="sec-rule" style="background:rgba(255,255,255,0.2);"></div>
            </div>
            <div class="grid-2cols">
                <div class="tech-card-unified reveal-l">
                    <div class="card-icon-area">
                        <div class="card-icon">⚙️</div><span class="card-category-pill">ટેકનિકલ કુશળતા</span>
                    </div>
                    <div class="card-content-area">
                        <div class="card-title">ટેકનિકલ જ્ઞાન અને કૌશલ્ય – ડિજિટલ ટૂલ્સ, સ્માર્ટ વિજ્ઞાન</div>
                        <div class="card-description">આધુનિક ટેકનોલોજી, ઓનલાઈન ટીચિંગ ટૂલ્સ, કમ્પ્યુટર સાક્ષરતા, ઇન્ટરેક્ટિવ વ્હાઇટબોર્ડ, ડિજિટલ સ્માર્ટ ક્લાસ.</div>
                        <div class="card-tags"><span class="card-tag">Tech Skill</span><span class="card-tag">Digital Tools</span><span class="card-tag">Smart Class</span></div>
                    </div>
                </div>
                <div class="tech-card-unified reveal-r">
                    <div class="card-icon-area">
                        <div class="card-icon">🗣️</div><span class="card-category-pill">ભાષા પ્રવાહિતા</span>
                    </div>
                    <div class="card-content-area">
                        <div class="card-title">સ્પષ્ટ ગુજરાતી ભાષા બોલે છે? ઉચ્ચારણ, શબ્દસમૂહ, સરળતા</div>
                        <div class="card-description">શુદ્ધ ઉચ્ચારણ, વ્યાકરણની શુદ્ધતા, સરળ અને પ્રવાહી વાતચીત, વિદ્યાર્થીઓ માટે સરળતાથી સમજાય તેવી ભાષા.</div>
                        <div class="card-tags"><span class="card-tag">Clear Gujarati</span><span class="card-tag">Pronunciation</span><span class="card-tag">Fluency</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== SECTION 04 ===== -->
    <div class="pg">
        <div class="sec-intro reveal">
            <div class="sec-num">04</div>
            <div class="sec-info">
                <h2>લેક્ચર ગુણવત્તા અને સેટઅપ</h2>
                <p>Lecture Quality &amp; Setup</p>
            </div>
            <div class="sec-rule"></div>
        </div>

        <div class="lecture-grid">
            <div class="unified-card reveal">
                <div class="card-icon-area">
                    <div class="card-icon">🔊</div><span class="card-category-pill">ઓડિયો ગુણવત્તા</span>
                </div>
                <div class="card-content-area">
                    <div class="card-title">લેક્ચરમાં શિક્ષકનો અવાજ સ્પષ્ટ સંભળાય છે?</div>
                    <div class="card-description">સ્પષ્ટ ઓડિયો, યોગ્ય વોલ્યુમ, કોઈ અવાજનો વિક્ષેપ નહીં.</div>
                    <div class="card-tags"><span class="card-tag">Clear Audio</span><span class="card-tag">No Distortion</span></div>
                </div>
            </div>
            <div class="unified-card reveal">
                <div class="card-icon-area">
                    <div class="card-icon">📹</div><span class="card-category-pill">વીડિયો સેટઅપ</span>
                </div>
                <div class="card-content-area">
                    <div class="card-title">મોબાઈલ કેમેરો બરાબર ગોઠવ્યો? બોર્ડ અને શિક્ષક સ્પષ્ટ દેખાય</div>
                    <div class="card-description">યોગ્ય કેમેરા એંગલ, સ્થિર ફ્રેમ, બોર્ડની સંપૂર્ણ દૃશ્યતા.</div>
                    <div class="card-tags"><span class="card-tag">Proper Angle</span><span class="card-tag">Stable Frame</span></div>
                </div>
            </div>
            <div class="unified-card reveal-r">
                <div class="card-icon-area">
                    <div class="card-icon">💡</div><span class="card-category-pill">લાઇટિંગ અને બોર્ડ</span>
                </div>
                <div class="card-content-area">
                    <div class="card-title">પૂરતો પ્રકાશ, મોટા અક્ષરો — બાળકો બોર્ડ સરળતાથી વાંચી શકે</div>
                    <div class="card-description">સારી લાઇટિંગ, વાંચી શકાય તેવા અક્ષરો, કોઈ ઝગમગાટ નહીં.</div>
                    <div class="card-tags"><span class="card-tag">Well Lit</span><span class="card-tag">Readable Text</span></div>
                </div>
            </div>
            <div class="unified-card reveal">
                <div class="card-icon-area">
                    <div class="card-icon">🌿</div><span class="card-category-pill">વાતાવરણ</span>
                </div>
                <div class="card-content-area">
                    <div class="card-title">જે રૂમમાં લેક્ચર લે છે, ત્યાં શાંતિ છે?</div>
                    <div class="card-description">શાંત વાતાવરણ, અવાજ વિનાનું સ્થળ, એકાગ્રતા માટે અનુકૂળ.</div>
                    <div class="card-tags"><span class="card-tag">Peaceful</span><span class="card-tag">No Noise</span></div>
                </div>
            </div>
            <div class="unified-card reveal">
                <div class="card-icon-area">
                    <div class="card-icon">✍️</div><span class="card-category-pill">હસ્તાક્ષર</span>
                </div>
                <div class="card-content-area">
                    <div class="card-title">શિક્ષકના અક્ષર વંચાય એવા સ્પષ્ટ છે?</div>
                    <div class="card-description">સ્વચ્છ અને સુવાચ્ય હસ્તાક્ષર, યોગ્ય અક્ષરનું કદ, સરળ વાંચન.</div>
                    <div class="card-tags"><span class="card-tag">Legible</span><span class="card-tag">Neat Writing</span></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== FINALE ===== -->
    <div class="finale">
        <div class="finale-img-side">
            <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=800&q=80" alt="Student success">
        </div>
        <div class="finale-text-side reveal-r">
            <p class="fin-eyebrow">પરિણામ</p>
            <h2 class="fin-h2">ઉત્તમ શિક્ષક = <em>ઉજ્જવળ ભવિષ્ય</em></h2>
            <p class="fin-p">
                આ માપદંડ આપના બાળકની શ્રેષ્ઠ શૈક્ષણિક સફળતા માટે ખાસ રચાયેલ છે —
                જ્યાં દરેક વિદ્યાર્થીને વ્યક્તિગત ધ્યાન આપવામાં આવે છે અને અનુભવી શિક્ષકો દ્વારા સરળ, સ્પષ્ટ અને અસરકારક રીતે વિષય ભણાવવામાં આવે છે.
                અહીં માત્ર પાઠ્યપુસ્તક આધારિત અભ્યાસ નહીં, પરંતુ વિષયને મૂળથી સમજાવીને ઊંડું જ્ઞાન વિકસાવવામાં ધ્યાન આપવામાં આવે છે,
                જે વિદ્યાર્થીઓમાં વિચારશક્તિ અને આત્મવિશ્વાસ બંનેનો વિકાસ કરે છે.
            </p>
        </div>
    </div>

    <script>
        const io = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('in');
                    io.unobserve(e.target);
                }
            });
        }, {
            threshold: 0.08,
            rootMargin: '0px 0px -30px 0px'
        });
        document.querySelectorAll('.reveal, .reveal-l, .reveal-r').forEach(el => io.observe(el));
    </script>

    <?php include 'footer.php'; ?>


    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/hover-effect.umd.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>