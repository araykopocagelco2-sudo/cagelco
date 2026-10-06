<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download CAGELCO II Mobile App</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/general.css" />
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
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

        .download-section {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            margin: 10px auto;
        }

        .download-section h5 {
            color: #ff8800;
            /* Primary Orange Color */
            font-weight: bold;
        }

        .download-section p {
            color: #333;
            margin-bottom: 30px;
        }

        .download-btn:hover {
            color: #fff !important;
        }

        .download-btn i {
            margin-right: 10px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .apk-logo {
            font-size: 100px;
            color: #ff8800;
            margin-bottom: 20px;
            animation: scaleAnimation 2s infinite alternate;
            /* Scale animation */
        }

        @keyframes scaleAnimation {
            0% {
                transform: scale(1);
                /* Original size */
            }

            100% {
                transform: scale(1.2);
                /* Scale to 120% */
            }
        }


        @media (max-width: 576px) {
            .download-section {
                padding: 20px;
            }

            .download-btn {
                font-size: 16px;
                padding: 12px 25px;
            }
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

        .install-instructions {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
        }

        .install-instructions .step {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .instruction-img {
            width: 50px;
            height: 50px;
            margin-right: 15px;
            border-radius: 5px;
            object-fit: contain;
            border: 1px solid #f2f2f2;
        }

        .apk-img {
            width: 400px;
            height: 300px;
            border-radius: 5px;
            object-fit: contain;
        }

        .download-btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .download-btn:hover {
            background-color: #0056b3;
        }

        .note {
            background-color: #f1f1f1;
            padding: 10px;
            border-left: 3px solid #007bff;
            font-size: 14px;
        }
        
        .download-btn.disabled {
        pointer-events: none;
        opacity: 0.5;
        cursor: not-allowed;
        }
    </style>
</head>

<body>
    <?php include('loader.php'); ?>
    <!-- Page Header -->
    <div class="page-header">
        <h4><i class="fab fa-android"></i> Download APK</h4>
    </div>
    <div class="wrapper">
        <div class="download-section">
            <img src="assets/img/download-icon.jpg" alt="Download APK" class="apk-img">
            <h4>Mobile App Download</h4>
            <p>Access all your CAGELCO II services at your fingertips. Download our mobile app to manage your account,
                view bills, submit complaints and stay updated on the latest news and events.</p>

            <a href="#" class="btn download-btn disabled" onclick="return false;">
                <i class="fas fa-download"></i> Download APK <small>(Not yet available)</small>
            </a>

            <!-- Instruction Section -->
            <div class="install-instructions mt-4">
                <h4>How to Install the APK on Your Android Phone</h4>

                <!-- Step 1 -->
                <div class="step">
                    <img src="assets/img/install_instruction1.jpg" alt="Download APK" class="instruction-img"
                        onclick="openModal(this)">
                    <p><strong>Step 1:</strong> Download the APK file by clicking the "Download APK" button above.</p>
                </div>

                <!-- Step 2 -->
                <div class="step">
                    <img src="assets/img/install_instruction2.jpg" alt="Enable Unknown Sources" class="instruction-img"
                        onclick="openModal(this)">
                    <p><strong>Step 2:</strong> Open the downloaded APK file from your notification bar or file manager
                        to start the installation.</p>
                </div>

                <!-- Step 3 -->
                <div class="step">
                    <img src="assets/img/install_instruction4.jpg" alt="Install APK" class="instruction-img"
                        onclick="openModal(this)">
                    <p><strong>Step 3:</strong> Click <strong>Install</strong> to begin the installation process. Once
                        the
                        installation is complete, you can open the app and start using it!</p>
                </div>

                <!-- Step 4: Google Play Protect Warning -->
                <div class="step">
                    <img src="assets/img/install_instruction3.jpg" alt="Google Play Protect Warning"
                        class="instruction-img" onclick="openModal(this)">
                    <p><strong>Step 4:</strong> If you see a message that says "<strong>Google Play Protect blocked this
                            app</strong>", don't worry! Just tap on <strong>More details</strong> and then tap
                        <strong>Install anyway</strong> to continue.
                    </p>
                </div>

                <!-- Modal for Enlarging Image -->
                <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="imageModalLabel">Instruction Image</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img id="modal-image" src="" alt="Enlarged instruction" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Note for Android Users -->
                <div class="note mt-3" style="margin-bottom:1cm;">
                    <p><strong>Note:</strong> If you face any issues while installing the APK, ensure that you have
                        enabled installation from unknown sources and that there is sufficient storage space on your
                        device.</p>
                </div>
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
    <!-- Add Bootstrap JS and jQuery (needed for modals) -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
        // Function to open the modal with the clicked image
        function openModal(image) {
            var modalImage = document.getElementById('modal-image');
            modalImage.src = image.src; // Set the source of the modal image to the clicked image
            $('#imageModal').modal('show'); // Show the modal
        }
    </script>
</body>

</html>