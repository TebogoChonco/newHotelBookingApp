<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $servername = "localhost";
    $username = "Tebogo";
    $password = "Siya2023";
    $dbname = "hotel_booking";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize and validate form inputs
    $hotelName = mysqli_real_escape_string($conn, $_POST["hotel_name"]);
    $guestName = mysqli_real_escape_string($conn, $_POST["guest_name"]);
    $email = $_POST["email"];
    $checkinDate = $_POST["checkin_date"];
    $checkoutDate = $_POST["checkout_date"];
    $adults = intval($_POST["adults"]);
    $children = intval($_POST["children"]);
    $roomType = $_POST["room_type"];
    
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
    $totalPrice = $roomPrice * $numDays;

    // Insert booking data into the database
    $sql = "INSERT INTO bookings (hotel_name, guest_name, email, checkin_date, checkout_date, adults, children, room_type, room_price, total_price)
            VALUES ('$hotelName', '$guestName', '$email', '$checkinDate', '$checkoutDate', $adults, $children, '$roomType', $roomPrice, $totalPrice)";

    // Debug: Check the value of $_POST['hotel_name']
    var_dump($_POST['hotel_name']);

    if ($conn->query($sql) === TRUE) {
        $bookingConfirmation = [
            'guest_name' => $guestName,
            'email' => $email,
            'hotel_name'=>$hotelName,
            'checkin_date' => $checkinDate,
            'checkout_date' => $checkoutDate,
            'adults' => $adults,
            'children' => $children,
            'room_type' => $roomType,
            'total_price' => $totalPrice
        ];

        $_SESSION['booking_confirmation'] = $bookingConfirmation;

        // Debug: Check the contents of the booking confirmation session
        var_dump($_SESSION['booking_confirmation']);

        header("Location: confirmBooking.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
