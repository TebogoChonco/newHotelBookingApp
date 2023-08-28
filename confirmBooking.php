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
   
   
   if(isset($_SESSION['booking_confirmation'])) {
    $confirmation = $_SESSION['booking_confirmation'];
    print_r ("<p>You are logged in as: ".$_SESSION['username'])."</p>";
    echo "<p>Guest Name: " . $confirmation['guest_name'] . "</p>";
    echo "<p>Email: " . $confirmation['email'] . "</p>";
    echo "<p>Hotel Name: " . $confirmation['hotel_name'] . "</p>";
    echo "<p>Room type: " . $confirmation['room_type'] . "</p>";
    echo "<p>Check-in Date: " . $confirmation['checkin_date'] . "</p>";
    echo "<p>Check-out Date: " . $confirmation['checkout_date'] . "</p>";
    echo "<p>Number of Adults: " . $confirmation['adults'] . "</p>";
    echo "<p>Number of Children: " . $confirmation['children'] . "</p>";
    echo "<p>Total Price: R" . number_format($confirmation['total_price'], 2) . "</p>";   
    echo "<p>Total Price with tax: R" . number_format($confirmation['total_with_vat'], 2) . "</p>"; 
  
}

    else {
    echo "<p>No booking confirmation found.</p>";
    }

    ?>
<hr>
</body>

</html>