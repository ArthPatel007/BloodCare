<?php
// Start the session
session_start();

// Check if the user is logged in (you can change this condition according to your authentication logic)
if (isset($_SESSION['user_id'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to a login page or any other page after logout
    header("Location: login.php"); // Change 'login.php' to your desired logout redirect page
    exit();
} else {
    // Redirect to a login page or any other page if the user is not logged in
    header("Location: logoutrecipient.php"); // Change 'login.php' to your desired login page
    exit();
}
