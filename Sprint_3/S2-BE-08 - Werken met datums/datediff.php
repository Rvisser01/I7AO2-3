<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Datediff</title>
  </head>
  <body>
    <h3>Datediff</h3>
    <form method="post">
      <input type="text" name="datum1" placeholder="Voer een datum in"><br>
      Tot<br> <input type="text" name="datum2" placeholder="Voer een datum in">
      <br><br><input type="submit" name="bereken" value="Bereken">
    </form>
    <?php
      if (isset($_POST["bereken"])) {
        if (!(empty($_POST["datum1"]))) {
          echo "Fill in a date!";
        }
        if (!(empty($_POST["datum2"]))) {
          echo "Fill in a date!";
        }
          $datum1 = $_POST['datum1'];
          $datum2 = $_POST['datum2'];

          $datum1 = DateTime($datum1);
          $datum2 = DateTime($datum2);
          
          $verschil = date_diff($datum1,$datum2);
          echo "<br>Er zitten ".$verschil->format("%a dagen verschil tussen");
      }



     ?>
  </body>
</html>
