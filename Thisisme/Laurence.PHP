<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laurence van der Wel</title>
  </head>
  <body>
    <?php

      $voornaam = "Laurence";
      $achternaam = "Van der Wel";
      $adres = "Ravenhorsthoek";
      $huisnummer = "4";
      $plaats = "Enschede";
      $leeftijd = "16";

    echo "
        <img src='img\ava.png' width='100' height='100'></img>
        <h1>Naam: $voornaam $achternaam</h1>
        <h2>adres: $adres $huisnummer $plaats</h2>
        <h3>leeftijd: $leeftijd</h3>"
    ?>
  </body>
</html>
