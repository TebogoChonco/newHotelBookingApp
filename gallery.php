<?php
require_once 'includes/header.php';
require_once 'landingPage.php';
require_once 'greeting.php';
?>


<h2>Hotels Gallery</h2>
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
            <img src="./Images/<?php echo $row["image"]; ?>" class="img-responsive" width="250px" /><br />

            <h4><?php echo $row["hotel_name"]; ?></h4>

            <h6><?php echo $row["location"]; ?></h6>

            <input type="hidden" name="hidden_name" value="<?php echo $row["hotel_name"]; ?>" />

            <input type="hidden" name="hidden_location" value="<?php echo $row["location"]; ?>" />

            <input type="hidden" name="hidden_summury" value="<?php echo $row["summury"]; ?>" />
            <input type="hidden" name="hidden_price" value="<?php echo $row["hotel_price"]; ?>" />
            <input type="hidden" name="hidden_rating" value="<?php echo $row["rating"]; ?>" />
           
        </div>
    </form>

    <?php
     } };
    ?>
</div>