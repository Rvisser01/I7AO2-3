<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Onze groep</title>
  </head>
  <body>
    <?php
      $Voornamen = array( '0300013' => "Laurence" , '0266931' => "Peter" , '0267730' => "Pim" , '0279410' => "Arben" , '0297652' => "Robbin" , '0300838' => "Damian");
      $Achternamen = array( '0300013' => "Van der Wel" , '0266931' => "Kuipers" , '0267730' => "Hoomans" , '0279410' => "Hajrizaj" , '0297652' => "Visser" , '0300838' => "Trojak");
      $Woonplaatsen = array( '0300013' => "Enschede" , '0266931' => "Enschede" , '0267730' => "Enschede" , '0279410' => "Enschede" , '0297652' => "Overdinkel" , '0300838' => "Enschede");
      $Leeftijden = array( '0300013' => "17" , '0266931' => "20" , '0267730' => "20" , '0279410' => "19" , '0297652' => "16" , '0300838' => "16");


      foreach ($Voornamen as $Voornaam :: $Achternamen as $Achternaam :: $Woonplaatsen as $Woonplaats :: $Leeftijden as $Leeftijd){
          echo "<table>
            <tr>
              <td>
                $Voornaam
                </td>
            </tr>
            <tr>
              <td>
                $Achternaam
              </td>
            </tr>
            <tr>
              <td>
                $Woonplaats
              </td>
            </tr>
            <tr>
              <td>
                $Leeftijd
              </td>
            </tr>
          </table>";
      }


    ?>
  </body>
</html>
