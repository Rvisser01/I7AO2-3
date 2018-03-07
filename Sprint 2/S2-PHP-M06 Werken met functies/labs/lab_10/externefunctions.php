<?php
if(isset($_POST{"submit"}))

$betalingswijze = 0;


if(isset($_POST["submit"])) {
        switch ($_POST["$betalingswijze"]) {
            case "visa" :
                echo "<br>betalingwijze:visa";
                $betalingswijze = 10;
                break;
            case "mastercard" :
                echo "<br>betalingswijze:mastercard";
                $betalingswijze = 12;
                break;
            case "paypal" :
                echo "<br>betalingswijze:paypal";
                $betalingswijze = 14;
                break;
            case "ideal" :
                echo "<br>betalingswijze:ideal";
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
