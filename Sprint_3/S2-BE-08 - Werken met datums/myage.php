<?php

/// Datum                          -|
$datum1 = new DateTime("2001-03-14 0:00:01");

$datum2 = new DateTime(date('Y-m-d H:i:s'));

$diff = date_diff($datum1,$datum2);
$diffD = $diff->days;

$Maanden = $diffD / 30.39;
$Weken = $Maanden * 4.33;
$Uren = $diffD * 24;
$Minuten = $Uren * 60;
$Seconden = $Minuten * 60;

?>

<html>
<head>
    <style>

    p.serif {
      border-radius: 25px;
      background: #f4f74c;
      padding: 20px;
      width: 200px;
      height: 150px;
      border: 5px solid red;
      text-align: center;
      text-decoration-color: black
      font-size : 18pt
      font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif

      }

    </style>
</head>
<body>

<p class="serif">Maanden: <?php echo $Maanden; ?></p>
<p class="serif">weken: <?php echo $Weken; ?></p>
<p class="serif">dagen: <?php echo $diffD; ?></p>
<p class="serif">uren: <?php echo $Uren; ?></p>
<p class="serif">minuten: <?php echo $Minuten; ?></p>
<p class="serif">seconden: <?php echo $Seconden; ?></p>

</body>
</html>
