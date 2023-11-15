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

    // Display the information
    echo "<h2>Confirmation Page</h2>";
    echo "<p>Hotel: $hotelName</p>";
    echo "<p>Guest Name: $guestName</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Check-in Date: $checkinDate</p>";
    echo "<p>Check-out Date: $checkoutDate</p>";
    echo "<p>Number of Adults: $adults</p>";
    echo "<p>Number of Children: $children</p>";
    echo "<p>Room Type: $roomType</p>";
    echo "<p>Total Cost: $totalCost</p>";

// Assuming $totalCost is the original total cost calculated in your script
$vatRate = 0.15; // 15% VAT rate

// Calculate total cost with VAT
$totalCostWithVAT = $totalCost * (1 + $vatRate);

echo "<p>Total Cost: R" . number_format($totalCost, 2) . "</p>";
echo "<p>Total Price with 15% VAT: R" . number_format($totalCostWithVAT, 2) . "</p>";


} else {
    // Redirect to the reservation page if the form is not submitted
    header("Location: reserve.php");
    exit();
}

?>

<a href="printBooking.php">
    <button type="submit">Print Booking Confirmation</button>
</a>
<?php
require_once 'includes/footer.php'; // Assuming you have a footer file
?>