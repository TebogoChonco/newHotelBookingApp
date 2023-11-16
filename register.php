<?php
require_once 'includes/header.php';
require_once 'includes/registerCheck.php';
require_once 'landingPage.php';
?>

<div id="main-wrapper">
    <h2>Registration Form</h2>

    <form action="register.php" method="post">

        <div class="innerContainer">

            <input type="text" placeholder="Enter Username" name="username" autocomplete="off" required>

            <input type="password" placeholder="Enter Password" name="password" required>

            <input type="password" placeholder="Confirm Password" name="cpassword" required>
            <button name="registerBtn" class="signUpBtn" type="submit">Register</button>

            <a href="login.php"><button type="button" class="backBtn"><< Back to Login</button></a>
        </div>
    </form>

</div>
</body>

<?php
require_once 'includes/footer.php';
?>