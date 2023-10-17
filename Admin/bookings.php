<?php
session_start();
require_once '../includes/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hotels.css">
    <title>Bookings Dashboard</title>
</head>

<body>
    <div>
        <?php require_once './includes/navbar.php' ?>
    </div>
    <br>
    <div class="container">
        <div class="header">
            <h2>Bookings Dashboard</h2>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>
                            <?php
                            $sql = "SELECT COUNT(*) AS order_count FROM bookings";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $orderCount = $row["order_count"];
                                echo $orderCount;
                            } else {
                                echo "No bookings found.";
                            }
                            ?>
                        </h1>
                        <h3>Total Bookings</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./assets/images/orders-icon.png" alt="">
                    </div>
                </div>
                <!-- Add more cards for specific booking-related information here -->
            </div>
            <div class="content-2">
                <div class="recent-bookings">
                    <div class="title">
                        <h2>Recent Bookings</h2>
                        <li><a href="viewAllBookings.php"><button class="btn" id="viewBtn">View All</button></a></li>
                        <!-- <li><a href="addBooking.php"><button class="btn" id="addBtn">Add Booking</button></a></li> -->
                    </div>
                    <table>
                        <tr>
                            <th>Booking ID</th>
                            <th>Guest Name</th>
                            <th>Email</th>
                            <th>Hotel Name</th>
                            <th>Check-In Date</th>
                            <th>Check-Out Date</th>
                            <th>Adults</th>
                            <th>Children</th>
                            <th>Room Type</th>
                            <th>Room Price</th>
                            <th>Total Price</th>
                            <th>Option</th>
                        </tr>

                        <?php
                        // SQL query to select the first 5 recent bookings
                        $sql = "SELECT
                            b.ID AS BookingID,
                            b.guest_name AS GuestName,
                            b.email AS Email,
                            b.hotel_name AS HotelName,
                            b.checkin_date AS CheckInDate,
                            b.checkout_date AS CheckOutDate,
                            b.adults AS Adults,
                            b.children AS Children,
                            b.room_type AS RoomType,
                            b.room_price AS RoomPrice,
                            b.total_price AS TotalPrice
                        FROM bookings b
                        ORDER BY b.ID DESC
                        LIMIT 5";

                        $result = mysqli_query($conn, $sql);

                        if (!$result) {
                            die("Query failed: " . mysqli_error($conn));
                        }

                        // Check if there are results
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo $row["BookingID"] ?></td>
                                    <td><?php echo $row["GuestName"] ?></td>
                                    <td><?php echo $row["Email"] ?></td>
                                    <td><?php echo $row["HotelName"] ?></td>
                                    <td><?php echo $row["CheckInDate"] ?></td>
                                    <td><?php echo $row["CheckOutDate"] ?></td>
                                    <td><?php echo $row["Adults"] ?></td>
                                    <td><?php echo $row["Children"] ?></td>
                                    <td><?php echo $row["RoomType"] ?></td>
                                    <td><?php echo $row["RoomPrice"] ?></td>
                                    <td><?php echo $row["TotalPrice"] ?></td>
                                    <td><a href="#" class="btn">View</a></td>
                                </tr>
                        <?php
                    }
                } else {
                    echo "No bookings found.";
                }
                ?>
                </table>
            </div>
        </div>
    </div>
</div>
</body>

</html>
