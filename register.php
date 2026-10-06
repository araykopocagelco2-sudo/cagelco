<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>CAGELCO II Connect</title>
  <!-- MDB icon -->
  <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="assets/css/mdb.min.css" />
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
    .gallery {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      /* Space between images */
      margin-top: 1cm;
    }

    .gallery img {
      width: calc(20% - 7.5px);
      /* Adjust width based on gap */
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 15px;
    }

    .gallery img:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    body {
      background-color: transparent;
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
      border-radius: 10px;
      margin-bottom: 10px;
    }

    /* This class will customize the Google Sign-In button */
    .custom-google-signin span {
      display: none;
      /* Hides the text */
    }

    .custom-google-signin {
      display: inline-block;
      /* Ensures the button is treated as an inline-block element */
    }

    .custom-google-signin .abcRioButtonIcon {
      padding: 0;
      /* Removes padding */
      margin: 0;
    }

    .custom-google-signin .abcRioButtonContents {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Style for the hr element with text in the middle */
    hr {
      border: none;
      border-top: 1px solid #ccc;
      margin: 0;
    }

    /* Text styling */
    span {
      font-weight: bold;
      font-size: 1.1rem;
      color: #333;
      white-space: nowrap;
      /* Prevents text from wrapping */
      background-color: #fff;
      /* Ensures a clean background around text */
    }

    /* Ensure the horizontal lines take up the available space */
    .flex-grow-1 {
      flex-grow: 1;
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

  <div class="container h-100 d-flex justify-content-center align-items-center" style="margin-top: 1cm;">
    <div class="row d-flex justify-content-center align-items-center w-100">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <div class="container_logo mt-4 mx-3">
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

              <div class="card-body py-2 px-md-5">
                <?php
                include('connection.php');

                // Default value to display the Google sign-in button
                $google_user_status = 'not_registered';

                // If the user is signed in with Google, check if they are already registered
                if (isset($_COOKIE['google_id'])) {
                  $google_id = $_COOKIE['google_id'];

                  // Check if the user with this Google ID already exists in the database
                  $stmt = mysqli_prepare($conn, "SELECT * FROM ebs_consumer_account WHERE google_id = ?");
                  mysqli_stmt_bind_param($stmt, "s", $google_id);
                  mysqli_stmt_execute($stmt);
                  mysqli_stmt_store_result($stmt);
                  $num_rows = mysqli_stmt_num_rows($stmt);
                  mysqli_stmt_close($stmt);

                  // If the user exists, set status to "registered"
                  if ($num_rows > 0) {
                    $google_user_status = 'registered';
                  }
                }
                ?>

                <!-- Google Login Button -->
                <div class="text-center">
                  <p class="text-center" style="font-size:14px;">
                    Register using your <span class="text-primary" style="font-size:14px;">gmail account</span>
                  </p>

                  <?php if ($google_user_status == 'registered') { ?>
                    <!-- Already Registered Message -->
                    <div class="alert alert-success">
                      We have detected that you are already registered with Google Account. No further action is required.
                    </div>
                  <?php } else { ?>
                    <!-- Show Google Sign-In button if not registered -->
                    <div id="g_id_onload"
                      data-client_id="682924950303-d6iqomrtb149bfsat9drgs058t6e81tl.apps.googleusercontent.com"
                      data-callback="handleCredentialResponse" data-auto_prompt="false">
                    </div>
                    <div class="g_id_signin custom-google-signin" data-type="icon" data-size="large" data-theme="outline"
                      data-shape="circle" data-logo_alignment="left">
                    </div>
                  <?php } ?>
                </div>
                <div class="d-flex align-items-center justify-content-center mb-3">
                  <hr class="flex-grow-1">
                  <span class="mx-3" style="font-size:14px;">Or register manually</span>
                  <hr class="flex-grow-1">
                </div>


                <!-- Include Google's platform.js script -->
                <script src="https://accounts.google.com/gsi/client" async defer></script>

                <!-- Include the correct JWT Decode library -->
                <script src="https://cdn.jsdelivr.net/npm/jwt-decode@3.1.2/build/jwt-decode.min.js"></script>

                <script>
                  function handleCredentialResponse(response) {
                    // Decode the JWT token to extract user information
                    const data = jwt_decode(response.credential);

                    // Check if user is already registered via PHP check
                    document.cookie = "google_id=" + data.sub; // Save google_id in a cookie

                    // Redirect to your Google process page with user information if not already registered
                    window.location.href = "process_google_register.php?firstname=" + data.given_name +
                      "&lastname=" + data.family_name +
                      "&email=" + data.email +
                      "&google_id=" + data.sub;
                  }
                </script>

                <form method="POST" action="process_register.php" enctype="multipart/form-data">
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" name="firstname" class="form-control form-control-lg" placeholder="Firstname"
                          style="text-transform: capitalize" required autofocus />
                        <label class="form-label" for="form3Example1">First name</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" name="lastname" class="form-control form-control-lg" placeholder="Lastname"
                          style="text-transform: capitalize" required />
                        <label class="form-label" for="form3Example2">Last name</label>
                      </div>
                    </div>
                  </div>

                  <!-- Address input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="address" class="form-control form-control-lg" value=""
                      placeholder="Address" style="text-transform: capitalize" required />
                    <label class="form-label" for="form3Example3">Address</label>
                  </div>

                  <!-- Email input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" name="email" class="form-control form-control-lg" value=""
                      placeholder="Email Address" />
                    <label class="form-label" for="form3Example3">Email Address</label>
                  </div>

                  <!-- Account input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="account_number" class="form-control form-control-lg"
                      placeholder="12 Digits Account #" id="formattedNumber" maxlength="14" oninput="formatNumber(this)"
                      required="required" />
                    <label class="form-label" for="form3Example3">Account Number</label>
                  </div>

                  <!-- Account Name input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="account_name" class="form-control form-control-lg" value=""
                      placeholder="Account Name" style="text-transform: uppercase" />
                    <label class="form-label" for="form3Example4">Account Name</label>
                  </div>

                  <!-- Checkbox for Terms and Privacy Policy -->
                  <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="termsCheck" required>
                    <label class="form-check-label" for="termsCheck">
                      <small>
                        I have read and agree to the <a href="#" data-bs-toggle="modal"
                          data-bs-target="#termsModal"><span class="text-warning">CAGELCO II</span> Online Terms &
                          Conditions</a> and consent to the processing of my
                        personal data in accordance with the <a href="#" data-bs-toggle="modal"
                          data-bs-target="#privacyModal">Privacy Policy</a>.
                      </small>
                    </label>
                  </div>

                  <!-- Submit button -->
                  <button type="submit" name="submit" id="registerButton" data-mdb-ripple-init
                    class="btn btn-success btn-block mb-4" disabled>
                    Register
                  </button>

                  <!-- Register buttons -->
                  <div class="text-left mt-4">
                    <p>
                      Already have an account?
                      <a href="login.php">Click to Login</a>
                    </p>
                  </div>
                </form>

                <!-- Modal for Terms & Conditions -->
                <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="termsModalLabel">Terms & Conditions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" style="font-size:12px;">
                        <p><strong>Last updated:</strong> October 21, 2024</p>
                        <p>Welcome to the CAGELCO II Online. By using our Service, you
                          agree to the following Terms of Service ("Terms"). Please read them carefully.</p>

                        <h6>1. Acceptance of Terms</h6>
                        <p>By accessing or using the Service, you agree to be bound by these Terms. If you do not agree
                          with these Terms, please do not use the Service.</p>

                        <h6>2. Eligibility</h6>
                        <p>To use this Service, you must be at least 18 years old or have the consent of a parent or
                          legal guardian. You must also have a valid account with Cagayan II Electric Cooperative, Inc.
                          (CAGELCO II) to inquire about
                          billing, file complaints and other services provided by our system.</p>

                        <h6>3. User Account</h6>
                        <ul>
                          <li><strong>Registration:</strong> You may be required to create an account to use certain
                            features of the Service. You agree to provide accurate and complete information during the
                            registration process.</li>
                          <li><strong>Account Security:</strong> You are responsible for maintaining the confidentiality
                            of your login credentials and for any activities under your account. Please notify us
                            immediately of any unauthorized use of your account.</li>
                        </ul>

                        <h6>4. Use of the Service</h6>
                        <p>You agree to use the Service only for lawful purposes, including:</p>
                        <ul>
                          <li><strong>Billing Inquiries and Complaints:</strong></li>
                          <li><strong>Accuracy:</strong> Ensuring that any information you provide is accurate and up to
                            date.</li>
                          <li><strong>Compliance:</strong> Complying with all applicable laws and regulations when using
                            the Service.</li>
                        </ul>

                        <h6>5. Prohibited Activities</h6>
                        <p>You agree not to:</p>
                        <ul>
                          <li>Use the Service for any illegal or unauthorized purposes.</li>
                          <li>Submit false or misleading information.</li>
                          <li>Attempt to interfere with the Service or bypass any security measures.</li>
                        </ul>

                        <h6>6. Google Sign-In</h6>
                        <p>If you choose to log in using Google Sign-In, you consent to the collection of your profile
                          information (such as name, email, and Google ID) for account creation and verification
                          purposes. We do not share this information with third parties without your consent.</p>

                        <h6>7. Termination</h6>
                        <p>We reserve the right to terminate or suspend your access to the Service at our sole
                          discretion if we believe you are violating these Terms or engaging in fraudulent activities.
                        </p>

                        <h6>8. Limitation of Liability</h6>
                        <p>To the fullest extent permitted by law, Cagayan II Electric Cooperative, Inc. (CAGELCO II)
                          and its affiliates shall not be liable
                          for any indirect, incidental, special, consequential, or punitive damages, including but not
                          limited to loss of data, arising out of or in connection with the use of the Service.</p>

                        <h6>9. Changes to the Service</h6>
                        <p>We reserve the right to modify or discontinue the Service at any time without prior notice.
                          We will not be liable to you or any third party for any modification or termination of the
                          Service.</p>

                        <h6>10. Governing Law</h6>
                        <p>These Terms are governed by the laws of Philippines, without regard to its conflict
                          of law provisions.</p>

                        <h6>11. Contact Us</h6>
                        <p>If you have any questions or concerns about these Terms, please contact us at:</p>
                        <ul>
                          <li><strong>Email:</strong> cagelco2official@gmail.com</li>
                          <li><strong>Phone:</strong>(078) 888-2940</li>
                        </ul>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal for Privacy Policy -->
                <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="privacyModalLabel">Privacy Policy</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" style="font-size:12px;">
                        <!-- Privacy Policy Content -->
                        <p><strong>Last updated:</strong> October 21, 2024</p>
                        <p>We value your privacy and are committed to protecting your personal information. This Privacy
                          Policy outlines how we collect, use, and protect your information when you use our CAGELCO II
                          Online System ("Service").</p>

                        <h6>1. Information We Collect</h6>
                        <p>We collect the following types of information:</p>
                        <ul>
                          <li><strong>Personal Information:</strong> When you register or submit a complaint, we may
                            collect personal information such as your name, account number, email address, phone number,
                            billing address, and any other information you provide to us.</li>
                          <li><strong>Usage Information:</strong> We collect information on how you interact with our
                            Service, including IP addresses, browser types, device information, and usage logs.</li>
                          <li><strong>Google Sign-In Information:</strong> If you use Google Sign-In to access our
                            Service, we collect the information from your Google profile, such as your name, email
                            address, and Google ID.</li>
                        </ul>

                        <h6>2. How We Use Your Information</h6>
                        <p>We may use the information we collect for the following purposes:</p>
                        <ul>
                          <li><strong>Billing Inquiry and Complaint Handling:</strong> To facilitate and process your
                            billing inquiries, handle complaints, and manage your account information.</li>
                          <li><strong>Account Creation and Management:</strong> To create and manage user accounts,
                            including registration and verification.</li>
                          <li><strong>Communication:</strong> To send you service-related emails or respond to your
                            inquiries and complaints.</li>
                          <li><strong>Security:</strong> To monitor and ensure the security of our Service and prevent
                            fraudulent activities.</li>
                        </ul>

                        <h6>3. Sharing of Information</h6>
                        <p>We do not sell, trade, or rent your personal information to third parties. However, we may
                          share your information in the following circumstances:</p>
                        <ul>
                          <li><strong>Service Providers:</strong> We may share information with third-party service
                            providers who assist us in operating our Service (e.g., hosting, customer support) and are
                            bound by confidentiality obligations.</li>
                          <li><strong>Legal Compliance:</strong> We may disclose your information if required by law or
                            in response to a court order or other legal processes.</li>
                        </ul>

                        <h6>4. Data Security</h6>
                        <p>We implement reasonable security measures to protect your personal information from
                          unauthorized access, disclosure, alteration, or destruction. However, no method of
                          transmission over the internet or electronic storage is completely secure.</p>

                        <h6>5. Your Rights</h6>
                        <p>You have the right to:</p>
                        <ul>
                          <li>Access and review the personal information we hold about you.</li>
                          <li>Request correction or deletion of your personal information.</li>
                          <li>Opt-out of any marketing communications.</li>
                        </ul>
                        <p>To exercise any of these rights, please contact us at cagelco2official@gmail.com.</p>

                        <h6>6. Changes to This Policy</h6>
                        <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page
                          with the updated date.</p>

                        <h6>7. Contact Us</h6>
                        <p>If you have any questions about this Privacy Policy, please contact us at:</p>
                        <ul>
                          <li><strong>Email:</strong> cagelco2official@gmail.com</li>
                          <li><strong>Phone:</strong>(078) 888-2940</li>
                        </ul>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-5 mb-lg-0" style="padding-left: 30px">
            <h1 class="my-8 display-6 fw-bold ls-tight">
              <span class="text-primary">Bills Payment Centers</span>
            </h1>
            <p class="mt-4">
              Available Bills Payment Centers for Cagayan II Electric
              Cooperative, Inc. - Pay your electricity bills anytime -
              anywhere.
            </p>

            <div class="gallery">
              <img src="assets/img/ecpay.png" alt="ECPay" />
              <img src="assets/img/bdo-logo.jpg" alt="BDO" />
              <img src="assets/img/producers.png" alt="Producers Bank" />
              <img src="assets/img/gcash-logo.png" alt="Producers Bank" />
            </div>
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

  !-- JavaScript to enable/disable the Register button -->
  <script>
    document.getElementById('termsCheck').addEventListener('change', function () {
      var registerButton = document.getElementById('registerButton');
      registerButton.disabled = !this.checked; // Enable the button if checkbox is checked
    });
  </script>

  <script type="text/javascript" src="assets/js/mdb.umd.min.js"></script>
  <!-- Include Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>