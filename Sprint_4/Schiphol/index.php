<?php
//Connect to DB
$con = mysqli_connect("vserver275.axc.nl", "robbiwn275_schiphol", "robbin", "robbiwn275_schiphol") or die("couldn't connect to the database!");

$SQLselectAll = "SELECT * FROM klachten";
$runSelectAll = mysqli_query($con, $SQLselectAll);

while($row = mysqli_fetch_array($runSelectAll)) {
  $naam = htmlspecialchars($row["naam"], ENT_QUOTES, 'UTF-8');
  $tussen = htmlspecialchars($row["tussenvoegsel"], ENT_QUOTES, 'UTF-8');
  $achternaam = htmlspecialchars($row["achternaam"], ENT_QUOTES, 'UTF-8');
  $adres = htmlspecialchars($row["adres"], ENT_QUOTES, 'UTF-8');
  $postcode = htmlspecialchars($row["postcode"], ENT_QUOTES, 'UTF-8');
  $email = htmlspecialchars($row["email"], ENT_QUOTES, 'UTF-8');
  $klachtText = htmlspecialchars($row["klacht"], ENT_QUOTES, 'UTF-8');

  echo "$naam $tussen $achternaam <br>";
  echo "$email <br>";
  echo "$adres <br>";
  echo "$postcode <br><br>";
  echo "$klachtText<br><br>";
}
?>
