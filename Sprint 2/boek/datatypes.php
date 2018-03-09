<?php
$naam = "Carl" ;
$adres = "Kruiselaan 111" ;
$woonplaats = "Utrecht" ;

$naw= $naam . " " . $adres . " " . $woonplaats ;

echo "gegevens : $naw";

echo <<< tekst
<br>
salarisspecificatie van $naam : 2000 euro 
<br>
Maand : November
<br>
Jaar : 2020 
<br>
tekst;



$dollar = 999.99 ;
$koers = 1.2 ;
$euros = $dollar * $koers;

echo "Bedrag in euros = $euros"


?>