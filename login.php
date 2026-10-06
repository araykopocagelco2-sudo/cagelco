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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="assets/css/mdb.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
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
    body {
      background-color: #fff;
    }

    .container {
      display: flex;
      align-items: center;
      padding: 1px;
      border-radius: 10px;
      margin-bottom: 20px;
      width: 95%;
    }

    .logo {
      flex-shrink: 0;
      margin-right: 15px;
    }

    .logo img {
      border-radius: 50%;
      border: 1px solid #f7c388;
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

    .container_logo {
      display: flex;
      align-items: center;
      padding: 1px;
      border-radius: 10px;
      margin-bottom: 5px;
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
    
    .toggle-password-icon {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      font-size: 1.2rem;
      z-index: 5; /* Important: stays above the outline */
      color: #6c757d; /* subtle gray */
    }
    
    /* Prevent icon from blocking floating label animation */
    .form-outline input.form-control {
      padding-right: 45px; /* give space so icon doesn't overlap text */
    }
  </style>

  <script>
    function formatNumber(input) {
      // Remove non-digit characters
      let cleanedValue = input.value.replace(/\D/g, "");

      // Apply the format xxxx-xxxx-xxxx
      let formattedValue = "";
      for (let i = 0; i < cleanedValue.length; i++) {
        if (i > 0 && i % 4 === 0) {
          formattedValue += "-";
        }
        formattedValue += cleanedValue.charAt(i);
      }

      // Update the input value
      input.value = formattedValue;
    }
  </script>
</head>

<body>
  <?php include('loader.php'); ?>
  <div class="container h-100 d-flex justify-content-center align-items-center" style="margin-top: 1cm">
    <div class="row d-flex justify-content-center align-items-center w-100">
      <div class="col-md-9 col-lg-6 col-xl-5" style="
            background-color: hsl(0, 0%, 100%);
            padding: 1cm;
            border-radius: 10px;
          ">
        <form action="process_login.php" method="post">
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

          <div class="divider d-flex align-items-center my-2">
            <p class="text-center fw-bold mx-3 mb-0"></p>
          </div>

          <!-- Account Number input -->
          <div data-mdb-input-init class="form-outline mb-4 mt-4">
            <input type="text" name="account_number" placeholder="e.g 0128-2831-1474" id="formattedNumber"
              maxlength="14" oninput="formatNumber(this)" required="required" autofocus
              class="form-control form-control-lg" inputmode="numeric" />
            <label class="form-label" for="form3Example3">Account Number</label>
          </div>

         <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-3 position-relative">
            
              <input 
                type="password" 
                id="passwordInput"
                name="lastname"
                style="text-transform: capitalize"
                class="form-control form-control-lg"
                placeholder="Enter your registered Last Name"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Use your registered last name as password (case-insensitive)"
                required
              />
            
              <label class="form-label" for="passwordInput">Password</label>
            
              <!-- Show/Hide Icon (no structure changed) -->
              <i 
                class="bi bi-eye-slash"
                id="toggleIcon"
                onclick="togglePassword()"
                style="
                  position: absolute;
                  right: 12px;
                  top: 50%;
                  transform: translateY(-50%);
                  cursor: pointer;
                  font-size: 1.2rem;
                  color: #6c757d;
                "
              ></i>
            
            </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Add the reCAPTCHA widget here -->
            <div class="g-recaptcha" data-sitekey="6LcfiAsqAAAAAJTkfufLXaX_zfd6D-Zyzpdpeicg"></div>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" data-mdb-ripple-init class="btn btn-primary btn-block mb-4" style="height:40px;">
              Login
            </button>

            <div class="text-left mt-4">
              <p>
                Don't have an account?
                <a href="register.php" class="link-warning">Click here to Register</a>
              </p>
            </div>

            <div class="text-left mt-4">
              <small>Do you have concerns with your account? You can Email us at
                <a href="mailto:cagelco2.mis@gmail.com" style="color:blue">cagelco2.mis@gmail.com</a>.
              </small>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-8 col-lg-6 col-xl-5 offset-xl-1 d-none d-md-block"
        style="margin-top: 0.5cm; padding-left:35px;">
        <h5 class="my-4 display-6 fw-bold ls-tight">
          Welcome to <br />
          <span class="text-primary">CAGELCO II Online Services</span>
        </h5>
        <p>Login Account Instructions:</p>
        <p>
          1. Enter your 12 Digits Account Number (example 012525050024 without
          dash (-))
        </p>
        <p>Note:</p>
        <ul>
          <li>
            You must register your Account Number
            <a href="register.php">here</a>
            first.
          </li>
          <li>
            You may type directly your 12 digits Account Number without dash
            (-)
          </li>
        </ul>
        <p>
          2. Enter Account Password (Your password is your registered Lastname
          on our database)
        </p>
        <p>3. Click Login</p>
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
    
    function togglePassword() {
          const password = document.getElementById("passwordInput");
          const icon = document.getElementById("toggleIcon");
        
          if (password.type === "password") {
            password.type = "text";
            icon.classList.replace("bi-eye-slash", "bi-eye");
          } else {
            password.type = "password";
            icon.classList.replace("bi-eye", "bi-eye-slash");
          }
        
          // ⭐ Fix MDB floating label not updating ⭐
          password.dispatchEvent(new Event("input"));
        }
  </script>

</body>

</html>