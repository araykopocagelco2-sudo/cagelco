<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="assets/css/mdb.min.css" />
<?php
// Start the session
session_start();

// Check if the session variable 'id' is set before unsetting it
if (isset($_SESSION['id'])) {
	unset($_SESSION['id']);
}

// Destroy the session
session_destroy();

// Redirect to index.php after 2 seconds
echo '<meta http-equiv="refresh" content="2;url=main.php">';

echo "<script>
			document.addEventListener('DOMContentLoaded', function() {
				Swal.fire({
					title: 'Logout Successful',
					text: 'You will be redirected to the login page shortly. Thank you for your visit!',
					icon: 'info',
					timer: 5000, // Show for 5 seconds before redirecting
					timerProgressBar: true,
					background: '#f4f4f9', // Light background color for corporate look
					color: '#333', // Darker text for better contrast
					backdrop: `
						rgba(0, 0, 123, 0.4)
						url('assets/images/company-logo.png')  // Optionally, a branded backdrop
						left top
						no-repeat
					`,
					customClass: {
						popup: 'swal2-corporate-popup',
						title: 'swal2-corporate-title',
					},
					buttonsStyling: false, // Disable default SweetAlert button styling
					showConfirmButton: false, // Remove OK button
					showClass: {
						popup: 'animate__animated animate__fadeInDown' // Smooth popup animation
					},
					hideClass: {
						popup: 'animate__animated animate__fadeOutUp' // Smooth hide animation
					}
				}).then(() => {
					window.location = 'admin_auth.php';
				});
			});
	</script>";

?>

<!-- Add custom CSS for corporate styling -->
<style>
	/* Corporate look and feel */
	.swal2-corporate-popup {
		border-radius: 8px;
		/* Rounded corners */
		border: 2px solid #ffffff;
		/* Corporate border color */
		box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
		/* Subtle shadow for depth */
	}

	.swal2-corporate-title {
		font-family: Arial, Helvetica, sans-serif;
		/* Clean, professional font */
		font-weight: 600;
		/* Bold title */
		color: #003366;
		/* Corporate title color */
	}

	.swal2-corporate-confirm {
		background-color: #003366;
		/* Corporate button color */
		color: white;
		font-family: Arial, Helvetica, sans-serif;
		padding: 10px 20px;
		/* Custom padding */
		border-radius: 5px;
		/* Rounded button */
		border: none;
		cursor: pointer;
		transition: background-color 0.3s ease;
	}

	.swal2-corporate-confirm:hover {
		background-color: #003366;
		/* Darken on hover */
	}
</style>