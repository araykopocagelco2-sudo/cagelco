<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Questions</title>
    <!-- Include Bootstrap CSS for collapsible functionality -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
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
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #fff;
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
            cursor: pointer;
            object-fit: cover;
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

        /* General card styling */
        .accordion .card {
            border: none;
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
            margin-bottom: 15px;
        }

        .accordion .card-header {
            background-color: #f8f9fa;
            padding: 15px;
            cursor: pointer;
            border: 1px solid #ddd;
            transition: background-color 0.3s ease;
        }

        /* Button styling for accordion header */
        .accordion .btn-link {
            color: #666;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            width: 100%;
            text-align: left;
            padding: 0;
            transition: color 0.3s ease;
        }

        .accordion .btn-link:hover {
            color: #007bff;
        }

        /* Icon transition for collapse state */
        .accordion .btn-link::after {
            content: '\f107';
            /* Font Awesome arrow down */
            font-family: 'Font Awesome 5 Solid';
            float: right;
            font-size: 16px;
            transition: transform 0.3s ease;
        }

        .accordion .btn-link.collapsed::after {
            content: '\f105';
            /* Font Awesome arrow right */
            transform: rotate(90deg);
        }

        /* Styling for collapse animation */
        .collapse {
            transition: height 0.3s ease;
        }

        .accordion .card-body {
            background-color: #fff;
            padding: 20px;
            font-size: 16px;
            color: #555;
            border: 1px solid #ddd;
            border-top: none;
            line-height: 1.6;
        }

        /* Improved bullet points and list */
        ol,
        ul {
            line-height: 1.7;
            padding-left: 25px;
        }

        ol>li {
            margin-bottom: 15px;
        }

        ul>li {
            margin-bottom: 8px;
        }
    </style>
</head>

<body>
    <!-- Page Header -->
    <div class="header">
        <span class="title">
            CAGELCO II
        </span>
        <div class="menu">
            <!-- Hamburger menu icon -->
            <i class="icon-list menu-icon"></i>
            <div class="dropdown-content">
                <a href="admin_auth.php"> <i class="icon-user-following"></i> Login as Administrator </a>
                <a href="login.php"> <i class="icon-user-following"></i> Login as Consumer</a>
                <a href="main.php"> <i class="icon-layers"></i> Main Menu</a>
            </div>
        </div>
    </div>


    <div class="container-fluid mt-4">
        <h5><i class="icon-question"></i> Frequently Asked Questions</h5>
        <div class="accordion mt-4" id="faqAccordion">
            <!-- Question 1: How to Install the APK -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" style="color:#333; white-space: normal; word-wrap: break-word;"
                            type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            How to install the APK on your Android Phone?
                        </button>
                    </h5>
                </div>


                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                    <div class="card-body">
                        <div class="install-instructions mt-1">
                            <h5 style="margin-bottom:20px;">How to Install the APK on Your Android Phone</h5>

                            <!-- Step 1 -->
                            <div class="step">
                                <img src="assets/img/install_instruction1.jpg" alt="Download APK"
                                    class="instruction-img" onclick="openModal(this)">
                                <p><strong>Step 1:</strong> Download the APK file by clicking the "Download APK" button
                                    above.</p>
                            </div>

                            <!-- Step 2 -->
                            <div class="step">
                                <img src="assets/img/install_instruction2.jpg" alt="Enable Unknown Sources"
                                    class="instruction-img" onclick="openModal(this)">
                                <p><strong>Step 2:</strong> Open the downloaded APK file from your notification bar or
                                    file
                                    manager
                                    to start the installation.</p>
                            </div>

                            <!-- Step 3 -->
                            <div class="step">
                                <img src="assets/img/install_instruction4.jpg" alt="Install APK" class="instruction-img"
                                    onclick="openModal(this)">
                                <p><strong>Step 3:</strong> Click <strong>Install</strong> to begin the installation
                                    process. Once
                                    the
                                    installation is complete, you can open the app and start using it!</p>
                            </div>

                            <!-- Step 4: Google Play Protect Warning -->
                            <div class="step">
                                <img src="assets/img/install_instruction3.jpg" alt="Google Play Protect Warning"
                                    class="instruction-img" onclick="openModal(this)">
                                <p><strong>Step 4:</strong> If you see a message that says "<strong>Google Play Protect
                                        blocked this
                                        app</strong>", don't worry! Just tap on <strong>More details</strong> and then
                                    tap
                                    <strong>Install anyway</strong> to continue.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 2: How to file a complaint or service memo? -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link" style="color:#333; white-space: normal; word-wrap: break-word;"
                            type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                            aria-controls="collapseOne">
                            How to file a complaint or service memo?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                    <div class="card-body">
                        <h6>Follow these steps to file a complaint or service memo:</h6>
                        <ol>
                            <li><strong>Login to your account:</strong> Enter your credentials to access your account.
                            </li>
                            <li><strong>Tap on the Complaints menu:</strong> Navigate to the Complaints section from the
                                bottom navigation bar.</li>
                            <li><strong>Tap on the Add Complaint button:</strong> Click the orange "Add Complaint"
                                button.</li>
                            <li><strong>Fill in the required fields:</strong>
                                <ul>
                                    <li>Contact Number</li>
                                    <li>Nature of Complaint</li>
                                    <li>Location Information (Make sure to pinpoint the marker for the exact location of
                                        your house)</li>
                                </ul>
                            </li>
                            <li><strong>Track the status:</strong> You can monitor the progress and status of your
                                complaints in the list of complaints.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Question 3: Can I pay my bills through this app? -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link" style="color:#333; white-space: normal; word-wrap: break-word;"
                            type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
                            aria-controls="collapseOne">
                            Can I pay my bills through this app?
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                    <div class="card-body">
                        <p>You cannot pay through this app currently. However, you can pay through GCash by following
                            these steps:</p>
                        <ol>
                            <li>Open the <strong>GCash</strong> app.</li>
                            <li>Navigate to <strong>Pay Bills</strong> > <strong>Electric Utilities</strong> >
                                <strong>CAGELCO II</strong>.
                            </li>
                            <li>Input the required information (e.g., Account Number, Amount to Pay).</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Question 4: How long does it take for my payment to be posted? -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link" style="color:#333; white-space: normal; word-wrap: break-word;"
                            type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
                            aria-controls="collapseThree">
                            How long does it take for my payment to be posted?
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                    <div class="card-body">
                        <p>Payments are not reflected instantly in our system. Please allow the following timeframes for payment posting:</p>
                        <ul>
                            <li><strong>Payments made at our offices:</strong> 2–3 business days</li>
                            <li><strong>Payments made through partners (e.g., ECPay):</strong> 5–7 business days</li>
                        </ul>
                        <p>If your payment has not been posted after the expected period, kindly contact us for assistance.</p>
                        <hr>
                        <p><strong>Note:</strong> You cannot pay bills directly through this app. However, you can pay through GCash by following these steps:</p>
                        <ol>
                            <li>Open the <strong>GCash</strong> app.</li>
                            <li>Navigate to <strong>Pay Bills</strong> > <strong>Electric Utilities</strong> > <strong>CAGELCO II</strong>.</li>
                            <li>Enter the required information (e.g., Account Number, Amount to Pay).</li>
                        </ol>
                    </div>
                </div>
            </div>
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
    </div>

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

    <!-- Add Bootstrap JS and jQuery (needed for modals and accordion) -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script>
        // Function to open the modal with the clicked image
        function openModal(image) {
            var modalImage = document.getElementById('modal-image');
            modalImage.src = image.src; // Set the source of the modal image to the clicked image
            $('#imageModal').modal('show'); // Show the modal
        }

        // Get the menu icon and dropdown elements
        const menuIcon = document.querySelector(".menu-icon");
        const dropdownContent = document.querySelector(".dropdown-content");

        // Toggle dropdown visibility on click
        menuIcon.addEventListener("click", function (e) {
            dropdownContent.classList.toggle("fade-in");
            e.stopPropagation(); // Prevent this click from closing the menu
        });

        // Close the dropdown if clicking outside of the menu
        document.addEventListener("click", function (e) {
            if (
                !dropdownContent.contains(e.target) &&
                !menuIcon.contains(e.target)
            ) {
                dropdownContent.classList.remove("fade-in");
            }
        });

        // Prevent dropdown from closing when clicking inside
        dropdownContent.addEventListener("click", function (e) {
            e.stopPropagation(); // Ensure the dropdown doesn't close when clicked
        });
    </script>
</body>

</html>