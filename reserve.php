<?php
require_once 'includes/header.php';
?>

<body>
    <h2>Reservation Page</h2>
    <div class="reserve">
        <form class="formReserve" action="process_booking.php" method="post">
            <p class="label" id="reserve">Make your reservation</p><br>

            <label for="hotels">Hotels:</label><br>
            <select id="hotels" class="options" name="hotel_name">
                <option value="" class="options">--Please choose a hotel--</option>
                <option value="Madikwe Hills" class="options">Madikwe Hills</option>
                <option value="Cascades" class="options">Cascades</option>
                <option value="Manor Hills" class="options">Manor Hills</option>
                <option value="Sun City Resort" class="options">Sun City Resort</option>
                <option value="The Royal Elephant" class="options">The Royal Elephant</option>
                <option value="The Riverleaf Hotel" class="options">The Riverleaf Hotel</option>
            </select><br>

            <label for="guest_name">Guest Name:</label>
            <input type="text" id="guest_name" name="guest_name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" autocomplete="on" required><br>

            <label for="checkin_date">Check-in Date:</label>
            <input type="date" id="checkin_date" name="checkin_date" required><br>

            <label for="checkout_date">Check-out Date:</label>
            <input type="date" id="checkout_date" name="checkout_date" required><br>

            <label for="adults">Number of Adults:</label>
            <input type="number" id="adults" name="adults" min="2" required><br>

            <label for="children">Number of Children:</label>
            <input type="number" id="children" name="children" min="0" required><br>

            <p>Room Type:</p>
            <label for="single_room">Single Room</label><br>
            <input type="radio" id="single_room" name="room_type" value="single" required>
            <input type="hidden" id="room_price" name="room_price_single" value="200">

            <label for="double_room">Double Room</label><br>
            <input type="radio" id="double_room" name="room_type" value="double" required>
            <input type="hidden" id="room_price" name="room_price_double" value="200">

            <button type="submit">Confirm Booking</button>
        </form>
    </div>
</body>
</html>
