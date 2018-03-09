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
      <select name="vertrek" value="true">
        <option></option>
        <option value='1'>Amsterdam</option>
        <option value='2'>Utrecht</option>
        <option value='3'>Den Haag</option>
        <option value='4'>Rotterdam</option>
      </select>
      Bestemming:
      <select name="bestemming" value="true">
        <option></option>
        <option value="1">Amsterdam</option>
        <option value="2">Utrecht</option>
        <option value="3">Den Haag</option>
        <option value="4">Rotterdam</option>
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

      $vertrek = $_POST["vertrek"];
      $bestemming = $_POST["bestemming"];

      $kosten = reiskosten($vertrek, $bestemming);

      if (isset($_POST["submit"])) {

      } else {
        echo "De berekende reiskosten zijn: $kosten euro.";
      }

       ?>

     </form>
  </body>
</html>
