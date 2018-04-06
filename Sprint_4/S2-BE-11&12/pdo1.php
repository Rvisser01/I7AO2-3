<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-type"
    content="text/html;
    charset=UTF-8">
    <title></title>
  </head>
  <body>
  <?php
    echo "<br />---- Opgave 96: Drivers: ";
    print_r(PDO::getAvailableDrivers());

        echo "<br />---- Opgave 97: PDO verbinding maken.";
        $dbhost = "localhost";
        $dbname = "robbiwn275_groep3";
        $user = "robbiwn275_groep3";
        $pass = "robbin";
        try {
          $database = new
          PDO("mysql:host=$dbhost;dbname=$dbname",$user,$pass);
          $database->setAttribute
          (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
          echo "<br />Verbinding Gemaakt";
        }
        catch (PDOException $e) {
          echo $e->getMessage();
          echo "<br />Verbinding NIET Gemaakt";
        }

  ?>
  </body>
</html>
