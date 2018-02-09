<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kaartspel</title>
    <link " rel="stylesheet">
    <style media="screen">
        * {
            font-family: 'Lato', sans-serif;
        }
    </style>
</head>
<body>
<center>
    <form class="" method="post">
        <input type="submit" name="button" value="Spin">
    </form>
    <br>
    <?php

    if (isset($_POST['button'])) {
j
        $kleuren = array('ruiten', 'harten', 'klaveren', 'schoppen');
        $waarden = array('vrouw', 'heer', 'boer', '10', '9', '8', '7', '6', '5', '4', '3', '2', '1');

        for ($x = 0; $x <= 4; $x++) {
            $randKleur = array_rand($kleuren);
            $randWaarde = array_rand($waarden);

            echo "<img src='kaarten/" . $kleuren[$randKleur] ."_" . $waarden[$randWaarde] .".svg'></img>";
        }
    }

    ?>
</center>
</body>
</html>
