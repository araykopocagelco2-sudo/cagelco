<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
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
  <link rel="stylesheet" href="assets/css/all.min.css" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
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
    background-image: repeating-linear-gradient(45deg, rgb(255,255,255) 0px, rgb(255,255,255) 10px,transparent 10px, transparent 11px),repeating-linear-gradient(135deg, rgb(255,255,255) 0px, rgb(255,255,255) 10px,transparent 10px, transparent 11px),linear-gradient(90deg, hsl(256,7%,84%),hsl(256,7%,84%));
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

  <div class="header">
    <span class="title"></span>
    <div class="menu">
      <!-- Hamburger menu icon -->
      <i class="icon-list menu-icon"></i>
      <div class="dropdown-content">
        <a href="admin_auth.php"> <i class="icon-user-following"></i> Administrator Login </a>
        <a href="#"> <i class="icon-cloud-download"></i> Download APK </a>
        <a href="#"> <i class="icon-information"></i> About </a>
        <a href="#"> <i class="icon-logout"></i> Exit System </a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="container_logo">
      <div class="logo">
        <img src="assets/img/logo-small.jpg" alt="img" id="blah" width="100" height="100" />
      </div>
      <div class="text">
        <h2 class="display-6 fw-bold ls-tight">CAGELCO II</h2>
        <h4>Enhancing Lives, Empowering Communities</h4>
      </div>
    </div>

    <!-- Button Row with Icons -->
    <div class="button-row">
      <a href="login.php" class="btn btn-login">
        <i class="icon-login"></i> Log in
      </a>
      <a href="register.php" class="btn btn-register">
        <i class="icon-user-follow"></i> Register
      </a>
    </div>
    <br />

    <div class="row text-center mt-4">
      <div class="col-4 grid-item">
        <a href="news.php">
          <svg style="color: #000000;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-globe">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M2 12h20M12 2a15.3 15.3 0 0 1 0 20M12 2a15.3 15.3 0 0 0 0 20"></path>
          </svg>
          <p>Latest News</p>
        </a>
      </div>
      <?php
      // Connect to the database
      include 'connection.php'; // Assuming you have a file for DB connection
      
      // Get the current date
      date_default_timezone_set('Asia/Manila');
      $current_month = date('F'); // Example: October
      $current_day = date('d');    // Example: 28
      
      // Query to get the count of future power interruptions
      $query = "SELECT COUNT(*) as interruption_count FROM power_interruption WHERE 
        (month = '$current_month' AND day_number >= $current_day) 
        OR (month > '$current_month')";

      // Execute the query
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_assoc($result);
      $interruption_count = $row['interruption_count'];
      ?>
      <div class="col-4 grid-item">
        <a href="pi_notice.php" style="position: relative;">
          <svg style="color: #000000;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-zap">
            <polygon points="13 2 3 14 12 14 10 22 21 10 13 10 13 2"></polygon>
          </svg>
          <p>Power Interruption</p>
          <?php if ($interruption_count > 0): ?>
            <span class="badge"><?php echo $interruption_count; ?></span>
          <?php endif; ?>
        </a>
      </div>
      <div class="col-4 grid-item">
        <a href="rates.php">
          <svg style="color: #000000;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-pie-chart">
            <path d="M21.21 15.89A10 10 0 1 1 12 2v10z"></path>
          </svg>
          <p>Power Rate</p>
        </a>
      </div>
      <div class="col-4 grid-item">
        <a href="fb.php">
          <svg style="color: #000000;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-facebook">
            <path d="M18 2h-3a5 5 0 0 0-5 5v3H8v4h2v8h4v-8h3.64l.36-4h-4V7a1 1 0 0 1 1-1h3z"></path>
          </svg>
          <p>FB Update</p>
        </a>
      </div>
      <div class="col-4 grid-item">
        <a href="download.php">
          <svg style="color: #000000;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-smartphone">
            <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
            <path d="M12 18h.01"></path>
          </svg>
          <p>Download APK</p>
        </a>
      </div>
      <div class="col-4 grid-item">
        <a href="" class="download-btn disabled">
          <svg style="color: #000000;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-bar-chart">
            <line x1="12" y1="20" x2="12" y2="10"></line>
            <line x1="18" y1="20" x2="18" y2="4"></line>
            <line x1="6" y1="20" x2="6" y2="16"></line>
          </svg>
          <p>Appliance Calculator</p>
        </a>
      </div>
      <div class="col-4 grid-item">
        <a href="faq.php">
          <svg style="color: #000000;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-help-circle">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M9.09 9a3 3 0 1 1 5.83 1c0 2-3 3-3 3"></path>
            <line x1="12" y1="17" x2="12" y2="17"></line>
          </svg>
          <p>FAQs</p>
        </a>
      </div>
      <div class="col-4 grid-item">
        <a href="offices.php">
          <svg style="color: #000000;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-map-pin">
            <path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <p>Offices</p>
        </a>
      </div>
      <div class="col-4 grid-item">
        <a href="contact.php">
          <svg style="color: #000000;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-phone">
            <path
              d="M22 16.92V21a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 3 3.18 2 2 0 0 1 5 1h4.09a2 2 0 0 1 2 1.72 12.09 12.09 0 0 0 .59 2.69 2 2 0 0 1-.45 2L9.91 9.91a16 16 0 0 0 6.9 6.9l2.5-1.33a2 2 0 0 1 2 0.45 12.09 12.09 0 0 0 2.69.59 2 2 0 0 1 1.72 2.09z">
            </path>
          </svg>
          <p>Contact Us</p>
        </a>
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

  <script>
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

  <!-- Bootstrap and FontAwesome JS -->
  <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>