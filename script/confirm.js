            document.addEventListener("DOMContentLoaded", function () {
                const hotelsSelect = document.getElementById("hotels");
                const closestHotelsDiv = document.getElementById("closestHotels");
                const closestHotelsList = document.getElementById("closestHotelsList");

                hotelsSelect.addEventListener("change", function () {
                    const selectedHotel = hotelsSelect.options[hotelsSelect.selectedIndex];
                    const selectedHotelPrice = parseFloat(selectedHotel.getAttribute("data-price"));
                    const allOptions = Array.from(hotelsSelect.options);

                    // Filter the options to find the two closest hotels in price
                    const closestHotels = allOptions
                        .filter(option => option.value !== "") // Exclude the placeholder
                        .sort((a, b) => {
                            if (a.value === selectedHotel.value)
                                return 1; // Ensure the selected hotel is not in the closest list
                            const priceA = Math.abs(parseFloat(a.getAttribute("data-price")) -
                                selectedHotelPrice);
                            const priceB = Math.abs(parseFloat(b.getAttribute("data-price")) -
                                selectedHotelPrice);
                            return priceA - priceB;
                        })
                        .slice(0, 2); // Get the two closest hotels

                    // Clear the previous list of closest hotels
                    closestHotelsList.innerHTML = "";

                    // Display the closest hotels with images and prices
                    closestHotels.forEach(option => {
                        const listItem = document.createElement("li");
                        const hotelImage = document.createElement("img");
                        hotelImage.src = option.getAttribute("image"); // Add the image source
                        hotelImage.alt = option.value;
                        const hotelName = document.createTextNode(option.value);
                        const hotelPrice = document.createTextNode("Price: R" + option.getAttribute(
                            "data-price"));

                        listItem.appendChild(hotelImage);
                        listItem.appendChild(hotelName);
                        listItem.appendChild(document.createElement("br")); 
                        listItem.appendChild(hotelPrice);

                        closestHotelsList.appendChild(listItem);
                    });

                    // Show/hide the closest hotels div based on the selection
                    closestHotelsDiv.style.display = closestHotels.length > 0 ? "block" : "none";
                });
            });

            // JavaScript code to hide the single room option based on the selected values
            document.getElementById('adults').addEventListener('input', function () {
                checkRoomTypeVisibility();
                calculateTotalCost(); // Recalculate total cost after visibility changes
            });

            document.getElementById('children').addEventListener('input', function () {
                checkRoomTypeVisibility();
                calculateTotalCost(); // Recalculate total cost after visibility changes
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
            document.getElementById('adults').addEventListener('input', function () {
                calculateTotalCost();
            });

            document.getElementById('children').addEventListener('input', function () {
                calculateTotalCost();
            });

            document.getElementById('hotels').addEventListener('change', function () {
                calculateTotalCost();
            });

            // Additional event listener to handle visibility changes
            document.getElementById('single_room').addEventListener('change', function () {
                checkRoomTypeVisibility();
                calculateTotalCost(); // Recalculate total cost after visibility changes
            });

            document.getElementById('double_room').addEventListener('change', function () {
                calculateTotalCost(); // Recalculate total cost after visibility changes
            });

            function calculateTotalCost() {
                const checkinDate = new Date(document.getElementById('checkin_date').value);
                const checkoutDate = new Date(document.getElementById('checkout_date').value);
                const days = Math.ceil((checkoutDate - checkinDate) / (1000 * 60 * 60 * 24)); // Calculate the number of days

                const selectedHotel = document.getElementById('hotels').value;
                const roomType = document.querySelector('input[name="room_type"]:checked').value;
                const totalCostInput = document.getElementById('total_cost_input');

                // Assuming these variables are defined in your PHP script
                const singleRoomPrice = 100;
                const doubleRoomPrice = 200;

                let roomPrice = 0;

                if (roomType === 'single') {
                    roomPrice = singleRoomPrice;
                } else {
                    roomPrice = doubleRoomPrice;
                }

                // Calculate total cost based on the number of days and room type
                const hotelPrice = parseInt(document.querySelector('option[value="' + selectedHotel + '"]').getAttribute('data-price'));
                const totalCost = (hotelPrice + roomPrice) * days;

                // Update the hidden input field
                totalCostInput.value = totalCost;

                // Display the total cost
                const totalCostSpan = document.getElementById('total_cost');
                totalCostSpan.textContent = 'R' + totalCost;
            }
