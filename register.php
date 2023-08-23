<?php
require_once 'includes/header.php';
require_once 'includes/registerCheck.php';
?>

<div class="landingPage"></div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block " src="./images/home3.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block " src="./images/home.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block " src="./images/home1.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <div class="content">
    <h1>North West</h1>
    <h7>Let's explore this beautiful province</h7>
  </div>
</div>
</div>


<div id="main-wrapper">
		<h2>Registration Form</h2>

			<form action="register.php" method="post">

				<div class="inner_container">
				
					<input type="text" placeholder="Enter Username" name="username" autocomplete = "off"  required>
				
					<input type="password" placeholder="Enter Password" name="password" required>
					
					<input type="password" placeholder="Enter Password" name="cpassword" required>
					<button name="register" class="sign_up_btn" type="submit">Register</button>
				
						<a href="login.php"><button type="button" class="back_btn"><< Back to Login</button></a>
				</div>
			</form>
		

	</div>
</body>





<?php
require_once 'includes/footer.php';
?>

