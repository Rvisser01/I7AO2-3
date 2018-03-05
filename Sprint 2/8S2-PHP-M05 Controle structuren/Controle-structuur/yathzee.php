<?php
//Create Session
session_start();

if (isset($_SESSION["worpen"])) {
  $_SESSION["worpen"] += 1;
} else {
  $_SESSION["worpen"] = 0;
}

 ?>
<html>
<head>
    <title>Yahtzee</title>
</head>
<body>

<center>
<?php

if (isset($_POST['knop'])) {

    //Variabel worpen is Session[Worpen]
    $worpen = $_SESSION['worpen'];

    $dobbel1 = rand(1, 5);
    $dobbel2 = rand(1, 5);
    $dobbel3 = rand(1, 5);
    $dobbel4 = rand(1, 5);
    $dobbel5 = rand(1, 5);

    $dobbel6 = $dobbel1 + $dobbel2 + $dobbel3 + $dobbel4 + $dobbel5;


      echo "<strong> $dobbel1 $dobbel2 $dobbel3 $dobbel4 $dobbel5</strong>";



    echo "<br> het aantal van alle Dobbelstenen bij elkaar: <strong>$dobbel6</strong><br>";

    if ($dobbel1 == $dobbel5 && $dobbel2 == $dobbel5 && $dobbel3 == $dobbel5 && $dobbel4 == $dobbel5 && $dobbel5 == $dobbel5) {
        echo "<br><b>yathzee!</b><br>";
        echo "Er is 5 keer een $dobbel1 gegooid<br>";
        echo "Er is in totaal $worpen keer gegooid!<br>";

        //Reset worpen naar 0
        $_SESSION["worpen"] = 0;
    }
  }
?>
<form method="post">
    <input type="submit" name="knop" value="Gooi">
</form>
</center>
</body>
</html>
