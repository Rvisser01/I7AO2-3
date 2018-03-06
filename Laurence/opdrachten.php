<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>opdrachten</title>
  </head>
  <body>
    <?php
      function maxGetal($getal1, $getal2)
      {
        if ($getal1 > $getal2) {
          return($getal1);
        }
        elseif ($getal1 < $getal2) {
          return($getal2);
        }
        else {
          return("gelijk");
        }
      }
     ?>
     <form action="" method="post">
       <input type="text" name="eerstegetal" placeholder="Eerste getal" $input1= doubleval($_POST["eerstegetal"]);><br>
       <input type="text" name="tweedegetal" placeholder="Tweede getal" $input2= doubleval($_POST["tweedegetal"]);><br><br>
       <input type="submit" name="submit" value="Bereken hoogste getal">
       <p>---------------------------------------</p>
     </form>
     <?php
      if (isset($_POST["submit"])) {
        $maxgetal =
        maxGetal($_POST["eerstegetal"],$_POST["tweedegetal"]);
        echo "$maxgetal";
      }
      elseif (eerstegetal = 0))
      {
        echo "input moet een getal zijn";
      }
     ?>
  </body>
</html>
