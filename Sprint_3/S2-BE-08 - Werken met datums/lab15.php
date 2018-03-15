<?php
// date_diff
$factuurdatum = date_create("2018-10-10");
echo "<br>Factuurdatum: ".date_format($factuurdatum, "Y-m-d");
$vandaag = date_create("now");
echo "<br>Vandaag: ".date_format($vandaag, "Y-m-d");
$interval = date_diff($vandaag, $factuurdatum);
echo "<br>U heeft nog: ".$interval->format("%R%a dagen om te betalen");
?>
