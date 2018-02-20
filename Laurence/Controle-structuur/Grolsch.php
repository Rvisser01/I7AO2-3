<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Grolsch</title>
  </head>
  <body>
    <?php
      $leeftijd = array("10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30");
      $randleeftijd = array_rand($leeftijd,1);
      if ($randleeftijd > 17) {
        header("http://www.grolsch.nl");

      } elseif ($randleeftijd < 18) {
      header("https://www.alcoholinfo.nl/publiek");
      exit();
    }


  ?>


    ?>
  </body>
</html>
