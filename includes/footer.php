  <?php
  $query = "SELECT * FROM hotels WHERE isFeatured = 1 ORDER BY ID ASC LIMIT 6";
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
            <img src="./Images/<?php echo $row["image"]; ?>" class="img-responsive" width="160px" /><br />

            <h7><?php echo $row["hotel_name"]; ?></h7> <br>

            <h7>R <?php echo $row["hotel_price"]; ?></h7>

            <input type="hidden" name="hidden_name" value="<?php echo $row["hotel_name"]; ?>" />

            <input type="hidden" name="hidden_price" value="<?php echo $row["hotel_price"]; ?>" />

            <a href="login.php" class="btn btn-warning">Explore more</a>
          </div>
        </form>

    <?php
    }
  };
    ?>
      </div>

      </html>