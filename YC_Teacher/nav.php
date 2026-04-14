<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        #about-sec,
        #Why_Choose_Us,
        #vision,
        #Brand_Ambassador,
        #Leadership,
        #Testimonials {
            scroll-margin-top: 100px;
        }



        html {
            scroll-behavior: smooth;
        }

        section {
            scroll-margin-top: 100px;
        }

      
        @media (max-width:768px) {

            html,
            body {
                overflow-x: hidden;
            }
        }
    </style>
</head>

<body>
    <!-- <div id="magic-cursor" class="cursor-black-bg">
        <div id="ball"></div>
    </div>
    <div class="preloader"><button class="th-btn preloaderCls">CANCEL PRELOADER</button>
        <div class="preloader-inner">
            <div class="bounce mb-4"><img src="assets/img/logo-icon.svg" alt="img"></div><span class="loader">Escul
                <span class="loading-text">Escul</span></span>
        </div>
    </div> -->

    <div class="sidemenu-wrapper sidemenu-info d-none d-lg-block">

        <div class="sidemenu-content"><button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget">
                <div class="th-widget-about">
                    <div class="about-logo"><a href="index"><img src="img/new_logo.png" style="width: 25vh;" alt="Escul"></a></div>
                    <p class="about-text">Your Own Class ગુજરાત રાજ્યના ખૂણેખૂણે ઉચ્ચ કક્ષાના ઓનલાઇન ક્લાસ, રહેણાંક સ્ટડી સ્કૉલ અને IT-આધારિત કૌશલ્ય તાલીમ પ્રદાન કરે છે. </p>
                    <!-- <a href="contact.php"
                        class="th-btn btn-sm">Enroll Now<svg class="ms-2" width="16" height="14" viewBox="0 0 16 14"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.5264 0C7.5264 0.6962 8.21633 1.738 8.9138 2.61293C9.81193 3.7394 10.8838 4.72347 12.1137 5.4748C13.0351 6.0374 14.154 6.57747 15.0528 6.57747M7.5264 13.1712C7.5264 12.475 8.21633 11.4332 8.9138 10.5583C9.81193 9.43187 10.8838 8.44773 12.1137 7.6964C13.0351 7.1338 14.154 6.59373 15.0528 6.59373M15.0528 6.5856H0"
                                stroke="currentColor" stroke-width="1.5" />
                        </svg></a> -->
                </div>
            </div>

        </div>
    </div>
    <!-- <div class="popup-search-box d-none d-lg-block"><button class="searchClose"><i class="fas fa-times"></i></button>
        <form action="#"><input type="text" placeholder="What are you looking for?"> <button type="submit"><i
                    class="fal fa-search"></i></button></form>
    </div> -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center"><button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="th-menu-content">
                <div class="mobile-logo"><a href="index"><img src="img/new_logo.png" alt="Escul"></a></div>
                <div class="th-mobile-menu-bottom">
                    <!-- <form class="th-mobile-search" action="#"><input type="text" placeholder="Search..."> <button
                            class="icon-btn" type="submit"><i class="fal fa-search"></i></button></form> -->

                    <div class="contact-info-wrap">
                        <div class="contact-info"><i class="fa-regular fa-envelope"></i><a
                                href="mailto:yrownclass@gmail.com">yrownclass@gmail.com</a></div>
                        <div class="contact-info"><i class="fa-solid fa-phone"></i><a href="tel:6356 555 404">6356 555 404</a></div>
                    </div>

                </div>
                <div class="th-mobile-menu">
                    <ul>
                        <li><a href="index">Home</a></li>
                        <li><a href="about">About Us</a></li>
                        <li><a href="about_new">About YOC</a></li>
                        <li><a href="parents">Parents</a></li>
                        <!-- <li><a href="#Our_purpose">Our purpose</a></li>
                                    <li><a href="#vision">Vision and Mission</a></li> -->
                        <li><a href="techers">Teachers</a></li>
                        <li><a href="Brand_Ambassador">Brand Ambassador </a></li>
                        <li><a href="Cources">Courses </a></li>

                        <li><a href="contact">Contact Us </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.th-mobile-menu a').forEach(function(link) {

            link.addEventListener('click', function() {

                if (window.innerWidth < 992) {
                    document.querySelector('.th-menu-toggle').click();
                }

            });

        });
    </script>

    <header class="th-header header-layout1">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul class="header-left-wrap">
                                <li><i class="fas fa-phone"></i><a href="tel:6356 555 404 ">6356 555 404 </a>
                                </li>
                                <li><i class="fa-regular fa-envelope"></i><a
                                        href="mailto:yrownclass@gmail.com">yrownclass@gmail.com</a></li>
                                <!-- <li><i class="fa-regular fa-clock"></i>Mon - Sat: 8:00 - 15:00</li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links ps-0">
                            <ul>

                                <li>
                                    <div class="lang-switcher" id="langSwitcher">
                                        <button class="lang-btn notranslate" onclick="toggleLangDropdown(event)" translate="no">
                                            <i class="fas fa-globe"></i>
                                            <span id="selectedLang" class="notranslate" translate="no">GU</span>
                                            <i class="fas fa-chevron-down lang-arrow"></i>
                                        </button>

                                        <ul class="lang-dropdown notranslate" id="langDropdown" translate="no">
                                            <li data-lang="gu" onclick="changeLang('gu', 'GU')" class="notranslate" translate="no">ગુજરાતી</li>
                                            <li data-lang="en" onclick="changeLang('en', 'EN')" class="notranslate" translate="no">English</li>
                                            <li data-lang="hi" onclick="changeLang('hi', 'HI')" class="notranslate" translate="no">Hindi</li>
                                        </ul>
                                    </div>

                                    <div id="google_translate_element" style="display:none;"></div>
                                </li>

                                <script type="text/javascript">
                                    let currentLang = 'gu';

                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({
                                            pageLanguage: 'gu',
                                            includedLanguages: 'en,hi',
                                            autoDisplay: false
                                        }, 'google_translate_element');
                                    }

                                    function toggleLangDropdown(e) {
                                        e.preventDefault();
                                        updateDropdown();
                                        document.getElementById('langDropdown').classList.toggle('show');
                                    }

                                    function changeLang(langCode, label) {
                                        currentLang = langCode;

                                        const selectedLang = document.getElementById('selectedLang');
                                        selectedLang.textContent = label;
                                        selectedLang.setAttribute('translate', 'no');
                                        selectedLang.classList.add('notranslate');

                                        document.getElementById('langDropdown').classList.remove('show');
                                        updateDropdown();

                                        if (langCode === 'gu') {
                                            document.cookie = "googtrans=;path=/;expires=Thu, 01 Jan 1970 00:00:00 GMT";
                                            document.cookie = "googtrans=;path=/;domain=" + window.location.hostname + ";expires=Thu, 01 Jan 1970 00:00:00 GMT";
                                            location.reload();
                                            return;
                                        }

                                        setTimeout(function() {
                                            document.body.style.top = '0px';
                                            document.body.style.marginTop = '0px';

                                            var banner = document.querySelector('.goog-te-banner-frame');
                                            if (banner) banner.style.display = 'none';

                                            var skipTranslate = document.querySelectorAll('.skiptranslate');
                                            skipTranslate.forEach(function(el) {
                                                if (el.tagName !== 'DIV' || el.id === 'google_translate_element') return;
                                                el.style.display = 'none';
                                            });
                                        }, 800);

                                        var select = document.querySelector('#google_translate_element select');
                                        if (select) {
                                            select.value = langCode;
                                            select.dispatchEvent(new Event('change'));
                                        }

                                        setTimeout(function() {
                                            document.body.style.top = '0px';
                                            document.getElementById('selectedLang').textContent = label;
                                        }, 1500);
                                    }

                                    function updateDropdown() {
                                        const items = document.querySelectorAll('#langDropdown li');
                                        items.forEach(item => {
                                            if (item.getAttribute('data-lang') === currentLang) {
                                                item.style.display = 'none';
                                            } else {
                                                item.style.display = 'block';
                                            }
                                        });
                                    }

                                    document.addEventListener('click', function(e) {
                                        if (!document.getElementById('langSwitcher').contains(e.target)) {
                                            document.getElementById('langDropdown').classList.remove('show');
                                        }
                                    });

                                    document.addEventListener('DOMContentLoaded', function() {
                                        updateDropdown();
                                    });
                                </script>

                                <script type="text/javascript"
                                    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                                </script>

                                <style>
                                    .lang-switcher {
                                        position: relative;
                                        display: inline-block;
                                    }

                                    .lang-btn {
                                        display: flex;
                                        align-items: center;
                                        gap: 6px;
                                        background: #1a2b4a;
                                        color: #fff;
                                        border: 1px solid #2e4a7a;
                                        border-radius: 8px;
                                        padding: 8px 14px;
                                        cursor: pointer;
                                        font-size: 14px;
                                        font-weight: 500;
                                    }

                                    .lang-btn:hover {
                                        background: #243660;
                                    }

                                    .lang-arrow {
                                        font-size: 11px;
                                        margin-left: 2px;
                                    }

                                    .lang-dropdown {
                                        display: none;
                                        position: absolute;
                                        top: calc(100% + 6px);
                                        left: 0;
                                        background: #1a2b4a;
                                        border: 1px solid #2e4a7a;
                                        border-radius: 8px;
                                        list-style: none;
                                        padding: 6px 0;
                                        margin: 0;
                                        min-width: 150px;
                                        z-index: 9999;
                                        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
                                    }

                                    .lang-dropdown.show {
                                        display: block;
                                    }

                                    .lang-dropdown li {
                                        padding: 9px 16px;
                                        cursor: pointer;
                                        color: #fff;
                                        font-size: 14px;
                                        transition: background 0.2s;
                                    }

                                    .lang-dropdown li:hover {
                                        background: #243660;
                                    }

                                    /* Google Translate bar hide */
                                    .goog-te-banner-frame,
                                    .skiptranslate {
                                        display: none !important;
                                    }

                                    body {
                                        top: 0 !important;
                                    }

                                    .goog-logo-link,
                                    .goog-te-gadget span {
                                        display: none !important;
                                    }
                                </style>
                                <!-- Optional CSS - Google Translate ने dropdown ની style સાથે match કરવા -->
                                <style>
                                    .goog-te-gadget-simple {
                                        border: none !important;
                                        background: transparent !important;
                                        padding: 0 !important;
                                    }

                                    .goog-te-gadget-simple .goog-te-menu-value {
                                        color: inherit !important;
                                    }

                                    .goog-te-gadget-simple .goog-te-menu-value span:first-child {
                                        display: none;
                                        /* Default language text hide કરવા */
                                    }
                                </style>
                                <!-- <li>
                                    <div class="th-social"><a href="https://www.facebook.com/"><i
                                                class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                                class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                                class="fab fa-linkedin-in"></i></a> <a
                                            href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a> <a
                                            href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="p-2">
                <div class="menu-area">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo" style="padding: 0;">
                                <a href="index">
                                    <img src="img/new_logo.png" style="width: 23vh;" alt="Escul">
                                </a>
                            </div>
                        </div>


                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li><a href="index">Home</a></li>
                                    <li><a href="about">About Us</a></li>
                                    <li><a href="about_new">About YOC</a></li>
                                    <li><a href="parents">Parents</a></li>
                                    <!-- <li><a href="#Our_purpose">Our purpose</a></li>
                                    <li><a href="#vision">Vision and Mission</a></li> -->
                                    <li><a href="teacher">Teachers</a></li>
                                    <li><a href="Brand_Ambassador">Brand Ambassador </a></li>
                                    <li><a href="Cources">Courses </a></li>

                                    <li><a href="contact">Contact Us </a></li>

                                </ul>
                            </nav><button type="button" class="th-menu-toggle d-block d-lg-none"><i
                                    class="fal fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block" style="visibility: hidden;">
                            <div class="header-button"><button type="button"
                                    class="icon-btn style-border searchBoxToggler d-lg-block d-none"><i
                                        class="fal fa-search"></i></button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {

            anchor.addEventListener("click", function(e) {

                e.preventDefault();

                const target = document.querySelector(this.getAttribute("href"));

                const headerOffset = 100;
                const elementPosition = target.offsetTop;
                const offsetPosition = elementPosition - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth"
                });

            });

        });
    </script>
</body>

</html>