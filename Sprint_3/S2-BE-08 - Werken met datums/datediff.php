<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Datediff</title>
  </head>
  <body>
    <h3>Datediff</h3>
    <form method="post">
      <input type="text" name="datum1" value="Voer een datum in"><br>
      Tot<br> <input type="text" name="datum2" value="Voer een datum in">
      <br><br><input type="submit" name="bereken" value="Bereken">
    </form>
    <?php
      if (isset($_POST["bereken"])) {

          $datum2 = $_POST['datum2'];
          $datum1 = $_POST['datum1'];
      }  



     ?>
  </body>
</html>
