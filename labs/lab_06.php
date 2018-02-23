<?php
  $brief = array("<<abbonnee>>");
  echo "Beste <b><<abonnee>></b><br>
    U heeft het laatste nummer van ons magazine ontvangen.<br>
    Omdat we u heel graag als abonnee willen behouden, bieden we u een aantrekke-<br>
    lijke en exclusieve korting: <br>U betaalt <b><<korting>></b> in plaats van 65
    euro.<br><br>
    <i>Profiteer nu van deze aanbieding!</i><br><br>
    Met vriendelijke groet,<br>
    Sam Simons<br>
    Hoofdredacteur<br>";

$woorden = str_replace("<<abbonnee>>", "Jan Davids", $brief);
?>
