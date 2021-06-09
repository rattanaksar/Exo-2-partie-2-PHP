<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2 : Les conditions</title>
</head>
<body>
    <h1>Exo 2 : Les conditions</h1>
    <?php
      $isEasy = false;

      if ($isEasy== true)
      {
          echo "C'est facile !";
      }
      elseif ($isEasy == false)
      {
          echo "C'est difficile !";
      }
      echo "<br>";
      $isEasy = true;

      if ($isEasy)
      {
          echo "C'est facile !";
      }
      else
      {
          echo "C'est difficile !";
      }
    ?>
</body>
</html>