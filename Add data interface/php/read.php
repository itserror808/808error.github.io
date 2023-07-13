<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>

<title>Read Messages</title>
<style>
  /* Styles for the page */

  .container {
    width: 90%; /* Adjust the width as needed */
    max-width: 800px;
    margin: 5rem auto;
    padding: 40px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: 0.3s; /* Add transition */
  }

  h1 {
    font-size: 36px;
    text-align: center;
    margin-top: 0;
    margin-bottom: 30px;
  }

  .grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
  }

  .message-card {
    background-color: #f9f9f9;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    position: relative;
    transition: 0.3s; /* Add transition */
  }

  .sender {
    font-weight: bold;
    margin-bottom: 10px;
  }

  .message {
    margin-bottom: 20px;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 3; /* Show only 3 lines of text */
    -webkit-box-orient: vertical;
  }

  .read-more-button {
    border: none;
    background: none;
    color: blue;
    cursor: pointer;
    font-family: 'Poppins', sans-serif; /* Use Poppins font */
  }

  /* Styles for the popup window */

  .popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 999;
    display: none; /* Initially hidden */
  }
  

  .popup-content {
    background-color: #fff;
    border-radius: 5px;
    padding: 20px;
    max-width: 80%; /* Increase the size of the window */
    height: 10rem;
    overflow-y: auto;
    text-align: left;
    position: relative;
  }

  .close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
    transition: 0.3s; /* Add transition */
  }

  .close-button:hover {
    transform: scale(1.2); /* Add hover effect */
  }
</style>

<body>
  <br>
  <div class="container">
    <h1>Read Messages</h1>

    <div class="grid">
      <?php
      include '../configdb/config.php';

      $sql = "SELECT name, message, created_at FROM contacts";
      $stmt = $pdo->query($sql);

      if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          $name = $row['name'];
          $message = $row['message'];
          $created_at = $row['created_at'];
          ?>
          <div class="message-card">
            <div class="sender"><?php echo $name; ?></div>
            <div class="message"><?php echo substr($message, 0, 100) . '...'; ?></div>
            <span style="font-size:smaller;" class="hidden created-at"><?php echo $created_at; ?></span>
            <button class="read-more-button">Read more</button>
          </div>
      <?php
        }
      } else {
        echo "No messages found.";
      }
      ?>
    </div>
  </div>

  <div class="popup">
    <div class="popup-content">
      <span class="close-button">&times;</span>
      <h3 class="popup-name"></h3>
      <p class="popup-message"></p>
      <p class="popup-created-at"></p>
    </div>
  </div>

  <script>
    const messageCards = document.querySelectorAll('.message-card');
    const popup = document.querySelector('.popup');
    const closeButton = document.querySelector('.close-button');
    const popupName = document.querySelector('.popup-name');
    const popupMessage = document.querySelector('.popup-message');
    const popupCreatedAt = document.querySelector('.popup-created-at');

    messageCards.forEach(card => {
      const readMoreButton = card.querySelector('.read-more-button');

      readMoreButton.addEventListener('click', () => {
        const senderName = card.querySelector('.sender').textContent;
        const fullMessage = card.querySelector('.message').textContent;
        const createdAt = card.querySelector('.created-at').textContent;

        popupName.textContent = senderName;
        popupMessage.textContent = fullMessage;
        popupCreatedAt.textContent = 'Created at: ' + createdAt;

        popup.style.display = 'flex';
      });
    });

    closeButton.addEventListener('click', () => {
      popup.style.display = 'none';
    });
  </script>
</body>

</html>
