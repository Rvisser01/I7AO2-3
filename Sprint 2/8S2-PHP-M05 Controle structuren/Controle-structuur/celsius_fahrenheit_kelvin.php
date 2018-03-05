<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Graden</title>
  </head>
  <body>
  <?php

$celsius = -50;
$fahrenheit = $celsius^1.8+32;
$kelvin = $celsius+273;

while ($celsius != 51) {
  if ($celsius.$fahrenheit.$kelvin < 0) {
    echo '<i style="color:blue">',"$celsius.$fahrenheit.$kelvin<br>";
  } else {
      echo '<i style="color:green">',"$celsius.$fahrenheit.$kelvin<br>";
    }
      $celsius ++;
      $fahrenheit ++;
      $kelvin ++;
    }
  ?>
  </body>
</html>
