<!DOCTYPE html>
<html lang="en" >
<?php include '../php/head.php';?>
<style>
    #navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #333333;
        z-index: 999;
    }
    #footer {
        background-color: #555;
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        
        z-index: 999;
    }

</style>
<body>
 
    <div id="navbar">
        <?php include '../php/navbar.php' ;?> 
    </div>
    <?php include '../form/form.php' ;?>
    <div id="footer">
        <?php include '../php/footer.php' ;?> 
    </div>    


</body>
</html>