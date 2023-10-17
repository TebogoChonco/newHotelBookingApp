<?php
session_start();
require_once '../includes/database.php';

// Check if the user is logged in, redirect to login page if not
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }

// Handle form submissions for updating user settings
if (isset($_POST['updateSettingsBtn'])) {
    // Retrieve and validate user input
    $newUsername = $_POST['newUsername'];
    $newEmail = $_POST['newEmail'];

    // Update the user's settings in the database
    $userId = $_SESSION['user_id'];
    $updateSql = "UPDATE users SET username = ?, email = ? WHERE id = ?";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bind_param("ssi", $newUsername, $newEmail, $userId);

    if ($updateStmt->execute()) {
        // Settings updated successfully
        echo "Settings updated successfully.";
    } else {
        echo "Error updating settings: " . $updateStmt->error;
    }
    $updateStmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hotels.css">
    <title>Settings</title>
</head>

<body>
    <div>
        <?php require_once './includes/navbar.php' ?>
    </div>
    <br>
    <div class="container">
        <div class="header">
            <h2>Settings</h2>
        </div>
        <div class="content">
            <div class="settings-form">
                <form method="post">
                    <label for="newUsername">New Username:</label>
                    <input type="text" id="newUsername" name="newUsername" value="<?php echo $_SESSION['user_username']; ?>">
                    <br>

                    <label for="newEmail">New Email:</label>
                    <input type="email" id="newEmail" name="newEmail" value="<?php echo $_SESSION['user_email']; ?>">
                    <br>

                    <input type="submit" name="updateSettingsBtn" value="Update Settings">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
