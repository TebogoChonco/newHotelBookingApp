<?php
require_once 'includes/header.php';
require_once 'includes/loginCheck.php';
require_once 'landingPage.php';
?>

<div id="main-wrapper">

    <h2>Login Form</h2>

    <form action="login.php" method="post">

        <div class="inner_conntainer">

            <input type="text" placeholder="Enter Username" name="username" autocomplete="on" required>

            <input type="password" placeholder="Enter Password" name="password" required>
            <button class="login_button" name="login" type="submit">Login</button>
            <a href="register.php"><button type="button" class="register_btn">Register</button></a>
        </div>
    </form>
</div>

</body>
<br>
<br>

<?php
require_once 'includes/footer.php';
?>

</html>