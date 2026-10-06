<?php
session_start();
if (!isset($_SESSION['account_number'])) {
    echo '<meta http-equiv="refresh" content="2;url=https://online.cagelco2.org.ph/main.php">';
}
$session_account_number = $_SESSION['account_number'];

if (empty($_SESSION['account_number'])) {
    echo '<meta http-equiv="refresh" content="2;url=https://online.cagelco2.org.ph/main.php">';
}

?>