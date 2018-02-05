<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      <?php
      $breedte =10;
      $lengte =11;
      $hoogte =5;
      $oppervlakte =$lengte*$breedte;
      $volume =$lengte*$breedte*$hoogte;

      echo "Containeroppervlakte is: $oppervlakte". "<br>" ."Containervolume is: $volume";  ?>
    </p>
  </body>
</html>
