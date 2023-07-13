<style>
  /* Modern CSS styles */

  .player {
    width: 100%;
    max-width: 600px;
    margin: 10rem auto 0;
    padding: 1.5rem;
    background-color: #181818;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
  }

  .audio-player {
    display: flex;
    align-items: center;
    gap: 1rem;
    width: 100%;
    max-width: 400px;
  }

  .audio-player p {
    flex-grow: 1;
    font-size: 14px;
    color: #ff4444;
    margin: 0;
  }

  .audio-player audio {
    flex-grow: 1;
    width: 100%;
    max-width: 250px;
    height: 30px;
    background-color: #181818;
    border: none;
  }

  .buttons {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
  }

  .buttons .button {
    color: #ff4444;
    background-color: transparent;
    border: none;
    cursor: pointer;
    width: 2rem;
    height: 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .buttons .button i {
    font-size: 1.2rem;
  }

  .buttons .button:hover {
    color: #ff6666;
  }
</style>

<br>

<div class="player">
  <?php
  $folderPath = '../beats/';

  // Get all .mp3 files from the folder
  $mp3Files = glob($folderPath . '*.mp3');

  // Loop through the files
  foreach ($mp3Files as $index => $file) {
    // Get the file name
    $fileName = basename($file);

    // Generate a unique ID for the audio element
    $audioID = 'audio_' . $index;

    // Generate the audio player HTML
    echo '<div class="audio-player">';
    echo '<button class="button play" title="Play"><i class="fa fa-play"></i></button>';
    echo '<audio id="' . $audioID . '" controls>';
    echo '<source src="' . $file . '" type="audio/mpeg">';
    echo '</audio>';
    echo '<p>' . $fileName . '</p>';
    echo '</div>';
  }
  ?>

  <!-- Add your playlist controls/buttons here -->
  <div class="buttons">
    <button class="button shuffle" title="Shuffle">
      <i class="fa fa-random"></i>
    </button>
    <button class="button stop" title="Stop">
      <i class="fa fa-stop"></i>
    </button>
  </div>
</div>
