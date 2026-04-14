<!DOCTYPE html>
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
</head>

<body class="th-magic-cursor">

    <?php include 'nav.php'; ?>


    <div id="">

        <div id="">

            <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="breadcumb-content">
                                <h1 class="breadcumb-title">એજન્ટ</h1>
                                <ul class="breadcumb-menu">
                                    <li><a href="index">Home</a></li>
                                    <li>એજન્ટ</li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-lg-5 align-self-end d-lg-block d-none">
                            <div class="breadcumb-thumb"><img src="assets/img/normal/breadcumb-thumb1-1.png" alt="img"></div>
                        </div> -->
                    </div>
                </div>
            </div>


            <style>
                *,
                *::before,
                *::after {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                :root {
                    --cream: #FFFBF5;
                    --white: #FFFFFF;
                    --orange: #E8561E;
                    --orange-light: #FF7A40;
                    --orange-pale: #FFF0E8;
                    --orange-mid: #FFDCC9;
                    --navy: #1A2B3C;
                    --navy-mid: #2C4A63;
                    --slate: #4A6680;
                    --muted: #7A95AB;
                    --border: #EAF0F7;
                    --border-warm: #F0E0D4;
                    --green: #2EAD6B;
                    --green-pale: #E8FAF1;
                    --gold: #F5A623;
                    --gold-pale: #FEF6E4;

                    --shadow-xs: 0 2px 8px rgba(30, 50, 80, 0.06);
                    --shadow-sm: 0 4px 16px rgba(30, 50, 80, 0.08);
                    --shadow-md: 0 8px 32px rgba(30, 50, 80, 0.10);
                    --shadow-lg: 0 20px 50px rgba(30, 50, 80, 0.13);
                    --shadow-orange: 0 8px 24px rgba(232, 86, 30, 0.18);

                    --r-sm: 12px;
                    --r-md: 20px;
                    --r-lg: 28px;
                    --r-xl: 40px;
                    --r-full: 9999px;
                }

                html {
                    scroll-behavior: smooth;
                }

                body {
                    background: var(--cream);
                    font-family: 'Mukta', sans-serif;
                    color: var(--navy);
                    overflow-x: hidden;
                    line-height: 1.6;
                }

                /* ── Background ── */
                .bg-layer {
                    position: fixed;
                    inset: 0;
                    pointer-events: none;
                    z-index: 0;
                    background:
                        radial-gradient(ellipse 700px 500px at 0% 0%, rgba(232, 86, 30, 0.05) 0%, transparent 70%),
                        radial-gradient(ellipse 600px 400px at 100% 100%, rgba(26, 43, 60, 0.04) 0%, transparent 70%),
                        radial-gradient(ellipse 400px 300px at 60% 40%, rgba(232, 86, 30, 0.03) 0%, transparent 60%);
                }

                .bg-dots {
                    position: fixed;
                    inset: 0;
                    pointer-events: none;
                    z-index: 0;
                    background-image: radial-gradient(circle, rgba(232, 86, 30, 0.07) 1px, transparent 1px);
                    background-size: 32px 32px;
                }

                /* ── Layout ── */


                /* ── Header ── */
                .site-header {
                    padding: 48px 0 0;
                    text-align: center;
                }

                .brand-pill {
                    display: inline-flex;
                    align-items: center;
                    gap: 8px;
                    background: var(--white);
                    border: 1.5px solid var(--border-warm);
                    border-radius: var(--r-full);
                    padding: 7px 22px;
                    font-size: 0.72rem;
                    font-weight: 700;
                    letter-spacing: 1.5px;
                    text-transform: uppercase;
                    color: var(--orange);
                    box-shadow: var(--shadow-xs);
                    margin-bottom: 24px;
                }

                .brand-pill .dot {
                    width: 7px;
                    height: 7px;
                    background: var(--orange);
                    border-radius: 50%;
                    animation: pulse-dot 1.8s infinite;
                }

                @keyframes pulse-dot {

                    0%,
                    100% {
                        opacity: 1;
                        transform: scale(1)
                    }

                    50% {
                        opacity: 0.5;
                        transform: scale(1.3)
                    }
                }

                .hero-title {
                    font-family: 'Baloo 2', cursive;
                    font-size: clamp(2.4rem, 6vw, 4.2rem);
                    font-weight: 800;
                    line-height: 1.1;
                    letter-spacing: -1px;
                    color: var(--navy);
                    margin-bottom: 16px;
                }

                .hero-title .accent {
                    color: var(--orange);
                }

                .hero-title .line2 {
                    display: block;
                    background: linear-gradient(120deg, var(--orange) 0%, #FF9A6C 100%);
                    -webkit-background-clip: text;
                    background-clip: text;
                    color: transparent;
                }

                .hero-sub {
                    font-size: 1rem;
                    color: var(--slate);
                    font-weight: 500;
                    max-width: 520px;
                    margin: 0 auto 36px;
                }

                .hero-divider {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 16px;
                    margin-bottom: 56px;
                }

                .hero-divider::before,
                .hero-divider::after {
                    content: '';
                    width: 80px;
                    height: 2px;
                    background: linear-gradient(90deg, transparent, var(--orange-mid));
                }

                .hero-divider::after {
                    background: linear-gradient(90deg, var(--orange-mid), transparent);
                }

                .hero-divider-icon {
                    color: var(--orange);
                    font-size: 1.1rem;
                }

                /* ── Section Labels ── */
                .sec-label {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    font-size: 0.68rem;
                    font-weight: 700;
                    letter-spacing: 2px;
                    text-transform: uppercase;
                    color: var(--orange);
                    margin-bottom: 8px;
                }

                .sec-label::after {
                    content: '';
                    flex: 1;
                    height: 1.5px;
                    background: linear-gradient(90deg, var(--orange-mid), transparent);
                }

                .sec-title {
                    font-family: 'Baloo 2', cursive;
                    font-size: 1.75rem;
                    font-weight: 800;
                    color: var(--navy);
                    margin-bottom: 6px;
                }

                .sec-desc {
                    font-size: 0.88rem;
                    color: var(--muted);
                    font-weight: 500;
                    padding-left: 14px;
                    border-left: 3px solid var(--orange);
                    margin-bottom: 32px;
                }

                /* ── Commission Tiers ── */
                .tiers-section {
                    padding: 0 0 64px;
                }

                .tiers-grid {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 24px;
                    margin-bottom: 0;
                }

                @media(max-width:800px) {
                    .tiers-grid {
                        grid-template-columns: 1fr;
                    }
                }

                .tier-card {
                    background: var(--white);
                    border-radius: var(--r-lg);
                    padding: 32px 26px 28px;
                    border: 1.5px solid var(--border);
                    box-shadow: var(--shadow-sm);
                    position: relative;
                    overflow: hidden;
                    transition: transform 0.35s cubic-bezier(.2, .9, .3, 1.05), box-shadow 0.35s ease, border-color 0.3s;
                }

                .tier-card:hover {
                    transform: translateY(-8px);
                    box-shadow: var(--shadow-lg);
                    border-color: var(--orange-mid);
                }

                .tier-card::after {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    height: 4px;
                    background: linear-gradient(90deg, var(--orange), var(--orange-light));
                    transform: scaleX(0);
                    transform-origin: left;
                    transition: transform 0.4s ease;
                }

                .tier-card:hover::after {
                    transform: scaleX(1);
                }

                .tier-number {
                    position: absolute;
                    top: 20px;
                    right: 24px;
                    font-family: 'Baloo 2', cursive;
                    font-size: 4.5rem;
                    font-weight: 800;
                    color: rgba(232, 86, 30, 0.06);
                    line-height: 1;
                    user-select: none;
                }

                .tier-icon {
                    width: 52px;
                    height: 52px;
                    background: var(--orange-pale);
                    border-radius: 16px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1.4rem;
                    color: var(--orange);
                    margin-bottom: 20px;
                    box-shadow: 0 4px 12px rgba(232, 86, 30, 0.12);
                }

                .tier-range {
                    font-size: 0.73rem;
                    font-weight: 700;
                    background: var(--orange-pale);
                    color: var(--orange);
                    border-radius: var(--r-full);
                    padding: 4px 14px;
                    display: inline-block;
                    margin-bottom: 16px;
                    letter-spacing: 0.3px;
                }

                .tier-pct {
                    font-family: 'Baloo 2', cursive;
                    font-size: 3.5rem;
                    font-weight: 800;
                    color: var(--orange);
                    line-height: 1;
                    margin-bottom: 6px;
                }

                .tier-label {
                    font-size: 0.8rem;
                    color: var(--muted);
                    font-weight: 500;
                    margin-bottom: 20px;
                }

                .tier-detail {
                    display: flex;
                    align-items: center;
                    gap: 8px;
                    background: var(--cream);
                    border: 1px solid var(--border-warm);
                    border-radius: var(--r-full);
                    padding: 8px 16px;
                    font-size: 0.73rem;
                    font-weight: 600;
                    color: var(--navy-mid);
                }

                .tier-detail i {
                    color: var(--orange);
                }

                /* ── CTA Banner ── */
                .cta-banner {
                    background: linear-gradient(130deg, var(--navy) 0%, #243B52 100%);
                    border-radius: var(--r-xl);
                    padding: 52px 44px;
                    margin: 0 0 72px;
                    position: relative;
                    overflow: hidden;
                    box-shadow: var(--shadow-lg);
                    text-align: center;
                }

                .cta-banner::before {
                    content: '';
                    position: absolute;
                    inset: 0;
                    background: radial-gradient(circle at 25% 40%, rgba(232, 86, 30, 0.22) 0%, transparent 60%);
                }

                .cta-banner-inner {
                    position: relative;
                    z-index: 1;
                }

                .cta-chip {
                    display: inline-block;
                    background: rgba(232, 86, 30, 0.22);
                    border: 1px solid rgba(232, 86, 30, 0.3);
                    color: #FFCFB8;
                    border-radius: var(--r-full);
                    padding: 6px 20px;
                    font-size: 0.72rem;
                    font-weight: 700;
                    letter-spacing: 1.2px;
                    text-transform: uppercase;
                    margin-bottom: 16px;
                }

                .cta-title {
                    font-family: 'Baloo 2', cursive;
                    font-size: 1.8rem;
                    font-weight: 800;
                    color: #fff;
                    margin-bottom: 8px;
                    letter-spacing: -0.3px;
                }

                .cta-sub {
                    color: rgba(255, 255, 240, 0.72);
                    font-size: 0.95rem;
                    font-weight: 500;
                }

                /* ── Fee Tables ── */
                .fee-section {
                    margin-bottom: 72px;
                }

                .grade-tabs-wrapper {
                    margin-bottom: 8px;
                }

                /* Tab switcher */
                .tab-group {
                    display: flex;
                    gap: 8px;
                    flex-wrap: wrap;
                    margin-bottom: 28px;
                }

                .tab-btn {
                    background: var(--white);
                    border: 1.5px solid var(--border);
                    border-radius: var(--r-full);
                    padding: 9px 22px;
                    font-size: 0.8rem;
                    font-weight: 700;
                    color: var(--slate);
                    cursor: pointer;
                    transition: all 0.25s ease;
                    font-family: 'Mukta', sans-serif;
                }

                .tab-btn:hover {
                    border-color: var(--orange-mid);
                    color: var(--orange);
                }

                .tab-btn.active {
                    background: var(--orange);
                    border-color: var(--orange);
                    color: #fff;
                    box-shadow: var(--shadow-orange);
                }

                /* Fee Table Card */
                .fee-table-card {
                    background: var(--white);
                    border-radius: var(--r-lg);
                    border: 1.5px solid var(--border);
                    box-shadow: var(--shadow-sm);
                    overflow: hidden;
                    display: none;
                }

                .fee-table-card.active {
                    display: block;
                }

                .ftc-header {
                    padding: 22px 28px;
                    background: linear-gradient(105deg, var(--navy) 0%, var(--navy-mid) 100%);
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    gap: 16px;
                    flex-wrap: wrap;
                }

                .ftc-title {
                    font-family: 'Baloo 2', cursive;
                    font-size: 1.25rem;
                    font-weight: 800;
                    color: #fff;
                    display: flex;
                    align-items: center;
                    gap: 10px;
                }

                .ftc-title i {
                    color: var(--orange-light);
                }

                .ftc-badge {
                    background: rgba(232, 86, 30, 0.25);
                    border: 1px solid rgba(232, 86, 30, 0.4);
                    color: #FFCFB8;
                    border-radius: var(--r-full);
                    padding: 5px 16px;
                    font-size: 0.7rem;
                    font-weight: 700;
                    letter-spacing: 0.8px;
                }

                /* Column headers */
                .col-headers {
                    display: grid;
                    grid-template-columns: 1fr 1fr 1fr 1fr;
                    padding: 14px 24px;
                    background: var(--cream);
                    border-bottom: 1.5px solid var(--border);
                }

                .col-h {
                    font-size: 0.72rem;
                    font-weight: 700;
                    color: var(--muted);
                    text-transform: uppercase;
                    letter-spacing: 0.8px;
                }

                .col-h:not(:first-child) {
                    text-align: center;
                }

                /* Rows */
                .fee-row {
                    display: grid;
                    grid-template-columns: 1fr 1fr 1fr 1fr;
                    padding: 0 24px;
                    border-bottom: 1px solid var(--border);
                    transition: background 0.2s;
                }

                .fee-row:last-child {
                    border-bottom: none;
                }

                .fee-row:hover {
                    background: var(--orange-pale);
                }

                .fee-row.highlighted {
                    background: #FFF8F2;
                }

                .fee-cell {
                    padding: 15px 0;
                    font-size: 0.85rem;
                    font-weight: 600;
                    color: var(--navy-mid);
                    display: flex;
                    align-items: center;
                }

                .fee-cell:not(:first-child) {
                    justify-content: center;
                }

                .fee-cell .subj-icon {
                    color: var(--orange);
                    font-size: 0.7rem;
                    margin-right: 7px;
                }

                .pill-monthly {
                    background: var(--cream);
                    border: 1px solid var(--border-warm);
                    border-radius: var(--r-full);
                    padding: 4px 12px;
                    font-size: 0.75rem;
                    font-weight: 700;
                    color: var(--navy-mid);
                }

                .pill-6m {
                    background: var(--gold-pale);
                    border: 1px solid #F5D98A;
                    border-radius: var(--r-full);
                    padding: 4px 12px;
                    font-size: 0.75rem;
                    font-weight: 700;
                    color: #C07A00;
                }

                .pill-yearly {
                    background: var(--green-pale);
                    border: 1px solid #A8E8C8;
                    border-radius: var(--r-full);
                    padding: 4px 12px;
                    font-size: 0.75rem;
                    font-weight: 700;
                    color: var(--green);
                }

                .pill-na {
                    background: #F2F4F7;
                    border-radius: var(--r-full);
                    padding: 4px 12px;
                    font-size: 0.75rem;
                    font-weight: 600;
                    color: #B0BECC;
                }

                /* ── Commission Calculator ── */
                /* CALCULATOR SECTION REMOVED - all styles related to calculator removed or commented for clarity. The calculator component is fully eliminated from markup and JS. */

                /* ── Info Note ── */
                .info-note {
                    background: linear-gradient(95deg, #FFF8F4, #FFFBF8);
                    border-radius: var(--r-md);
                    border-left: 5px solid var(--orange);
                    padding: 16px 22px;
                    font-size: 0.82rem;
                    font-weight: 600;
                    color: #A04018;
                    box-shadow: var(--shadow-xs);
                    margin-top: 20px;
                    display: flex;
                    align-items: flex-start;
                    gap: 10px;
                }

                .info-note i {
                    color: var(--orange);
                    margin-top: 2px;
                    flex-shrink: 0;
                }

                /* ── Footer ── */
                .site-footer {
                    text-align: center;
                    padding: 40px 0 56px;
                    color: var(--muted);
                    font-size: 0.78rem;
                    font-weight: 500;
                    border-top: 1px solid var(--border);
                    margin-top: 40px;
                }

                .site-footer span {
                    color: var(--orange);
                    font-weight: 700;
                }

                /* ── Scroll Reveal ── */
                .reveal {
                    opacity: 0;
                    transform: translateY(28px);
                    transition: opacity 0.7s ease, transform 0.6s cubic-bezier(.2, .9, .3, 1.05);
                }

                .reveal.in {
                    opacity: 1;
                    transform: none;
                }

                @media(max-width:768px) {
                    .container {
                        padding: 0 16px;
                    }

                    .col-headers,
                    .fee-row {
                        grid-template-columns: 1.2fr 1fr 1fr 1fr;
                    }

                    .cta-banner {
                        padding: 36px 24px;
                    }

                    .cta-title {
                        font-size: 1.3rem;
                    }

                    .ftc-header {
                        padding: 16px 20px;
                    }

                    .col-headers,
                    .fee-row {
                        padding: 0 16px;
                    }
                }

                @media(max-width:520px) {

                    .col-headers,
                    .fee-row {
                        grid-template-columns: 1.5fr 0.9fr 0.9fr 1.1fr;
                    }

                    .fee-cell {
                        font-size: 0.78rem;
                    }

                    .pill-monthly,
                    .pill-6m,
                    .pill-yearly,
                    .pill-na {
                        padding: 3px 8px;
                        font-size: 0.68rem;
                    }
                }
            </style>

            <div class="bg-layer"></div>
            <div class="bg-dots"></div>

            <div class="container">

                <!-- ── HERO ── -->
                <header class="site-header reveal">
                    <div class="brand-pill">
                        <div class="dot"></div>
                        YOC Platform · Referral Engine 2.0
                    </div>
                    <h3> YOC રેફરલ કમિશન મોડલ</h1>
                        <p class="hero-sub">દરેક વિદ્યાર્થીની ફીમાંથી સીધું કમિશન · High-impact earnings for Brand Ambassadors</p>
                        <div class="hero-divider">
                            <i class="fas fa-graduation-cap hero-divider-icon"></i>
                        </div>
                </header>

                <!-- ── COMMISSION TIERS ── -->
                <section class="tiers-section">
                    <div class="reveal">
                        <div class="sec-label"><i class="fas fa-chart-simple"></i> Commission Architecture</div>
                        <div class="sec-title">Brand Ambassador Tiers</div>
                        <div class="sec-desc">Progressive commission — higher enrollments unlock elevated rates per student</div>
                    </div>

                    <div class="tiers-grid">
                        <!-- Tier 1 -->
                        <div class="tier-card reveal">
                            <div class="tier-number">1</div>
                            <div class="tier-icon"><i class="fas fa-users"></i></div>
                            <div class="tier-range"><i class="fas fa-chart-line" style="margin-right:5px;"></i> ૦ – ૫૦ વિદ્યાર્થી</div>
                            <div class="tier-pct" data-target="20">20%</div>
                            <div class="tier-label">Commission per enrollment</div>
                            <div class="tier-detail">
                                <i class="fas fa-users-between-lines"></i>
                                દરેક બેચમાં ૧૦ વિદ્યાર્થીઓ
                            </div>
                        </div>
                        <!-- Tier 2 -->
                        <div class="tier-card reveal">
                            <div class="tier-number">2</div>
                            <div class="tier-icon"><i class="fas fa-rocket"></i></div>
                            <div class="tier-range"><i class="fas fa-trophy" style="margin-right:5px;"></i> ૫૧ – ૬૦ વિદ્યાર્થી</div>
                            <div class="tier-pct" data-target="22.5">22.5%</div>
                            <div class="tier-label">Commission per enrollment</div>
                            <div class="tier-detail">
                                <i class="fas fa-users-between-lines"></i>
                                દરેક બેચમાં ૧૦–૧૫ વિદ્યાર્થીઓ
                            </div>
                        </div>
                        <!-- Tier 3 -->
                        <div class="tier-card reveal">
                            <div class="tier-number">3</div>
                            <div class="tier-icon"><i class="fas fa-crown"></i></div>
                            <div class="tier-range"><i class="fas fa-fire" style="margin-right:5px;"></i> ૬૧+ વિદ્યાર્થી</div>
                            <div class="tier-pct" data-target="25">25%</div>
                            <div class="tier-label">Commission per enrollment</div>
                            <div class="tier-detail">
                                <i class="fas fa-users-between-lines"></i>
                                દરેક બેચમાં ૧૫+ વિદ્યાર્થીઓ
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ── CTA BANNER ── -->
                <div class="cta-banner reveal">
                    <div class="cta-banner-inner">
                        <div class="cta-chip"><i class="fas fa-infinity" style="margin-right:6px;"></i> Unlimited Growth Path</div>
                        <div class="cta-title">✨ તમારી કમાણીની તકો અહીંથી શરૂ થાય છે! ✨</div>
                        <div class="cta-sub">Your opportunity starts here — scale earnings with every referral &amp; unlock elite rewards</div>
                    </div>
                </div>

                <!-- CALCULATOR SECTION FULLY REMOVED -->

                <!-- ── TABLE A: Std 5, 6, 7 ── -->
                <section class="fee-section reveal">
                    <div class="sec-label"><i class="fas fa-table-list"></i> Fee Table A · </div>
                    <div class="sec-title">ધો. ૫, ૬, ૭ — ફી વિગત</div>
                    <div class="sec-desc">ધોરણ ૫, ૬, ૭ — Monthly, 6-Month &amp; Yearly fees</div>

                    <div class="tab-group">
                        <button class="tab-btn active" onclick="switchTab('a','5',this)">ધોરણ ૫</button>
                        <button class="tab-btn" onclick="switchTab('a','67',this)">ધોરણ ૬ </button>
                        <button class="tab-btn" onclick="switchTab('a','8',this)">ધોરણ ૭</button>
                    </div>

                    <!-- Grade 5 -->
                    <div class="fee-table-card active" id="tab-a-5">
                        <div class="ftc-header">
                            <div class="ftc-title"><i class="fas fa-calendar-week"></i> ધોરણ ૫ — ફી સ્ટ્રક્ચર</div>
                        </div>
                        <div class="col-headers">
                            <div class="col-h">વિષય</div>
                            <div class="col-h">માસિક</div>
                            <div class="col-h">૬ માસ</div>
                            <div class="col-h">વાર્ષિક</div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૧ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹175</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹1,050</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹1,890</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૨ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹166</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹1,995</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹3,591</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૩ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹158</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹2,835</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹5,103</span></div>
                        </div>
                        <div class="fee-row highlighted">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૪ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹149</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹3,570</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹6,426</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૫ વિષય</div>
                            <div class="fee-cell"><span class="pill-na">—</span></div>
                            <div class="fee-cell"><span class="pill-na">—</span></div>
                            <div class="fee-cell"><span class="pill-na">—</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૬ વિષય</div>
                            <div class="fee-cell"><span class="pill-na">—</span></div>
                            <div class="fee-cell"><span class="pill-na">—</span></div>
                            <div class="fee-cell"><span class="pill-na">—</span></div>
                        </div>
                    </div>

                    <!-- Grade 6&7 -->
                    <div class="fee-table-card" id="tab-a-67">
                        <div class="ftc-header">
                            <div class="ftc-title"><i class="fas fa-chart-simple"></i> ધોરણ ૬ — ફી સ્ટ્રક્ચર</div>
                        </div>
                        <div class="col-headers">
                            <div class="col-h">વિષય</div>
                            <div class="col-h">માસિક</div>
                            <div class="col-h">૬ માસ</div>
                            <div class="col-h">વાર્ષિક</div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૧ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹225</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹1,350</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹2,430</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૨ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹214</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹2,565</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹4,617</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૩ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹203</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹3,645</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹6,561</span></div>
                        </div>
                        <div class="fee-row highlighted">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૪ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹191</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹4,590</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹8,262</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૫ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹180</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹5,400</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹9,720</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૬ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹169</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹6,075</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹10,935</span></div>
                        </div>
                    </div>

                    <!-- Grade 8 (Table A) -->
                    <div class="fee-table-card" id="tab-a-8">
                        <div class="ftc-header">
                            <div class="ftc-title"><i class="fas fa-chart-line"></i> ધોરણ ૭ — ફી સ્ટ્રક્ચર</div>
                        </div>
                        <div class="col-headers">
                            <div class="col-h">વિષય</div>
                            <div class="col-h">માસિક</div>
                            <div class="col-h">૬ માસ</div>
                            <div class="col-h">વાર્ષિક</div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૧ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹250</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹1,500</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹2,700</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૨ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹238</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹2,850</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹5,130</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૩ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹225</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹4,050</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹7,290</span></div>
                        </div>
                        <div class="fee-row highlighted">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૪ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹213</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹5,100</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹9,180</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૫ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹200</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹6,000</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹10,800</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૬ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹188</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹6,750</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹12,150</span></div>
                        </div>
                    </div>

                    <div class="info-note reveal">
                        <span>⚠️ જીએસટી ટેક્ષ જુદો લેવાનો રહેશે</span>
                    </div>
                </section>

                <!-- ── TABLE B: Std 8, 9, 10 ── -->
                <section class="fee-section reveal">
                    <div class="sec-label"><i class="fas fa-rocket"></i> Fee Table B · </div>
                    <div class="sec-title">ધો. ૮, ૯, ૧૦ — ફી વિગત</div>
                    <div class="sec-desc">Advanced curriculum · maximum commission potential</div>

                    <div class="tab-group">
                        <button class="tab-btn active" onclick="switchTab('b','8',this)">ધોરણ ૮</button>
                        <button class="tab-btn" onclick="switchTab('b','9',this)">ધોરણ ૯</button>
                        <button class="tab-btn" onclick="switchTab('b','10',this)">ધોરણ ૧૦</button>
                    </div>

                    <!-- Grade 8 Pro -->
                    <div class="fee-table-card active" id="tab-b-8">
                        <div class="ftc-header">
                            <div class="ftc-title"><i class="fas fa-bolt"></i> ધોરણ ૮ </div>
                        </div>
                        <div class="col-headers">
                            <div class="col-h">વિષય</div>
                            <div class="col-h">માસિક</div>
                            <div class="col-h">૬ માસ</div>
                            <div class="col-h">વાર્ષિક</div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૧ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹300</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹1,800</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹3,240</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૨ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹285</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹3,420</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹6,156</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૩ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹270</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹4,860</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹8,748</span></div>
                        </div>
                        <div class="fee-row highlighted">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૪ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹255</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹6,120</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹11,016</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૫ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹240</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹7,200</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹12,960</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૬ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹225</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹8,100</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹14,580</span></div>
                        </div>
                    </div>

                    <!-- Grade 9 -->
                    <div class="fee-table-card" id="tab-b-9">
                        <div class="ftc-header">
                            <div class="ftc-title"><i class="fas fa-chart-line"></i> ધોરણ ૯ </div>
                        </div>
                        <div class="col-headers">
                            <div class="col-h">વિષય</div>
                            <div class="col-h">માસિક</div>
                            <div class="col-h">૬ માસ</div>
                            <div class="col-h">વાર્ષિક</div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૧ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹350</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹2,100</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹3,780</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૨ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹333</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹3,990</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹7,182</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૩ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹315</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹5,670</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹10,206</span></div>
                        </div>
                        <div class="fee-row highlighted">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૪ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹298</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹7,140</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹12,852</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૫ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹280</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹8,400</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹15,120</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૬ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹263</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹9,450</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹17,010</span></div>
                        </div>
                    </div>

                    <!-- Grade 10 -->
                    <div class="fee-table-card" id="tab-b-10">
                        <div class="ftc-header">
                            <div class="ftc-title"><i class="fas fa-crown"></i> ધોરણ ૧૦ </div>
                        </div>
                        <div class="col-headers">
                            <div class="col-h">વિષય</div>
                            <div class="col-h">માસિક</div>
                            <div class="col-h">૬ માસ</div>
                            <div class="col-h">વાર્ષિક</div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૧ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹400</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹2,400</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹4,320</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૨ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹380</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹4,560</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹8,208</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૩ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹360</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹6,480</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹11,664</span></div>
                        </div>
                        <div class="fee-row highlighted">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૪ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹340</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹8,160</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹14,688</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૫ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹320</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹9,600</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹17,280</span></div>
                        </div>
                        <div class="fee-row">
                            <div class="fee-cell"><i class="fas fa-circle-dot subj-icon"></i>૬ વિષય</div>
                            <div class="fee-cell"><span class="pill-monthly">₹300</span></div>
                            <div class="fee-cell"><span class="pill-6m">₹10,800</span></div>
                            <div class="fee-cell"><span class="pill-yearly">₹19,440</span></div>
                        </div>
                    </div>

                    <div class="info-note reveal">
                        <span>⚠️ જીએસટી ટેક્ષ જુદો લેવાનો રહેશે</span>
                    </div>
                </section>

            </div>
            
            <script>
                // ── Tab Switcher ──
                function switchTab(table, grade, btn) {
                    // deactivate all tabs in group
                    const group = btn.closest('.tab-group');
                    group.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    // hide all cards for this table
                    const section = btn.closest('section');
                    section.querySelectorAll('.fee-table-card').forEach(c => c.classList.remove('active'));
                    const target = document.getElementById('tab-' + table + '-' + grade);
                    if (target) target.classList.add('active');
                }

                // ── Scroll Reveal ──
                const revEls = document.querySelectorAll('.reveal');
                const io = new IntersectionObserver((entries) => {
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
                revEls.forEach(el => io.observe(el));

                // ── Count-up for tier % ──
                document.querySelectorAll('.tier-pct').forEach(el => {
                    const target = parseFloat(el.dataset.target);
                    const obs = new IntersectionObserver(entries => {
                        if (!entries[0].isIntersecting) return;
                        obs.disconnect();
                        let v = 0,
                            steps = 40;
                        const inc = target / steps;
                        const iv = setInterval(() => {
                            v += inc;
                            if (v >= target) {
                                el.textContent = target + '%';
                                clearInterval(iv);
                            } else el.textContent = v.toFixed(1) + '%';
                        }, 28);
                    }, {
                        threshold: 0.5
                    });
                    obs.observe(el);
                });

                // load fix
                window.addEventListener('load', () => {
                    revEls.forEach(el => {
                        if (el.getBoundingClientRect().top < window.innerHeight)
                            el.classList.add('in');
                    });
                });
            </script>

            <br>
            <br>
            <br>

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