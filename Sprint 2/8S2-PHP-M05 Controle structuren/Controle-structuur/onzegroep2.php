<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Onze groep</title>
  </head>
  <body>
    <style>
      #cursief {
        font-style: italic;
      }
    </style>
    <?php
      $Voornamen = array( '0300013' => "Laurence" , '0266931' => "Peter" , '0267730' => "Pim" , '0279410' => "Arben" , '0297652' => "Robbin" , '0300838' => "Damian");
      $Achternamen = array( '0300013' => "Van der Wel" , '0266931' => "Kuipers" , '0267730' => "Hoomans" , '0279410' => "Hajrizaj" , '0297652' => "Visser" , '0300838' => "Trojak");
      $Woonplaatsen = array( '0300013' => "Enschede" , '0266931' => "Enschede" , '0267730' => "Enschede" , '0279410' => "Enschede" , '0297652' => "Overdinkel" , '0300838' => "Enschede");
      $Leeftijden = array( '0300013' => "17" , '0266931' => "20" , '0267730' => "20" , '0279410' => "19" , '0297652' => "16" , '0300838' => "16");
      $Studentennummer = array('0300013' => "0300013" , '0266931' => "0266931" , '0267730' => "0267730" , '0279410' => "0279410" , '0297652' => "0297652" , '0300838' => "0300838");

      foreach ($Voornamen as $id => $value){

            echo "<table>
              <tr>
                <td>
                <h2 style='margin-bottom:0px;margin-top:0px;'>".$value."</h2>
                  </td>
              </tr>
              <tr>
                <td>
                  " . ($Achternamen[$id]) . "
                </td>
              </tr>
              <tr>
                <td id='h4'>
                  ".($Studentennummer[$id])."
                </td>
              </tr>
              <tr>
                <td id='cursief'>
                  ".($Woonplaatsen[$id])."
                </td>
              </tr>
              <tr>
                <td id='cursief'>
                  ".($Leeftijden[$id])."
                </td>
              </tr>
            </table>";

        }
    ?>
  </body>
</html>
