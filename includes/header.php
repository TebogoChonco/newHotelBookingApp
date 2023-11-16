<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

    session_start();
    require_once 'includes/database.php';
   
    
?>
<!DOCTYPE html>
<html lang="en" style="background-color: rgb(248, 246, 213);">

<head>
    <meta charset="UTF-8">
    <title>Hotel Booking</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</head>

<body>
    <header>
        <nav>
            <ul>Hotel Booking App
                <li><a href="index.php">Home</a></li>
                <li><a href="hotel.php">Hotels</a></li>
                <li><a href="reserve.php">Reservations</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="aboutUs.php">About us</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </nav>
    </header>