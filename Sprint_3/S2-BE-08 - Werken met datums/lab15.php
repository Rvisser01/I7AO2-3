<?php
// date_diff
<<<<<<< HEAD
$datum = date_create("1998-01-20");
echo "<br>datum: ".date_format($datum, "Y-m-d");
$vandaag = date_create("now");
echo "<br>Vandaag: ".date_format($vandaag, "Y-m-d");
$interval = date_diff($vandaag, $datum);
echo "<br>U bent: ".$interval->format("dagen oud");
=======
$vandaag = date_create("now");
echo "<br>Datum van vandaag: ".date_format($vandaag, "Y-m-d");
echo "<br>";
$kerst = date_create("2018-12-25");
echo "<br>Datum van kerst: ".date_format($kerst, "Y-m-d");
echo "<br>";
$interval = date_diff($vandaag, $kerst);
echo "<br>Er zijn nog ".$interval->format("%a dagen tot kerst");
>>>>>>> cf6bdc2a96d98ef2ecc3a798e07fee7ab524b012
?>
