<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAGELCO II Online</title>
    <!-- Bootstrap CSS -->
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

        .divider {
            height: 2px;
            background-color: #ff6600;
            margin: 10px 0;
        }

        .notice-card {
            border-left: 5px solid #ff8800;
            /* Primary Orange */
            background-color: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .notice-header {
            color: #333;
            padding: 10px;
            border-radius: 5px 5px 0 0;
            font-size: 15px;
            font-weight: bold;
        }

        .table th {
            color: #ff8800;
        }

        .responsive-text {
            font-size: 1em;
        }

        .time {
            font-size: 1em;
            color: #333;
        }

        @media (max-width: 576px) {
            .responsive-text {
                font-size: 1em;
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
    </style>
</head>

<body>
    <?php include('loader.php'); ?>
    <?php
    include('connection.php');
    // Fetch power interruption data
    $sql = "SELECT * FROM power_interruption ORDER BY id DESC";
    $result = $conn->query($sql);
    ?>
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

    <div class="content mt-4 ml-2 mr-2">
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="notice-card">
                    <div class="notice-header text-uppercase btn-warning">
                        NOTICE OF
                        <?= $row['type'] == 'SCHEDULED' ? 'Scheduled Power Interruption' : 'Unscheduled Power Interruption'; ?>
                    </div>
                    <div class="p-3">
                        <p class="responsive-text">
                            <strong><i class="icon-home"></i> Agency:</strong><br />
                            <span style="font-size: 1.5em;"><?= $row['agency']; ?></span>
                        </p>

                        <p class="responsive-text">
                            <strong><i class="icon-calendar"></i> Date:</strong>
                            <?= $row['month'] . " " . $row['day_number'] . ", " . '<span style="color:red;">' . $row['day_name'] . '</span>'; ?>
                        </p>
                        <p class="time">
                            <strong><i class="icon-clock"></i> Time:</strong> <?= $row['time_from']; ?> -
                            <?= $row['time_to']; ?>
                        </p>
                        <p class="affected-areas">
                            <strong><i class="icon-location-pin"></i> Affected Areas:</strong><br>
                        <p style="margin-left:20px; margin-top:-15px;">
                            <?php echo str_replace(',', '<br>', $row['affected_areas']); ?>
                        </p>

                        </p>
                        <p>
                            <strong><i class="icon-information"></i> Reason:</strong><br>
                        <p style="margin-left:20px; margin-top:-15px;"><?= $row['reason']; ?></p>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-center text-muted">No power interruptions to display.</p>
        <?php endif; ?>
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

    <!-- Bootstrap JS -->
    <script src="assets/js/core/bootstrap.min.js"></script>
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