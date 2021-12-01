<?php
require "./data/dischi.php";
$logoHeader = 'assets/spotify_logo.png';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BoolDisc</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
</head>
<body> 
  <?php include 'components/header.php' ?>

  <header>
    <img class="logoHeader" src="assets/spotify_logo.png" alt="Spotify_logo">
  </header>
  <main>
    <div class="cardContainer container-lg my-4">
      <div class="row row-cols-5 g-4">
        <!-- ciclo foreach to select a singol album inside the collection -->
        <?php
        foreach($disc_Collection as $singolDisc){
        ?>
          <div class="col d-flex">
            <?php include 'components/card.php' ?>
          </div>
        <?php
          }
        ?>
      </div>
    </div>
  </main>

</body>
</html>