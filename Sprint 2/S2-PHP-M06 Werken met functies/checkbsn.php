<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <title>BSNcheck</title>
  </head>
  <body>
      <h2>BSN Check</h2>
      <form method="post">
      Uw BSN:
      <input type="text" name="bsn">
      <input type="submit" name="check" value="check">
    </form>

    <?php


      if (isset($_POST["check"])) {
        if (!(empty($_POST["bsn"]))) {

          $bsn = $_POST['bsn'];

          if (is_numeric($bsn)) {
            if (strlen($bsn) == 9) {
              $bsn_array = str_split($bsn);
              $elfproef = ((9*$bsn_array[0] + 8*$bsn_array[1] + 7*$bsn_array[2] + 6*$bsn_array[3] + 5*$bsn_array[4] + 4*$bsn_array[5] + 3*$bsn_array[6] + 2*$bsn_array[7] + -1*$bsn_array[8]) / 11);
              if (is_int($elfproef)) {
                echo "0";
              } else { // Elfproef incorrect
                echo "4";
              }
            } else { // Nummer bestaat niet uit 9
              echo "1";
            }
          } else { // Bestaat niet uit nummers
            echo "2";
          }
        } else { //wel leeg is
          echo "Geen geldig BSN ingevuld";
        }
      }
    
     ?>

  </body>
</html>
