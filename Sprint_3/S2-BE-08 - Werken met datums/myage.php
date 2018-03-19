<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="myage.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $verjaardag = date_create("2001-03-14");
    echo "<br>De dag dat ik ben geboren: ".date_format($verjaardag, "Y-m-d");
    echo "<br>";
    $vandaag = date_create("now");
    echo "<br>De dag van vandaag: ".date_format($vandaag, "Y-m-d");
    echo "<br>";
    $interval = date_diff($vandaag, $verjaardag);
    echo "<br>Ik ben ".$interval->format("%M%m maanden oud");
    echo "<br>Ik ben ".$interval->format("%a dagen oud");
    echo "<br>Ik ben ".$interval->format("%m weken oud");
    echo "<br>Ik ben ".$interval->format("%H%h uren oud");
    echo "<br>Ik ben ".$interval->format("%F minuten oud");
    echo "<br>Ik ben ".$interval->format("%f seconden oud");
    ?>
  </body>
</html>
