<?php
require_once 'includes/header.php';
require_once 'hotel.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 

    // Sanitize and validate form inputs
    $hotelName = mysqli_real_escape_string($conn, $_POST["hotel_name"]);
    $guestName = mysqli_real_escape_string($conn, $_POST["guest_name"]);
    $email = $_POST["email"];
    $checkinDate = $_POST["checkin_date"];
    $checkoutDate = $_POST["checkout_date"];
    $adults = intval($_POST["adults"]);
    $children = intval($_POST["children"]);
    $roomType = $_POST["room_type"];

    $hotelPriceRepository = new HotelPriceRepository();
    $hotelPrice = $hotelPriceRepository->getHotelPrice($hotelName);
    
    
    // Retrieve room price based on room type
    if ($roomType === "single") {
        $roomPrice = floatval($_POST["room_price_single"]);
    } elseif ($roomType === "double") {
        $roomPrice = floatval($_POST["room_price_double"]);
    }

    // Calculate the number of days booked
    $checkin = new DateTime($checkinDate);
    $checkout = new DateTime($checkoutDate);
    $numDays = $checkin->diff($checkout)->days;

    // Calculate the total price
$totalPrice = ($hotelPrice + $roomPrice) * $numDays;

// Calculate the tax amount (15%)
$taxRate = 0.15;
$taxAmount = $totalPrice * $taxRate;

// Add tax to the total price
$totalPriceWithTax = $totalPrice + $taxAmount;

// Insert booking data into the database
$sql = "INSERT INTO bookings (hotel_name, guest_name, email, checkin_date, checkout_date, adults, children, room_type, room_price, total_price)
        VALUES ('$hotelName', '$guestName', '$email', '$checkinDate', '$checkoutDate', $adults, $children, '$roomType', $roomPrice, $totalPriceWithTax)";

    // Debug: Check the value of $_POST['hotel_name']
    var_dump($_POST['hotel_name']);

    if ($conn->query($sql) === TRUE) {
        $bookingConfirmation = [
            'username' => $userName,
            'guest_name' => $guestName,
            'email' => $email,
            'hotel_name'=>$hotelName,
            'checkin_date' => $checkinDate,
            'checkout_date' => $checkoutDate,
            'adults' => $adults,
            'children' => $children,
            'room_type' => $roomType,
            'total_price' => $totalPrice,
            'total_with_vat'=>$totalPriceWithTax
        ];

        $_SESSION['booking_confirmation'] = $bookingConfirmation;

        // Debug: Check the contents of the booking confirmation session
        var_dump($_SESSION['booking_confirmation']);

        header("Location: confirmBooking.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>