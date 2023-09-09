<?php
session_start(); // Start the session

// Check if the user is logged in, if not, redirect to the login page
if (!isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirect to your login page
    exit;
}

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the login page after logout
header("Location: index.php");
exit;
?>

