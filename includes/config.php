<?php 
ob_start(); // Turns on output buffering.
session_start(); // We are able to use sessions.

date_default_timezone_set("Asia/Kolkata"); // Setting the time zone to India.

try {
    $con = new PDO("mysql:dbname=netflix-clone;host=localhost", "admin", "admin");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    exit("Connection failed: " . $e->getMessage());
}
?>
