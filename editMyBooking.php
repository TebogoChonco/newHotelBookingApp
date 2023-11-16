<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require_once 'includes/database.php';    

if (isset($_SESSION['username'])) {
    $_SESSION['guest_name'] = $_SESSION['username'];
} else {
     // If not logged in, you can redirect to the login page or display a message
     header("Location: login.php"); // Adjust the login page URL
     exit();
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
            <h2>Edit My Booking</h2>
            <div><a href="hotel.php"><button class="btn" id="backBtn">Back to Home</button></a></div>
        </div>
        <table class="table">
            <?php
            // Check if guest_name is set in the session
            if (isset($_SESSION['guest_name'])) {
                // SQL query to select booking details for editing
                $guestName = $_SESSION['guest_name'];
                $bookingId = $_POST['edit_booking_id'];
                $sql = "SELECT * FROM bookings WHERE guest_name = '$guestName' AND ID = $bookingId";
                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                }

                // Check if there are results
                if ($result->num_rows > 0) {
                    // Output data of the row
                    $row = $result->fetch_assoc();
            ?>
                    <tr>
                        <td>
                            <form method="post" action="editBooking.php">
                                <input type="hidden" name="edit_booking_id" value="<?php echo $row['ID']; ?>">
                                
                                <label for="edit_checkin_date">Check-In Date:</label>
                                <input type="date" name="edit_checkin_date" value="<?php echo $row['checkin_date']; ?>" required>

                                <label for="edit_checkout_date">Check-Out Date:</label>
                                <input type="date" name="edit_checkout_date" value="<?php echo $row['checkout_date']; ?>" required>

                                <label for="edit_room_type">Room Type:</label>
                                <input type="text" name="edit_room_type" value="<?php echo $row['room_type']; ?>" required>

                                <label for="edit_adults">Adults:</label>
                                <input type="number" name="edit_adults" value="<?php echo $row['adults']; ?>" required>

                                <label for="edit_children">Children:</label>
                                <input type="number" name="edit_children" value="<?php echo $row['children']; ?>" required>

                                <button type="submit" class="btn">Edit</button>
                            </form>
                        </td>
                    </tr>
            <?php
                } else {
                    echo "No booking found for editing.";
                }
            } else {
                echo "Guest name not set in session.";
            }
            ?>
        </table>
    </div>
</body>

</html>
