<?php
// date_diff
$vandaag = date_create("now");
echo "<br>Datum van vandaag: ".date_format($vandaag, "Y-m-d");
echo "<br>";
$kerst = date_create("2018-12-25");
echo "<br>Datum van kerst: ".date_format($kerst, "Y-m-d");
echo "<br>";
$interval = date_diff($vandaag, $kerst);
echo "<br>Er zijn nog ".$interval->format("%a dagen tot kerst");
?>
