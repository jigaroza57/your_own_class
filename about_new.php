<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">
<!-- Mirrored from html.themehour.net/escul/demo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2026 06:59:25 GMT -->

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
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&amp;family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;family=Noto+Serif:ital,wght@0,100..900;1,100..900&amp;family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        @media (max-width: 768px) {
            .img-box1 .img2 {
                right: -2px;
            }
        }
    </style>
</head>

<body class="th-magic-cursor">

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

        @media screen and (min-width: 768px) {

            html,
            body {
                overflow-x: hidden !important;
            }
        }
    </style>


    <div id="">

        <div id="">

            <div class="breadcumb-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="breadcumb-content">
                                <h1 class="breadcumb-title">YOC વિશે</h1>
                                <ul class="breadcumb-menu">
                                    <li><a href="index">Home</a></li>
                                    <li>YOC વિશે</li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-lg-5 align-self-end d-lg-block d-none">
                            <div class="breadcumb-thumb"><img src="assets/img/normal/breadcumb-thumb1-1.png" alt="img"></div>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- ----------------------- About Section start ------------------------------------ -->

            <style>
                :root {
                    --orange: #FF6B1A;
                    --orange-soft: #FFF0E8;
                    --orange-mid: rgba(255, 107, 26, 0.12);
                    --navy: #0D2137;
                    --navy-mid: #1A3558;
                    --text-body: #4A5568;
                    --text-head: #0D2137;
                    --white: #FFFFFF;
                    --bg: #F4F7FC;
                    --card-bg: #FFFFFF;
                    --border: rgba(13, 33, 55, 0.07);
                }



                /* ===== SECTION ===== */
                #about-sec {
                    position: relative;
                    padding: 110px 0 100px;
                    background: var(--bg);
                    overflow: hidden;
                }

                /* Decorative background shapes */
                #about-sec::before {
                    content: '';
                    position: absolute;
                    top: -80px;
                    right: -120px;
                    width: 500px;
                    height: 500px;
                    background: radial-gradient(circle, rgba(255, 107, 26, 0.08) 0%, transparent 70%);
                    border-radius: 50%;
                    pointer-events: none;
                }

                #about-sec::after {
                    content: '';
                    position: absolute;
                    bottom: -60px;
                    left: -80px;
                    width: 400px;
                    height: 400px;
                    background: radial-gradient(circle, rgba(13, 33, 55, 0.05) 0%, transparent 70%);
                    border-radius: 50%;
                    pointer-events: none;
                }

                /* Grid pattern overlay */
                .grid-bg {
                    position: absolute;
                    inset: 0;
                    background-image:
                        linear-gradient(rgba(13, 33, 55, 0.03) 1px, transparent 1px),
                        linear-gradient(90deg, rgba(13, 33, 55, 0.03) 1px, transparent 1px);
                    background-size: 50px 50px;
                    pointer-events: none;
                }



                /* ===== LEFT IMAGE PANEL ===== */
                .left-panel {
                    position: relative;
                }

                .image-stack {
                    position: relative;
                    height: 530px;
                }

                /* Orange blob behind main image */
                .blob-bg {
                    position: absolute;
                    top: 20px;
                    left: 20px;
                    width: 78%;
                    height: 420px;
                    background: linear-gradient(135deg, #FFE4D4, #FFD0B5);
                    border-radius: 24px;
                    z-index: 0;
                }

                .img-main {
                    position: absolute;
                    top: -10px;
                    left: 0;
                    width: 76%;
                    height: 420px;
                    border-radius: 24px;
                    overflow: hidden;
                    box-shadow: 0 25px 60px rgba(13, 33, 55, 0.15);
                    z-index: 2;
                    border: 5px solid var(--white);
                }

                .img-main img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    display: block;
                    transition: transform 0.6s ease;
                }

                .img-main:hover img {
                    transform: scale(1.05);
                }

                .img-secondary {
                    position: absolute;
                    bottom: 0;
                    right: 0;
                    width: 50%;
                    height: 240px;
                    border-radius: 20px;
                    overflow: hidden;
                    box-shadow: 0 20px 50px rgba(13, 33, 55, 0.15);
                    z-index: 3;
                    border: 5px solid var(--white);
                }

                .img-secondary img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    transition: transform 0.6s ease;
                }

                .img-secondary:hover img {
                    transform: scale(1.05);
                }

                /* Floating stat cards */
                .float-card {
                    position: absolute;
                    background: var(--white);
                    border-radius: 16px;
                    padding: 14px 20px;
                    box-shadow: 0 10px 35px rgba(13, 33, 55, 0.12);
                    z-index: 6;
                    border: 1.5px solid var(--border);
                }

                .float-card.card-1 {
                    top: 30px;
                    right: -15px;
                    animation: float1 3s ease-in-out infinite alternate;
                }

                .float-card.card-2 {
                    bottom: 50px;
                    left: -20px;
                    animation: float1 3s ease-in-out infinite alternate;
                    animation-delay: 1.5s;
                }

                @keyframes float1 {
                    from {
                        transform: translateY(0);
                    }

                    to {
                        transform: translateY(-10px);
                    }
                }

                .float-card .fc-icon {
                    width: 34px;
                    height: 34px;
                    background: var(--orange-soft);
                    border-radius: 10px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: var(--orange);
                    font-size: 14px;
                    margin-bottom: 6px;
                }

                .float-card .num {
                    font-size: 22px;
                    font-weight: 800;
                    color: var(--navy);
                    line-height: 1;
                    font-family: 'Baloo Bhai 2', cursive;
                }

                .float-card .lbl {
                    font-size: 11px;
                    color: var(--text-body);
                    font-weight: 500;
                    margin-top: 2px;
                }

                /* ISO badge */
                .iso-badge {
                    position: absolute;
                    bottom: 50px;
                    right: 20px;
                    width: 78px;
                    height: 78px;
                    background: linear-gradient(135deg, var(--orange), #FF9346);
                    border-radius: 50%;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    color: white;
                    font-size: 10px;
                    font-weight: 700;
                    box-shadow: 0 8px 30px rgba(255, 107, 26, 0.4);
                    z-index: 7;
                    animation: badgePulse 2.5s ease-in-out infinite;
                    border: 3px solid white;
                }

                .iso-badge .iso-big {
                    font-size: 15px;
                    font-weight: 800;
                }

                @keyframes badgePulse {

                    0%,
                    100% {
                        box-shadow: 0 8px 30px rgba(255, 107, 26, 0.4);
                    }

                    50% {
                        box-shadow: 0 12px 40px rgba(255, 107, 26, 0.6);
                    }
                }

                /* Decorative dots */
                .dots-deco {
                    position: absolute;
                    bottom: 80px;
                    left: -30px;
                    display: grid;
                    grid-template-columns: repeat(4, 10px);
                    gap: 8px;
                    z-index: 1;
                }

                .dots-deco span {
                    width: 8px;
                    height: 8px;
                    background: var(--orange);
                    border-radius: 50%;
                    opacity: 0.3;
                }

                .dots-deco span:nth-child(even) {
                    opacity: 0.15;
                }

                /* ===== RIGHT CONTENT ===== */
                .right-panel {}

                .tag-pill {
                    display: inline-flex;
                    align-items: center;
                    gap: 8px;
                    background: var(--orange-soft);
                    border: 1.5px solid rgba(255, 107, 26, 0.2);
                    color: var(--orange);
                    padding: 7px 18px;
                    border-radius: 50px;
                    font-size: 12px;
                    font-weight: 700;
                    letter-spacing: 1.2px;
                    text-transform: uppercase;
                    margin-bottom: 20px;
                }

                .main-title {
                    /* font-family: 'Baloo Bhai 2', cursive; */
                    font-size: 42px;
                    font-weight: 800;
                    line-height: 1.2;
                    color: var(--text-head);
                    margin-bottom: 18px;
                }

                .main-title .brand {
                    color: var(--orange);
                    position: relative;
                }



                .desc-text {
                    color: var(--text-body);
                    font-size: 14.5px;
                    line-height: 1.85;
                    margin-bottom: 10px;
                }

                .desc-text strong {
                    color: var(--navy);
                }

                /* Horizontal rule */
                .h-rule {
                    display: flex;
                    align-items: center;
                    gap: 12px;
                    margin: 22px 0;
                }

                .h-rule::before {
                    content: '';
                    width: 50px;
                    height: 3px;
                    background: var(--orange);
                    border-radius: 2px;
                    flex-shrink: 0;
                }

                .h-rule::after {
                    content: '';
                    flex: 1;
                    height: 1px;
                    background: var(--border);
                }

                /* Stats strip */
                .stats-row {
                    display: grid;
                    grid-template-columns: repeat(4, 1fr);
                    gap: 10px;
                    margin-bottom: 24px;
                }

                .stat-box {
                    background: var(--white);
                    border: 1.5px solid var(--border);
                    border-radius: 14px;
                    padding: 16px 10px;
                    text-align: center;
                    transition: all 0.3s ease;
                    cursor: default;
                    box-shadow: 0 4px 16px rgba(13, 33, 55, 0.05);
                }

                .stat-box:hover {
                    border-color: var(--orange);
                    transform: translateY(-4px);
                    box-shadow: 0 12px 30px rgba(255, 107, 26, 0.12);
                }

                .stat-box:hover .s-num {
                    color: var(--orange);
                }

                .s-num {
                    font-size: 22px;
                    font-weight: 800;
                    color: var(--navy);
                    font-family: 'Baloo Bhai 2', cursive;
                    transition: color 0.3s;
                }

                .s-label {
                    font-size: 11px;
                    color: var(--text-body);
                    margin-top: 3px;
                    font-weight: 500;
                }

                /* Feature grid */
                .feature-grid {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 10px;
                    margin-bottom: 30px;
                }

                .feature-item {
                    display: flex;
                    align-items: center;
                    gap: 12px;
                    background: var(--white);
                    border: 1.5px solid var(--border);
                    border-radius: 12px;
                    padding: 12px 15px;
                    transition: all 0.3s ease;
                    cursor: default;
                    box-shadow: 0 3px 12px rgba(13, 33, 55, 0.04);
                }

                .feature-item:hover {
                    border-color: var(--orange);
                    background: var(--orange-soft);
                    transform: translateX(5px);
                    box-shadow: 0 8px 24px rgba(255, 107, 26, 0.1);
                }

                .feature-item .icon {
                    width: 36px;
                    height: 36px;
                    background: var(--orange-soft);
                    border-radius: 10px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: var(--orange);
                    font-size: 14px;
                    flex-shrink: 0;
                    transition: all 0.3s;
                }

                .feature-item:hover .icon {
                    background: var(--orange);
                    color: white;
                }

                .feature-item span {
                    font-size: 13px;
                    font-weight: 600;
                    color: var(--navy);
                    font-family: 'Baloo Bhai 2', cursive;
                }

                /* Buttons */
                .btn-group {
                    display: flex;
                    gap: 14px;
                    flex-wrap: wrap;
                }

                .btn-primary {
                    display: inline-flex;
                    align-items: center;
                    gap: 9px;
                    background: linear-gradient(135deg, var(--orange), #FF8C3A);
                    color: white;
                    padding: 14px 30px;
                    border-radius: 50px;
                    text-decoration: none;
                    font-weight: 700;
                    font-size: 14px;
                    box-shadow: 0 8px 24px rgba(255, 107, 26, 0.35);
                    transition: all 0.3s ease;
                    position: relative;
                    overflow: hidden;
                }

                .btn-primary::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: -100%;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.25), transparent);
                    transition: left 0.5s;
                }

                .btn-primary:hover::before {
                    left: 100%;
                }

                .btn-primary:hover {
                    transform: translateY(-3px);
                    box-shadow: 0 14px 35px rgba(255, 107, 26, 0.45);
                }

                .btn-outline {
                    display: inline-flex;
                    align-items: center;
                    gap: 9px;
                    background: transparent;
                    color: var(--navy);
                    padding: 13px 28px;
                    border-radius: 50px;
                    text-decoration: none;
                    font-weight: 700;
                    font-size: 14px;
                    border: 2px solid rgba(13, 33, 55, 0.18);
                    transition: all 0.3s ease;
                }

                .btn-outline:hover {
                    border-color: var(--orange);
                    color: var(--orange);
                    background: var(--orange-soft);
                    transform: translateY(-3px);
                }

                /* ===== ANIMATIONS ===== */
                .fade-up {
                    opacity: 0;
                    transform: translateY(28px);
                    animation: fadeUp 0.65s ease forwards;
                }

                @keyframes fadeUp {
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                .d1 {
                    animation-delay: 0.05s;
                }

                .d2 {
                    animation-delay: 0.15s;
                }

                .d3 {
                    animation-delay: 0.25s;
                }

                .d4 {
                    animation-delay: 0.35s;
                }

                .d5 {
                    animation-delay: 0.45s;
                }

                .d6 {
                    animation-delay: 0.55s;
                }

                .d7 {
                    animation-delay: 0.65s;
                }

                /* ===== RESPONSIVE ===== */
                @media(max-width: 960px) {
                    .row {
                        grid-template-columns: 1fr;
                        gap: 50px;
                    }



                    .img-main {
                        width: 100%;
                        height: 350px;
                    }



                    .stats-row {
                        grid-template-columns: repeat(2, 1fr);
                    }
                }

                @media(max-width: 540px) {
                    .main-title {
                        font-size: 30px;
                    }

                    .feature-grid {
                        grid-template-columns: 1fr;
                    }



                    .blob-bg {
                        left: 0px;
                        width: 100%;
                    }

                    .img-secondary {
                        right: unset;
                        width: 100%;
                        height: 300px;
                        bottom: -88px;
                    }

                    .right-panel {
                        margin-top: 22%;
                    }


                    .iso-badge {
                        display: none;
                    }
                }

                @media (max-width: 768px) {
                    .mob_top {
                        margin-top: -36% !important;
                    }
                }
            </style>


            <section id="about-sec">
                <div class="grid-bg"></div>
                <div class="container">
                    <div class="row">

                        <!-- LEFT IMAGE -->
                        <div class="col-lg-6 col-md-12 left-panel">

                            <br>
                            <br>
                            <br>

                            <div class="image-stack">

                                <div class="blob-bg"></div>

                                <div class="dots-deco">
                                    <span></span><span></span><span></span><span></span>
                                    <span></span><span></span><span></span><span></span>
                                    <span></span><span></span><span></span><span></span>
                                </div>

                                <div class="img-main">
                                    <img src="img/1.png" alt="Students Learning">
                                </div>

                                <div class="img-secondary">
                                    <img src="img/about_2.png" alt="Online Class">
                                </div>



                            </div>
                        </div>

                        <!-- RIGHT CONTENT -->
                        <div class="col-lg-6 col-md-12 right-panel">


                            <div>
                                <span class="sub-title th_fade_anim">
                                    <span class="p-2" style="border: 2px solid red; border-radius: 10px; background-color: white; ">
                                        <i class="fas fa-graduation-cap"></i> અમારા વિશે
                                    </span>
                                </span>
                            </div>




                            <h2 class="main-title fade-up d3">
                                <span class="brand">Your Own Class (YOC)</span>
                                સાથે ઘરે બેઠા શ્રેષ્ઠ શિક્ષણ મેળવો
                            </h2>

                            <p class="desc-text fade-up d3">
                                <strong>Your Own Class (YOC)</strong> — Sheth Saga Pvt. Ltd.
                                (શેઠ ગ્રુપની સહયોગી પેઢી) દ્વારા સ્થાપિત પ્લેટફોર્મ છે.
                                33+ વર્ષના અનુભવ સાથે ભારતની ભરોસાપાત્ર કંપની દ્વારા સંચાલિત
                                ઓનલાઇન શિક્ષણ સંસ્થા.
                            </p>

                            <p class="desc-text fade-up d3">
                                ગામ હોય કે શહેર — દરેક વિદ્યાર્થી માટે
                                ઉચ્ચ ગુણવત્તાનું <strong>LIVE ક્લાસ</strong> ગુજરાતી ભાષામાં,
                                ઘરે બેઠા ઉપલબ્ધ.
                            </p>

                            <p class="desc-text fade-up d3">
                                YOC દ્વારા આધુનિક સશક્તિકરણ માટે જોડાઓ.
                                ઓનલાઇન શિક્ષણ + IT ટેકનોલોજી + ઉત્પાદન + કન્સલ્ટેશન + નવીનતા
                                જેવા વિવિધ ક્ષેત્રોમાં અમે સક્રિય છીએ.
                            </p>

                            <div class="h-rule fade-up d4"></div>

                            <!-- Features -->
                            <div class="feature-grid fade-up d5">
                                <div class="feature-item">
                                    <div class="icon"><i class="fas fa-video"></i></div>
                                    <span>LIVE ક્લાસ + રેકોર્ડિંગ</span>
                                </div>
                                <div class="feature-item">
                                    <div class="icon"><i class="fas fa-language"></i></div>
                                    <span>ગુજરાતી ભાષા સપોર્ટ</span>
                                </div>
                                <div class="feature-item">
                                    <div class="icon"><i class="fas fa-headset"></i></div>
                                    <span>24/7 શિક્ષક સહાય</span>
                                </div>

                                <div class="feature-item">
                                    <div class="icon"><i class="fas fa-mobile-alt"></i></div>
                                    <span>મોબાઇલ એપ્લિકેશન ઍક્સેસ</span>
                                </div>
                                <div class="feature-item">
                                    <div class="icon"><i class="fas fa-certificate"></i></div>
                                    <span>પ્રમાણપત્ર કાર્યક્રમ</span>
                                </div>
                            </div>

                            <!-- Buttons -->
                            <!-- <div class="btn-group fade-up d7">
                                <a href="#contact" class="btn-primary">
                                    <i class="fas fa-pen"></i>
                                    નોંધણી કરો
                                </a>
                                <a href="#courses" class="btn-outline">
                                    <i class="fas fa-book-open"></i>
                                    અભ્યાસક્રમ જુઓ
                                </a>
                            </div> -->

                        </div>


                    </div>
                </div>
            </section>


            <!-- ----------------------- About Section End ------------------------------------ -->

            <!-- ----------------------- Counter Section Start ------------------------------------ -->



            <style>
                .counter-card .box-number {
                    font-size: 30px !important;
                }
            </style>

            <div class="space-bottom overflow-hidden" style="background: #f0f6fc;">
                <div class="">
                    <div class="counter-wrap8 th_fade_anim">
                        <div class="counter-card style8 hover-item">
                            <div class="media-body">
                                <h2 class="box-number"><span class="counter-number">2850</span><span
                                        class="text-theme2 fw-normal">+</span></h2>
                                <p class="box-text">વિદ્યાર્થીઓ</p>
                            </div>
                        </div>
                        <div class="counter-card style8 hover-item">
                            <div class="media-body">
                                <h2 class="box-number"><span class="counter-number">33</span><span
                                        class="text-theme2 fw-normal">+</span></h2>
                                <p class="box-text">વર્ષનો વેપાર અનુભવ</p>
                            </div>
                        </div>

                        <div class="counter-card style8 hover-item item-active">
                            <div class="media-body">
                                <h2 class="box-number"><span class="counter-number">30</span><span
                                        class="text-theme2 fw-normal">+</span></h2>
                                <p class="box-text"> જિલ્લાઓ માં હાજરી </p>
                            </div>
                        </div>
                        <div class="counter-card style8 hover-item item-active">
                            <div class="media-body">
                                <h2 class="box-number"><span class="counter-number">275</span><span
                                        class="text-theme2 fw-normal">+</span></h2>
                                <p class="box-text"> તાલુકા માં હાજરી </p>
                            </div>
                        </div>
                        <div class="counter-card style8 hover-item">
                            <div class="media-body">
                                <h2 class="box-number"><span class="counter-number">90</span><span
                                        class="text-theme2 fw-normal">+</span></h2>
                                <p class="box-text">શિક્ષકો</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-- ----------------------- Counter Section End ------------------------------------ -->

            <!-- ----------------------- અમારો હેતુ Section Start ------------------------------------ -->

            <section class="space overflow-hidden">
                <!-- <div class="process-bg-shape2-1 shape-mockup" data-left="0" data-top="0">
                    <div class="thumb"><img src="img/images.png" alt="img"></div>
                </div> -->
                <!-- <div class="process-bg-shape2-2 shape-mockup" data-speed="0.9" data-right="4%" data-top="10%">
                    <div class="thumb"><img src="img/images.png" alt="img"></div>
                </div> -->
                <div class="container">
                    <div class="row gy-50 flex-row-reverse">
                        <div class="col-xl-6">
                            <div class="process-wrap2">
                                <div class="title-area">

                                    <span class="sub-title th_fade_anim">

                                        <span class="p-2" style="border: 2px solid red; border-radius: 10px; background-color: white;"> <img src="assets/img/icon/subtitle-icon1-1.svg" alt="img"> &nbsp; અમારો હેતુ: જ્ઞાન અને સમૃદ્ધિ </span>
                                    </span>


                                    <h2 class="main-title fade-up d3" style="color: #1A3558;">
                                        <span class="brand">અમે કેવી રીતે</span>
                                        કામ કરીએ છીએ
                                    </h2>



                                    <!-- <span class="sub-title text-theme th_fade_anim">
                                        <img src="assets/img/icon/subtitle-icon1-1.svg" alt="img">
                                        અમારો હેતુ: જ્ઞાન અને સમૃદ્ધિ
                                    </span>
                                    <h2 class="sec-title th_fade_anim">
                                        <span class="th-text-perspective">
                                            અમે કેવી રીતે કામ કરીએ છીએ
                                        </span>
                                    </h2> -->
                                </div>
                                <div class="process-card-wrap2">
                                    <div class="process-card2 th_fade_anim">
                                        <div class="box-number">01</div>
                                        <div class="process-card-content">
                                            <div class="box-icon"><img src="assets/img/icon/process-card-icon2-1.svg"
                                                    alt="img"></div>
                                            <div class="box-content">
                                                <h3 class="box-title">શિક્ષણ અને રોજગાર</h3>
                                                <p class="box-text">નાના-મોટા શહેર તથા ગામના લોકોને શિક્ષણ દ્વારા સશક્ત કરવા અને તેમને રોજગારીની નવી તકો પૂરી પાડવી.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="process-card2 th_fade_anim">
                                        <div class="box-number">02</div>
                                        <div class="process-card-content">
                                            <div class="box-icon"><img src="assets/img/icon/process-card-icon2-2.svg"
                                                    alt="img"></div>
                                            <div class="box-content">
                                                <h3 class="box-title">YOC માં પ્રવેશ કરાવવો</h3>
                                                <p class="box-text">દરેક વિદ્યાર્થીના એડમિશન પર આકર્ષક કમિશન મેળવો.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>

                                    <div class="process-card2 th_fade_anim">
                                        <div class="box-number">03</div>
                                        <div class="process-card-content">
                                            <div class="box-icon"><img src="assets/img/icon/process-card-icon2-3.svg"
                                                    alt="img"></div>
                                            <div class="box-content">
                                                <h3 class="box-title">પુણ્ય અને પૈસા</h3>
                                                <p class="box-text">સમાજસેવા સાથે આર્થિક લાભનો સુમેળ સાધો.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 align-self-end">
                            <div class="process-img-box2 th_fade_anim"><img src="img/hetu.png"
                                    alt="img"></div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- ----------------------- અમારો હેતુ Section End ------------------------------------ -->

            <br>
            <br>
            <br>
            <br>
            <br>

            <!-- ----------------------- નાણાકીય તલુ ના Section Start ------------------------------------ -->


            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Gujarati:wght@400;600;700&display=swap" rel="stylesheet">

            <style>
                :root {
                    --primary: #0f172a;
                    --accent: #F38125;
                    --gradient: linear-gradient(135deg, #1A3558, #0f172a);
                }

                body {
                    font-family: 'Noto Sans Gujarati', sans-serif;
                    margin: 0;
                    /* background: radial-gradient(circle at top, #f8fafc, #e2e8f0); */
                    color: #1e293b;
                }

                /* HERO */
                .hero-title {
                    text-align: center;
                    margin-bottom: 70px;
                }

                .hero-title h1 {
                    font-size: 48px;
                    font-weight: 800;
                    margin: 0;
                    background: linear-gradient(90deg, #1A3558, #F38125);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                }

                .hero-title p {
                    font-size: 20px;
                    color: #64748b;
                    margin-top: 15px;
                }

                /* GRID */
                .comparison-wrapper {
                    display: flex;
                    gap: 30px;
                    align-items: stretch;
                }

                /* CARD */
                .premium-card {
                    flex: 1;
                    border-radius: 25px;
                    overflow: hidden;
                    background: rgba(255, 255, 255, 0.9);
                    backdrop-filter: blur(10px);
                    border: 1px solid rgba(0, 0, 0, 0.05);
                    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
                    transition: 0.3s;
                }

                .premium-card:hover {
                    transform: translateY(-10px);
                }

                /* IMAGE */
                .img-wrapper {
                    height: 350px;
                    overflow: hidden;
                }

                .img-wrapper img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }

                /* TAG */
                .overlay-tag {
                    position: absolute;
                    top: 20px;
                    left: 20px;
                    background: white;
                    padding: 6px 16px;
                    border-radius: 20px;
                    font-weight: 600;
                    font-size: 13px;
                }

                /* BODY */
                .card-body {
                    padding: 30px;
                }

                .card-body h3 {
                    font-size: 28px;
                    margin-bottom: 20px;
                }

                /* FEATURES */
                .feature-row {
                    display: flex;
                    align-items: center;
                    gap: 12px;
                    margin-bottom: 14px;
                    font-size: 16px;
                }

                .icon-wrap {
                    width: 28px;
                    height: 28px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .bad-icon {
                    background: #fee2e2;
                    color: red;
                }

                .good-icon {
                    background: #dcfce7;
                    color: green;
                }

                /* VS */
                .vs-divider {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .vs-box {
                    width: 70px;
                    height: 70px;
                    background: var(--gradient);
                    color: white;
                    font-weight: bold;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 20px;
                }

                /* YOC */
                .yoc-card {
                    border: 2px solid var(--accent);
                }

                .yoc-card .overlay-tag {
                    background: var(--accent);
                    color: white;
                }

                /* CTA */
                .footer-banner {
                    margin-top: 70px;
                    padding: 50px;
                    text-align: center;
                    border-radius: 25px;
                    background: var(--gradient);
                    color: white;
                }

                .cta-btn {
                    display: inline-block;
                    padding: 14px 30px;
                    background: var(--accent);
                    color: white;
                    border-radius: 30px;
                    font-weight: 600;
                    text-decoration: none;
                }

                /* MOBILE */
                @media(max-width:900px) {
                    .comparison-wrapper {
                        flex-direction: column;
                    }

                    .vs-divider {
                        margin: 20px 0;
                    }
                }
            </style>

            <div class="container">



                <h3 class="sec-title th_fade_anim" style="text-align: center;">
                    <span class="th-text-perspective ">
                        <span class="highlight"> નાણાકીય તુલના : </span> શા માટે YOC ?
                    </span>
                </h3>

                <div class="hero-title">

                    <!-- <h1>નાણાકીય તુલના : શા માટે YOC ?</h1> -->
                    <p>તમારા બાળક માટે યોગ્ય પસંદગી અહીં કરો</p>
                </div>

                <div class="comparison-wrapper">

                    <div class="premium-card">
                        <div class="img-wrapper">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f">
                            <div class="overlay-tag">સામાન્ય</div>
                        </div>
                        <div class="card-body">
                            <h3>બીજા ટ્યૂશન ક્લાસીસ </h3>

                            <div class="feature-row">
                                <div class="icon-wrap bad-icon">✕</div>એક જ શિક્ષક બધા વિષય ભણાવે છે.
                            </div>
                            <div class="feature-row">
                                <div class="icon-wrap bad-icon">✕</div> મર્યાદિત જ્ઞાન અને ગુણવત્તા.
                            </div>
                            <div class="feature-row">
                                <div class="icon-wrap bad-icon">✕</div> માતા-પિતાને પ્રગતિ વિશે જાણ નથી.
                            </div>
                            <div class="feature-row">
                                <div class="icon-wrap bad-icon">✕</div> રેકોર્ડિંગની સુવિધાનો અભાવ.
                            </div>
                        </div>
                    </div>

                    <div class="vs-divider">
                        <div class="vs-box">VS</div>
                    </div>

                    <div class="premium-card yoc-card">
                        <div class="img-wrapper">
                            <img src="img/your8.jpeg">
                            <div class="overlay-tag">YOC</div>
                        </div>
                        <div class="card-body">
                            <h3 style="color:#F38125;">Your Own Class</h3>

                            <div class="feature-row">
                                <div class="icon-wrap good-icon">✓</div>વિષય મુજબ નિષ્ણાત શિક્ષકો ઉપલબ્ધ.
                            </div>
                            <div class="feature-row">
                                <div class="icon-wrap good-icon">✓</div>રિપોર્ટ અને રેકોર્ડિંગની સુવિધા.
                            </div>
                            <div class="feature-row">
                                <div class="icon-wrap good-icon">✓</div>માતા-પિતાની સીધી સંડોવણી અને પ્રતિભાવ.
                            </div>
                            <div class="feature-row">
                                <div class="icon-wrap good-icon">✓</div>રેફરલ દ્વારા કમિશન અને વધારાની કમાણી.
                            </div>
                        </div>
                    </div>

                </div>



            </div>


            <br>
            <br>
            <br>

            <!-- ----------------------- નાણાકીય તલુ ના Section End ------------------------------------ -->



            <!-- -----------------------  YOC એ બ્રબ્રજ Section Start ------------------------------------ -->

            <div class="yoc-main-wrapper">
                <div class="yoc-left-panel">
                    <!-- <div class="yoc-badge">
                        <span class="badge-dot"></span>
                        જ્ઞાનનો સેતુ: YOC
                    </div> -->

                    <div>
                        <span class="sub-title th_fade_anim">
                            <span class="p-2" style="border: 2px solid red; border-radius: 10px; background-color: white; ">

                                <img src="assets/img/icon/subtitle-icon1-1.svg" alt="img"> &nbsp; જ્ઞાનનો સેતુ: YOC

                            </span>
                        </span>
                    </div>

                    <h1 class="yoc-heading"><span class="highlight-text">ભારતમાં </span> શિક્ષણનો બ્રિજ</h1>
                    <p class="yoc-description">YOC એટલે ગ્રામીણ પ્રતિભા અને શહેરી નિષ્ણાતો વચ્ચેનો અતૂટ સેતુ. અમે દરેક બાળકને શ્રેષ્ઠ શિક્ષણનો સમાન હક આપીએ છીએ.</p>

                    <div class="comparison-wrapper">
                        <div class="block-item urban">
                            <div class="block-icon">
                                <img src="https://img.icons8.com/color/96/city-buildings.png" alt="City icon" />
                            </div>
                            <div class="block-text">
                                <h4>શહેરના વિદ્યાર્થીઓ</h4>
                                <p>શ્રેષ્ઠ આધુનિક સુવિધાઓ અને નિષ્ણાત શિક્ષકો સુધી સીધી પહોંચ.</p>
                            </div>
                        </div>

                        <div class="block-item rural">
                            <div class="block-icon">
                                <img src="https://img.icons8.com/color/96/cottage.png" alt="Rural Village icon" />
                            </div>
                            <div class="block-text">
                                <h4>ગામના વિદ્યાર્થીઓ</h4>
                                <p>મર્યાદિત શૈક્ષણિક સંસાધનો અને અંતરની સમસ્યાઓનું કાયમી નિવારણ.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="yoc-right-panel">
                    <div class="top-image-container">
                        <img src="img/your2.jpeg" alt="Students Collaboration" class="collaboration-img">
                    </div>

                    <div class="digital-bridge-diagram">
                        <div class="diagram-icons-row">

                            <div class="icon-group city">
                                <img src="https://img.icons8.com/color/96/skyscrapers.png" alt="City icon" class="diagram-icon">
                                <span class="diagram-label">શહેરી જ્ઞાન</span>
                            </div>

                            <div class="bridge-container">
                                <svg viewBox="0 0 200 60" preserveAspectRatio="none">
                                    <path class="bridge-path" d="M 0 50 Q 100 0 200 50" />
                                    <path class="bridge-path-active" d="M 0 50 Q 100 0 200 50" />
                                </svg>
                            </div>

                            <div class="icon-group village">
                                <img src="https://img.icons8.com/color/96/cottage.png" alt="Village icon" class="diagram-icon">
                                <span class="diagram-label">ગ્રામીણ પ્રતિભા</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <style>
                /* પિતૃ કન્ટેનર (Parent Container) ને અનુરૂપ નવી પ્રોફેશનલ સ્ટાઈલ્સ */

                .yoc-main-wrapper {
                    width: 95%;
                    max-width: 1280px;
                    margin: 30px auto;
                    padding: 30px;
                    background: #ffffff;
                    border-radius: 40px;
                    box-shadow: 0 30px 60px -12px rgba(26, 54, 93, 0.1);
                    display: grid;
                    grid-template-columns: 1.1fr 0.9fr;
                    gap: 60px;
                    align-items: center;
                    border: 1px solid #f0f0f0;
                }

                .yoc-badge {
                    background: #fff0eb;
                    color: #ff5c2a;
                    padding: 8px 16px;
                    border-radius: 50px;
                    font-weight: 700;
                    font-size: 0.85rem;
                    display: inline-flex;
                    align-items: center;
                    gap: 8px;
                    margin-bottom: 24px;
                }

                .badge-dot {
                    width: 8px;
                    height: 8px;
                    background: #ff5c2a;
                    border-radius: 50%;
                    animation: pulse 2s infinite;
                }

                .yoc-heading {
                    font-size: 3.2rem;
                    color: #0f172a;
                    line-height: 1.2;
                    margin-bottom: 20px;
                }

                .highlight-text {
                    color: #ff5c2a;
                    display: inline-block;
                }

                .yoc-description {
                    color: #475569;
                    font-size: 1.1rem;
                    line-height: 1.6;
                    margin-bottom: 40px;
                }

                .block-item {
                    background: #fdfdfd;
                    border: 1px solid #f1f5f9;
                    padding: 24px;
                    border-radius: 20px;
                    display: flex;
                    gap: 20px;
                    margin-bottom: 20px;
                    transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                }

                .block-item:hover {
                    transform: scale(1.02);
                    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
                    border-color: #ff5c2a;
                }

                .block-icon {
                    background: #ffffff;
                    min-width: 64px;
                    height: 64px;
                    border-radius: 16px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
                }

                .block-icon img {
                    width: 40px;
                }

                .block-text h4 {
                    color: #1e293b;
                    font-size: 1.25rem;
                    margin-bottom: 4px;
                }

                .block-text p {
                    color: #64748b;
                    font-size: 0.95rem;
                }

                /* Right Panel Visuals */
                .top-image-container {
                    border-radius: 24px;
                    overflow: hidden;
                    height: 350px;
                    margin-bottom: 30px;
                }

                .collaboration-img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    transition: 0.5s ease;
                }

                .top-image-container:hover .collaboration-img {
                    transform: scale(1.05);
                }

                .digital-bridge-diagram {
                    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
                    padding: 40px;
                    border-radius: 24px;
                    border: 1px solid #e2e8f0;
                }

                .diagram-icons-row {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                }

                .diagram-icon {
                    width: 50px;
                    margin-bottom: 10px;
                }

                .diagram-label {
                    font-weight: 700;
                    color: #334155;
                    font-size: 0.9rem;
                }

                .bridge-container {
                    flex-grow: 1;
                    height: 50px;
                    margin: 0 20px;
                }

                .bridge-path {
                    stroke: #cbd5e1;
                    stroke-width: 3;
                    fill: none;
                    stroke-dasharray: 6, 6;
                }

                .bridge-path-active {
                    stroke: #ff5c2a;
                    stroke-width: 3;
                    fill: none;
                    stroke-dasharray: 100;
                    stroke-dashoffset: 100;
                    animation: drawPath 3s linear infinite;
                }

                @keyframes drawPath {
                    to {
                        stroke-dashoffset: -100;
                    }
                }

                @keyframes pulse {
                    0% {
                        transform: scale(0.95);
                        box-shadow: 0 0 0 0 rgba(255, 92, 42, 0.7);
                    }

                    70% {
                        transform: scale(1);
                        box-shadow: 0 0 0 10px rgba(255, 92, 42, 0);
                    }

                    100% {
                        transform: scale(0.95);
                        box-shadow: 0 0 0 0 rgba(255, 92, 42, 0);
                    }
                }

                @media (max-width: 992px) {

                    .yoc-main-wrapper {
                        grid-template-columns: 1fr;
                        gap: 40px;
                        padding: 25px;
                    }

                    .yoc-heading {
                        font-size: 2.4rem;
                        /* text-align: center; */
                    }

                    /* .yoc-description {
                        text-align: center;
                    } */

                    .yoc-badge {
                        margin: 0 auto 20px;
                    }

                    .comparison-wrapper {
                        display: flex;
                        flex-direction: column;
                        gap: 16px;
                    }

                }

                @media (max-width: 600px) {

                    .yoc-main-wrapper {
                        padding: 18px;
                        border-radius: 20px;
                    }

                    .yoc-heading {
                        font-size: 1.9rem;
                        line-height: 1.3;
                    }

                    .yoc-description {
                        font-size: 0.95rem;
                        margin-bottom: 25px;
                    }

                    .block-item {
                        flex-direction: column;
                        align-items: flex-start;
                        gap: 12px;
                        padding: 18px;
                    }

                    .block-icon {
                        width: 55px;
                        height: 55px;
                    }

                    .block-icon img {
                        width: 32px;
                    }

                    .top-image-container {
                        height: 200px;
                        border-radius: 16px;
                    }

                    .digital-bridge-diagram {
                        padding: 20px;
                    }

                    .diagram-icons-row {
                        /* flex-direction: column; */
                        gap: 20px;
                    }

                    .bridge-container {
                        width: 100%;
                        height: 40px;
                        margin: 10px 0;
                    }

                    .diagram-icon {
                        width: 40px;
                    }

                    .diagram-label {
                        font-size: 0.8rem;
                    }

                }

                @media (max-width: 400px) {

                    .yoc-heading {
                        font-size: 1.6rem;
                    }

                    .yoc-description {
                        font-size: 0.9rem;
                    }

                    .block-text h4 {
                        font-size: 1rem;
                    }

                    .block-text p {
                        font-size: 0.85rem;
                    }

                }

                @media (min-width: 1400px) {

                    .yoc-main-wrapper {
                        padding: 50px;
                        gap: 80px;
                    }

                    .yoc-heading {
                        font-size: 3.6rem;
                    }

                }
            </style>

            <!-- -----------------------  YOC એ બ્રબ્રજ Section End ------------------------------------ -->

            <!-- -----------------------  shikshan no Section Start ------------------------------------ -->


            <style>
                .feature-area-4 .row {
                    display: flex;
                    flex-wrap: wrap;
                }

                .feature-area-4 .col-xl-3 {
                    display: flex;
                }

                .feature-card4 {
                    display: flex;
                    flex-direction: column;
                    justify-content: flex-start;
                    height: 100%;
                    position: relative;

                    padding-top: 50px;
                    border-radius: 18px;
                    transition: 0.3s;
                }

                .feature-card4:hover {
                    transform: translateY(-5px);
                }

                .box-icon {
                    width: 59px;
                    height: 63px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    /* Vertical Center */
                    justify-content: center;
                    /* Horizontal Center */
                    font-size: 28px;
                    margin: 0 auto 18px;
                    position: relative;
                    overflow: hidden;
                    background: white !important;
                    /* વધારાનો ભાગ બહાર ન જાય તે માટે */
                    line-height: 0;
                    /* લાઈન હાઈટ કાઢી નાખવી */
                }

                .box-icon i {
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    position: relative;
                    z-index: 2;
                    margin: 0;
                    /* વધારાનું માર્જિન દૂર કરો */
                }

                /* soft background circle */
                .box-icon::before {
                    content: "";
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border-radius: 50%;
                    background-color: white;
                    /* આઈકોનનો જે કલર હશે એ જ લેશે */
                    opacity: 0.15;
                    z-index: 1;
                }

                .feature-card4:hover .box-icon {
                    transform: scale(1.1);
                    transition: 0.3s;
                }
            </style>

            <section class=" bg-light3 overflow-hidden feature-area-4 position-relative z-index-common">
                <div class="feature-wrap4 space" id="feature-sec">
                    <div class="container">
                        <div class="title-area text-center">
                            <h1 class="yoc-heading" style="color: #1A3558;"><span class="highlight-text">શિક્ષણનો </span> સામાજિક પ્રભાવ </h1>

                            <!-- <h2 class="sec-title th_fade_anim"><span class="th-text-perspective">શિક્ષણનો સામાજિક પ્રભાવ</span></h2> -->
                        </div>
                        <div class="row gy-4 justify-content-center">
                            <div class="col-xl-3 col-md-6 th_fade_anim" data-delay=".3">
                                <div class="feature-card4" data-bg-color="#FEEDEA" data-theme-color="#FE5A86">
                                    <div class="box-icon" style="margin-top: -45px; background: white !important;"><i class="fa-solid fa-user-graduate"></i></div>
                                    <h3 class="box-title">વિદ્યાર્થીઓનું સશક્તિકરણ</h3>
                                    <p class="box-text">ગામના વિદ્યાર્થીઓ હવે ઉચ્ચતર અભ્યાસ માટે વધુ સારી રીતે તૈયાર થશે, તેમના ભવિષ્યના દરવાજા ખુલશે.</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 th_fade_anim" data-delay=".5">
                                <div class="feature-card4" data-bg-color="#F0FBF8" data-theme-color="#1CB098">
                                    <div class="box-icon" style="margin-top: -45px; background: white !important;"><i class="fa-solid fa-hand-holding-heart"></i></div>
                                    <h3 class="box-title">માતા-પિતાને વિશ્વાસ</h3>
                                    <p class="box-text">વાલીઓને તેમના બાળકોના શિક્ષણની ગુણવત્તા પર સંપૂર્ણ વિશ્વાસ મળશે, જેથી તેઓ ચિંતામુક્ત રહી શકે.</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 th_fade_anim" data-delay=".7">
                                <div class="feature-card4" data-bg-color="#F1EEE3" data-theme-color="#FF5C2A">
                                    <div class="box-icon" style="margin-top: -45px; background: white !important;"><i class="fa-solid fa-briefcase"></i></div>
                                    <h3 class="box-title">યુવાનો માટે રોજગાર</h3>
                                    <p class="box-text">શિક્ષિત યુવાનોને પોતાના ગામમાં જ રોજગારની તકો મળશે, જે સ્થળાંતર ઘટાડશે.</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 th_fade_anim" data-delay=".9">
                                <div class="feature-card4" data-bg-color="#F5F0FF" data-theme-color="#743EF9">
                                    <div class="box-icon" style="margin-top: -45px; background: white !important;"><i class="fa-solid fa-chart-line"></i></div>
                                    <h3 class="box-title">ગામનો સર્વાંગી વિકાસ</h3>
                                    <p class="box-text">શિક્ષણ એ ગામના વિકાસનો પાયો છે, જે સમૃદ્ધ અને પ્રગતિશીલ સમાજનું નિર્માણ કરશે.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <script>
                document.querySelectorAll(".feature-card4").forEach(card => {
                    const themeColor = card.getAttribute("data-theme-color");
                    const bgColor = card.getAttribute("data-bg-color");
                    const iconContainer = card.querySelector(".box-icon");
                    const icon = card.querySelector(".box-icon i");

                    if (themeColor) {
                        icon.style.color = themeColor;
                        // આ લાઈનથી ગોળ સર્કલનો બેકગ્રાઉન્ડ કલર સેટ થશે
                        iconContainer.style.backgroundColor = themeColor + "20";
                    }

                    // કાર્ડનો પોતાનો બેકગ્રાઉન્ડ કલર
                    if (bgColor) {
                        card.style.backgroundColor = bgColor;
                    }
                });
            </script>

            <!-- -----------------------  shikshan no Section End ------------------------------------ -->



            <!-- -----------------------  Vision & Mission Section Start ------------------------------------ -->

            <style>
                .th-btn.style5:after {
                    background: #1a3558 !important;
                }

                .text-theme2 {
                    color: #FF5C2A !important;
                }

                .th-btn:after {
                    background: #1a3558 !important;

                }
            </style>

            <style>
                /* ══════════════════════════════════════
                7. VISION & MISSION
                ══════════════════════════════════════ */

                *,
                *::before,
                *::after {
                    box-sizing: border-box;
                    margin: 0;
                    padding: 0
                }

                :root {
                    --ink: #0D2137;
                    --teal: #1A3558;
                    --teal-d: #007A60;
                    --teal-l: #E3FAF4;
                    --pink: #FF5C2A;
                    --pink-l: #FDE8F4;
                    --orange: #FF7043;
                    --orange-l: #FFF0EB;
                    --yellow: #FFCA28;
                    --slate: #4A6274;
                    --fog: #F5F9F8;
                    --white: #FFFFFF;
                    --r24: 24px;
                    --r16: 16px;
                    --r10: 10px;
                    --sh-sm: 0 4px 18px rgba(0, 0, 0, .07);
                    --sh-md: 0 10px 40px rgba(0, 0, 0, .10);
                    --sh-lg: 0 20px 60px rgba(0, 0, 0, .14);
                }

                .vm-sec {
                    padding: 90px 0;
                    background: #F5F9F8;
                    /* light background */
                    position: relative;
                    overflow: hidden;
                }

                .vm-sec::before {
                    content: '';
                    position: absolute;
                    top: -150px;
                    left: -150px;
                    width: 450px;
                    height: 450px;
                    border-radius: 50%;
                    background: radial-gradient(circle, rgba(0, 184, 148, .06), transparent 70%);
                    pointer-events: none;
                }

                .vm-sec::after {
                    content: '';
                    position: absolute;
                    bottom: -120px;
                    right: -120px;
                    width: 380px;
                    height: 380px;
                    border-radius: 50%;
                    background: radial-gradient(circle, rgba(233, 30, 140, .05), transparent 70%);
                    pointer-events: none;
                }

                .vm-header {
                    text-align: center;
                    margin-bottom: 60px;
                    position: relative;
                    z-index: 2
                }

                .vm-header .sec-title {
                    color: #0D2137;
                }

                .vm-header .sec-body {
                    color: #4A6274;
                }

                .vm-grid {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 30px;
                    position: relative;
                    z-index: 2
                }

                @media(max-width:768px) {
                    .vm-grid {
                        grid-template-columns: 1fr
                    }
                }

                .vm-card {
                    background: #ffffff;
                    border: 1.5px solid rgba(0, 0, 0, .08);
                    border-radius: var(--r24);
                    padding: 48px 38px;
                    position: relative;
                    overflow: hidden;
                    transition: all .3s;
                }

                .vm-card:hover {
                    background: #ffffff;
                    transform: translateY(-5px);
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
                }

                .vm-card.vision {
                    border-top: 4px solid var(--teal)
                }

                .vm-card.mission {
                    border-top: 4px solid var(--pink)
                }

                .vm-big-q {
                    position: absolute;
                    top: 14px;
                    right: 20px;
                    font-size: 7rem;
                    font-family: Georgia, serif;
                    opacity: .07;
                    /* color: #fff; */
                    line-height: 0;
                    margin-top: 50px;
                }

                .vm-icon-box {
                    width: 68px;
                    height: 68px;
                    border-radius: var(--r16);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1.9rem;
                    margin-bottom: 20px;
                }

                .vm-card.vision .vm-icon-box {
                    background: #1A3558;
                }

                .vm-card.mission .vm-icon-box {
                    background: #FF5C2A;
                }

                .vm-lbl {
                    font-size: 1.75rem;
                    font-weight: 700;
                    letter-spacing: 2px;
                    margin-bottom: 10px
                }

                .vm-card.vision .vm-lbl {
                    color: var(--teal)
                }

                .vm-card.mission .vm-lbl {
                    color: var(--pink)
                }

                .vm-title {
                    font-family: 'Noto Serif Gujarati', serif;
                    font-size: clamp(1.3rem, 2.5vw, 1.8rem);
                    font-weight: 900;
                    color: black;
                    line-height: 1.3;
                    margin-bottom: 16px;
                }

                .vm-divider {
                    width: 44px;
                    height: 4px;
                    border-radius: 2px;
                    margin-bottom: 18px
                }

                .vm-card.vision .vm-divider {
                    background: var(--teal)
                }

                .vm-card.mission .vm-divider {
                    background: var(--pink)
                }

                .vm-text {
                    font-size: 1rem;
                    line-height: 1.9;
                    color: #4A6274;
                }

                .vm-points {
                    list-style: none;
                    margin-top: 18px;
                    display: flex;
                    flex-direction: column;
                    gap: 12px
                }

                .vm-points li {
                    display: flex;
                    align-items: flex-start;
                    gap: 10px;
                    font-size: .9rem;
                    color: #4A6274;
                    line-height: 1.6
                }

                .vm-dot {
                    width: 7px;
                    height: 7px;
                    border-radius: 50%;
                    margin-top: 8px;
                    flex-shrink: 0
                }

                .vm-card.vision .vm-dot {
                    background: var(--teal)
                }

                .vm-card.mission .vm-dot {
                    background: var(--pink)
                }

                .feature-card5 {
                    text-align: center;
                }

                .feature-card5 .box-icon {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 100%;
                    font-size: 52px;
                }
            </style>

            <!-- ════════════════════════════════
                    7. VISION & MISSION
                    ════════════════════════════════ -->

            <style>
                .sec-title {
                    color: #1A3558;
                }

                .sec-title .highlight {
                    color: #FF5C2A;
                }
            </style>

            <section class="vm-sec" id="vision">
                <div class="container">
                    <div class="vm-header reveal d1">

                        <div style="display:flex; justify-content:center;">
                            <span class="sub-title th_fade_anim">
                                <span class="p-2" style="border: 2px solid red; border-radius: 10px; background-color: white;">
                                    <img src="assets/img/icon/subtitle-icon1-1.svg" alt="img"> અમારો ઉદેશ
                                </span>
                            </span>
                        </div>
                        <h2 class="sec-title th_fade_anim mt-3" style="color: #1A3558 !important;">
                            <span class="th-text-perspective sec-title" style="color: #1A3558 !important;">
                                <span class="highlight"> અમારું વિઝન </span> અને મિશન
                            </span>
                        </h2>

                        <!-- <div class="tag p-2" style="margin-bottom:16px;background:rgba(0,184,148,.15);border-color:rgba(0,184,148,.3); border-radius: 10px; font-weight: bold;">અમારો ઉદ્દેશ</div>
                        <br>
                        <h2 class="sec-title">અમારું <span style="color:var(--teal)">વિઝન</span> અને <span style="color:var(--pink)">મિશન</span></h2> -->
                        <p class="sec-body">ગુણવત્તાયુક્ત શિક્ષણ દ્વારા સમૃદ્ધ ભવિષ્ય નિર્માણ</p>
                    </div>
                    <div class="vm-grid">
                        <!-- VISION -->
                        <div class="vm-card vision reveal d2">
                            <div class="vm-big-q">"</div>
                            <div class="vm-icon-box">🎯</div>
                            <div class="vm-lbl mt-3 mb-3">✦ વિઝન</div>
                            <h3 class="vm-title">દરેક વિદ્યાર્થી માટે ઉચ્ચ શિક્ષણ</h3>
                            <div class="vm-divider"></div>
                            <p class="vm-text">
                                દરેક નાના મોટા શહેર તથા ગામના દરેક વિદ્યાર્થીને ઉચ્ચ સ્તરનું શહેર જેવુ શિક્ષણ ઘરે
                                બેઠા પહોંચાડવું .
                            </p>
                            <ul class="vm-points">
                                <li><span class="vm-dot"></span> <span>ગુજરાતના ખૂણેખૂણે ઉચ્ચ ગુણવત્તાનું શિક્ષણ પહોંચાડવું</span></li>
                                <li><span class="vm-dot"></span> <span>ટેક્નોલૉજી દ્વારા ભૌગોળિક અવરોધ દૂર કરવા </span></li>
                                <li><span class="vm-dot"></span> <span>દરેક ઘરે ઓનલાઇન શિક્ષા નો પ્રકાશ ફેલાવવો</span></li>
                                <li><span class="vm-dot"></span> <span>માતા-પિતા ની હાજરી મા શિક્ષણ</span></li>
                                <li><span class="vm-dot"></span> <span>ઘરે બેઠા સલામતી સાથે શિક્ષણ</span></li>

                            </ul>
                        </div>
                        <!-- MISSION -->
                        <div class="vm-card mission reveal d3">
                            <div class="vm-big-q">"</div>
                            <div class="vm-icon-box">🚀</div>
                            <div class="vm-lbl mt-3 mb-3">✦ મિશન</div>
                            <h3 class="vm-title">ગુણવત્તા અને રોજગારની તકો</h3>
                            <div class="vm-divider"></div>
                            <p class="vm-text">
                                નાના મોટા શહેર તથા ગામ ના ગુણવત્તાયુક્ત શિક્ષણ અને રોજગારની તકો દ્વારા સશક્ત બનાવવું.
                            </p>
                            <ul class="vm-points">
                                <li><span class="vm-dot"></span> <span>સ્થાનિક ભાષામાં ઉચ્ચ-ગુણવત્તાના અભ્યાસક્રમ</span></li>
                                <li><span class="vm-dot"></span> <span>કૌશલ્ય વિકાસ અને નોકરીની તૈયારી માં મદદ</span></li>
                                <li><span class="vm-dot"></span> <span>ઉદ્યોગ-સ્તરના પ્રમાણપત્ર અને ડિગ્રી પ્રોગ્રામ</span></li>
                                <li><span class="vm-dot"></span> <span>વ્યક્તિત્વ વિકાસ માટે પણ સવલતો </span></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>



            <!-- -----------------------  Vision & Mission Section End ------------------------------------ -->

            <!-- -----------------------  ભાગીદાિીની તક Section Start ------------------------------------ -->

            <div class="yoc-future-section" style="font-family: 'Hind Vadodara', sans-serif; background: #0a192f; padding: 120px 20px;  overflow: hidden; position: relative;">

                <style>
                    .yoc-wrapper {
                        max-width: 1300px;
                        margin: 0 auto;
                        position: relative;
                    }

                    /* Abstract Title with Dynamic Background */
                    .yoc-head-title {
                        text-align: left;
                        margin-bottom: 120px;
                        position: relative;
                    }

                    .yoc-head-title h2 {
                        font-size: clamp(3rem, 3vw, 5.5rem);
                        color: white;
                        font-weight: 900;
                        line-height: 1;
                        margin: 0;
                        text-transform: uppercase;
                        letter-spacing: -2px;
                    }

                    .yoc-head-title h2 span {
                        color: #FF5C2A;
                        display: inline-block;
                        position: relative;
                    }

                    .yoc-head-title::before {
                        content: 'ભાગીદારી';
                        position: absolute;
                        top: -60px;
                        left: -10px;
                        font-size: 150px;
                        font-weight: 900;
                        color: rgba(255, 255, 255, 0.03);
                        z-index: 0;
                    }

                    /* The Overlapping Step-by-Step Sections */
                    .yoc-step-section {
                        display: grid;
                        grid-template-columns: 1.2fr 1fr;
                        gap: 80px;
                        align-items: center;
                        margin-bottom: 150px;
                        position: relative;
                    }

                    /* Unique Image Mask & Shape */
                    .yoc-mask-wrapper {
                        position: relative;
                        width: 100%;
                        /* height: 500px; */
                        overflow: hidden;
                        border-radius: 60px 0 60px 0;
                        /* Asymmetric Shape */
                        border: 1px solid rgba(255, 255, 255, 0.1);
                    }

                    .yoc-mask-img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        transition: 0.8s ease;
                        filter: grayscale(100%) contrast(120%);
                    }

                    .yoc-step-section:hover .yoc-mask-img {
                        filter: grayscale(0%) contrast(100%);
                        transform: scale(1.05);
                    }

                    /* Professional Text Block */
                    .yoc-text-block {
                        padding-left: 20px;
                    }

                    .yoc-num-badge {
                        display: inline-flex;
                        align-items: center;
                        gap: 15px;
                        color: #FF5C2A;
                        font-weight: 700;
                        text-transform: uppercase;
                        letter-spacing: 3px;
                        font-size: 14px;
                        margin-bottom: 25px;
                    }

                    .yoc-num-badge::after {
                        content: '';
                        width: 60px;
                        height: 2px;
                        background: #FF5C2A;
                    }

                    .yoc-text-block h3 {
                        font-size: clamp(2rem, 5vw, 3.5rem);
                        color: white;
                        margin-bottom: 25px;
                        font-weight: 800;
                        line-height: 1.1;
                    }

                    .yoc-text-block p {
                        font-size: 18px;
                        color: rgba(255, 255, 255, 0.7);
                        line-height: 1.8;
                        transition: 0.4s;
                    }

                    .yoc-step-section:hover p {
                        color: white;
                    }

                    /* Secondary Grid (Asymmetric Flip) */
                    .yoc-flip {
                        grid-template-columns: 1fr 1.2fr;
                    }

                    /* Result High-End Panel */
                    .yoc-final-panel {
                        background: #FF5C2A;
                        padding: 100px 50px;
                        border-radius: 50px;
                        display: grid;
                        grid-template-columns: 1fr 2fr;
                        gap: 50px;
                        align-items: center;
                        overflow: hidden;
                        position: relative;
                    }

                    .yoc-final-panel::before {
                        content: '';
                        position: absolute;
                        top: -100px;
                        left: -100px;
                        width: 300px;
                        height: 300px;
                        background: rgba(255, 255, 255, 0.1);
                        border-radius: 50%;
                    }

                    .yoc-final-img {
                        width: 100%;
                        height: 300px;
                        object-fit: cover;
                        border-radius: 30px;
                        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
                    }

                    .yoc-panel-content h3 {
                        font-size: 42px;
                        color: white;
                        margin-bottom: 20px;
                        font-weight: 900;
                    }

                    .yoc-panel-content p {
                        color: rgba(255, 255, 255, 0.8);
                        font-size: 18px;
                        margin-bottom: 40px;
                    }

                    .yoc-glow-btn {
                        background: #1a3558;
                        color: white;
                        padding: 20px 50px;
                        border-radius: 18px;
                        font-size: 18px;
                        font-weight: 700;
                        border: none;
                        cursor: pointer;
                        box-shadow: 0 15px 35px rgba(26, 53, 88, 0.3);
                        transition: 0.3s;
                    }

                    .yoc-glow-btn:hover {
                        transform: scale(1.05);
                        box-shadow: 0 20px 50px rgba(26, 53, 88, 0.5);
                    }

                    @media (max-width: 992px) {
                        .yoc-step-section {
                            display: flex;
                            flex-direction: column;
                        }

                        .yoc-flip {
                            display: flex;
                            flex-direction: column;
                        }

                        .yoc-mask-wrapper {
                            order: 1;
                        }

                        .yoc-final-panel {
                            grid-template-columns: 1fr;
                            text-align: center;
                        }

                        .yoc-final-img {
                            height: 250px;
                        }

                        .yoc-num-badge {
                            margin-bottom: 15px;
                        }

                        .yoc-num-badge::after {
                            display: none;
                        }
                    }
                </style>

                <style>
                    /* ========== GLOBAL RESPONSIVE IMPROVEMENTS ========== */

                    .yoc-future-section {
                        padding: 80px 15px;
                    }

                    .yoc-head-title {
                        margin-bottom: 60px;
                    }

                    .yoc-head-title::before {
                        font-size: 80px;
                        top: -30px;
                    }

                    /* ========== TABLET (992px) ========== */
                    @media (max-width: 992px) {

                        .yoc-step-section {
                            grid-template-columns: 1fr;
                            gap: 40px;
                            margin-bottom: 80px;
                        }

                        .yoc-flip {
                            grid-template-columns: 1fr;
                        }

                        .yoc-mask-wrapper {
                            margin-bottom: 15px;
                        }

                        .yoc-text-block {
                            order: 2;
                            text-align: center !important;
                            padding: 0;
                        }

                        .yoc-text-block h3 {
                            font-size: 28px;
                        }

                        .yoc-text-block p {
                            font-size: 16px;
                        }

                        .yoc-num-badge {
                            justify-content: center;
                        }

                        .yoc-num-badge::after {
                            display: none;
                        }

                        .yoc-final-panel {
                            grid-template-columns: 1fr;
                            text-align: center;
                            padding: 60px 20px;
                        }

                        .yoc-final-img {
                            height: 220px;
                        }
                    }

                    /* ========== MOBILE (576px) ========== */
                    @media (max-width: 576px) {

                        .yoc-future-section {
                            padding: 60px 10px;
                        }

                        .yoc-head-title h2 {
                            font-size: 32px;
                            letter-spacing: 1px;
                        }

                        .yoc-head-title::before {
                            font-size: 50px;
                        }

                        .yoc-mask-wrapper {
                            height: 220px;
                            border-radius: 30px 0 30px 0;
                        }

                        .yoc-text-block h3 {
                            font-size: 22px;
                        }

                        .yoc-text-block p {
                            font-size: 15px;
                            line-height: 1.6;
                        }

                        .yoc-final-panel {
                            padding: 40px 15px;
                            border-radius: 25px;
                        }

                        .yoc-panel-content h3 {
                            font-size: 26px;
                        }

                        .yoc-panel-content p {
                            font-size: 15px;
                        }

                        .yoc-glow-btn {
                            padding: 14px 25px;
                            font-size: 15px;
                            border-radius: 12px;
                        }
                    }

                    /* ========== LARGE SCREENS (1400px+) ========== */
                    @media (min-width: 1400px) {

                        .yoc-wrapper {
                            max-width: 1400px;
                        }

                        /* .yoc-mask-wrapper {
                            height: 550px;
                        } */

                        .yoc-text-block h3 {
                            font-size: 48px;
                        }
                    }
                </style>

                <div class="yoc-wrapper">

                    <div class="yoc-head-title">
                        <h2 style="letter-spacing: 2px;"><span>સમુદાય સાથે</span> ભાગીદારી</h2>
                    </div>

                    <div class="yoc-step-section">

                        <div class="yoc-mask-wrapper">
                            <img src="img/your8.jpeg" alt="Local Partners" class="yoc-mask-img">
                        </div>

                        <div class="yoc-text-block">
                            <div class="yoc-num-badge"><span>PHASE 01</span></div>
                            <h3>સ્થાનિક આગેવાનો</h3>
                            <p>ગામના સરપંચ અને સામાજિક અગ્રણીઓ લોકલ પાર્ટનર તરીકે જોડાશે. તેઓ ગામના છેવાડાના વિદ્યાર્થીઓ સુધી શિક્ષણની જ્યોત પહોંચાડવા માટે એક મજબૂત કડી બનશે.</p>
                        </div>
                    </div>

                    <div class="yoc-step-section yoc-flip">

                        <div class="yoc-text-block" style="text-align: right; padding-right: 20px;">
                            <div class="yoc-num-badge" style="justify-content: flex-end;"><span>PHASE 02</span></div>
                            <h3>YOC ટેકનોલોજી</h3>
                            <p>અમારી નિષ્ણાત ટીમ દ્વારા સ્માર્ટ મેનેજમેન્ટ સિસ્ટમ, અનુભવી શિક્ષકો અને અત્યાધુનિક ટેકનોલોજી આપવામાં આવશે, જે શિક્ષણના સ્તરને વૈશ્વિક બનાવશે.</p>
                        </div>

                        <div class="yoc-mask-wrapper">
                            <img src="img/your1.jpeg" alt="YOC Technology" class="yoc-mask-img">
                        </div>
                    </div>

                    <div class="yoc-final-panel">

                        <img src="img/your6.jpeg" alt="Bright Future" class="yoc-final-img">

                        <div class="yoc-panel-content">
                            <h3>આજે જ જોડાઓ</h3>
                            <p>જ્યારે સ્થાનિક અનુભવ અને YOC ની ટેકનોલોજી ભેગા થશે, ત્યારે જ ગામના બાળકોનું ભવિષ્ય સુરક્ષિત અને ઉજ્જવળ બનશે. YOC સાથે ભાગીદારી કરો.</p>
                            <a href="contact" class="yoc-glow-btn" style="color: white;">
                                ભાગીદારી શરૂ કરો →
                            </a>
                        </div>
                    </div>

                </div>
            </div>


            <!-- -----------------------  ભાગીદાિીની તક Section End ------------------------------------ -->

            <!-- ----------------------- ભવિષ્યમાં શિક્ષણનું વિસ્તરણ Section Start ------------------------------------ -->


            <link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@400;600;700&display=swap" rel="stylesheet">

            <style>
                .yoc-light-section {
                    padding: 100px 20px;
                    background: #f8fafc;
                    /* Ultra Light Blue-Grey Background */
                    font-family: 'Hind Vadodara', sans-serif;
                    position: relative;
                    overflow: hidden;
                }

                /* Soft Background Orbs */
                .yoc-orb {
                    position: absolute;
                    border-radius: 50%;
                    filter: blur(100px);
                    z-index: 1;
                    opacity: 0.4;
                }

                .yoc-container {
                    /* max-width: 1200px; */
                    margin: 0 auto;
                    display: grid;
                    grid-template-columns: repeat(4, 1fr);
                    gap: 35px;
                    position: relative;
                    z-index: 2;
                }

                /* Unique Glass Card */
                .yoc-uniq-card {
                    background: rgba(255, 255, 255, 0.8);
                    backdrop-filter: blur(10px);
                    border: 1px solid rgba(255, 255, 255, 1);
                    padding: 50px 35px;
                    border-radius: 40px;
                    text-decoration: none;
                    transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
                    box-shadow: 20px 20px 60px #d1d9e6, -20px -20px 60px #ffffff;
                    display: flex;
                    flex-direction: column;
                    position: relative;
                }

                .yoc-uniq-card:hover {
                    transform: translateY(-15px);
                    box-shadow: 30px 30px 80px #c2ccd9;
                    background: #fff;
                }

                /* Organic Icon Shape */
                .yoc-shape-icon {
                    width: 75px;
                    height: 75px;
                    background: linear-gradient(135deg, #FF5C2A, #FF9575);
                    border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
                    /* Organic Shape */
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin-bottom: 30px;
                    transition: 0.6s;
                }

                .yoc-uniq-card:nth-child(2) .yoc-shape-icon {
                    background: linear-gradient(135deg, #2cb699, #54dcc0);
                    border-radius: 66% 34% 61% 39% / 26% 67% 33% 74%;
                }

                .yoc-uniq-card:nth-child(3) .yoc-shape-icon {
                    background: linear-gradient(135deg, #4A90E2, #92C1F9);
                    border-radius: 34% 66% 31% 69% / 54% 28% 72% 46%;
                }

                .yoc-uniq-card:hover .yoc-shape-icon {
                    border-radius: 50%;
                    transform: rotate(15deg) scale(1.1);
                }

                .yoc-shape-icon svg {
                    width: 32px;
                    color: white;
                }

                /* Typography */
                .yoc-uniq-card h3 {
                    font-size: 24px;
                    margin-bottom: 15px;
                    font-weight: 700;
                    color: #1e293b;
                    background: linear-gradient(90deg, #1e293b, #64748b);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                }

                .yoc-uniq-card p {
                    font-size: 16px;
                    color: #64748b;
                    line-height: 1.7;
                    margin: 0;
                }

                /* Bottom Line Animation */
                .yoc-line {
                    width: 40px;
                    height: 5px;
                    background: #FF5C2A;
                    margin-top: 25px;
                    border-radius: 10px;
                    transition: 0.4s;
                }

                .yoc-uniq-card:nth-child(2) .yoc-line {
                    background: #2cb699;
                }

                .yoc-uniq-card:nth-child(3) .yoc-line {
                    background: #4A90E2;
                }

                .yoc-uniq-card:hover .yoc-line {
                    width: 100px;
                }

                /* Responsive */
                @media (max-width: 991px) {
                    .yoc-container {
                        grid-template-columns: 1fr;
                        gap: 40px;
                    }
                }
            </style>



            <div class="yoc-light-section">
                <!-- Ambient Orbs -->
                <div class="yoc-orb" style="width: 400px; height: 400px; background: #FF5C2A; top: -100px; left: -100px;"></div>
                <div class="yoc-orb" style="width: 300px; height: 300px; background: #2cb699; bottom: -50px; right: -50px;"></div>

                <div class="vm-header reveal d1">



                    <h2 class="sec-title"> <span style="color:var(--pink)">ભવિષ્યમાં</span> શિક્ષણનું <span style="color:var(--teal)">વિસ્તરણ</span></h2>
                </div>

                <div class="yoc-container">

                    <!-- Card 1 -->
                    <a href="#" class="yoc-uniq-card">
                        <div class="yoc-shape-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                            </svg>
                        </div>
                        <h3>સંપૂર્ણ અભ્યાસક્રમ</h3>
                        <p>ધોરણ 5 થી 12 ના પાયાના વિષયોમાં નિપુણતા મેળવો. અમારું માળખું અત્યાધુનિક અને રિસર્ચ-બેઝ્ડ છે.</p>
                        <div class="yoc-line"></div>
                    </a>

                    <!-- Card 2 -->
                    <a href="#" class="yoc-uniq-card">
                        <div class="yoc-shape-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="12" r="6"></circle>
                                <circle cx="12" cy="12" r="2"></circle>
                            </svg>
                        </div>
                        <h3>સ્પર્ધાત્મક પરીક્ષાઓ</h3>
                        <p>NEET અને JEE જેવી પરીક્ષાઓ માટે માત્ર અભ્યાસ નહીં, પણ સાચી રણનીતિ અને મેન્ટરશિપ પૂરી પાડીએ છીએ.</p>
                        <div class="yoc-line"></div>
                    </a>

                    <!-- Card 3 -->
                    <a href="#" class="yoc-uniq-card">
                        <div class="yoc-shape-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="16 18 22 12 16 6"></polyline>
                                <polyline points="8 6 2 12 8 18"></polyline>
                            </svg>
                        </div>
                        <h3>વ્યવહારિક કૌશલ્યો</h3>
                        <p>કોમ્પ્યુટર કોડિંગ અને ઇંગ્લિશ કોમ્યુનિકેશન દ્વારા વિદ્યાર્થીઓને આંતરરાષ્ટ્રીય સ્તર માટે તૈયાર કરીએ છીએ.</p>
                        <div class="yoc-line"></div>
                    </a>

                    <!-- Card 3 -->
                    <a href="#" class="yoc-uniq-card">
                        <div class="yoc-shape-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                        </div>
                        <h3>ગામ માટે સંપૂર્ણ શિક્ષણ</h3>
                        <p>YOC એ ગામડાઓ માટે એક વ્યાપક અને સંકલિત શિક્ષણ સોલ્યુશન બનવા માટે કટિબદ્ધ છે.</p>
                        <div class="yoc-line"></div>
                    </a>

                </div>
            </div>
            <!-- ----------------------- ભવિષ્યમાં શિક્ષણનું વિસ્તરણ Section Start ------------------------------------ -->


        </div>
    </div>

    <?php include 'footer.php'; ?>


    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/hover-effect.umd.js"></script>
    <script src="assets/js/main.js"></script>
</body>
<!-- Mirrored from html.themehour.net/escul/demo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2026 06:59:26 GMT -->

</html>