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
</head>

<body class="th-magic-cursor">


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


    <?php include 'nav.php'; ?>


    <div id="">
        <div id="">



            <div class="breadcumb-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="breadcumb-content">
                                <h1 class="breadcumb-title">સંપર્ક કરો</h1>
                                <ul class="breadcumb-menu">
                                    <li><a href="index">Home</a></li>
                                    <li>સંપર્ક કરો</li>
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
                    margin: 0 auto;
                    display: grid;
                    grid-template-columns: repeat(3, 400px);
                    /* 3 fixed cards */
                    justify-content: center;
                    /* center alignment */
                    gap: 35px;
                    position: relative;
                    z-index: 2;
                }

                .yoc-shape-icon i {
                    font-size: 32px;
                    color: white;
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
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .yoc-uniq-card:nth-child(1) .yoc-shape-icon {
                    background: #FF5C2A;
                    border-radius: 66% 34% 61% 39% / 26% 67% 33% 74%;
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
                        justify-items: center;
                    }

                    .yoc-uniq-card {
                        width: 100%;
                        max-width: 380px;
                    }
                }
            </style>

            <div class="yoc-light-section">

                <!-- Ambient Orbs -->



                <div class="yoc-container">

                    <a href="tel:6356555404" class="yoc-uniq-card">
                        <div class="yoc-shape-icon mb-3">
                            <i class="fa-solid fa-headset"></i>
                        </div>

                        <h3>ફોન કરો</h3>

                        <p>
                            સ્માર્ટ શિક્ષણ, ગમે ત્યારે, ગમે ત્યાંથી.
                            <br><strong>6356 555 404</strong>
                        </p>

                        <div class="yoc-line"></div>
                    </a>

                    <!-- Email -->
                    <a href="mailto:yrownclass@gmail.com" class="yoc-uniq-card">
                        <div class="yoc-shape-icon mb-3">
                            <i class="fal fa-envelope-open-text"></i>
                        </div>

                        <h3>ઈ-મેઈલ</h3>

                        <p>
                            કોઈ પણ પ્રશ્ન માટે ઈ-મેઈલ કરો.
                            <br><strong>yrownclass@gmail.com</strong>
                        </p>

                        <div class="yoc-line"></div>
                    </a>

                    <!-- Address -->
                    <a href="#" class="yoc-uniq-card">
                        <div class="yoc-shape-icon mb-3">
                            <i class="fal fa-map-location-dot"></i>
                        </div>

                        <h3>અમારું સ્થળ</h3>

                        <p>
                            <strong>શેઠ સાગા પ્રા. લી.</strong><br>
                            C/o "શેઠ ગ્રુપ", બી-૩૦૨,<br>
                            સપથ હેક્ષા, કારગિલ પેટ્રોલ પંપ સામે,<br>
                            એસ. જી. રોડ, અમદાવાદ.
                        </p>

                        <div class="yoc-line"></div>
                    </a>

                </div>
            </div>

            <div class="space-top overflow-hidden contact-area-1 position-relative z-index-common" id="contact-sec">
                <div class="container">

                    <div class="row align-items-stretch">

                        <!-- RIGHT : MAP -->
                        <div class="col-lg-6">

                            <div class="contact-map h-100 w-100">

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3020.55875244674!2d72.52229167531544!3d23.07686557913579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e834bb66aea3f%3A0xc0ad7ce794524ebc!2sKargil%20Petrol%20Pump%20SG%20Highway!5e1!3m2!1sen!2sin!4v1774086717397!5m2!1sen!2sin"
                                    width="100%"
                                    height="100%"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy">
                                </iframe>

                            </div>

                        </div>


                        <!-- LEFT : CONTACT FORM -->
                        <div class="col-lg-6">

                            <div class="contact-page-form-wrap">
                                <div class="contact-form contact-page-form">

                                    <form action="https://script.google.com/macros/s/AKfycby21UET4X35pAJhX0gAUkd9pLA8nENcBn501XU6ZyY-Ykcm7ci0BmYuawQsYnA9mN9q/exec" method="POST"
                                        class=" gform pure-form pure-form-stacked" data-email="yrownclass@gmail.com">

                                        <h4 class="form-title"
                                            style="font-size:1.6rem;font-family:'Noto Serif',serif;">
                                            અમારો સંપર્ક કરો
                                        </h4>

                                        <div class="row">

                                            <div class="col-md-6 form-group style-border3 mb-3">
                                                <input type="text" name="name" placeholder="તમારું નામ" class="form-control" required>
                                                <i class="fa-solid fa-user" ></i>
                                            </div>

                                            <div class="col-md-6 form-group style-border3 mb-3">
                                                <input type="email" name="email" placeholder="તમારો ઈ-મેઈલ" class="form-control">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>

                                            <div class="col-md-6 form-group style-border3 mb-3">
                                                <input type="tel" name="phone" class="form-control"
                                                    placeholder="ફોન નંબર" maxlength="10" pattern="[0-9]{10}" required>
                                                <i class="fa-solid fa-phone" ></i>
                                            </div>

                                            <div class="col-md-6 form-group style-border3 mb-3">
                                                <input type="text" name="subject" class="form-control" placeholder="વિષય" >
                                                <i class="fa-solid fa-book"></i>
                                            </div>

                                            <div class="col-12 form-group style-border3 mb-3">
                                                <textarea cols="30" name="message" rows="3" class="form-control"
                                                    placeholder="સંદેશ લખો...."></textarea>
                                                <i class="fa-solid fa-pen"></i>
                                            </div>

                                            <div class="form-btn col-12">
                                                <button class="th-btn">
                                                    સંદેશ મોકલો
                                                </button>
                                            </div>

                                        </div>

                                        <!-- Thankyou_message --><br>
                                        <div class="thankyou_message alert alert-success" role="alert" style="display: none;">
                                            ✅ Thanks for contacting us! We will get back to you soon.

                                        </div>

                                    </form>

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

        </div>
    </div>


    <style>
        .contact-map {
            height: 100%;
        }

        .contact-map iframe {
            height: 100%;
            width: 100%;
            border-radius: 10px;
        }

        .contact-page-form-wrap {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        @media(max-width:500px) {
            .contact-map iframe {
                height: 400px;
                margin-bottom: 5%;
            }
        }
    </style>


    <script data-cfasync="false" type="text/javascript">
        (function() {
            function validEmail(email) {
                var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                return re.test(email);
            }

            function validateHuman(honeypot) {
                if (honeypot) {
                    console.log("Robot Detected!");
                    return true;
                } else {
                    console.log("Welcome Human!");
                }
            }

            function getFormData(form) {
                var elements = form.elements;

                var fields = Object.keys(elements).filter(function(k) {
                    return (elements[k].name !== "honeypot");
                }).map(function(k) {
                    if (elements[k].name !== undefined) {
                        return elements[k].name;
                    } else if (elements[k].length > 0) {
                        return elements[k].item(0).name;
                    }
                }).filter(function(item, pos, self) {
                    return self.indexOf(item) == pos && item;
                });

                var formData = {};
                fields.forEach(function(name) {
                    var element = elements[name];
                    formData[name] = element.value;
                    if (element.length) {
                        var data = [];
                        for (var i = 0; i < element.length; i++) {
                            var item = element.item(i);
                            if (item.checked || item.selected) {
                                data.push(item.value);
                            }
                        }
                        formData[name] = data.join(', ');
                    }
                });

                // add form-specific values into the data
                formData.formDataNameOrder = JSON.stringify(fields);
                formData.formGoogleSheetName = form.dataset.sheet || "sheetname"; // default sheet name
                formData.formGoogleSendEmail = form.dataset.email || ""; // no email by default

                console.log(formData);
                return formData;
            }

            function handleFormSubmit(event) {
                event.preventDefault();
                var form = event.target;
                var data = getFormData(form);
                if (data.email && !validEmail(data.email)) {
                    var invalidEmail = form.querySelector(".email-invalid");
                    if (invalidEmail) {
                        invalidEmail.style.display = "block";
                        return false;
                    }
                } else {
                    disableAllButtons(form);
                    var url = form.action;
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', url);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function() {
                        console.log(xhr.status, xhr.statusText);
                        console.log(xhr.responseText);
                        var formElements = form.querySelector(".form-elements")
                        if (formElements) {
                            formElements.style.display = "none"; // hide form
                        }
                        var thankYouMessage = form.querySelector(".thankyou_message");
                        if (thankYouMessage) {
                            thankYouMessage.style.display = "block";
                        }
                        return;
                    };
                    var encoded = Object.keys(data).map(function(k) {
                        return encodeURIComponent(k) + "=" + encodeURIComponent(data[k]);
                    }).join('&');
                    xhr.send(encoded);
                }
            }

            function loaded() {
                console.log("Contact form submission handler loaded successfully.");
                var forms = document.querySelectorAll("form.gform");
                for (var i = 0; i < forms.length; i++) {
                    forms[i].addEventListener("submit", handleFormSubmit, false);
                }
            };
            document.addEventListener("DOMContentLoaded", loaded, false);

            function disableAllButtons(form) {
                var buttons = form.querySelectorAll("button");
                for (var i = 0; i < buttons.length; i++) {
                    buttons[i].disabled = true;
                }
            }
        })();
    </script>

    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/hover-effect.umd.js"></script>
    <script src="assets/js/main.js"></script>
</body>
<!-- Mirrored from html.themehour.net/escul/demo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2026 06:57:47 GMT -->

</html>