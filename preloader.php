<?php
// PHP session/cookie કંઈ જ નહીં — JavaScript handle કરશે
$show_preloader = true; // હંમેશા HTML મોકલો, JS નક્કી કરશે
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Your Own Classes</title>
  <link rel="shortcut icon" href="img/logo_class.png" type="image/x-icon">

  <style>
    /* તમારી બધી CSS same રાખો */
    @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@600;800&family=Lato:wght@300;400;700&family=Noto+Serif+Gujarati:wght@700;900&family=Noto+Sans+Gujarati:wght@400;600;700&display=swap');

    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --blue: #1a6ea8;
      --red: #c0272d;
      --gold: #e87722;
      --bg: #f0f6fc;
      --text: #1a3a5c;
      --muted: #7a9bbf;
    }

    body {
      background: var(--bg);
    }

    #preloader {
      position: fixed;
      inset: 0;
      background: var(--bg);
      background-image:
        radial-gradient(circle at 20% 20%, rgba(26, 110, 168, 0.07) 0%, transparent 55%),
        radial-gradient(circle at 80% 80%, rgba(232, 119, 34, 0.05) 0%, transparent 55%),
        linear-gradient(rgba(26, 110, 168, 0.035) 1px, transparent 1px),
        linear-gradient(90deg, rgba(26, 110, 168, 0.035) 1px, transparent 1px);
      background-size: 100% 100%, 100% 100%, 36px 36px, 36px 36px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      z-index: 9999;
      transition: opacity 0.7s ease, visibility 0.7s ease;
    }

    #preloader.hidden {
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
    }

    /* preloader ને તરત છુપાવો જો જરૂર ન હોય */
    #preloader.skip {
      display: none;
    }

    .logo-wrap {
      position: relative;
      width: 220px;
      display: flex;
      align-items: center;
      justify-content: center;
      animation: logo-pop 0.7s cubic-bezier(0.22, 1, 0.36, 1) forwards;
      opacity: 0;
      transform: scale(0.55);
    }

    @keyframes logo-pop {
      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .logo-img {
      width: 220px;
      height: auto;
      object-fit: contain;
      display: block;
      mix-blend-mode: multiply;
      animation: pulse-drop 3s 0.8s ease-in-out infinite;
    }

    @keyframes pulse-drop {

      0%,
      100% {
        opacity: 1;
        transform: scale(1);
      }

      50% {
        opacity: 0.92;
        transform: scale(1.02);
      }
    }

    .divider {
      width: 36px;
      height: 2px;
      background: linear-gradient(90deg, var(--blue), var(--gold));
      border-radius: 99px;
      margin: 16px auto 0;
      animation: fade-up 0.8s 0.55s ease both;
    }

    .pl-tagline {
      text-align: center;
      margin-top: 14px;
      animation: fade-up 0.8s 0.62s ease both;
    }

    .tg1 {
      font-family: 'Noto Serif Gujarati', serif;
      font-size: 1.15rem;
      font-weight: 900;
      color: var(--text);
      line-height: 1.4;
      margin-bottom: 4px;
    }

    .tg1 .c-teal {
      color: #007A60;
    }

    .tg1 .c-orange {
      color: var(--gold);
    }

    .tg2 {
      font-family: 'Noto Serif Gujarati', serif;
      font-size: 1rem;
      font-weight: 700;
      color: var(--blue);
      line-height: 1.4;
    }

    .tg2 em {
      font-style: normal;
      color: var(--gold);
    }

    .loading-area {
      margin-top: 18px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
      animation: fade-up 0.8s 0.72s ease both;
    }

    .loading-row {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .loading-label {
      font-family: 'Lato', sans-serif;
      font-size: 0.68rem;
      letter-spacing: 0.2em;
      color: var(--muted);
      text-transform: uppercase;
    }

    .loading-pct {
      font-family: 'Lato', sans-serif;
      font-size: 0.75rem;
      font-weight: 700;
      color: var(--blue);
      min-width: 36px;
      text-align: right;
    }

    .progress-wrap {
      width: 220px;
      height: 4px;
      background: rgba(26, 110, 168, 0.1);
      border-radius: 99px;
      overflow: hidden;
    }

    .progress-bar {
      height: 100%;
      width: 0%;
      background: linear-gradient(90deg, var(--blue), var(--gold), var(--red));
      border-radius: 99px;
      transition: width 0.1s linear;
      position: relative;
    }

    .progress-bar::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.55), transparent);
      animation: shimmer 1.3s linear infinite;
    }

    @keyframes shimmer {
      from {
        transform: translateX(-100%);
      }

      to {
        transform: translateX(200%);
      }
    }

    .dots {
      display: flex;
      gap: 7px;
    }

    .dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      animation: dot-bounce 1.3s ease-in-out infinite;
    }

    .dot:nth-child(1) {
      background: var(--blue);
      animation-delay: 0s;
    }

    .dot:nth-child(2) {
      background: var(--gold);
      animation-delay: 0.2s;
    }

    .dot:nth-child(3) {
      background: var(--red);
      animation-delay: 0.4s;
    }

    @keyframes dot-bounce {

      0%,
      80%,
      100% {
        transform: scale(1);
        opacity: 0.35;
      }

      40% {
        transform: scale(1.7);
        opacity: 1;
      }
    }

    @keyframes fade-up {
      from {
        opacity: 0;
        transform: translateY(14px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>

  <script>
    // ✅ PAGE LOAD થાય એ પહેલા જ check કરો
    // sessionStorage = tab/browser બંધ થાય એટલે automatically delete
    if (sessionStorage.getItem('mci_loaded')) {
      // પહેલા આવી ચૂક્યા છે → preloader skip
      document.write('<style>#preloader{display:none!important}</style>');
    }
  </script>
</head>

<body>

  <!-- PRELOADER -->
  <div id="preloader">

    <div class="logo-wrap">
      <img class="logo-img" src="img/new_logo.png" alt="MCI School Logo" />
    </div>

    <div class="divider"></div>

    <div class="pl-tagline">
      <div class="tg1">
        <span class="c-teal">વિદ્યાદાન</span> અને
        <span class="c-orange">આર્થિક વિકાસ</span>
        &nbsp;–&nbsp;
        &ldquo;ઘર બેઠા <em>શિક્ષણ</em>&rdquo;
      </div>
    </div>

    <div class="loading-area">
      <div class="dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
      <div class="loading-row" style="visibility:hidden;">
        <span class="loading-label">Loading</span>
        <span class="loading-pct" id="progressPct">0%</span>
      </div>
      <div class="progress-wrap" style="visibility:hidden;">
        <div class="progress-bar" id="progressBar"></div>
      </div>
    </div>

  </div>

  <script>
    // ✅ sessionStorage માં flag set કરો
    sessionStorage.setItem('mci_loaded', '1');

    const bar = document.getElementById('progressBar');
    const pct = document.getElementById('progressPct');

    // Preloader છે કે નહીં check કરો
    const preloader = document.getElementById('preloader');

    if (preloader && getComputedStyle(preloader).display !== 'none') {
      let progress = 0;

      const interval = setInterval(() => {
        const step = progress < 70 ? (1 + Math.random() * 3) : 0.7;
        progress = Math.min(progress + step, 99);
        if (bar) bar.style.width = progress + '%';
        if (pct) pct.textContent = Math.floor(progress) + '%';
      }, 60);

      window.addEventListener('load', () => {
        setTimeout(() => {
          clearInterval(interval);
          if (bar) bar.style.width = '100%';
          if (pct) pct.textContent = '100%';
          setTimeout(() => {
            preloader.classList.add('hidden');
          }, 500);
        }, 1800);
      });
    }
  </script>

</body>

</html>