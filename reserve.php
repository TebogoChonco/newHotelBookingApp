<?php
require_once 'includes/header.php';
?>

<!-- reuse the following greeting -->
<h2> Welcome, <?php echo $_SESSION['username'];?><h2>
<a class="logout" href= "logout.php">Logout</a> <br><br>

    <hr>

<div class="reserve">
    <form action="checkout.php" method="post" >
        <p class="label" id = "reserve">Make your reservation</p><br>
        <div class="checkin">
            <div class="checkinA">
                 <label for="check-in" class="checkout"  id = "check">Check-in:</label><br>
                 <input type="text"  class="checkout"  name="check-in" placeholder="Check-In" id = "check"><br>
            </div>
            <div class="checkinB">
                <label for="check-oout" class="checkout"  id = "check">Check-Out:</label><br>
                <input type="text" class="checkout"  name="check-out" placeholder="Check-Out" id = "check"><br>
            </div>
        </div> 
            <label for="hotel" id= "hotel">Hotel:</label><br>
            <select id="hotels" class="options" >
                <option value="Madikwe Hills" class="options">Madikwe Hills</option>
              <option value="Cascades" class="options">Cascades</option>
               <option value="Manor Hills" class="options">Manor Hills</option>
                <option value="Sun City Resort" class="options">Sun City Resort</option>
                <option value="The Royal Elephant" class="options">The Royal Elephant</option>
               <option value="The Riverleaf Hotel" class="options">The Riverleaf Hotel</option>
            </select><br>
             <label for="room" class="options" >Room</label><br>
             <input type="text" class="options" name="room" placeholder="Room"><br>
        <div class="checkin">       
             <div class="checkinA">
                <label for="adults" class="checkout" >Adults</label><br>
                <input type="text" name="adults" placeholder="Adults"><br>
            </div>   
            <div class="checkinB">    
                <label for="children" class="checkout" >Children</label><br>
                <input type="text" name="children" placeholder="Children"><br>
            </div>
        </div>
             <button type="submit" name="submit" id="reserveBtn">Check Availability</button>
         
    </form>
</div>
