
<?php include 'head.php' ; ?>
    <style>
        .container{
            max-width: 400px;
            margin: 14% auto;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .button {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: larger;
            display: block;
            width:90%;
            padding: 12px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }
        .button:hover {
            background-color: #ff4444;
        }
        .icon{
            font-weight: 800;
        }
    </style>

    <div class="container">
        <h1><i class="fa-solid fa-check fa-fade fa-lg"></i>  Success!</h1>
        <p>Your data has been successfully registered.</p>
        <a href="../nav_links/home.php" target="_SELF" class="button"><i class="fa-solid fa-rotate-left"></i>  Return</a>
    </div>
    

