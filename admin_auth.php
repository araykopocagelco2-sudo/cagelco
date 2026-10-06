<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>CAGELCO II Online</title>
  <!-- MDB icon -->
  <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="assets/css/mdb.min.css" />
  <!-- PWA -->
  <link rel="manifest" href="manifest.json">
  <!-- CAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
    .container {
      display: flex;
      align-items: center;
      padding: 1px;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .logo img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      border: 1px solid #f7c388;
      transition: transform 0.3s ease-in-out;
      /* Smooth animation */
    }

    .logo img:hover {
      transform: scale(1.2) rotate(360deg);
      /* Animation on hover */
    }

    .logo {
      flex-shrink: 0;
      margin-right: 15px;
    }

    /* PWA */
    #installApp {
      display: none;
    }

    @media (max-width: 768px) {
      #installApp {
        display: block;
      }
    }

    .container_logo {
      display: flex;
      align-items: center;
      padding: 1px;
      border-radius: 10px;
      margin-bottom: 5px;
    }

    .text {
      display: flex;
      flex-direction: column;
      margin-top: -20px;
    }

    .text h2,
    .text h4 {
      margin: 0;
    }

    .text h2 {
      font-size: 1.5em;
      color: rgb(43, 40, 40);
    }

    .text h4 {
      font-size: 0.8em;
      color: gray;
    }
  </style>
</head>

<body style="background-color:#fff;">
  <?php include('loader.php'); ?>
  <!-- Start your project here-->
  <div class="container h-100 d-flex justify-content-center align-items-center" style="margin-top: 1cm">
    <div class="row d-flex justify-content-center align-items-center w-100">
      <div class="col-md-9 col-lg-6 col-xl-5" style="
            background-color: hsl(0, 0%, 100%);
            padding: 1cm;
            border-radius: 10px;
          ">
        <form action="process_account_auth.php" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <div class="container_logo">
              <div class="logo">
                <img src="assets/img/logo-small.jpg" alt="img" id="blah" width="100" height="100" />
              </div>
              <div class="text">
                <h2 class="display-6 fw-bold ls-tight">CAGELCO II</h2>
                <h4>Enhancing Lives, Empowering Communities</h4>
              </div>
            </div>
          </div>
          <hr>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-left fw-bold mb-0 link-primary"><i class="icon-people"></i>&nbsp;Administrator Account</p>
          </div>

          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="username" placeholder="Username" required="required" autofocus
              class="form-control form-control-lg" />
            <label class="form-label" for="form3Example3">Username</label>
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-3">
            <input type="password" name="password" style="text-transform: capitalize"
              class="form-control form-control-lg" placeholder="Enter password" required />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Add the reCAPTCHA widget here -->
            <div class="g-recaptcha" data-sitekey="6LcfiAsqAAAAAJTkfufLXaX_zfd6D-Zyzpdpeicg"></div>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" data-mdb-ripple-init class="btn btn-primary btn-block mb-4" style="height:40px;">
              Login
            </button>
          </div>
        </form>
      </div>
      <div class="col-md-8 col-lg-6 col-xl-5 offset-xl-1 d-none d-md-block"
        style="margin-top: 0.5cm; padding-left:35px;">
        <h6 class="my-4 display-6 fw-bold ls-tight">
          Welcome to <br />
          <span style="color:orange;">CAGELCO II Complaints Tracking System</span>
        </h6>
        <p>Login Account Instructions:</p>
        <p>
          1. Enter your registered Username
        </p>
        <p>
          2. Enter Account Password
        </p>
        <p>3. Click Login</p>
      </div>
    </div>
  </div>

  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="assets/js/mdb.umd.min.js"></script>
  <script>
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('sw.js')
          .then((registration) => {
            console.log('Service Worker registered with scope:', registration.scope);
          })
          .catch((error) => {
            console.error('Service Worker registration failed:', error);
          });
      });
    } else {
      console.log('Service Worker is not supported in this browser.');
    }
  </script>

</body>

</html>