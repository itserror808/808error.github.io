<style>
.music-categories {
  background-color: transparent;
  padding: 20px;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 20px;
  color: #fff;
}

.category {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 20px;
  transition: background-color 0.3s ease;
}

.category:hover {
  background-color: rgba(255, 255, 255, 0.05);
}

.category img {
  width: 200;
  height: 200px;
  object-fit: cover;
  margin-bottom: 10px;
}

.category h3{
  text-align: center;
  font-size: 18px;
  margin-bottom: 5px;
}

h2{
    display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  text-align: center;
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



</style>

<section class="music-categories">
  <br>
  <h2>Music Categories</h2>
  <br>
  <div class="category">
    <a href="../categories/drill.php" target="_self" rel="noopener noreferrer">
        <img src="../photos/drill.jpg" alt="drill">
        <h3>Drill</h3>
    </a>
  </div>
  <div class="category">
    <a href="../categories/trap.php" target="_self" rel="noopener noreferrer">
        <img src="../photos/trap.jpg" alt="trap">
        <h3>Trap</h3>
    </a>
  </div>
  <div class="category">
    <a href="../categories/house.php" target="_self" rel="noopener noreferrer">
        <img src="../photos/house.jpg" alt="house">
        <h3>House</h3>
    </a>
  </div>
</section>
