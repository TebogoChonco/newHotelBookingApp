<?php
require_once 'includes/header.php';
?>

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

