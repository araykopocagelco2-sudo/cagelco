<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="assets/css/mdb.min.css" />
<?php
include('connection.php');

if (isset($_POST['submit']) || isset($_POST['google_register'])) {
    $a = $_POST['firstname'];
    $b = $_POST['lastname'];
    $c = $_POST['address'] ?? ''; // address might be empty for Google login
    $d = $_POST['account_number'];
    $e = $_POST['account_name'];
    $f = $_POST['email'];
    $google_id = $_POST['google_id'] ?? null;

    // Debugging: Log the user details before registration
    error_log("Registering User: Firstname: $a, Lastname: $b, Account Number: $d, Account Name: $e, Email: $f, Google ID: $google_id");

    // Check if the account number already exists
    $stmt = mysqli_prepare($conn, "SELECT * FROM ebs_consumer_account WHERE account_number = ?");
    mysqli_stmt_bind_param($stmt, "s", $d);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $check = mysqli_stmt_num_rows($stmt);
    mysqli_stmt_close($stmt);

    if ($check > 0) {
        // Account number already exists
        ?>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    title: 'Account Number already registered',
                    text: 'The Account Number you are trying to register is already registered.',
                    icon: 'info',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = 'register.php';
                    }
                });
            });
        </script>
        <?php
        exit();
    }

    // Check if account number exists in ledger table
    $stmt = mysqli_prepare($conn, "SELECT * FROM ebs_consumer_ledger WHERE account_number = ?");
    mysqli_stmt_bind_param($stmt, "s", $d);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $checks = mysqli_stmt_num_rows($stmt);
    mysqli_stmt_close($stmt);

    if ($checks <= 0) {
        // Account number does not exist in ledger table
        ?>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    title: 'Account not found',
                    text: 'Account Number does not exist in our database.',
                    icon: 'info',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = 'register.php';
                    }
                });
            });
        </script>
        <?php
        exit();
    }

    // Insert the user data into the database
    if ($google_id) {
        $stmt = mysqli_prepare($conn, "INSERT INTO ebs_consumer_account (account_date_registered, account_number, account_name, account_firstname, account_lastname, account_address, account_email, google_id)
                                   VALUES (CURRENT_TIMESTAMP, ?, ?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sssssss", $d, $e, $a, $b, $c, $f, $google_id);
    } else {
        $stmt = mysqli_prepare($conn, "INSERT INTO ebs_consumer_account (account_date_registered, account_number, account_name, account_firstname, account_lastname, account_address, account_email)
                                   VALUES (CURRENT_TIMESTAMP, ?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "ssssss", $d, $e, $a, $b, $c, $f);
    }

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: 'Registration successful',
                text: 'You have successfully registered. Please sign-in using your registered account number.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = 'login.php';
                }
            });
        });
    </script>
    <?php
}
?>