<?php
// date_diff
$datum = date_create("1998-01-20");
echo "<br>datum: ".date_format($datum, "Y-m-d");
$vandaag = date_create("now");
echo "<br>Vandaag: ".date_format($vandaag, "Y-m-d");
$interval = date_diff($vandaag, $datum);
echo "<br>U bent: ".$interval->format("dagen oud");
?>
