<style>
.important-kit {
  background-color: transparent;
  color:#fff;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.important-kit h2 {
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
}

.kit-info {
  display: flex;
  align-items: center;
  justify-content: center;
}

.kit-info img {
  float: left;
  width: 25rem;
  object-fit: cover;
  margin: 10rem;
}


.kit-details {
  border: none;
  padding: 10px;
  margin: 0 auto; /* Center the element horizontally */
  flex-grow: 1;
}



.kit-details h3 {
  display:flex;
  justify-content:center;
  align-items: center;
  font-size: 40px;
  margin-bottom: 10px;
}

.kit-details p {
  display:flex;
  justify-content:center;
  align-items: center;
  font-size: 32px;
  margin-bottom: 5px;
}

.button {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 40px auto;
  width:auto;
}

.button a {
  display: inline-block;
  padding: 10px 20px;
  width:auto;
  background-color:#ff4444 ;
  color : #fff;
  text-decoration: none;
  border-radius: 5px;
  transition : 0.3s cubic-bezier(0.4, 0, 0.2, 1) ;
}

.button a:hover {
  color: #fff;
  background-color :  #a9191a; ;
  transition:0.3s cubic-bezier(0.4, 0, 0.2, 1) ;
}


</style>

<?php 
require_once '../dbconfig/config.php';

// Query to fetch the most important kit
$query = "SELECT * FROM kits ORDER BY importance ASC LIMIT 1";
$stmt = $pdo->query($query);
$kit = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<?php if ($kit) { ?>
    <div class="important-kit">
        <h2>Most Important Kit</h2>
        <div class="kit-info">
            <img src="<?php echo "../photos/kits_photos/", $kit['image']; ?>" alt="Kit Image">
            <div class="kit-details">
                <h3><?php echo $kit['name']; ?></h3>
                <p style="font-size:15px;"><?php echo $kit['description']; ?></p>
                <p style="font-size:20px;"><?php echo $kit['price'] ," ",  $kit['currency_name'] ; ?></p>
                <div class="button">
                    <a href="<?php echo "../pack_links/" , $kit['link']; ?>">Get it now</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

