<?php
require_once 'includes/header.php';
require_once 'includes/registerCheck.php';
require_once 'landingPage.php';

// Assuming $conn is your database connection
if (isset($_POST['registerBtn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password == $cpassword) {
        $username = mysqli_real_escape_string($conn, $username);

        $query = "SELECT * FROM users WHERE username='$username'";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            if (mysqli_num_rows($query_run) > 0) {
                echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
            } else {
                $insert_query = "INSERT INTO users (username, password, roleId) VALUES ('$username', '$password', 0)";
                $insert_query_run = mysqli_query($conn, $insert_query);
                
                if ($insert_query_run) {
                    echo '<script type="text/javascript">alert("User Registered.. Welcome, please log in!")</script>';
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                } else {
                    echo '<script type="text/javascript">alert("Error: User registration failed.")</script>';
                }
            }
        } else {
            echo '<script type="text/javascript">alert("Database Error")</script>';
        }
    } else {
        echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
    }
}
?>