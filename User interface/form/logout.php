<?php
// Start the session
session_start();

// Clear session data
$_SESSION = array();

// Destroy the session
session_destroy();

// Clear the cookies
setcookie('user_id', '', time() - 3600);
setcookie('user_email', '', time() - 3600);

// Redirect to the login page or any other page as desired
header("Location: ../nav_links/home.php");
exit;
?>
