<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Onze groep</title>
  </head>
  <body>
    <?php
      $voornaam = array( '0300013' => "Laurence" , '0266931' => "Peter" , '0267730' => "Pim" , '0279410' => "Arben" , '0297652' => "Robbin" , '0300838' => "Damian");
      $achternaam = array( '0300013' => "Van der Wel" , '0266931' => "Kuipers" , '0267730' => "Hoomans" , '0279410' => "Hajrizaj" , '0297652' => "Visser" , '0300838' => "Trojak");
      $woonplaats = array( '0300013' => "Enschede" , '0266931' => "Enschede" , '0267730' => "Enschede" , '0279410' => "Enschede" , '0297652' => "Overdinkel" , '0300838' => "Enschede");
      $leeftijd = array( '0300013' => "17" , '0266931' => "20" , '0267730' => "20" , '0279410' => "19" , '0297652' => "17" , '0300838' => "16");

      $random = array_rand($voornaam, 1);
        echo "Studenummer: $random"."<br>";
        echo "Voornaam: $voornaam[$random]"."<br>";
        echo "Achternaam $achternaam[$random]"."<br>";
        echo "Woonplaats $woonplaats[$random]"."<br>";
        echo "Leeftijd: $leeftijd[$random]"."<br> <br>";
    ?>
  </body>
</html>
