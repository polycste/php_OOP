<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "restaurant_reservation";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

?>