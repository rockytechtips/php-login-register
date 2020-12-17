<?php 
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystem";

// Create connection
$conn = new mysqli($serverName, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
