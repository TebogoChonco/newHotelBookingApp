<?php
require_once 'includes/header.php';
require_once 'landingPage.php';
require_once 'greeting.php';
$sql = "SELECT `hotel_name`, `hotel_price` FROM hotels";
$result = $conn->query($sql);
?> 

<body>
    <h2>Reservation Page</h2>
    <div class="reserve">
        <form class="formReserve" action="process_booking.php" method="post">
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
            <input type="email" id="email" name "email" autocomplete="on" required><br>

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

            <button type="submit">Confirm Booking</button>
        </form>
    </div>

    <script>
     // JavaScript code to hide the single room option based on the selected values
     document.getElementById('adults').addEventListener('input', function() {
        checkRoomTypeVisibility();
      });

     document.getElementById('children').addEventListener('input', function() {
        checkRoomTypeVisibility();
        });

      function checkRoomTypeVisibility() {
        const adults = parseInt(document.getElementById('adults').value);
        const children = parseInt(document.getElementById('children').value);
        const singleRoomRadio = document.getElementById('single_room');

        // Hide the single room option if the conditions are met
        if (adults >= 3 || (adults == 2 && children >= 2)) {
            singleRoomRadio.style.display = 'none';
            singleRoomRadio.checked = false;
            document.querySelector('label[for="single_room"]').style.display = 'none';
        } else {
            singleRoomRadio.style.display = 'block';
            document.querySelector('label[for="single_room"]').style.display = 'block';
        }
       }

      // Initial check when the page loads
       checkRoomTypeVisibility();


       // Define room prices
        const singleRoomPrice = 100; // R100
       const doubleRoomPrice = 200; // R200

       // JavaScript code to calculate and update the total cost
        document.getElementById('adults').addEventListener('input', function() {
        calculateTotalCost();
      });

       document.getElementById('children').addEventListener('input', function() {
        calculateTotalCost();
        });

        document.getElementById('hotels').addEventListener('change', function() {
        calculateTotalCost();
        });

        document.querySelector('input[name="room_type"]').addEventListener('change', function() {
        calculateTotalCost();
       });

      function calculateTotalCost() {
        const adults = parseInt(document.getElementById('adults').value);
        const children = parseInt(document.getElementById('children').value);
        const selectedHotel = document.getElementById('hotels').value;
        const roomType = document.querySelector('input[name="room_type"]:checked').value;
        const totalCostSpan = document.getElementById('total_cost');

        let roomPrice = 0;

        if (roomType === 'single') {
            roomPrice = singleRoomPrice;
        } else {
            roomPrice = doubleRoomPrice;
        }

        // Calculate total cost
        const hotelPrice = parseInt(document.querySelector('option[value="' + selectedHotel + '"]').getAttribute(
            'data-price'));
        const totalCost = (hotelPrice + roomPrice) * adults;

        // Display the total cost
        totalCostSpan.textContent = 'R' + totalCost;
     }

      // Initial check when the page loads
      calculateTotalCost();
    </script>
</body>

</html>