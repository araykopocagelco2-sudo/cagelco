<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="assets/css/mdb.min.css" />
<?php
session_start();
include ("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$recaptchaSecret = '6LcfiAsqAAAAAC_yHUKCuxqvaqN7hBwLe0x2NXQk';
	$recaptchaResponse = $_POST['g-recaptcha-response'];

	// Verify the reCAPTCHA response
	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
	$responseKeys = json_decode($response, true);

	if ($responseKeys["success"]) {
		// reCAPTCHA verified successfully
		$username = filter_input(INPUT_POST, 'account_number', FILTER_SANITIZE_STRING);
		$password = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);

		// Prepare and bind
		if ($stmt = $conn->prepare("SELECT account_number, account_lastname FROM ebs_consumer_account WHERE account_number = ? AND account_lastname = ?")) {
			$stmt->bind_param("ss", $username, $password);
			$stmt->execute();
			$stmt->store_result();

			// Check if username and password match
			if ($stmt->num_rows > 0) {
				$stmt->bind_result($account_number, $account_type);
				$stmt->fetch();

				// Start the session
				$_SESSION['account_number'] = $account_number;

				// Direct pages with different user levels
				if ($account_type == 'ADMINISTRATOR') {
					header('Location: admin_account/map.php');
					exit();
				} else {
					header('Location: mco_account/dashboard.php');
					exit();
				}
			} else {
				echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Access Denied',
                        text: 'Either username or password is incorrect!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = 'login.php';
                        }
                    });
                });
                </script>";
			}

			$stmt->close();
		} else {
			echo "Error preparing statement: " . $conn->error;
		}
	} else {
		// reCAPTCHA verification failed
		echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Access Denied',
                text: 'Invalid reCAPTCHA verification!',
                icon: 'error',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = 'login.php';
                }
            });
        });
        </script>";
	}
}

// Close connection
$conn->close();
?>