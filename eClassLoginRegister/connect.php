<?php

$servername = "localhost";
$username = "admin"
$password = ""
$database = "e-class_login"

//Create Connection
$conn = new sqli ($servername, $username,$password, $database);

//Chec Connection
if ($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

//Retrieve Data
$username = $_POST['username'];
$password = $_POST['password'];
$file = $_POST['file'];
?>