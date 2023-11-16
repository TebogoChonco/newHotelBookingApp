<?php
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

    // Generate receipt content
    $receiptContent = "
        Hotel: $hotelName
        Guest Name: $guestName
        Email: $email
        Check-in Date: $checkinDate
        Check-out Date: $checkoutDate
        Number of Adults: $adults
        Number of Children: $children
        Room Type: $roomType
        Total Cost: R" . number_format($totalCost, 2) . "
        Total Price with 15% VAT: R" . number_format($totalCostWithVAT, 2);

    // Set the content type to plain text
    header('Content-Type: text/plain');

    // Set the Content-Disposition header to force download
    header('Content-Disposition: attachment; filename="bookingReceipt.txt"');

    // Output the receipt content
    echo $receiptContent;
    exit();
} else {
    // Redirect to the reservation page if the form is not submitted
    header("Location: reserve.php");
    exit();
}
?>
