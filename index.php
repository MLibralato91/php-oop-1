<?php

include __DIR__ . '/Models/Movie.php';

$movies = [
  [
    new Movie(1, 'Il Padrino', 'Gangster', 'en', '1972', 10,  'https://pad.mymovies.it/filmclub/2002/08/056/locandina.jpg')

  ],
  [
    new Movie(2, 'Via col vento', 'Romantico', 'it', '1939', 8, 'https://m.media-amazon.com/images/I/51FvKgUQ1lL.jpg')

  ]
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <ul>
    <?php foreach ($movies as $movie) { ?>
      <li><?php echo $movie->title; ?></li>
    <?php } ?>
  </ul>
</body>

</html>