
<style>
footer {
      background-color: #222;
      color: #fff;
      text-align: center;
      padding: 20px;
      margin-top: auto;
}

.footer-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.footer-links li {
  display: inline;
  margin-right: 10px;
}

.footer-links a {
  color: #fff;
  text-decoration: none;
}

.footer-links a:hover {
  text-decoration: underline;
}

</style>

<footer>
  <div class="footer-content">
    <p style="opacity: 0.7;">&copy; 2023 Error808. All rights reserved.</p>
    <ul class="footer-links">
      <li><a href="../nav_links/home.php">Home</a></li>
      <li><a href="../footer_links/about.php">About</a></li>
      <?php
      // Check if the user is connected
      if (isset($_SESSION["user_id"])) {
        // If the user is connected, display the contact link
        echo '<li><a href="../footer_links/contact.php">Contact</a></li>';
      } else {
        // If the user is not connected, redirect to account.php
        echo '<li><a href="../nav_links/account.php">Account</a></li>';
      }
      ?>
    </ul>
  </div>
</footer>


