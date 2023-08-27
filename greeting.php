<?php
require_once 'includes/header.php';
?>
<div id="main-wrapper">
    <div class="greeting">
        <h5>Welcome <?php echo $_SESSION['username']; ?></h5>

        <form action="login.php" method="post">
            <div class="inner_container">
                <button class="logout_button" type="submit">Log Out</button>
            </div>
        </form>
    </div>
</div>

