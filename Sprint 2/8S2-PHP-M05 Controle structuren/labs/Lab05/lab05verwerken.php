<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Verwerking</title>
  </head>
  <body>
    <?php
        if (isset($_POST["submit"])) {
          if (empty($_POST["voornaam"])) {
            echo "Naam niet ingevuld";
          }
          else {
              $achternaam = $_POST["achternaam"];
              $voornaam = $_POST["voornaam"];
              $adres = $_POST["adres"];
              $postcode = $_POST["postcode"];
              $plaats = $_POST["plaats"];
              $email = $_POST["email"];
              $opleiding = $_POST["vak"];
              if ($opleiding == "I") {
                echo "
                  Achternaam:  $achternaam
                  <br>Voornaam:  $voornaam
                  <br>Adres:  $adres
                  <br>Postcode:  $postcode
                  <br>Plaats:  $plaats
                  <br>E-mailadres:  $email
                  <br>ICT-opleidingen zijn vol. Kies een andere opleiding. ";
              }
              elseif ($opleiding == "E") {
                echo "
                  Achternaam:  $achternaam
                  <br>Voornaam:  $voornaam
                  <br>Adres:  $adres
                  <br>Postcode:  $postcode
                  <br>Plaats:  $plaats
                  <br>E-mailadres:  $email
                  <br>U wordt ingeschreven voor de volgende opleiding. Engels ";
              }
              elseif ($opleiding == "T") {
                echo "
                  Achternaam:  $achternaam
                  <br>Voornaam:  $voornaam
                  <br>Adres:  $adres
                  <br>Postcode:  $postcode
                  <br>Plaats:  $plaats
                  <br>E-mailadres:  $email
                  <br>U wordt ingeschreven voor de volgende opleiding. Techniek";
              }
              elseif ($opleiding == "N") {
                echo "
                Achternaam:  $achternaam
                <br>Voornaam:  $voornaam
                <br>Adres:  $adres
                <br>Postcode:  $postcode
                <br>Plaats:  $plaats
                <br>E-mailadres:  $email
                <br>U wordt ingeschreven voor de volgende opleiding. Nederlands";
              }
              else{
                echo " Geen opleiding gekozen ";
              }
            }
          }



     ?>

  </body>
</html>
