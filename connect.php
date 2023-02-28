<?php 
    // database credentials
$host = "localhost";
$database = "collagedb";
$username = "root";
$password = "";

// create a connection to the database
$conn = mysqli_connect($host, $username, $password, $database);

// check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>