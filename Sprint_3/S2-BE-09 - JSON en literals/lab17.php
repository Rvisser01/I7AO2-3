<?php
  $user = array(
    "naam" => "Shyam",
    "email" => "shyan@nu.nl",
    "wachtwoord" => "",
    "photo" => "shyam.jpg"
  );
  echo "<br>userArray: <br>";
  var_dump($user, true);
  $userJsonString = json_encode($user);
  echo "<br>userJsonLiteral: <br>".$userJsonString;

  $boekenJasonLiteral = '[
  {"titel":"Stoner","auteur":"John Williams","genre":"fictie","prijs":"19.99"},
  {"titel":"De cirkel","auteur":"Dave Eggers","genre":"fictie","prijs":"22.5"},
  {"titel":"Rayuele","auteur":"Julio Cortazar","genre":"fictie","prijs":"25.5"}]';

  $boeken = json_decode($boekenJasonLiteral,true);

  foreach ($boeken as $boek){
    echo "<br>titel: ".$boek["titel"];
    echo "<br>auteur: ".$boek["auteur"];
    echo "<br>genre: ".$boek["genre"];
    echo "<br>prijs: ".$boek["prijs"];
  }

  echo "<br>---- Opgave 65";
  $boekenObj = json_decode($boekenJasonLiteral);

  foreach ($boekenObj as $boek){
    echo "<br>titel: ".$boek->titel;
    echo "<br>auteur: ".$boek->auteur;
    echo "<br>genre: ".$boek->genre;
    echo "<br>prijs: ".$boek->prijs;
  }
?>
