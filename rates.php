<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CAGELCO II Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="CAGELCO II Online - Access your electric bill, submit billing inquiries, and file complaints conveniently online.">
    <meta name="keywords" content="CAGELCO II, online billing, electric bill inquiry, electricity complaints, customer service, billing support">
    <meta name="author" content="Jameel A. Basher | CAGELCO II">
    <meta property="og:title" content="CAGELCO II Online Services">
    <meta property="og:description" content="Conveniently access your billing statements, file service complaints, and get support from CAGELCO II—all online.">
    <meta property="og:type" content="Application">
    <meta property="og:url" content="https://online.cagelco2.org.ph"> 
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
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

        body,
        html {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
            height: 100%;
            margin: 0;
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

        table {
            border-collapse: collapse;
            width: 100%;
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: orange;
            color: white;
            font-weight: bold;
            padding: 10px;
        }

        td {
            padding: 10px;
            vertical-align: middle;
        }

        td span {
            font-size: 1.5em;
            font-weight: bold;
        }

        .text-center {
            margin-bottom: 20px;
        }

        .thead-dark th {
            border-bottom: 2px solid #dee2e6;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6;
        }

        main {
            flex: 1;
            /* This allows the main content area to expand */
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
    <main>
        <!-- Page Header -->
        <div class="page-header">
            <h4><i class="icon-energy"></i> Power Rates</h4>
        </div>

        <div class="mt-1">
            <div class="card-body">
                <h5 class="text-left">
                    <span id="currentMonth"></span>, <span id="currentYear"></span> Power Rate
                </h5>
                <div class="text-center">
                    <?php
                    // Fetch current and previous month's rates
                    $query = "SELECT * FROM rates ORDER BY id DESC, year DESC, month DESC LIMIT 2";
                    $result = mysqli_query($conn, $query);

                    // Check if query returns data
                    if ($result && mysqli_num_rows($result) > 0) {
                        $rates = [];
                        while ($row = mysqli_fetch_assoc($result)) {
                            $rates[] = $row;
                        }

                        // Ensure you have at least 2 records (current and previous month)
                        if (count($rates) < 2) {
                            echo "Not enough data available to display rates.";
                        } else {
                            // Assume first row is current month, second row is previous month
                            $currentMonth = $rates[0]['month'];
                            $currentYear = $rates[0]['year'];
                            $prevMonth = $rates[1]['month'];
                            $prevYear = $rates[1]['year'];

                            // Set current month and year for title dynamically
                            echo "<script>
											document.getElementById('currentMonth').textContent = '" . ucfirst($currentMonth) . "';
											document.getElementById('currentYear').textContent = '" . $currentYear . "';
										</script>";

                            // Define categories for rates
                            $categories = [
                                ['name' => '<img src="assets/img/residential.jpg" style="width:50px; height:50px; border-radius:50%;"> <br> Residential', 'column' => 'residential'],  // Home icon for Residential
                                ['name' => '<img src="assets/img/low.jpg" style="width:50px; height:50px; border-radius:50%;"> <br> Low Voltage', 'column' => 'low_voltage'],  // Bolt icon for Low Voltage
                                ['name' => '<img src="assets/img/high.jpg" style="width:50px; height:50px; border-radius:50%;"> <br> High Voltage', 'column' => 'high_voltage'] // Industry icon for High Voltage
                            ];

                            // Table HTML structure
                            echo '<table class="table table-bordered text-center">';
                            echo '<thead>';
                            echo '<tr>';
                            foreach ($categories as $category) {
                                echo '<th>' . $category['name'] . '</th>';
                            }
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';

                            // Rate Change row
                            echo '<tr>';
                            foreach ($categories as $category) {
                                $currentRate = $rates[0][$category['column']];
                                $prevRate = $rates[1][$category['column']];
                                $rateChange = $currentRate - $prevRate;

                                // Determine arrow direction and color
                                $arrowIcon = $rateChange > 0 ? '<i class="fas fa-arrow-alt-circle-up"></i>' : '<i class="fas fa-arrow-circle-down"></i>';
                                $arrowColor = $rateChange > 0 ? 'red' : 'green';
                                $rateChangeFormatted = number_format(abs($rateChange), 2);

                                echo '<td style="color: ' . $arrowColor . ';">' . $arrowIcon . ' ' . ($rateChange > 0 ? '+' : '-') . $rateChangeFormatted . '<br/><small>Change</small>' . '</td>';
                            }
                            echo '</tr>';

                            // Current Rate row
                            echo '<tr>';
                            foreach ($categories as $category) {
                                $currentRate = $rates[0][$category['column']];
                                echo '<td>' . '<h3>₱' . number_format($currentRate, 2) . '</h3><small style="color:blue;">' . ucfirst($currentMonth) . ' ' . '</small><br/><small>Current Rate <br>(₱/kWh)</small></td>';
                            }
                            echo '</tr>';

                            // Previous Rate row
                            echo '<tr>';
                            foreach ($categories as $category) {
                                $prevRate = $rates[1][$category['column']];
                                echo '<td>' . '<h4>₱' . number_format($prevRate, 2) . '</h4><small style="color:orange;">' . ucfirst($prevMonth) . ' ' . '</small><br/><small>Previous Rate <br> (₱/kWh)</small></td>';
                            }
                            echo '</tr>';

                            echo '</tbody>';
                            echo '</table>';
                        }
                    } else {
                        echo "No rate data available.";
                    }

                    // Close the database connection
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </main>

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