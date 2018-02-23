<?php
  $search = array("<<abbonnee>>", "<<korting>>");
  $replace = array("Jan Davids", "50");

  $subject = "Beste <b><<abbonnee>></b><br>
    U heeft het laatste nummer van ons magazine ontvangen.<br>
    Omdat we u heel graag als abonnee willen behouden, bieden we u een aantrekke-<br>
    lijke en exclusieve korting: <br>U betaalt <b><<korting>></b> in plaats van 65
    euro.<br><br>
    <i>Profiteer nu van deze aanbieding!</i><br><br>
    Met vriendelijke groet,<br>
    Sam Simons<br>
    Hoofdredacteur<br>";

$boi = str_replace($search, $replace, $subject);
echo "$boi";
 ?>
