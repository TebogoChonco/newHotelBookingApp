<?php
require_once 'includes/header.php';

?>

<!-- <div class="browserImage">
<p class="welcome-text">
        Explore North West!
      </p>
</div> -->

<!--Code for carousel-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block " src="./images/home.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block " src="./images/home1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block " src="./images/home2.jpg" alt="Third slide">
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
    <h2>Let's explore this beautiful province</h2>
  </div>
</div>




<div>
    <h1>Log in</h1>
    <p> No account? <a href="register.php">Register here!</a></p>

    <div class="logInForms">
    <form action="includes/login-inc.php" method="post">
        <p class="label">User Log In</p>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="submit">LOGIN</button>
    </form>

    <form action="includes/login-inc.php" method="post">
        <p class="label">Employee Log In</p>
        <input type="text" name="employeeNum" placeholder="employee number">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="submit">LOGIN</button>
    </form>

    </div>
</div>

<?php
require_once 'includes/footer.php';
?>

