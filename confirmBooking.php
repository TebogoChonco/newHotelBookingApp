<?php
require_once 'includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user-entered information
    $hotelName = $_POST['hotel_name'];
    $guestName = $_POST['guest_name'];
    $email = $_POST['email'];
    $checkinDate = $_POST['checkin_date'];
    $checkoutDate = $_POST['checkout_date'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $roomType = $_POST['room_type'];
    $totalCost = $_POST['total_cost']; // Assuming you're passing this value in the form

    // Calculate total cost with VAT
    $vatRate = 0.15; // 15% VAT rate
    $totalCostWithVAT = $totalCost * (1 + $vatRate);

    // Display the information
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<title>Hotel Booking</title>";
    echo "<link rel='stylesheet' type='text/css' href='style.css'>";
    // Add your other styles and scripts here
    echo "</head>";
    echo "<body>";
    echo "<header>";
    // Add your navigation bar here
    echo "</header>";
    echo "<div class='landingPage'>";
    // Add your carousel here
    echo "</div>";

    echo "<div id='main-wrapper'>";
    echo "<div class='greeting'>";
    // Add your welcome message and logout button here
    echo "</div>";

    echo "<h2>Confirmation Page</h2>";
    echo "<p>Hotel: $hotelName</p>";
    echo "<p>Guest Name: $guestName</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Check-in Date: $checkinDate</p>";
    echo "<p>Check-out Date: $checkoutDate</p>";
    echo "<p>Number of Adults: $adults</p>";
    echo "<p>Number of Children: $children</p>";
    echo "<p>Room Type: $roomType</p>";
    echo "<p>Total Cost: R" . number_format($totalCost, 2) . "</p>";
    echo "<p>Total Price with 15% VAT: R" . number_format($totalCostWithVAT, 2) . "</p>";
    
    // Provide a link to download the receipt
    echo "<a href='generateReceipt.php' download='bookingReceipt.txt'>";
    echo "<button type='button'>";
    echo "<h3>Download Booking Confirmation Text File</h3>";
    echo "</button>";
    echo "</a>";

    echo "</div>";
    echo "</body>";
    echo "</html>";

} else {
    // Redirect to the reservation page if the form is not submitted
    header("Location: confirmBooking.php");
    exit();
}

require_once 'includes/footer.php'; // Assuming you have a footer file
?>
