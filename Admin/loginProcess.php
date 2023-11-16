<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require_once '../includes/database.php';

if (isset($_POST['loginBtn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize and validate user input
    $username = filter_var($username);

    // Step 1: Verify the user's credentials
    $select_sql = "SELECT ID, username, password, roleId FROM users WHERE username = ?";
    $select_stmt = $conn->prepare($select_sql);
    $select_stmt->bind_param("s", $username);
    $select_stmt->execute();
    $result = $select_stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];

        // Verify the password without hashing
        if ($password == $storedPassword) {
            // Password is correct, check the user's role
            if ($row['roleId'] == 1) {
                // User has roleId 1, create a session for the user
                $_SESSION['user_ID'] = $row['ID'];
                $_SESSION['user_username'] = $row['username'];
                header("Location: dashboard.php");
                exit();
            } else {
                // User does not have roleId 1, show an error message
                $_SESSION['login_error'] = "Access denied. You do not have the required role.";
                header("Location: login.php");
                exit();
            }
        } else {
            // Password is incorrect
            $_SESSION['login_error'] = "Incorrect password";
            header("Location: login.php");
            exit();
        }
    } else {
        // User not found
        $_SESSION['login_error'] = "User not found";
        header("Location: login.php");
        exit();
    }

    $conn->close();
}
?>
