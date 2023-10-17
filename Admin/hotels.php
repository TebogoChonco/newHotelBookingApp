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
    <title>Hotels Dashboard</title>
</head>

<body>
    <div>
        <?php require_once './includes/navbar.php' ?>
    </div>
    <br>
    <div class="container">
        <div class="header">
            <h2>Hotels Dashboard</h2>
        </div>
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
                            $sql = "SELECT SUM(singleRooms) AS singleRooms_count FROM hotels";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $singleRoomsCount = $row["singleRooms_count"];
                                echo $singleRoomsCount;
                            } else {
                                echo "No single rooms found.";
                            }
                            ?>
                        </h1>
                        <h3>Total Single Rooms</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./assets/images/single-room-icon.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>
                            <?php
                            $sql = "SELECT SUM(doubleRooms) AS doubleRooms_count FROM hotels";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $doubleRoomsCount = $row["doubleRooms_count"];
                                echo $doubleRoomsCount;
                            } else {
                                echo "No double rooms found.";
                            }
                            ?>
                        </h1>
                        <h3>Total Double Rooms</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./assets/images/double-room-icon.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
