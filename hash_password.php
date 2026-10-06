<?php
$password = 'JOEY'; // Replace with your actual password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
echo $hashed_password;
?>