<?php

include __DIR__ . '/Models/Movie.php';

$movies = [
  new Movie()
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
      <li><?php echo "$movie->title" ?></li>
    <?php } ?>
  </ul>
</body>

</html>