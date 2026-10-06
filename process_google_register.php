<link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
<?php
include('connection.php');

// Get Google data from query parameters
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$google_id = $_GET['google_id'];

// Check if the user with this Google ID already exists in the database
$stmt = mysqli_prepare($conn, "SELECT * FROM ebs_consumer_account WHERE google_id = ?");
mysqli_stmt_bind_param($stmt, "s", $google_id);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
$num_rows = mysqli_stmt_num_rows($stmt);
mysqli_stmt_close($stmt);

// If the user is already registered, show SweetAlert and redirect to login page
if ($num_rows > 0) {
    ?>
    <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: 'Already Registered',
                text: 'You are already registered with Google. Redirecting to the login page.',
                icon: 'info',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'login.php'; // Redirect to the login page
                }
            });
        });
    </script>
    <?php
    exit(); // Stop further execution since the user is already registered
}

// If the user is not registered, display the form for additional information
?>

<!-- Display form to collect account_number, account_name, and address -->
<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header text-white" style="background-color:#003366;">
            <h3 class="card-title mb-0 text-center">Complete Your Registration</h3>
        </div>
        <div class="card-body p-5">
            <p class="text-muted text-center mb-4">
                This is the final step to complete your registration. Please provide your account details.
            </p>
            <form method="POST" action="process_register.php" enctype="multipart/form-data">
                <!-- Hidden fields for user data -->
                <input type="hidden" name="firstname" value="<?php echo $firstname; ?>">
                <input type="hidden" name="lastname" value="<?php echo $lastname; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="google_id" value="<?php echo $google_id; ?>">

                <!-- Account Number Field -->
                <div class="form-outline mb-4">
                    <label class="form-label fw-bold" for="account_number">Account Number</label>
                    <input type="text" name="account_number" class="form-control rounded-2"
                        placeholder="12 Digits Account #" id="formattedNumber" maxlength="14"
                        oninput="formatNumber(this)" required />
                </div>

                <!-- Account Name Field -->
                <div class="form-outline mb-4">
                    <label class="form-label fw-bold" for="account_name">Account Name</label>
                    <input type="text" name="account_name" class="form-control rounded-2" placeholder="Account Name"
                        required />
                </div>

                <!-- Address Field -->
                <div class="form-outline mb-4">
                    <label class="form-label fw-bold" for="address">Account Address</label>
                    <input type="text" name="address" class="form-control rounded-2" placeholder="Account Address"
                        required />
                </div>

                <!-- Submit and Cancel Buttons (Responsive Design) -->
                <div class="row">
                    <div class="col-12 col-md-6 mb-3">
                        <button type="submit" name="google_register" class="btn btn-primary btn-md btn-block rounded-0">
                            Complete Registration
                        </button>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <a href="login.php" class="btn btn-outline-warning btn-md btn-block rounded-0">
                            Cancel
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


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

<!-- Include Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 1rem;
    }
</style>