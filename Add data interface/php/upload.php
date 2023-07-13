<?php
require_once '../configdb/config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get the folder name from the hidden input field
  $folderName = sanitizeInput($_POST["folderNameHidden"]);

  // Get the description from the form
  $description = sanitizeInput($_POST["description"]);

  // Get the size of the uploaded folder
  $folderSize = getFolderSize($_FILES["folderName"]["tmp_name"]);

  // Get the price from the form
  $price = sanitizeInput($_POST["price"]);

  // Get the currency from the form
  $currency = sanitizeInput($_POST["currency"]);

  // Get the link from the form
  $link = sanitizeInput($_POST["link"]);

  // Get the category from the form
  $category = sanitizeInput($_POST["category"]);

  // Get the value of the free checkbox
  $isFree = isset($_POST["isFree"]) ? 1 : 0;

  // Get the image file name
  $imageName = sanitizeInput($_FILES["image"]["name"]);

  // Perform necessary validations and sanitization on the form inputs

  // Validate and sanitize the folder size
  $folderSize = filter_var($folderSize, FILTER_VALIDATE_INT);
  if ($folderSize === false || $folderSize < 0) {
    // Invalid folder size, handle the error
    $errorMessage = "Invalid folder size. Please make sure the folder is valid.";
    // Display the error message to the user
    // You can output the error message in the form or redirect back to the form page with an error parameter
    header("Location: ../add_free_kit.php?error=" . urlencode($errorMessage));
    exit();
  }
  
  // Validate and sanitize the price
  $price = filter_var($price, FILTER_VALIDATE_FLOAT);
  if ($price === false || $price < 0) {
    // Invalid price, handle the error
    $errorMessage = "Invalid price. Please enter a valid price.";
    // Display the error message to the user
    // You can output the error message in the form or redirect back to the form page with an error parameter
    header("Location: ../add_free_kit.php?error=" . urlencode($errorMessage));
    exit();
  }
  

  // Sanitize the currency
  $currency = sanitizeInput($currency);

  // Sanitize the link
  $link = sanitizeInput($link);

  // Sanitize the category
  $category = sanitizeInput($category);

  try {
    // Prepare the SQL query to insert the form data into the kits table
    $sql = "INSERT INTO kits (name, description, size, price, currency_name, link, category, is_free, image) 
            VALUES (:name, :description, :size, :price, :currency, :link, :category, :isFree, :image)";

    // Prepare the statement
    $stmt = $pdo->prepare($sql);

    // Bind the parameters
    $stmt->bindParam(':name', $folderName);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':size', $folderSize);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':currency', $currency);
    $stmt->bindParam(':link', $link);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':isFree', $isFree, PDO::PARAM_BOOL);
    $stmt->bindParam(':image', $imageName);

    // Execute the statement
    if ($stmt->execute()) {
      // Redirect to the success page
      header("Location: success.php");
      exit();
    } else {
      // Redirect to the success page
      header("Location: ../add_free_kit.php");
      exit();
    }
  } catch (PDOException $e) {
    // Error occurred in database operation
    echo "Error: " . $e->getMessage();
  }
}

/**
 * Sanitize the input value to prevent potential security vulnerabilities.
 *
 * @param string $value The input value to sanitize.
 * @return string The sanitized value.
 */
function sanitizeInput($value) {
  // Remove leading/trailing white spaces
  $value = trim($value);
  // Remove backslashes
  $value = stripslashes($value);
  // Convert special characters to HTML entities
  $value = htmlspecialchars($value);
  return $value;
}

/**
 * Calculate the size of a folder by estimating the used disk space.
 *
 * @param string $folderPath The path of the folder.
 * @return int The size of the folder in bytes.
 */
function getFolderSize($folderPath) {
  $totalSize = disk_total_space($folderPath) - disk_free_space($folderPath);
  return $totalSize;
}


?>
