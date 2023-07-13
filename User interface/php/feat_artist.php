<style>
.featured-artists {
  background-color: transparent;
  color: #fff;
  padding: 20px;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 20px;
}

.featured-artists h2 {
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
}

.artist {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 20px;
  transition: background-color 0.5s ease;
}

.artist:hover {
  background-color: rgba(255, 255, 255, 0.05);
}

.artist img {
  width: 200px;
  height: 200px;
  object-fit: cover;
  margin-bottom: 10px;
}

.artist h3 {
  text-align: center;
  font-size: 18px;
  margin-bottom: 2rem;
}

.featured-artists .artist:nth-child(1),
.featured-artists .artist:nth-child(3) {
  justify-self: start;
}

.featured-artists .artist:nth-child(2) {
  justify-self: end;
}

.featured-artists .artist:nth-child(2) .artist-info {
  text-align: right;
}


a {
  color: #fff; /* Link color */
  text-decoration: none; /* Remove underline */
  transition: color 0.3s ease; /* Smooth color transition on hover */
}

a:hover {
  color: #ff4d4d; /* Change color on hover */
}

a:focus {
  outline: none; /* Remove outline when link is focused */
}

.review{
    text-align: center;
    font-weight: 300;
    opacity: 0.6;
}


</style>

<div class="featured-artists">
    <br>
  <h2>Featured Artists</h2>
  <br>

  <div class="artist">
    <a href="#" target="_self" rel="noopener noreferrer">
      <img src="../photos/rapper.png" alt="Artist 1">
      <h3>Artist 1</h3>
    </a>
    <p class="review"><i>"The music kits provided on this website are top-notch! They are incredibly versatile and have added so much depth to my tracks. Highly recommended!"</i></p>
  </div>

  <div class="artist">
    <a href="#" target="_self" rel="noopener noreferrer">
      <img src="../photos/rapper.png" alt="Artist 2">
      <h3>Artist 2</h3>
    </a>
    <p class="review"><i>"I've been using the music kits from this website for a while now, and I must say they have transformed my music production process. The quality and variety are unmatched!"</i></p>
  </div>

  <div class="artist">
    <a href="#" target="_self" rel="noopener noreferrer">
      <img src="../photos/rapper.png" alt="Artist 3">
      <h3>Artist 3</h3>
    </a>
    <p class="review"><i>"As an artist, finding high-quality music resources is crucial. The music kits offered on this website are exceptional. They have helped me create unique and captivating soundscapes."</i></p>
  </div>
</div>

