<?php
require_once '../dbconfig/config.php';

// Check if the user is logged in and retrieve the user ID from the session
session_start();
if (!isset($_SESSION['user_id'])) {
  // Redirect the user to the login page if not logged in
  header("Location: ../nav_links/account.php");
  exit();
}

// Get the user ID from the session
$userId = $_SESSION['user_id'];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the name, email, and message from the form
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Perform necessary validations and sanitization on the form inputs

  try {
    // Prepare the SQL query to insert the form data into the contacts table
    $sql = "INSERT INTO contacts (user_id, name, email, message) 
            VALUES (:user_id, :name, :email, :message)";

    // Prepare the statement
    $stmt = $pdo->prepare($sql);

    // Bind the parameters
    $stmt->bindParam(':user_id', $userId);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

    // Execute the statement
    if ($stmt->execute()) {
      // Redirect to the success page
      header("Location: ../php/success.php");
      exit();
    } else {
      // Redirect to the error page
      header("Location: ../php/error.php");
      exit();
    }
  } catch (PDOException $e) {
    // Error occurred in database operation
    echo "Error: " . $e->getMessage();
  }
}
?>
