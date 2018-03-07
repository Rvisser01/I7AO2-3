<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lab09</title>
  </head>
  <body>
    <h4>Reiskosten berekenen</h4>
     <form method="post">
       Vertrek:
      <select>
        <option value='$reiskosten[1]'>Amsterdam</option>
        <option value='$reiskosten[2]'>Utrecht</option>
        <option value='$reiskosten[3]'>Den Haag</option>
        <option value='$reiskosten[4]'>Rotterdam</option>
      </select>
      Bestemming:
      <select>
        <option value="">Amsterdam</option>
        <option value="">Utrecht</option>
        <option value="">Den Haag</option>
        <option value="">Rotterdam</option>
      </select>
      <br>
      <br>
      <input type="submit" name="berekenen" value="Berekenen">
      <br>
      <p>--------------------------------------------------------------</p>
      <br>
      <?php
      function reiskosten($vertrek, $bestemming)
      {
        $reiskosten = array();
        $reiskosten [1] = array(); //Amsterdam
        $reiskosten [2] = array(); //Utrecht
        $reiskosten [3] = array(); //Den Haag
        $reiskosten [4] = array(); //Rotterdam

        $reiskosten [1][1] = 0;
        $reiskosten [1][2] = 30;
        $reiskosten [1][3] = 60;
        $reiskosten [1][4] = 90;

        $reiskosten [2][1] = 30;
        $reiskosten [2][2] = 0;
        $reiskosten [2][3] = 40;
        $reiskosten [2][4] = 20;

        $reiskosten [3][1] = 60;
        $reiskosten [3][2] = 40;
        $reiskosten [3][3] = 0;
        $reiskosten [3][4] = 10;

        $reiskosten [4][1] = 90;
        $reiskosten [4][2] = 20;
        $reiskosten [4][3] = 10;
        $reiskosten [4][4] = 0;
        return($reiskosten[$vertrek][$bestemming]);

      }


        echo 'De berekende reiskosten zijn:  euro.';
       ?>

     </form>
  </body>
</html>
