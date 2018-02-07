<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Eredivisie</title>
  </head>
  <body>
    <h1>De stand op 07-02-2018 om 12:00 uur</h1>
    <?php
        $positie = array("PSV" => "1" , "Ajax" => "2" , "AZ" => "3" , "PEC Zwolle" => "4" , "Feyenoord" => "5" , "Vitesse" => "6" , "FC Utrecht" => "7" , "Heerenveen" => "8" ,  "VVV-Venlo" => "9" , "ADO Den Haag" => "10" , "Excelsior" => "11" , "Heracles" => "12" , "FC Groningen" => "13" , "Willem II" => "14" , "FC Twente" => "15" , "NAC Breda" => "16" , "Roda JC" => "17" , "Sparta Rotterdam" => "18");
        $naam = array("PSV" => "PSV" , "Ajax" => "Ajax" , "AZ" => "AZ" , "PEC Zwolle" => "PEC Zwolle" , "Feyenoord" => "Feyenoord" , "Vitesse" => "Vitesse" , "FC Utrecht" => "FC Utrecht" , "Heerenveen" => "Heerenveen" ,  "VVV-Venlo" => "VVV-Venlo" , "ADO Den Haag" => "ADO Den Haag" , "Excelsior" => "Excelsior" , "Heracles" => "Heracles" , "FC Groningen" => "FC Groningen" , "Willem II" => "Willem II" , "FC Twente" => "FC Twente" , "NAC Breda" => "NAC Breda" , "Roda JC" => "Roda JC" , "Sparta Rotterdam" => "Sparta Rotterdam");
        $stad = array("PSV" => "Eindhoven" , "Ajax" => "Amsterdam" , "AZ" => "Alkmaar" , "PEC Zwolle" => "Zwolle" , "Feyenoord" => "Rotterdam" , "Vitesse" => "Arnhem" , "FC Utrecht" => "Utrecht" , "Heerenveen" => "Heerenveen" ,  "VVV-Venlo" => "Venlo" , "ADO Den Haag" => "Den Haag" , "Excelsior" => "Rotterdam" , "Heracles" => "Almelo" , "FC Groningen" => "Groningen" , "Willem II" => "Tilburg" , "FC Twente" => "Enschede" , "NAC Breda" => "Breda" , "Roda JC" => "Kerkrade" , "Sparta Rotterdam" => "Rotterdam");
        $gespeelde = array("PSV" => "21" , "Ajax" => "21" , "AZ" => "21" , "PEC Zwolle" => "22" , "Feyenoord" => "21" , "Vitesse" => "21" , "FC Utrecht" => "21" , "Heerenveen" => "22" ,  "VVV-Venlo" => "21" , "ADO Den Haag" => "21" , "Excelsior" => "21" , "Heracles" => "21" , "FC Groningen" => "21" , "Willem II" => "21" , "FC Twente" => "21" , "NAC Breda" => "21" , "Roda JC" => "21" , "Sparta Rotterdam" => "21");
        $gewonnen = array("PSV" => "18" , "Ajax" => "15" , "AZ" => "13" , "PEC Zwolle" => "11" , "Feyenoord" => "10" , "Vitesse" => "9" , "FC Utrecht" => "8" , "Heerenveen" => "8" ,  "VVV-Venlo" => "7" , "ADO Den Haag" => "8" , "Excelsior" => "7" , "Heracles" => "6" , "FC Groningen" => "5" , "Willem II" => "4" , "FC Twente" => "4" , "NAC Breda" => "4" , "Roda JC" => "4" , "Sparta Rotterdam" => "3");
        $gelijk = array("PSV" => "1" , "Ajax" => "3" , "AZ" => "4" , "PEC Zwolle" => "6" , "Feyenoord" => "6" , "Vitesse" => "7" , "FC Utrecht" => "8" , "Heerenveen" => "6" ,  "VVV-Venlo" => "8" , "ADO Den Haag" => "4" , "Excelsior" => "4" , "Heracles" => "6" , "FC Groningen" => "7" , "Willem II" => "5" , "FC Twente" => "4" , "NAC Breda" => "4" , "Roda JC" => "4" , "Sparta Rotterdam" => "5");
        $verloren = array("PSV" => "2" , "Ajax" => "3" , "AZ" => "4" , "PEC Zwolle" => "5" , "Feyenoord" => "5" , "Vitesse" => "5" , "FC Utrecht" => "5" , "Heerenveen" => "8" ,  "VVV-Venlo" => "6" , "ADO Den Haag" => "9" , "Excelsior" => "10" , "Heracles" => "9" , "FC Groningen" => "9" , "Willem II" => "12" , "FC Twente" => "13" , "NAC Breda" => "13" , "Roda JC" => "13" , "Sparta Rotterdam" => "13");

        $FCTwente = ($naam . "FC Twente");
          echo "Positie: $positie[$FCTwente]"."<br>";
          echo "Naam: $naam[$FCTwente]"."<br>";
          echo "Stad: $stad[$FCTwente]"."<br>";
          echo "Gespeelde: $gespeelde[$FCTwente]"."<br>";
          echo "Gewonnen: $gewonnen[$FCTwente]"."<br>";
          echo "Gelijk: $gelijk[$FCTwente]"."<br>";
          echo "Verloren: $verloren[$FCTwente]"."<br>";

       ?>
  </body>
</html>
