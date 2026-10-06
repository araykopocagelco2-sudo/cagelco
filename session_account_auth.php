<?php
// // Set secure session cookie parameters
// $cookieParams = session_get_cookie_params();
// session_set_cookie_params([
//     'lifetime' => $cookieParams["lifetime"],
//     'path' => $cookieParams["path"],
//     'domain' => $cookieParams["domain"],
//     'secure' => true,        // Ensure the cookie is sent over HTTPS only
//     'httponly' => true,      // Prevent JavaScript access to the session cookie
//     'samesite' => 'Strict'   // Mitigate CSRF attacks
// ]);

// // Start session
// session_start();

// // Regenerate session ID to prevent session fixation
// if (!isset($_SESSION['regenerated'])) {
//     session_regenerate_id(true);
//     $_SESSION['regenerated'] = true;
// }

// // Check whether the session variable SESS_MEMBER_ID is present or not
// if (!isset($_SESSION['user_account_id']) || trim($_SESSION['user_account_id']) == '') {
//     header("location: http://billinquiry111.cagelco2.org.ph/");
//     exit();
// }

// // Example: Validate user agent
// if (!isset($_SESSION['user_agent'])) {
//     $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
// } elseif ($_SESSION['user_agent'] !== $_SERVER['HTTP_USER_AGENT']) {
//     // Possible session hijacking attempt
//     session_unset();
//     session_destroy();
//     header("location: http://billinquiry.cagelco2.org.ph/");
//     exit();
// }

// Check, if username session is NOT set then this page will jump to login page
session_start();
if (!isset($_SESSION['user_id'])) {
    echo '<meta http-equiv="refresh" content="2;url=https://online.cagelco2.org.ph/admin_auth.php">';
}
$session_id = $_SESSION['user_id'];
$session_code = $_SESSION['user_code'];
$session_account_id = $_SESSION['user_account_id'];
$session_account_name = $_SESSION['user_account_name'];
$session_department = $_SESSION['user_department'];
$session_photo = $_SESSION['user_photo'];
$session_account_type = $_SESSION['user_account_type'];
$session_status = $_SESSION['user_status'];

if (empty($_SESSION['user_id'])) {
    echo '<meta http-equiv="refresh" content="2;url=https://online.cagelco2.org.ph/admin_auth.php">';
}
?>