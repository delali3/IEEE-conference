<?php

if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == '::1') {
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'ieee_conference');
}else{
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'ghprsydr_ieee_conference');
    define('DB_PASSWORD', '6SHAEuzVOq6N');
    define('DB_NAME', 'ghprsydr_ieee_conference');
}
// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
