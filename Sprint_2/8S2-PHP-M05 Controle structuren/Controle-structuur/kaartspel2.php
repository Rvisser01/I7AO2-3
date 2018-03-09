<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kaartspel</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
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
spinLoop();
    }

    function spinLoop() {
      $kleuren = array('ruiten', 'harten', 'klaveren', 'schoppen');
      $waarden = array('vrouw', 'heer', 'boer', '10', '9', '8', '7', '6', '5', '4', '3', '2', '1');
      $kaarten = array();

      for ($x = 0; $x <= 4; $x++) {
        $correct = false;

        while ($correct == false) {
          $randKleur = array_rand($kleuren);
          $randWaarde = array_rand($waarden);

          $kaart = "" . $kleuren[$randKleur] . "_" . $waarden[$randWaarde] . ".svg";
                    if (!(in_array($kaart, $kaarten))) {
          array_push($kaarten, $kaart);
                      $correct = true;
                    } else {
          $correct = false;
          }
        }
      }

      foreach ($kaarten as $kaart) {
        echo "<img src='kaarten/" . $kaart ."'></img>";
      }
    }
    ?>
</center>
</body>
</html>
