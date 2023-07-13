
  <title>Contact Us</title>
  <style>
  /* Global styles */
  body {
    margin: 0;
    padding: 0;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
  }

  .container {
    flex: 1;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }

  h1 {
    text-align: center;
    color: #fff;
    margin: 4rem auto 2rem auto;
  }

  form {
    background-color: #555;
    padding: 2rem;
    width: 40rem;
    border-radius: 5px;
  }

  label {
    display: block;
    margin-bottom: 10px;
    color: #fff;
    font-weight: bold;
  }

  input[type="text"],
  input[type="email"],
  textarea {
    font-family: poppins;
    width: 96%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-bottom: 15px;
    font-size: 16px;
  }

  textarea {
    resize: vertical;
    height: 120px;
    max-height: 9rem;
    min-height: 5rem;
  }

  textarea::placeholder {
    font-family: poppins;
  }

  button[type="submit"] {
    display: flex;
    margin: 0 auto;
    background-color: #ff4444;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 16px;
    font-family: poppins, sans-serif;
    font-weight: 700;
  }

  button[type="submit"]:hover {
    background-color: #a9191a;
    transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  }

  button i {
    margin-top: 4px;
    margin-right: 0.5rem;
  }

  /* Remove border on focus */
  input[type="text"]:focus,
  input[type="email"]:focus,
  textarea:focus {
    outline: none;
    border-color: transparent;
  }
</style>


  
  </style>


  <div class="container">
    <h1>Contact Us</h1>
    <form class="contact-form" method="POST" action="../php/process_contact.php">
      <label for="name">Name :</label>
      <input type="text" name="name" placeholder="Enter your name">

      <label for="email">Email :</label>
      <input type="email" name="email" placeholder="Enter your email">

      <label for="message">Message :</label>
      <textarea name="message" placeholder="Enter your message"></textarea>

      <button type="submit" name="submit"><i class="fa-solid fa-paper-plane"></i>Send</button>
    </form>
  </div>
