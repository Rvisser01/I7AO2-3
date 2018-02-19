<!DOCTYPE html>
<html>
  <header>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="utf-8">
    <title>Eredivisie</title>
    <center><h1>De stand op 19-02-2018 om 12:00 uur</h1></center>
  </header>
  <body>

    <?php
        $positie = array("PSV" => "1" , "Ajax" => "2" , "AZ" => "3" , "Feyenoord" => "4" , "FC Utrecht" => "5" , "PEC Zwolle" => "6" , "Vitesse" => "7" , "ADO Den Haag" => "8" ,  "Heerenveen" => "9" , "VVV-Venlo" => "10" , "Excelsior" => "11" , "Heracles" => "12" , "FC Groningen" => "13" , "Willem II" => "14" , "NAC Breda" => "15" , "FC Twente" => "16" , "Roda JC" => "17" , "Sparta Rotterdam" => "18");
        $naam = array("PSV" => "PSV" , "Ajax" => "Ajax" , "AZ" => "AZ" , "PEC Zwolle" => "PEC Zwolle" , "Feyenoord" => "Feyenoord" , "Vitesse" => "Vitesse" , "FC Utrecht" => "FC Utrecht" , "Heerenveen" => "Heerenveen" ,  "VVV-Venlo" => "VVV-Venlo" , "ADO Den Haag" => "ADO Den Haag" , "Excelsior" => "Excelsior" , "Heracles" => "Heracles" , "FC Groningen" => "FC Groningen" , "Willem II" => "Willem II" , "FC Twente" => "FC Twente" , "NAC Breda" => "NAC Breda" , "Roda JC" => "Roda JC" , "Sparta Rotterdam" => "Sparta Rotterdam");
        $stad = array("PSV" => "Eindhoven" , "Ajax" => "Amsterdam" , "AZ" => "Alkmaar" , "PEC Zwolle" => "Zwolle" , "Feyenoord" => "Rotterdam" , "Vitesse" => "Arnhem" , "FC Utrecht" => "Utrecht" , "Heerenveen" => "Heerenveen" ,  "VVV-Venlo" => "Venlo" , "ADO Den Haag" => "Den Haag" , "Excelsior" => "Rotterdam" , "Heracles" => "Almelo" , "FC Groningen" => "Groningen" , "Willem II" => "Tilburg" , "FC Twente" => "Enschede" , "NAC Breda" => "Breda" , "Roda JC" => "Kerkrade" , "Sparta Rotterdam" => "Rotterdam");
        $gespeelde = array("PSV" => "24" , "Ajax" => "24" , "AZ" => "24" , "PEC Zwolle" => "24" , "Feyenoord" => "24" , "Vitesse" => "24" , "FC Utrecht" => "24" , "Heerenveen" => "24" ,  "VVV-Venlo" => "24" , "ADO Den Haag" => "24" , "Excelsior" => "24" , "Heracles" => "24" , "FC Groningen" => "24" , "Willem II" => "24" , "FC Twente" => "24" , "NAC Breda" => "24" , "Roda JC" => "24" , "Sparta Rotterdam" => "24");
        $gewonnen = array("PSV" => "20" , "Ajax" => "18" , "AZ" => "15" , "PEC Zwolle" => "11" , "Feyenoord" => "12" , "Vitesse" => "10" , "FC Utrecht" => "11" , "Heerenveen" => "8" ,  "VVV-Venlo" => "7" , "ADO Den Haag" => "10" , "Excelsior" => "8" , "Heracles" => "7" , "FC Groningen" => "5" , "Willem II" => "5" , "FC Twente" => "4" , "NAC Breda" => "5" , "Roda JC" => "4" , "Sparta Rotterdam" => "3");
        $Gelijk = array("PSV" => "2" , "Ajax" => "3" , "AZ" => "5" , "PEC Zwolle" => "6" , "Feyenoord" => "6" , "Vitesse" => "7" , "FC Utrecht" => "8" , "Heerenveen" => "8" ,  "VVV-Venlo" => "10" , "ADO Den Haag" => "5" , "Excelsior" => "5" , "Heracles" => "6" , "FC Groningen" => "9" , "Willem II" => "5" , "FC Twente" => "5" , "NAC Breda" => "5" , "Roda JC" => "5" , "Sparta Rotterdam" => "6");
        $verloren = array("PSV" => "2" , "Ajax" => "3" , "AZ" => "4" , "PEC Zwolle" => "7" , "Feyenoord" => "6" , "Vitesse" => "7" , "FC Utrecht" => "5" , "Heerenveen" => "8" ,  "VVV-Venlo" => "7" , "ADO Den Haag" => "9" , "Excelsior" => "11" , "Heracles" => "11" , "FC Groningen" => "10" , "Willem II" => "14" , "FC Twente" => "15" , "NAC Breda" => "14" , "Roda JC" => "15" , "Sparta Rotterdam" => "15");


          $PSV = array_search("PSV" , $naam);
          $Ajax = array_search("Ajax" , $naam);
          $AZ = array_search("AZ" , $naam);
          $Feyenoord = array_search("Feyenoord" , $naam);
          $FCUtrecht = array_search("FC Utrecht" , $naam);
          $PECZwolle = array_search("PEC Zwolle" , $naam);
          $Vitesse = array_search("Vitesse" , $naam);
          $ADODenHaag = array_search("ADO Den Haag" , $naam);
          $Heerenveen = array_search("Heerenveen" , $naam);
          $VVVVenlo = array_search("VVV-Venlo" , $naam);
          $Excelsior = array_search("Excelsior" , $naam);
          $Heracles = array_search("Heracles" , $naam);
          $FCGroningen = array_search("FC Groningen" , $naam);
          $WillemII = array_search("Willem II" , $naam);
          $NacBreda = array_search("NAC Breda" , $naam);
          $FCTwente = array_search("FC Twente" , $naam);
          $RodaJC = array_search("Roda JC" , $naam);
          $SpartaRotterdam = array_search("Sparta Rotterdam" , $naam);
          echo"
          <center>
          <table>
            <tr>
<<<<<<< HEAD
              <td>Positie: $positie[$PSV]</td><td>Positie: $positie[$Ajax]</td><td>Positie: $positie[$AZ]</td><td>Positie: $positie[$Feyenoord]</td><td>Positie: $positie[$FCUtrecht]</td><td>Positie: $positie[$PECZwolle]</td><td>Positie: $positie[$Vitesse]</td><td>Positie: $positie[$ADODenHaag]</td><td>Positie: $positie[$Heerenveen]</td><br /><td>Positie: $positie[$VVVVenlo]</td><td>Positie: $positie[$Excelsior]</td><td>Positie: $positie[$Heracles]</td>
              <td>Positie: $positie[$FCGroningen]</td><td>Positie: $positie[$WillemII]</td><td>Positie: $positie[$NacBreda]</td><td>Positie: $positie[$FCTwente]</td><td>Positie: $positie[$RodaJC]</td><td>Positie: $positie[$SpartaRotterdam]</td>
            </tr>
=======
              <td>Positie: $positie[$PSV]</td><td>Positie: $positie[$Ajax]</td><td>Positie: $positie[$AZ]</td><td>Positie: $positie[$Feyenoord]</td><td>Positie: $positie[$FCUtrecht]</td><td>Positie: $positie[$PECZwolle]</td><td>Positie: $positie[$Vitesse]</td><td>Positie: $positie[$ADODenHaag]</td><td>Positie: $positie[$Heerenveen]</td><td>Positie: $positie[$VVVVenlo]</td><td>Positie: $positie[$Excelsior]</td><td>Positie: $positie[$Heracles]</td>

            </tr>
            <td>Positie: $positie[$FCGroningen]</td><td>Positie: $positie[$WillemII]</td><td>Positie: $positie[$NacBreda]</td><td>Positie: $positie[$FCTwente]</td><td>Positie: $positie[$RodaJC]</td><td>Positie: $positie[$SpartaRotterdam]</td>
>>>>>>> 4f397f627ab9a8c99f2ad5a88d61c85bc31a5e38
            <tr>
              <td>Naam: $naam[$PSV]</td><td>Naam: $naam[$Ajax]</td><td>Naam: $naam[$AZ]</td><td>Naam: $naam[$Feyenoord]</td><td>Naam: $naam[$FCUtrecht]</td><td>Naam: $naam[$PECZwolle]</td><td>Naam: $naam[$Vitesse]</td><td>Naam: $naam[$ADODenHaag]</td><td>Naam: $naam[$Heerenveen]</td><br /><td>Naam: $naam[$VVVVenlo]</td><td>Naam: $naam[$Excelsior]</td><td>Naam: $naam[$Heracles]</td><td>Naam: $naam[$FCGroningen]</td><td>Naam: $naam[$WillemII]</td><td>Naam: $naam[$NacBreda]</td>
              <td>Naam: $naam[$FCTwente]</td><td>Naam: $naam[$RodaJC]</td><td>Naam: $naam[$SpartaRotterdam]</td>
            </tr>
            <tr>
              <td>Stad: $stad[$PSV]</td><td>Stad: $stad[$Ajax]</td><td>Stad: $stad[$AZ]</td><td>Stad: $stad[$Feyenoord]</td><td>Stad: $stad[$FCUtrecht]</td><td>Stad: $stad[$PECZwolle]</td><td>Stad: $stad[$Vitesse]</td><td>Stad: $stad[$ADODenHaag]</td><td>Stad: $stad[$Heerenveen]</td><br /><td>Stad: $stad[$VVVVenlo]</td><td>Stad: $stad[$Excelsior]</td><td>Stad: $stad[$Heracles]</td><td>Stad: $stad[$FCGroningen]</td><td>Stad: $stad[$WillemII]</td>
              <td>Stad: $stad[$NacBreda]</td><td>Stad: $stad[$FCTwente]</td><td>Stad: $stad[$RodaJC]</td><td>Stad: $stad[$SpartaRotterdam]</td>
            </tr>
            <tr>
            <td>Gespeelde: $gespeelde[$PSV]</td><td>Gespeelde: $gespeelde[$Ajax]</td><td>Gespeelde: $gespeelde[$AZ]</td><td>Gespeelde: $gespeelde[$Feyenoord]</td><td>Gespeelde: $gespeelde[$FCUtrecht]</td><td>Gespeelde: $gespeelde[$PECZwolle]</td><td>Gespeelde: $gespeelde[$Vitesse]</td><td>Gespeelde: $gespeelde[$ADODenHaag]</td><td>Gespeelde: $gespeelde[$Heerenveen]</td><br /><td>Gespeelde: $gespeelde[$VVVVenlo]</td><td>Gespeelde: $gespeelde[$Excelsior]</td>
            <td>Gespeelde: $gespeelde[$Heracles]</td><td>Gespeelde: $gespeelde[$FCGroningen]</td><td>Gespeelde: $gespeelde[$WillemII]</td><td>Gespeelde: $gespeelde[$NacBreda]</td><td>Gespeelde: $gespeelde[$FCTwente]</td><td>Gespeelde: $gespeelde[$RodaJC]</td><td>Gespeelde: $gespeelde[$SpartaRotterdam]</td>
            </tr>
            <tr>
            <td>Gewonnen: $gewonnen[$PSV]</td><td>Gewonnen: $gewonnen[$Ajax]</td><td>Gewonnen: $gewonnen[$AZ]</td><td>Gewonnen: $gewonnen[$Feyenoord]</td><td>Gewonnen: $gewonnen[$FCUtrecht]</td><td>Gewonnen: $gewonnen[$PECZwolle]</td><td>Gewonnen: $gewonnen[$Vitesse]</td><td>Gewonnen: $gewonnen[$ADODenHaag]</td><td>Gewonnen: $gewonnen[$Heerenveen]</td><br /><td>Gewonnen: $gewonnen[$VVVVenlo]</td><td>Gewonnen: $gewonnen[$Excelsior]</td><td>Gewonnen: $gewonnen[$Heracles]</td>
            <td>Gewonnen: $gewonnen[$FCGroningen]</td><td>Gewonnen: $gewonnen[$WillemII]</td><td>Gewonnen: $gewonnen[$NacBreda]</td><td>Gewonnen: $gewonnen[$FCTwente]</td><td>Gewonnen: $gewonnen[$RodaJC]</td><td>Gewonnen: $gewonnen[$SpartaRotterdam]</td>
            </tr>
            <tr>
            <td>Gelijk: $Gelijk[$PSV]</td><td>Gelijk: $Gelijk[$Ajax]</td><td>Gelijk: $Gelijk[$AZ]</td><td>Gelijk: $Gelijk[$Feyenoord]</td><td>Gelijk: $Gelijk[$FCUtrecht]</td><td>Gelijk: $Gelijk[$PECZwolle]</td><td>Gelijk: $Gelijk[$Vitesse]</td><td>Gelijk: $Gelijk[$ADODenHaag]</td><td>Gelijk: $Gelijk[$Heerenveen]</td><br /><td>Gelijk: $Gelijk[$VVVVenlo]</td><td>Gelijk: $Gelijk[$Excelsior]</td><td>Gelijk: $Gelijk[$Heracles]</td><td>Gelijk: $Gelijk[$FCGroningen]</td><td>Gelijk: $Gelijk[$WillemII]</td>
            <td>Gelijk: $Gelijk[$NacBreda]</td><td>Gelijk: $Gelijk[$FCTwente]</td><td>Gelijk: $Gelijk[$RodaJC]</td><td>Gelijk: $Gelijk[$SpartaRotterdam]</td>
            </tr>
            <tr>
            <td>Verloren: $verloren[$PSV]</td><td>Verloren: $verloren[$Ajax]</td><td>Verloren: $verloren[$AZ]</td><td>Verloren: $verloren[$Feyenoord]</td><td>Verloren: $verloren[$FCUtrecht]</td><td>Verloren: $verloren[$PECZwolle]</td><td>Verloren: $verloren[$Vitesse]</td><td>Verloren: $verloren[$ADODenHaag]</td><td>Verloren: $verloren[$Heerenveen]</td><br /><td>Verloren: $verloren[$VVVVenlo]</td><td>Verloren: $verloren[$Excelsior]</td><td>Verloren: $verloren[$Heracles]</td>
            <td>Verloren: $verloren[$FCGroningen]</td><td>Verloren: $verloren[$WillemII]</td><td>Verloren: $verloren[$NacBreda]</td><td>Verloren: $verloren[$FCTwente]</td><td>Verloren: $verloren[$RodaJC]</td><td>Verloren: $verloren[$SpartaRotterdam]</td>
            </tr>
          </table>
          </center>";
       ?>
  </body>
</html>
