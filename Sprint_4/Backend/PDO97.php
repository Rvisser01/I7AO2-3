<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      echo "<br />---- Opgave 96: Drivers: ";
      print_r(PDO::getAvailableDrivers());

      echo "<br />---- Opgave 97: PDO verbinding maken.";
      $dbhost = "localhost";
      $dbname = "webshop";
      $user = "root";
      $pass = "";
      try {
        $database = new
        PDO("mysql:host=$dbhost;dbname=$dbname" ,$user,$pass);
        $database->setAttribute
        (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "<br />verbinding gemaakt";

      } catch (PDOException $e) {
        echo $e->getmessage();
        echo "<br /> verbinding NIET gemaakt";

      }


     ?>
  </body>
</html>
