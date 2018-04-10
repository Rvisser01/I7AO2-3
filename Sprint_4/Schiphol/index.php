<?php
  PDO::getAvailableDrivers();
  $dbhost = "localhost";
  $dbname = "robbiwn275_schiphol";
  $user = "robbiwn275_schiphol";
  $pass = "robbin";
  $postcodes_DB = mysql_query("SELECT postcode FROM postcode");
  $postcode_DB = mysql_fetch_array($postcodes_DB);
  ?>







  <?php

  if ($postcode===$postcode_DB) {
    $sql = "INSERT INTO klacht (ID, ID_gebruiker, ID_klachtsoort, postcode, datum, tijd)
    VALUES ($ID,$ID_gebruiker, $ID_klachtsoort, $postcode, $datum, $tijd)";
    $sql .= "INSERT INTO gebruiker (ID, ID_gebruiker, ID_klachtsoort, postcode, datum, tijd)
    VALUES ($ID,$ID_gebruiker, $ID_klachtsoort, $postcode, $datum, $tijd)";
  }
  else {
    echo "U woont niet in de buurt van Schiphol en bent daarom niet gemachtigd om een klacht in te dienen";
  }

  try {
    $database = new
    PDO("mysql:host=$dbhost;dbname=$dbname",$user,$pass);
    $database->setAttribute
    (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
  }
  catch (PDOException $e) {
  }
?>
