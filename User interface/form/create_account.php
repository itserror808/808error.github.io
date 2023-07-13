<?php
require_once '../dbconfig/config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate and sanitize the input data
    $name = validateAndSanitize($name);
    $email = validateAndSanitize($email);
    $password = validateAndSanitize($password);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Display an error message or redirect back to the form with an error
        echo "<script>alert('Invalid email format');</script>";
        // Redirect back to the form
        header("Location: ../nav_links/home.php");
        exit;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Store the data into the 'users' table in the database
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");

    // Bind the parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashedPassword);

    // Execute the query
    if ($stmt->execute()) {
        // Redirect to the home page
        header("Location: ../nav_links/home.php");
        exit;
    } else {
        // Redirect back to the form or show an error page
        header("Location: ../nav_links/home.php?error=true");
        exit;
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
