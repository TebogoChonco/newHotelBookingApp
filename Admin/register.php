<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    session_start();
    require_once '../includes/database.php';    
?>
<!DOCTYPE html>
<html lang="en" style="background-color: rgb(248, 246, 213);">

<head>
    <meta charset="UTF-8">
    <title>Hotel Booking</title>
    <link rel="stylesheet" type="text/css" href="hotels.css">
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
    <div class="navbar">
        <a class="logo">
            <h1>Hotel Booking Admin Dashboard</h1>
        </a>
        <br>
        <br>
    </div>

    <div class="main-wrapper">
        <div class="py-5" id="register">

            <h1>Registration Form</h1>

            <form action="registerProcess.php" method="POST">

                <div class="inner_conntainer">
                    <input type="text" placeholder="Enter Username" name="username" autocomplete="on" required>
                    <!-- <input type="text" placeholder="Enter Full name" name="fullname" autocomplete="on" required> -->
                    <!-- <input type="email" placeholder="Enter email" name="email" autocomplete="off" required>
                    <input type="number" placeholder="Enter phone number" name="phone" autocomplete="off" required> -->
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <input type="password" placeholder="Confirm Password" name="cpassword" required>
                    <br>
                    <button class="login_button" name="registerBtn" type="submit">Register</button>
                    <a href="./login.php"><button type="button" class="backBtn">Log in</button></a>
                </div>
            </form>
        </div>
    </div>
</body>