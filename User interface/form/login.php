<?php
require_once '../dbconfig/config.php';

// Start a session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    // Redirect to the home page or any other authenticated page
    header("Location: ../nav_links/home.php");
    exit;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate and sanitize the input data
    $email = validateAndSanitize($email);
    $password = validateAndSanitize($password);

    // Retrieve the user from the database based on the email
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the user exists and verify the password
    if ($user && password_verify($password, $user['password'])) {
        // Set session data for the logged-in user
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];

        // Set a cookie for persistent login
        $cookieExpires = time() + (30 * 24 * 60 * 60); // 30 days
        setcookie('user_id', $user['id'], $cookieExpires);
        setcookie('user_email', $user['email'], $cookieExpires);
        $loginSuccess = "Connected Successfuly !" ;
        // Redirect to the home page or any other authenticated page
        echo "<script>alert('$loginSuccess'); window.location='../nav_links/home.php';</script>";
    } else {
        // Invalid login credentials
        $loginError = "Invalid email or password";
        echo "<script>alert('$loginError'); window.location='../nav_links/account.php';</script>";
    }
}

// Function to validate and sanitize input data
function validateAndSanitize($data)
{
    // Perform any validation or sanitization logic here
    $data = trim($data); // Remove leading/trailing whitespace
    $data = stripslashes($data); // Remove backslashes
    $data = htmlspecialchars($data); // Convert special characters to HTML entities
    // You can add more validation or sanitization steps as per your requirements
    return $data;
}
?>