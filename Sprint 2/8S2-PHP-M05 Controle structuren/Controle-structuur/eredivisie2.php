<!DOCTYPE html>
<html>
  <header>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta charset="utf-8">
    <title>Eredivisie</title>
    <center><h1>De stand op 19-02-2018 om 12:00 uur</h1></center>
  </header>
  <body>
    <style>
      #margin{
        margin-bottom: 10px;
      }
    </style>
    <?php
        $positie = array("PSV" => "1" , "Ajax" => "2" , "AZ" => "3" , "Feyenoord" => "4" , "FC Utrecht" => "5" , "PEC Zwolle" => "6" , "Vitesse" => "7" , "ADO Den Haag" => "8" ,  "Heerenveen" => "9" , "VVV-Venlo" => "10" , "Excelsior" => "11" , "Heracles" => "12" , "FC Groningen" => "13" , "Willem II" => "14" , "NAC Breda" => "15" , "FC Twente" => "16" , "Roda JC" => "17" , "Sparta Rotterdam" => "18");
        $naam = array("PSV" => "PSV" , "Ajax" => "Ajax" , "AZ" => "AZ" , "PEC Zwolle" => "PEC Zwolle" , "Feyenoord" => "Feyenoord" , "Vitesse" => "Vitesse" , "FC Utrecht" => "FC Utrecht" , "Heerenveen" => "Heerenveen" ,  "VVV-Venlo" => "VVV-Venlo" , "ADO Den Haag" => "ADO Den Haag" , "Excelsior" => "Excelsior" , "Heracles" => "Heracles" , "FC Groningen" => "FC Groningen" , "Willem II" => "Willem II" , "FC Twente" => "FC Twente" , "NAC Breda" => "NAC Breda" , "Roda JC" => "Roda JC" , "Sparta Rotterdam" => "Sparta Rotterdam");
        $stad = array("PSV" => "Eindhoven" , "Ajax" => "Amsterdam" , "AZ" => "Alkmaar" , "PEC Zwolle" => "Zwolle" , "Feyenoord" => "Rotterdam" , "Vitesse" => "Arnhem" , "FC Utrecht" => "Utrecht" , "Heerenveen" => "Heerenveen" ,  "VVV-Venlo" => "Venlo" , "ADO Den Haag" => "Den Haag" , "Excelsior" => "Rotterdam" , "Heracles" => "Almelo" , "FC Groningen" => "Groningen" , "Willem II" => "Tilburg" , "FC Twente" => "Enschede" , "NAC Breda" => "Breda" , "Roda JC" => "Kerkrade" , "Sparta Rotterdam" => "Rotterdam");
        $gespeelde = array("PSV" => "24" , "Ajax" => "24" , "AZ" => "24" , "PEC Zwolle" => "24" , "Feyenoord" => "24" , "Vitesse" => "24" , "FC Utrecht" => "24" , "Heerenveen" => "24" ,  "VVV-Venlo" => "24" , "ADO Den Haag" => "24" , "Excelsior" => "24" , "Heracles" => "24" , "FC Groningen" => "24" , "Willem II" => "24" , "FC Twente" => "24" , "NAC Breda" => "24" , "Roda JC" => "24" , "Sparta Rotterdam" => "24");
        $gewonnen = array("PSV" => "20" , "Ajax" => "18" , "AZ" => "15" , "PEC Zwolle" => "11" , "Feyenoord" => "12" , "Vitesse" => "10" , "FC Utrecht" => "11" , "Heerenveen" => "8" ,  "VVV-Venlo" => "7" , "ADO Den Haag" => "10" , "Excelsior" => "8" , "Heracles" => "7" , "FC Groningen" => "5" , "Willem II" => "5" , "FC Twente" => "4" , "NAC Breda" => "5" , "Roda JC" => "4" , "Sparta Rotterdam" => "3");
        $gelijk = array("PSV" => "2" , "Ajax" => "3" , "AZ" => "5" , "PEC Zwolle" => "6" , "Feyenoord" => "6" , "Vitesse" => "7" , "FC Utrecht" => "8" , "Heerenveen" => "8" ,  "VVV-Venlo" => "10" , "ADO Den Haag" => "5" , "Excelsior" => "5" , "Heracles" => "6" , "FC Groningen" => "9" , "Willem II" => "5" , "FC Twente" => "5" , "NAC Breda" => "5" , "Roda JC" => "5" , "Sparta Rotterdam" => "6");
        $verloren = array("PSV" => "2" , "Ajax" => "3" , "AZ" => "4" , "PEC Zwolle" => "7" , "Feyenoord" => "6" , "Vitesse" => "7" , "FC Utrecht" => "5" , "Heerenveen" => "8" ,  "VVV-Venlo" => "7" , "ADO Den Haag" => "9" , "Excelsior" => "11" , "Heracles" => "11" , "FC Groningen" => "10" , "Willem II" => "14" , "FC Twente" => "15" , "NAC Breda" => "14" , "Roda JC" => "15" , "Sparta Rotterdam" => "15");

          foreach ($naam as $id => $value) {
            echo"
            <center>
            <table>
              <tr>
                <td>Positie: $positie[$id]</td>
              </tr>
              <tr>
                <td>Naam: $value</td>
              </tr>
              <tr>
                <td>Stad: $stad[$id]</td>
              </tr>
              <tr>
                <td>Gespeelde: $gespeelde[$id]</td>
              </tr>
              <tr>
                <td>Gewonnen: $gewonnen[$id]</td>
              </tr>
              <tr>
                <td>Gelijk: $gelijk[$id]</td>
              </tr>
              <tr>
                <td>Verloren: $verloren[$id]</td>
              </tr>
            </table>
            
            </center>";
          }
       ?>
  </body>
</html>
