<?php
require_once 'includes/header.php';
?>

<h2> Welcome, <?php echo $_SESSION['username'];?><h2>
    <a class="logout" href= "logout.php">Logout</a>

    <div class="hotelBody">
    <div class="row" id="hotelCards">
      <h6 class="col-sm-12">Stay at one of our beautiful resorts</h6>
        <div class="col-sm-6">
            <div class="card">
               <div class="card-body">
                  <img width="120px" src="./images/home4.jpg" alt="">
                  <h5 class="card-title">Madikwe Hills</h5>
                  <p class="card-text">Taung, NW.</p>
                  <a href="login.php" class="btn btn-warning">Book now!</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
             <div class="card">
                 <div class="card-body">
                   <img width="120px" src="./images/home.jpg" alt="">
                   <h5 class="card-title">Cascades</h5>
                   <p class="card-text">Zeerust, NW</p>
                   <a href="login.php" class="btn btn-warning">Book now!</a>
                 </div>
            </div>
        </div>
        <div class="col-sm-6">
             <div class="card">
                <div class="card-body">
                  <img width="120px" src="./images/home2.jpg" alt="">
                  <h5 class="card-title">Manor Hills</h5>
                  <p class="card-text">Mafikeng, NW</p>
                  <a href="login.php" class="btn btn-warning">Book now!</a>
                 </div>
             </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                   <img width="120px" src="./images/home6.jpg" alt="">
                   <h5 class="card-title">Sun City Resort</h5>
                   <p class="card-text">Rustenburg, NW</p>
                   <a href="login.php" class="btn btn-warning">Book now!</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
             <div class="card">
                <div class="card-body">
                  <img width="120px" src="./images/home5.jpg" alt="">
                  <h5 class="card-title">Royal Elephant</h5>
                  <p class="card-text">Phokeng, NW</p>
                  <a href="login.php" class="btn btn-warning">Book now!</a>
                 </div>
             </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                   <img width="120px" src="./images/home1.jpg" alt="">
                   <h5 class="card-title">The Riverleaf Hotel</h5>
                   <p class="card-text">Hartbeespoort, NW</p>
                   <a href="login.php" class="btn btn-warning">Book now!</a>
                </div>
            </div>
        </div>
    </div>
</div>