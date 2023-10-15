  <!-- <div class="row">
      <h4 class="col-md-12">Stay at one of our beautiful resorts</h4>
      <div class="col-md-4">
          <div class="card">
              <div class="card-body">
                  <img width="100px" src="./images/front4.png" alt="">
                  <h5 class="card-title">Madikwe Hills</h5>
                  <p class="card-text">Taung, NW.</p>
                  <a href="login.php" class="btn btn-warning">Log in to explore</a>
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card">
              <div class="card-body">
                  <img width="100px" src="./images/front6.png" alt="">
                  <h5 class="card-title">Cascades</h5>
                  <p class="card-text">Zeerust, NW</p>
                  <a href="login.php" class="btn btn-warning">Log in to explore</a>
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card">
              <div class="card-body">
                  <img width="100px" src="./images/front2.png" alt="">
                  <h5 class="card-title">Manor Hills</h5>
                  <p class="card-text">Mafikeng, NW</p>
                  <a href="login.php" class="btn btn-warning">Log in to explore</a>
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card">
              <div class="card-body">
                  <img width="100px" src="./images/front4.png" alt="">
                  <h5 class="card-title">Sun City Resort</h5>
                  <p class="card-text">Rustenburg, NW</p>
                  <a href="login.php" class="btn btn-warning">Log in to explore</a>
              </div>
          </div>
      </div>
  </div> -->

  <?php
              $query = "SELECT * FROM hotels WHERE isFeatured = 1 ORDER BY ID ASC LIMIT 4";
                $result = mysqli_query($conn, $query);
                if (!$result) {
               die("Query failed: " . mysqli_error($conn));
                 }
              if (mysqli_num_rows($result) > 0) {
           while ($row = mysqli_fetch_array($result)) {
   ?> 

  <div class="hotels">
      <form method="post" action="hotels.php?action=add&id=<?php echo $row["ID"]; ?>">
          <div class="display">
              <img src="./Images/<?php echo $row["image"]; ?>" class="img-responsive" width="150px" /><br />

              <h5 ><?php echo $row["hotel_name"]; ?></h5>

              <h5>R <?php echo $row["hotel_price"]; ?></h5>

              <input type="hidden" name="hidden_name" value="<?php echo $row["hotel_name"]; ?>" />

              <input type="hidden" name="hidden_price" value="<?php echo $row["hotel_price"]; ?>" />

              <a href="login.php" class="btn btn-warning">Explore more</a>
          </div>
      </form>
 
  <?php
             } };
        ?>
 </div>
  </html>