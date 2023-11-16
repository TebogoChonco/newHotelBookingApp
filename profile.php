<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require_once 'includes/database.php';    

if (isset($_SESSION['username'])) {
    $_SESSION['guest_name'] = $_SESSION['username'];
} else {
    // Handle the case where 'username' is not set in the session
    $_SESSION['guest_name'] = 'Guest'; // You can set a default value or take other actions as needed
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bookings Dashboard</title>
</head>

<body>

    
    

    <div class="recent-bookings">
        <div class="title">
            <h2>Total Bookings</h2>
            <div><a href="hotel.php"><button class="btn" id="backBtn">Back to Home</button></a></div>
        </div>
        <table class="table">
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
                <th>Options</th>
            </tr>

            <?php
            // Check if guest_name is set in the session
            if (isset($_SESSION['guest_name'])) {
                // SQL query to select bookings for a specific guest name
                $guestName = $_SESSION['guest_name'];
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
                WHERE b.guest_name = '$guestName'
                ORDER BY b.ID DESC
                LIMIT 10";

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
                            <td><a href="#" class="btn">Edit</a></td>
                            <td><a href="#" class="btn">Delete</a></td>
                        </tr>
                <?php
                    }
                } else {
                    echo "No bookings found for $guestName.";
                }
            } else {
                echo "Guest name not set in session.";
            }
            ?>
        </table>
    </div>
</body>

</html>
