<?php
$host = "localhost";
$user = "root"; // change if needed
$pass = "";     // your MySQL password
$dbname = "plantencyclopedia";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
