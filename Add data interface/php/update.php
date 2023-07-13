<?php
// Include the database connection and configuration file
require_once '../configdb/config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the importance values from the form
    $importanceValues = $_POST['importance'];

    // Update the importance of each kit
    foreach ($importanceValues as $kitId => $importance) {
        // Sanitize the input
        $kitId = filter_var($kitId, FILTER_SANITIZE_NUMBER_INT);
        $importance = filter_var($importance, FILTER_SANITIZE_NUMBER_INT);

        // Prepare and execute the SQL query to update the importance
        $stmt = $pdo->prepare("UPDATE kits SET importance = :importance WHERE id = :kitId");
        $stmt->bindParam(':importance', $importance, PDO::PARAM_INT);
        $stmt->bindParam(':kitId', $kitId, PDO::PARAM_INT);
        $stmt->execute();
    }

    // Redirect to the success page
    header("Location: success.php");
    exit();
}

// Retrieve the kits from the database
$stmt = $pdo->query("SELECT * FROM kits");
$kits = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<style>
    .container {
        max-width: 400px;
        margin: 2rem auto;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    h1 {
        margin-top: 5rem;
        margin-bottom: 20px;
        text-align: center;
        color:#fff;
    }

    .form-group {
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input[type="number"] {
        width: 60px;
        padding: 5px;
        font-size: 14px;
        border-radius: 4px;
        border: 1px solid #cccccc;
    }

    .form-group input[type="submit"] , .button{
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        color: #ffffff;
        background-color: #ff4444;
        border: none;
        text-decoration: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .form-group input[type="submit"]:hover ,
    .button:hover
    {
        opacity: 0.7;
        transition: 0.3s ease-in-out;
    }
</style>



<h1>Modify Kit Importance</h1>

<div class="container">
    <?php if (!empty($kits)) { ?>
        <form method="POST" action="../php/update.php">
            <?php foreach ($kits as $kit): ?>
                <div class="form-group">
                    <label for="importance_<?php echo $kit['id']; ?>"><?php echo $kit['name']; ?> <?php echo $kit['id']; ?>:</label>
                    <input type="number" name="importance[<?php echo $kit['id']; ?>]" id="importance_<?php echo $kit['id']; ?>" value="<?php echo $kit['importance']; ?>" min="0" max="100">
                </div>
            <?php endforeach; ?>
            <div class="form-group">
                <input type="submit" name="submit" value="Save">
            </div>
        </form>
    <?php } else { ?>
        <p>There are no kits yet.</p>
        <a href="add_new_kit.php" class="button">Return to Add New Kit</a>
    <?php } ?>
</div>
