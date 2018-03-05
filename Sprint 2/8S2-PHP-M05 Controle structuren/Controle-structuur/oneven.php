<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>oneven Laurence</title>
  </head>
  <body>
    <?php
      $oneven = "";

      for ($i = 1; $i <= 100; $i++)
      {
        if($i % 2 == 0){ continue; }
        $oneven .= $i.';';
      }

      echo $oneven;

    ?>
  </body>
</html>
