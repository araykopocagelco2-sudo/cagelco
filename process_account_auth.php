<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="assets/css/mdb.min.css" />
<?php
session_start();
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$recaptchaSecret = '6LcfiAsqAAAAAC_yHUKCuxqvaqN7hBwLe0x2NXQk';
	$recaptchaResponse = $_POST['g-recaptcha-response'];

	// Verify the reCAPTCHA response
	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
	$responseKeys = json_decode($response, true);

	if ($responseKeys["success"]) {
		// reCAPTCHA verified successfully
		$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
		$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

		// Prepare and bind
		if ($stmt = $conn->prepare("SELECT user_id, user_code, user_account_id, user_account_name, user_department, user_username, user_password, user_photo, user_account_type, user_status FROM user_account WHERE user_username = ?")) {
			$stmt->bind_param("s", $username);
			$stmt->execute();
			$stmt->store_result();

			// Check if username exists
			if ($stmt->num_rows > 0) {
				// Bind result variables
				$stmt->bind_result($user_id, $user_code, $user_account_id, $user_account_name, $user_department, $user_username, $hashed_password, $user_photo, $user_account_type, $user_status);
				$stmt->fetch();

				// Verify the password
				if (password_verify($password, $hashed_password)) {
					// Start the session and store session variables
					$_SESSION['user_id'] = $user_id;
					$_SESSION['user_code'] = $user_code;
					$_SESSION['user_account_id'] = $user_account_id;
					$_SESSION['user_account_name'] = $user_account_name;
					$_SESSION['user_department'] = $user_department;
					$_SESSION['user_photo'] = $user_photo;
					$_SESSION['user_account_type'] = $user_account_type;
					$_SESSION['user_status'] = $user_status;

					// Redirect based on user type
					if ($_SESSION['user_account_type'] == 'ADMINISTRATOR') {
						header('Location: admin_account/dashboard.php');
						exit();
					} elseif ($_SESSION['user_account_type'] == 'CAO') {
						header('Location: cao_account/dashboard.php');
						exit();
					} else {
						header('Location: crew_account/dashboard.php');
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
                                    window.location = 'admin_auth.php';
                                }
                            });
                        });
                        </script>";
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
                                window.location = 'admin_auth.php';
                            }
                        });
                    });
                    </script>";
			}

			$stmt->close();
		} else {
			echo "Error preparing statement: " . $conn->error();
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
                        window.location = 'admin_auth.php';
                    }
                });
            });
            </script>";
	}
}

// Close connection
$conn->close();
?>