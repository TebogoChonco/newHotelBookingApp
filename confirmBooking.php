<?php
require_once 'includes/header.php';
require_once 'hotel.php';
require_once 'landingPage.php';
require_once 'greeting.php';
?>

<body class="confirm">
    <h1>Booking Confirmation</h1>
    <hr>
    <?php
    if (isset($_SESSION['booking_confirmation'])) {
        $confirmation = $_SESSION['booking_confirmation'];
        echo "<p>You are logged in as: " . $_SESSION['username'] . "</p>";
        echo "<p>Guest Name: " . $confirmation['guest_name'] . "</p>";
        echo "<p>Email: " . $confirmation['email'] . "</p>";
        echo "<p>Hotel Name: " . $confirmation['hotel_name'] . "</p>";
        echo "<p>Room type: " . $confirmation['room_type'] . "</p>";
        echo "<p>Check-in Date: " . $confirmation['checkin_date'] . "</p>";
        echo "<p>Check-out Date: " . $confirmation['checkout_date'] . "</p>";
        echo "<p>Number of Adults: " . $confirmation['adults'] . "</p>";
        echo "<p>Number of Children: " . $confirmation['children'] . "</p>";

        // Calculate total price without tax
        $totalPrice = $confirmation['total_price'];
        echo "<p>Total Price: R" . number_format($totalPrice, 2) . "</p>";

        // Calculate total price with tax (assuming a 15% tax rate)
        $taxRate = 0.15; // 15% tax rate
        $totalWithTax = $totalPrice + ($totalPrice * $taxRate);
        echo "<p>Total Price with tax: R" . number_format($totalWithTax, 2) . "</p";
    } else {
        echo "<p>No booking confirmation found.</p>";
    }
    ?>

    <a href="login.php"><button type="button" class="profile_btn">Go to Profile</button></a>
    <hr>
</body>
</html>
