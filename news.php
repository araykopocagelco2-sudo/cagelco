<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAGELCO II Online</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
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
            background-color: #f9f9f9;
        }

        .blog-iframe {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;
            /* 16:9 Aspect Ratio */
            overflow: hidden;
        }

        .blog-iframe iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Floating button style */
        .floating-button {
            display: none;
            position: fixed;
            bottom: 20px;
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

        .page-header {
            background-color: #003366;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .page-header h4 {
            margin: 0;
        }
    </style>
</head>

<body>
    <?php include('loader.php'); ?>
    <div class="page-header">
        <h4><i class="icon-book-open"></i> Latest News</h4>
    </div>
    <div class="blog-iframe" style="width: 100%; height: 600px; overflow: hidden;">
        <iframe src="https://cagelco2.org.ph/blog-2/" style="width: 100%; height: 100%; border: none;"
            title="CAGELCO II Blog">
            Your browser does not support iframes.
        </iframe>
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
        </div>
    </footer>
</body>

</html>