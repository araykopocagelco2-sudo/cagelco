<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Contact Information</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/general.css" />
    <!-- WebFont Loader -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Roboto:300,400,500,700,900"] // Load Roboto from Google Fonts
            },
            custom: {
                families: [
                    "Flaticon",
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["assets/css/fonts.min.css"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>
    <style>
        /* Floating button style */
        .floating-button {
            display: none;
            position: fixed;
            bottom: 50px;
            right: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3), 0 6px 6px rgba(0, 0, 0, 0.22);
            font-size: 20px;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            z-index: 9999;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        /* SVG icon inside the button */
        .floating-button svg {
            width: 26px;
            height: 26px;
            fill: white;
        }

        /* Hover effect */
        .floating-button:hover {
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            transform: translateY(-4px);
        }

        /* Show floating button only on screens smaller than 768px (mobile devices) */
        @media (max-width: 768px) {
            .floating-button {
                display: flex;
            }
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f9f9f9;
        }

        .page-header {
            background-color: #003366;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .page-header h4 {
            margin: 0;
        }

        .contact-section {
            margin-top: 10px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .contact-section:hover {
            transform: translateY(-10px);
        }

        .contact-section h5 {
            color: #003366;
        }

        .contact-section p {
            color: #666;
        }

        .contact-section i {
            color: #007bff;
        }

        /* Custom animation for icons */
        .contact-section .fa-phone-alt {
            animation: shake 1.5s infinite;
        }

        @keyframes shake {
            0% {
                transform: rotate(0);
            }

            25% {
                transform: rotate(3deg);
            }

            50% {
                transform: rotate(0);
            }

            75% {
                transform: rotate(-3deg);
            }

            100% {
                transform: rotate(0);
            }
        }

        .divider {
            height: 2px;
            background-color: #ff6600;
            margin: 10px 0;
        }

        footer {
            background-color: #f2f2f2;
            padding: 10px 20px;
            color: #666;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #ddd;
            position: fixed;
            bottom: 0;
            width: 100%;
            left: 0;
            z-index: 1000;
        }

        footer .social-icons a {
            color: #3f3d3e;
            margin-left: 10px;
            font-size: 18px;
        }

        footer .social-icons a:hover {
            color: #000;
        }
    </style>
</head>

<body>
    <!-- Page Header -->
    <div class="page-header">
        <h4><i class="icon-phone"></i> Contact Information</h4>
    </div>

    <div class="content mt-1 ml-4 mr-4 mb-4">
        <!-- Gonzaga Sub-Office -->
        <div class="row contact-section">
            <div class="col-md-6">
                <h5>Gonzaga Sub-Office</h5>
                <p><strong>Coverage:</strong> <br>Buguay, Sta. Teresita, Gonzaga & Sta. Ana</p>
                <p><i class="icon-phone"></i> (0956) 915 7861</p>
            </div>
        </div>
        <div class="divider"></div>

        <!-- Aparri Sub-Office -->
        <div class="row contact-section">
            <div class="col-md-6">
                <h5>Aparri Sub-Office</h5>
                <p><strong>Coverage:</strong> <br>Eastern Aparri, Eastern Camalaniugan, Eastern Lal-lo</p>
                <p><i class="icon-phone"></i> (0917) 122 8898</p>
            </div>
        </div>
        <div class="divider"></div>

        <!-- Magapit Sub-Office -->
        <div class="row contact-section">
            <div class="col-md-6">
                <h5>Magapit Sub-Office</h5>
                <p><strong>Coverage:</strong> <br>Gattaran, Lasam, Allacapan, Western Lal-lo, Part of Sto. Niño</p>
                <p><i class="icon-phone"></i> (0956) 915 7856</p>
            </div>
        </div>
        <div class="divider"></div>

        <!-- Sanchez Mira Sub-Office -->
        <div class="row contact-section">
            <div class="col-md-6">
                <h5>Sanchez Mira Sub-Office</h5>
                <p><strong>Coverage:</strong> <br>Pamplona, Sanchez Mira, Claveria, Sta. Praxedes, Calanasan-Apayao</p>
                <p><i class="icon-phone"></i> (0906) 477 3782</p>
            </div>
        </div>
        <div class="divider"></div>

        <!-- Libertad Sub-Office -->
        <div class="row contact-section">
            <div class="col-md-6">
                <h5>Libertad Sub-Office</h5>
                <p><strong>Coverage:</strong> <br>Abulug, Western Aparri, Western Camalaniugan, Ballesteros & Luna,
                    Flora,
                    Pudtol, Sta. Marcela - Apayao</p>
                <p><i class="icon-phone"></i> (0977) 802 7402</p>
            </div>
        </div>
    </div>

    <!-- Floating button with simple SVG line icon -->
    <button class="floating-button" onclick="window.history.back();">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
        </svg>
    </button>

    <!-- Footer -->
    <footer>
        <div>© 2024 CAGELCO II</div>
        <div class="social-icons">
            <a href="https://www.facebook.com/CAGELCO2.INC" target="_blank" aria-label="Facebook"><i
                    class="icon-social-facebook"></i></a>
            <a href="https://www.cagelco2.org.ph/" target="_blank" aria-label="Website"><i class="icon-globe"></i></a>
            <a href="mailto:cagelco2official@gmail.com" target="_blank" aria-label="Email us">
                <i class="icon-envelope"></i>
            </a>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="assets/js/core/bootstrap.min.js"></script>
</body>

</html>