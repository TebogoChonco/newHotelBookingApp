<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require_once 'includes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_booking_id'])) {
    $bookingId = $_POST['delete_booking_id'];

    // Validate $bookingId as appropriate

    $sql = "DELETE FROM bookings WHERE ID = $bookingId";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Booking deleted successfully.";
    } else {
        echo "Error deleting booking: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
?>
