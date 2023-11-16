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
                <td>
                    <form method="post" action="deleteBooking.php">
                        <input type="hidden" name="delete_booking_id" value="<?php echo $row['BookingID']; ?>">
                        <button type="submit" class="btn"
                            onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                    </form>
                </td>
                <!-- Inside your while loop for displaying bookings -->
                <td>
                    <button class="btn" onclick="showEditForm(<?php echo $row['BookingID']; ?>)">Edit</button>
                </td>

                <!-- Add the script to show/hide the edit form -->
                <script>
                function showEditForm(bookingId) {
                    // Hide all edit forms
                    var editForms = document.querySelectorAll('.edit-form');
                    editForms.forEach(form => form.style.display = 'none');

                    // Show the edit form for the selected booking
                    var selectedForm = document.getElementById('edit-form-' + bookingId);
                    selectedForm.style.display = 'block';
                }
                </script>

                <!-- Add the edit form for each booking -->
            <tr>
                <!-- Existing table data -->

                <td>
                    <form id="edit-form-<?php echo $row['BookingID']; ?>" class="edit-form" style="display: none;"
                        method="post" action="editBooking.php">
                        <input type="hidden" name="edit_booking_id" value="<?php echo $row['BookingID']; ?>">

                        Check-In Date: <input type="date" name="new_checkin_date"
                            value="<?php echo $row['CheckInDate']; ?>" required><br>
                        Check-Out Date: <input type="date" name="new_checkout_date"
                            value="<?php echo $row['CheckOutDate']; ?>" required><br>
                        Room Type: <input type="text" name="new_room_type" value="<?php echo $row['RoomType']; ?>"
                            required><br>
                        Adults: <input type="number" name="new_adults" value="<?php echo $row['Adults']; ?>"
                            required><br>
                        Children: <input type="number" name="new_children" value="<?php echo $row['Children']; ?>"
                            required><br>

                        <button type="submit" name="save_changes" class="btn">Save Changes</button>
                    </form>
                </td>
            </tr>
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