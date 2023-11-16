<?php
require_once 'includes/header.php';
require_once 'landingPage.php';
require_once 'greeting.php';
$sql = "SELECT `hotel_name`, `hotel_price` FROM hotels";
$result = $conn->query($sql);
?>

<body>
    <h2>Reservation Page</h2>
    <div class="reservation">
        <div class="reserve">
            <form class="formReserve" action="confirmBooking.php" method="post">
                <p class="label" id="reserve">Make your reservation</p><br>

                <label for="hotels" required>Hotels:</label><br>
                <select id="hotels" class="options" name="hotel_name" required>
                    <option value="" class="options">--Please choose a hotel--</option>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['hotel_name'] . '" data-price="' . $row['hotel_price'] . '">' . $row['hotel_name'] . '</option>';
                        }
                    }
                    ?>
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
                <input type="number" id="adults" name="adults" min="1" required><br>

                <label for="children">Number of Children:</label>
                <input type="number" id="children" name="children" min="0" required><br>

                <p>Room Type:</p>
                <label for="single_room">Single Room</label><br>
                <input type="radio" id="single_room" name="room_type" value="single" required>

                <label for="double_room">Double Room</label><br>
                <input type="radio" id="double_room" name="room_type" value="double" required>

                <p>Total Cost: <span id="total_cost">0</span></p>
                <!-- Add this input field within the form -->
                <input type="hidden" id="total_cost_input" name="total_cost" value="0">

                <a href="confirmBooking.php">
                    <button type="submit">Confirm Booking</button>
                </a>
            </form>
            <h5>For any further inquiries, please contact our
                <br>provincial support center on +27 (00) 222 - 5432. </h5>

        </div>

        <div id="closestHotels">
            <form class="formReserve" action="process_booking.php" method="post">
                <p class="label" id="reserve">Compare</p><br>
                <p>Hotels closest in price:</p>
                <ul id="closestHotelsList"></ul><br>
            </form>
        </div>

        <script src="./script/confirm.js"></script>
    </body>

    </html>
