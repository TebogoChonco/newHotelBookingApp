<?php

//Params to connect to a database
$dbHost = "localhost";
$dbUser = "Tebogo";
$dbPass = "Siya2023";
$dbName = "newHotel";

//Connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Database connection failed!");
}

?>
