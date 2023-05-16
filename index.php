<?php

include __DIR__ . '/Models/Movie.php';

$movies = [

  new Movie('Il Padrino', 'Gangster', 'en', '1972', 10,  'https://pad.mymovies.it/filmclub/2002/08/056/locandina.jpg'),

  new Movie('Via col vento', 'Romantico', 'it', '1939', 8, 'https://m.media-amazon.com/images/I/51FvKgUQ1lL.jpg')


]

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <?php foreach ($movies as $movie) { ?>
        <div class="col-4">
          <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $movie->title ?></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</body>

</html>