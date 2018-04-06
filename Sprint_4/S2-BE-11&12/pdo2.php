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
    echo "<br>---- Opgave 96: Drivers: ";
    print_r(PDO::getAvailableDrivers());

        echo "<br>---- Opgave 97: PDO verbinding maken.";
        $dbhost = "localhost";
        $dbname = "webshop";
        $user = "root";
        $pass = "";
        try {
          $database = new
          PDO("mysql:host=$dbhost;dbname=$dbname",$user,$pass);
          $database->setAttribute
          (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
          echo "<br>Verbinding Gemaakt";
        }
        catch (PDOException $e) {
          echo $e->getMessage();
          echo "<br>Verbinding NIET Gemaakt";
        }

     echo "<br>---- Opgave 98: Input data vanuit geïndexeerde array.";
     $query = "INSERT INTO album (titel, artiest, genre, prijs, voorraad) values(?,?,?,?,?)";
     $insert = $database->prepare($query);
     $data = array("Stairway to Heaven", "Led Zeppelin", "Rock", "0.99", "200");

     try {
       $insert->execute($data);
       echo "<script>alert('Album toegevoegd.');</script>";
     }
     catch (PDOException $e) {
       echo "<script>alert('Album NIET toegevoegd.');</script>";
     }

  ?>
  </body>
</html>
