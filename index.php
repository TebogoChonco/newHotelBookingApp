<?php
require_once 'includes/header.php';
require_once 'landingPage.php';
?>
<?php
              $query = "SELECT * FROM hotels WHERE isFeatured = 1 ORDER BY ID";
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
            <img src="./Images/<?php echo $row["image"]; ?>" class="img-responsive" width="300px" /><br />

            <h4><?php echo $row["hotel_name"]; ?></h4>

            <h6><?php echo $row["location"]; ?></h6>

            <p>Summary:
              <br>
            </Summary><?php echo $row["summury"]; ?></p>

            <input type="hidden" name="hidden_name" value="<?php echo $row["hotel_name"]; ?>" />

            <input type="hidden" name="hidden_location" value="<?php echo $row["location"]; ?>" />

            <input type="hidden" name="hidden_summury" value="<?php echo $row["summury"]; ?>" />

            <a href="login.php" class="btn btn-warning">Login to explore more</a>
        </div>
    </form>

    <?php
             } };
        ?>
</div>


<?php
// require_once 'includes/footer.php';
?>