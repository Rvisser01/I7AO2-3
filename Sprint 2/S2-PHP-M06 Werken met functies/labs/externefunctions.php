<?php
if(isset($_POST{"submit"}))

$betalingswijze = 0;


if(isset($_POST["submit"])) {
        switch ($_POST["betaling"]) {
          case "leeg" :
              echo "<br>Je hebt geen betalingswijze gekozen";
              $betalingswijze = 0;
              break;
            case "visa" :
                $betalingswijze = 10;
                break;
            case "mastercard" :
                $betalingswijze = 12;
                break;
            case "paypal" :
                $betalingswijze = 14;
                break;
            case "ideal" :
                $betalingswijze = 16;
                break;

        }
        }

        $rules = array(
            "Klasiek"=> array("min" => 3, "max" => 7),
            "Latin" => array("min" => 1, "max" => 5),
            "World" => array("min" => 2, "max" => 5),
            "Rock" => array("min" => 3, "max" => 7),
            "R&B" => array("min" => 4, "max" => 7),
            "Pop" => array("min" => 5, "max" => 7));

        
?>
