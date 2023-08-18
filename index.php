<?php
require_once 'includes/header.php';
?>

<?php
   /*  if (isset($_SESSION['sessionId'])) {
        echo "You are logged in!";
    } else {
        echo "Home";
    } */

?>

<h2> Welcome, <?php echo $_SESSION['username'];?><h2>
    <a class="logout" href= "logout.php">Logout</a>

<?php
require_once 'includes/footer.php';
?>

