<?php
session_start();
require_once '../includes/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hotels.css">
    <title>Dashboard</title>
</head>

<body>
    <?php require_once './includes/navbar.php' ?>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="header" id="dashboard-header">
                    <h2>Welcome to your Admin Dashboard</h2>
                </div>
                <div class="user">
                </div>
            </div>
        </div>
        <?php
        if (isset($_SESSION['user_username'])) {
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
        } else {
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
        }
        ?>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>
                            <?php
                            $sql = "SELECT COUNT(*) AS hotel_count FROM hotels";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $hotelCount = $row["hotel_count"];
                                echo $hotelCount;
                            } else {
                                echo "No hotels found.";
                            }
                            ?>
                        </h1>
                        <h3>Total Hotels</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./assets/images/hotel-icon.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>
                            <?php
                            $sql = "SELECT COUNT(*) AS booking_count FROM bookings";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $bookingCount = $row["booking_count"];
                                echo $bookingCount;
                            } else {
                                echo "No bookings found.";
                            }
                            ?>
                        </h1>
                        <h3>Total Bookings</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./assets/images/booking-icon.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>
                            <?php
                            $sql = "SELECT COUNT(*) AS user_count FROM users";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $userCount = $row["user_count"];
                                echo $userCount;
                            } else {
                                echo "No users found.";
                            }
                            ?>
                        </h1>
                        <h3>Total Users</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./assets/images/users.png" width="35px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
