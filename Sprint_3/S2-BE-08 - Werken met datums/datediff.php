<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Datediff</title>
  </head>
  <body>
    <h3>Datediff</h3>
    <?php
      $datum1 = new DateTime($_POST['datum1']);
      $datum2 = new DateTime($_POST['datum2']);

      $diff = date_diff($datum1,$datum2);
      echo $diff->days;
    ?>
    <form method="POST">
        <input type="date" name="datum1" value="YYYY - MM - DD" />
        <input type="date" name="datum2" value="YYYY - MM - DD" />
        <input type="submit" name="submit" value="Verschil"/>
    </form>
  </body>
</html>
