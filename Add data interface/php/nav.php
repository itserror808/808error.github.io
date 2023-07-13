<style>
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #333;
        color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        z-index: 9999;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.35);
    }
    
    .navbar-links {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .navbar-links li {
        padding: 0 15px;
    }
    
    .navbar-links li a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
    }
    
    .navbar-links li a:hover {
        text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
        transition: 0.3s;
    }
</style>

<div class="navbar">
    <ul class="navbar-links">
        <li><a href="add_free_kit.php">Add New Free Kit</a></li>
        <li><a href="modify_most_important_kit.php">Modify most important kit</a></li>
        <li><a href="read_message.php">Read users messages</a></li>
    </ul>
</div>
