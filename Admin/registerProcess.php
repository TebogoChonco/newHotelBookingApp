<?php
// Include the database connection script if not already included
session_start();
require_once '../includes/database.php';

if (isset($_POST['registerBtn'])) {
    // Retrieve and validate user input from the registration form
    $username = filter_var($_POST['username']);
    $password = $_POST['password'];

    // Step 4: Check if the username is unique
    $username_check_sql = "SELECT * FROM users WHERE username = ?";
    $username_check_stmt = $conn->prepare($username_check_sql);
    $username_check_stmt->bind_param("s", $username);
    $username_check_stmt->execute();
    $username_result = $username_check_stmt->get_result();

    if ($username_result->num_rows > 0) {
        // Username is not unique
        echo "Username is already taken. Please choose a different username.";
    } else {
        // Prepare and execute the SQL query to insert user data into the 'users' table
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute()) {
            header("Location: login.php"); // Redirect to the login page
        } else {
            echo "Error: Registration failed " . $stmt->error;
        }
    } 

    // Close the database connection
    $username_check_stmt->close();
    $stmt->close();
    $conn->close();
}
?>
