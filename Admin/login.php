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
            <h2>Hotel Booking Admin Dashboard</h2>
        </a>
        <br>
        <br>
    </div>
    <div class="main-wrapper">
        <div class="py-5" id="register"><br>
            <h2>Login Form</h2>

            <form action="loginProcess.php" method="POST">

                <div class="inner_conntainer">
                    <p class="label">Employee Log In</p>
                    <input type="text" placeholder="Enter username" name="username" autocomplete="off" required>
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <button class="loginButton" name="loginBtn" type="submit">Login</button>
                    <a href="./register.php"><button type="button" class="back_btn">Register</button></a>
                    <a href="../login.php"><button type="button" class="loginBtn">Login as User</button></a>
                </div>
            </form>
        </div>
    </div>

    <script>
        <?php
        if (isset($_SESSION['login_error'])) {
            echo "alert('" . $_SESSION['login_error'] . "');";
            unset($_SESSION['login_error']);
        }
        ?>
    </script>

</body>