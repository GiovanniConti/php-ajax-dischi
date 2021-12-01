<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BoolDisc</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>
  <header>
    <img class="logoHeader" src="assets/spotify_logo.png" alt="Spotify_logo">
  </header>
  <main>
    <div class="container-lg mt-4 pb-4" id="cardContainerVue">
      <div class="row row-cols-5 g-4">
        <div class="col d-flex"
          v-for="(album, i) in albumCollectionVue" :key="i"
        >
        <div class="card p-4">
          <img class="card-img-top" :src="album.poster" :alt="album.title">
          <div class="card-body text-center p-0">
            <h5 class="card_discTitle card-title fs-3 pt-5 pb-3">{{album.title}}</h5>
            <h6 class="card_singer fs-4 mb-0">{{album.author}}</h6>
            <h6 class="card_year fs-5">{{album.year}}</h6>
          </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="main.js"></script>
</body>
</html>