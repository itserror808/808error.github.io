<!-- navbar.php -->
<?php
  session_start();
  include 'head.php';
?>



<style>
  .icon {
    background-color: transparent;
    border: none;
    padding: 0;
    cursor: pointer;
  }

  .icon i {
    color:#555;
    display: inline-block;
    transition: transform 0.2s;
  }

  .icon:hover i {
    color:#ff4444;
    text-shadow: 0 0 5px rgba(255, 68, 68, 0.9);
    transform: scale(1.2);
  }

  .icon:active i {
    transform: scale(0.9);
  }

  .icon:focus {
    outline: none;
  }
</style>

<style>
  .navbar {
    position: fixed;
    width: 99%;
    height: 4%;
    background-color: #333;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    z-index: 9999;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  }
  
  .navbar-toggle {
    cursor: pointer;
    padding: 0 15px;
  }
  .navbar-toggle:hover{
    color:#ff4444;
    text-shadow: 0 0 5px rgba(255, 68, 68, 0.9);
    transform: scale(1.2);
    transition: 0.3s ease-in-out;
  }
  .navbar-toggle:active i {
    transform: scale(0.9);
    
  }

  .navbar-toggle:focus {
    outline: none;
  }
  
  .search-field {
    flex-grow: 1;
    overflow: hidden;
    transition: max-width 0.3s ease-in-out;
    max-width: 0;
    z-index: 12;
  }
  
  .search-field.active {
    max-width: 200px;
    padding: 0 10px;
  }
  
  #searchInput {
    width: 100%;
    height: 100%;
    border: none;
    background-color: transparent;
    color: #fff;}
  
    #searchInput:focus {
    outline: none;
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
    }
    
    .navbar-links li a:hover {
      color:#ff4444;
      text-shadow: 0 0 5px rgba(255, 68, 68, 0.8);
      transition: 0.3s;
    }
    
</style>

<style>
  /* style.css */

/* CSS code for the dropdown */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropbtn {
        background-color: #333;
        color: #fff;
        padding: 10px;
        font-size: 14px;
        border: none;
        cursor: pointer;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        margin-top: 5rem;
        color: #333;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }


    #results {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        z-index: 8;
        padding: 10px;
        box-sizing: border-box;
    }

    #results ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #results li {
        padding: 5px 0;
    }

    #results li a {
        color: #fff;
        text-decoration: none;
    }

    #results li a:hover {
        text-decoration: none;
        color:#ff4444;
        transition:0.2s ease-in-out;
    }

</style>

<section>
    <nav class="navbar">
        <div class="navbar-toggle" id="searchToggle">
            <i class="fas fa-search"></i>
        </div>
        <div class="search-field" id="searchField">
            <input type="text" id="searchInput" oninput="searchKits(this.value)" placeholder="Search kits...">
            <div id="results"></div>
        </div>
        <ul class="navbar-links">
            <li><a href="../nav_links/home.php"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="../nav_links/kits.php"><i class="fa-solid fa-drum"></i> Kits</a></li>
            <li><a href="../nav_links/beats.php"><i class="fa-solid fa-headphones"></i> Beats</a></li>
            <?php if (isset($_SESSION['user_id'])) : ?>
                <li><a href="../form/logout.php"><i class="fa-solid fa-sign-out"></i> Logout</a></li>
            <?php else : ?>
                <li><a href="../nav_links/account.php"><i class="fa-solid fa-user"></i> Account</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</section>

<script>
  $(document).ready(function() {
    // Toggle search field
    $('#searchToggle').click(function() {
        $('#searchField').toggleClass('active');
        $('#searchInput').focus();
    });
  });

  // Rest of your JavaScript code
</script>

<script src="../javascript/display_product_on_searchbar.js"></script>

<script>
    // JavaScript code for displaying search results

    // Function to fetch and display search results
    function searchKits(searchValue) {
        if (searchValue.trim() !== '') {
            $.ajax({
                url: '../dbconfig/search.php',
                type: 'POST',
                data: { search: searchValue },
                success: function(response) {
                    $('#results').html(response);
                    $('#results').show(); // Show the results
                }
            });
        } else {
            $('#results').html(''); // Clear the results
            $('#results').hide(); // Hide the results
        }
    }

    // Function to hide the search results
    function hideResults() {
        $('#results').hide(); // Hide the results
    }

    // Event listener for search field focus out
    $('#searchInput').on('focusout', function() {
        // Delay hiding the results to allow clicking on the results
        setTimeout(hideResults, 200);
    });
</script>
