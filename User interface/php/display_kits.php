<style>


.kits-container {
    position: relative;
}

.kits-grid {
    margin-top: 10rem;
    margin-bottom: 10rem;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
    justify-content: center;
}




.kit-item {
    text-align: center;
    position: relative;
}

.kit-item h3 {
    color: #fff;
    font-size: 20px;
    margin-top: 10px;
    text-align : center;
}

.kit-item h3:hover{
    color:#ff4444;
    transition: 0.2s ease-in-out;
}

.kit-item p {
    color: #fff;
    font-size: 15px;
    text-align : center;
}





.kit-item img {
    width: 100%;
    max-width: 200px;
    height: auto;
    transition: transform 0.3s ease;
}

.kit-item:hover img {
  transform: scale(1.1); /* Increase the scale value as desired */
}

.kit-item a {
    text-decoration: none;
    color: #fff;
}

.kit-item a:hover {
    transform: scale(1.2);
    color: #ff4444;
    transition: 0.2s ease-in-out;
}

.kits-heading {
    position :relative;
    margin-top: 5rem;
    text-align: center;
    margin-bottom: 20px;
}

.kits-heading h3 {

    font-size: 24px;
    color: #fff;
}
</style>

<style>
/* Your existing CSS styles */

.pagination {
  text-align: center;
  margin-top: 20px;
}

.pagination a {
  display: inline-block;
  margin-right: 5px;
  padding: 5px 10px;
  color: #fff;
  text-decoration: none;
  transition: color 0.2s ease-in-out;
}

.pagination a:hover {
  color: #ff4444;
}
</style>

<?php
// Include the database configuration file
include '../dbconfig/config.php';

// Set the number of items per page
$itemsPerPage = 9;

// Get the total number of items
$query = $pdo->query("SELECT COUNT(*) as total FROM kits");
$totalItems = $query->fetch(PDO::FETCH_ASSOC)['total'];

// Calculate the total number of pages
$totalPages = ceil($totalItems / $itemsPerPage);

// Get the current page from the URL parameter
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the starting index for the items on the current page
$startIndex = ($page - 1) * $itemsPerPage;

// Fetch kits data for the current page from the database
try {
    $query = $pdo->prepare("SELECT * FROM kits LIMIT :startIndex, :itemsPerPage");
    $query->bindValue(':startIndex', $startIndex, PDO::PARAM_INT);
    $query->bindValue(':itemsPerPage', $itemsPerPage, PDO::PARAM_INT);
    $query->execute();
    $kits = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database query failed: " . $e->getMessage());
}
?>

<div>
    <br>
    <div class="kits-heading">
        <h3>Find out our new kits</h3>
    </div>

    <div class="kits-grid">
        <?php
        // Generate HTML for each kit item
        foreach ($kits as $kit) {
            $name = $kit['name'];
            $price = $kit['price'];
            $link = $kit['link'];
            $image = "../photos/kits_photos/" . $kit['image'];
            ?>
            <div class="kit-container">
                <div class="kit-item">
                    <a href="<?php echo $link . '.php'; ?>" target="_blank">
                        <img src="<?php echo $image; ?>">
                        <h3><?php echo $name; ?></h3>
                    </a>
                    <i><p><?php echo $price . " $";   ?></p></i>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="pagination">
        <?php
        // Display pagination links
        for ($i = 1; $i <= $totalPages; $i++) {
            $activeClass = ($i == $page) ? 'active' : '';
            echo '<a href="?page=' . $i . '" class="' . $activeClass . '">' . $i . '</a>';
        }
        ?>
    </div>
</div>


