<style>
  .hero {
    background-image: url("../photos/cover.jpg");
    background-size: cover;
    background-position: center;
    height: 600px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    
  }

  .hero-content {
    text-align: center;
  }

  .hero-content h1 {
    font-size: 40px;
    margin-bottom: 20px;
  }

  .hero-content p {
    font-size: 24px;
    margin-bottom: 30px;
  }

  .cta-button {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 40px auto;
    width:10rem;
    height:3rem;
    background-color:#ff4444 ;
    color : #fff;
    text-decoration: none;
    border-radius: 5px;
    transition : 0.3s cubic-bezier(0.4, 0, 0.2, 1) ;
  }

  .cta-button:hover {
    color: #fff;
    background-color :  #a9191a; ;
    transition:0.3s cubic-bezier(0.4, 0, 0.2, 1) ;
  }



</style>


<section class="hero">
  <div class="hero-content">
    <h1>Welcome to Music Vibes</h1>
    <p>Discover the best music from talented artists around the world.</p>
    <a href="../php/explore.php" class="cta-button">Explore Now</a>
  </div>
</section>

