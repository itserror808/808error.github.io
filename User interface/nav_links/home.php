<!DOCTYPE html>
<html lang="en" >
<?php include '../php/head.php';?>

<body>

    <?php include '../php/navbar.php' ;?>
    <?php include '../php/hero.php'; ?>
    <?php include '../php/importantdrumpack.php'; ?> 
    <?php include '../php/music_categories.php'; ?>
    <?php  // include '../php/latest_release.php'; ?>
    <?php include '../php/feat_artist.php'; ?>
    
    <?php include '../php/footer.php' ; ?>
    

    
    


</body>
<script>
    <?php if (isset($_GET['error']) && $_GET['error'] === 'true') { ?>
        alert('Error creating account');
    <?php } ?>
</script>

</html>