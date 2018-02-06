<?php

echo "<h2>Lokale variabelen</h2>";
echo <<<TEKST
Variabelen zijn, zonder speciale declaratie, altijd local. Dit betekent dat ze niet bereikbaar zijn buiten de functie of buiten het hoofdscript. Een voorbeeld:
Om een variabele toch bereikbaar te maken buiten deze functie maken we gebruik van het sleutelwoord global.
TEKST;

function lokaal(){
    $a = 10;
    print $a;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Scope</title>
</head>
<body>
<?php $a = 4; ?>
<p style="margin-bottom:0">De waarde van de lokale variabele $a:</p>
<ul style="margin-top:0">
  <li>voor de functie-aanroep: a = <?php print $a; ?>,</li>
  <li>binnen de functie: a = <?php lokaal(); ?>,</li>
  <li>na de functie-aanroep: a = <?php print $a; ?>.</li>
</ul>
</body>
</html>

<?php
echo "<h2>Globale variabelen</h2>";
echo <<<TEKST
Globale variabelen
Onze gebruikte variabelen zijn wel beschikbaar over ons gehele script, daarom noemen we deze variabelen global. Het global maken kan wel enkel en alleen binnen de functie.
TEKST;

function globaal(){
  $GLOBALS['a'] = 10;
  print $GLOBALS['a'];
}
?>
<?php $a = 4; ?>
<p style="margin-bottom:0">De waarde van de globale variabele $a:</p>
<ul style="margin-top:0">
  <li>voor de functie-aanroep: a = <?php print $a; ?>,</li>
  <li>binnen de functie: a = <?php globaal(); ?>,</li>
  <li>na de functie-aanroep: a = <?php print $a; ?>.</li>
</ul>
