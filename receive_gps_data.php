<?php
// Enable error reporting for debugging (remove in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Set log file
$logFile = __DIR__ . '/gps_log.txt';

// Function to log messages
function logMessage($message) {
    global $logFile;
    $timestamp = date('Y-m-d H:i:s');
    file_put_contents($logFile, "[$timestamp] $message\n", FILE_APPEND);
}

// Log request method, headers, and body
logMessage("Request method: " . $_SERVER['REQUEST_METHOD']);
logMessage("Request headers: " . print_r(getallheaders(), true));
logMessage("Request body: " . file_get_contents('php://input'));

// Log incoming GET request for debugging
logMessage("Received request: " . print_r($_GET, true));

// Database connection details
$servername = "localhost";
$username = "cagelco2_gbm8";
$password = "c0rp1an_m1s";
$dbname = "cagelco2_connect";

// Connect to MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    logMessage("Database connection failed: " . $conn->connect_error);
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve GPS data from the device
$latitude = $_GET['lat'] ?? null;
$longitude = $_GET['lon'] ?? null;
$speed = $_GET['speed'] ?? null;
$timestamp = date('Y-m-d H:i:s');

// Check if latitude and longitude are present
if ($latitude && $longitude) {
    // Insert the data into the database
    $sql = "INSERT INTO gps_logs (latitude, longitude, speed, timestamp) VALUES ('$latitude', '$longitude', '$speed', '$timestamp')";
    if ($conn->query($sql) === TRUE) {
        logMessage("Data recorded successfully: Latitude=$latitude, Longitude=$longitude, Speed=$speed");
        echo "Data recorded successfully";
    } else {
        logMessage("Error inserting data: " . $conn->error);
        echo "Error: " . $conn->error;
    }
} else {
    logMessage("Invalid data received: Latitude or Longitude is missing.");
    echo "Invalid data received";
}

$conn->close();
?>
