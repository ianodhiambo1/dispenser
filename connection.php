<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create a connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>