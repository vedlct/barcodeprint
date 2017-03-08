<?php

$servername = "localhost";
$username = "afrahgro_bar";
$password = "tcl@123";
$database = "afrahgro_afrabarcode";

// Create connection
$con = new mysqli($servername, $username, $password,$database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

