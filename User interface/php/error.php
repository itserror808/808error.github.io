
<?php include 'head.php'; ?>
  <title>Error</title>
  <style>


    .error-container {
      max-width: 500px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 24px;
      color: #333;
      margin-bottom:1rem;
    }

    p {
      margin-top: 10px;
      font-size: 16px;
      color: #666;
    }

    .home-link {
      display: inline-block;
      margin-top: 20px;
      color: #007bff;
      text-decoration: none;
    }



    .size{
        font-size:3rem;
    }
  </style>

  <div class="error-container">
    <h1><i class="fa-sharp fa-solid fa-bug size"></i>  Error</h1>
    <p>Sorry, an error occurred.</p>
    <button>
    <a href="../nav_links/home.php" >Go to Home</a>
    </button>
  </div>
