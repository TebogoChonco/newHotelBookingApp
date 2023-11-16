<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require_once 'includes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_booking_id'])) {
    $bookingId = $_POST['edit_booking_id'];

    // Fetch the existing booking details
    $sql = "SELECT * FROM bookings WHERE ID = $bookingId";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $booking = mysqli_fetch_assoc($result);
    } else {
        echo "Error fetching booking details: " . mysqli_error($conn);
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_changes'])) {
    $newCheckInDate = $_POST['new_checkin_date'];
    $newCheckOutDate = $_POST['new_checkout_date'];
    $newRoomType = $_POST['new_room_type'];
    $newAdults = $_POST['new_adults'];
    $newChildren = $_POST['new_children'];

    // Validate input as appropriate

    $sql = "UPDATE bookings
            SET checkin_date = '$newCheckInDate',
                checkout_date = '$newCheckOutDate',
                room_type = '$newRoomType',
                adults = $newAdults,
                children = $newChildren
            WHERE ID = $bookingId";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Changes saved successfully.";
        // Redirect back to the profile page or any other desired location
        header("Location: profile.php");
        exit();
    } else {
        echo "Error saving changes: " . mysqli_error($conn);
    }
}
?>
