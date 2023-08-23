<?php
require_once 'includes/header.php';
require_once 'includes/loginCheck.php';

?>
<div class       = "landingPage"></div>
<div id          = "carouselExampleIndicators" class          = "carousel slide" data-ride = "carousel">
<ol  class       = "carousel-indicators">
<li  data-target = "#carouselExampleIndicators" data-slide-to = "0" class                  = "active"></li>
<li  data-target = "#carouselExampleIndicators" data-slide-to = "1"></li>
<li  data-target = "#carouselExampleIndicators" data-slide-to = "2"></li>
  </ol>
  <div class = "carousel-inner">
  <div class = "carousel-item active">
  <img class = "d-block " src = "./images/home3.jpg" alt = "First slide">
    </div>
    <div class = "carousel-item">
    <img class = "d-block " src = "./images/home.jpg" alt = "Seconnd slide">
    </div>
    <div class = "carousel-item">
    <img class = "d-block " src = "./images/home1.jpg" alt = "Third slide">
    </div>
  </div>
  <a    class = "carousel-conntrol-prev" href             = "#carouselExampleIndicators" role = "button" data-slide = "prev">
  <span class = "carousel-conntrol-prev-iconn" aria-hidden = "true"></span>
  <span class = "sr-only">Previous</span>
  </a>
  <a    class = "carousel-conntrol-next" href             = "#carouselExampleIndicators" role = "button" data-slide = "next">
  <span class = "carousel-conntrol-next-iconn" aria-hidden = "true"></span>
  <span class = "sr-only">Next</span>
  </a>
  <div class = "content">
    <h1>North West</h1>
    <h7>Let's explore this beautiful province</h7>
  </div>
</div>
</div>

   

	<div id = "main-wrapper">
	  
      <h2>Login Form</h2>
    
		<form action = "login.php" method = "post">
		
			<div class = "inner_conntainer">
			
				<input type = "text" placeholder = "Enter Username" name = "username" autocomplete = "on" required>
		
				<input  type  = "password" placeholder = "Enter Password" name = "password" required>
				<button class = "login_button" name = "login" type = "submit">Login</button>
				<a href  = "register.php"><button type = "button" class = "register_btn">Register</button></a>
			</div>
		</form>
		
		
</body>




<?php
require_once 'includes/footer.php';
?>

</html>