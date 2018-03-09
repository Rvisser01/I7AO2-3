<?php

function reverse(){
    echo strrev("TestAO");
}

function is_Prime($num)
{
    $bCheck = True;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $bCheck = False;
            break;
        }
    }
    echo (bool)$bCheck ? 'True' : 'False';
}

function isUpperCase($String){
        $bool = False;
            if (ctype_upper($String)) {
                $bool = True;
            }
    echo (bool)$bool ? 'True' : 'False';
}

function isPalindrome($String){
    $bool = False;
    $check = strrev($String);
        if ($check == $String) {
            $bool = True;
        }
    echo (bool)$bool ? 'True' : 'False';
}

function MaxF(){
    $a = array(10, 20, 52, 105, 56, 89, 96);
    $b = 0;
    foreach ($a as $key=>$val) {
        if ($val > $b) {
            $b = $val;
        }
    }
    echo $b;
}

    if (isset($_POST['knop'])) {
        //Get bsn nummer
        $bsn = $_POST["bsn_nummer"];

        if (is_numeric($bsn)) {
            if (strlen($bsn) == 9) {
                $bsn_array = str_split($bsn);
                $elfproef = (($bsn_array[0] * 9 + $bsn_array[1] * 8 + $bsn_array[2] * 7 + $bsn_array[3] * 6 + $bsn_array[4] * 5 + $bsn_array[5] * 4 + $bsn_array[6] * 3 + $bsn_array[7] * 2 + $bsn_array[8] * -1) / 11);
                if (is_int($elfproef)) {
                    echo "<p style='color:green;'> BSN Correct</p>";
                } else { //Elfproef incorrect
                    echo "<p style='color:red;'> BSN Incorrect #4</p>";
                }
            } else { //Niet 9 lang
                echo "<p style='color:red;'> BSN Incorrect #1</p>";
            }
        } else { //Niet numeric
            if (!(strlen($bsn) == 9)) {
                echo "<p style='color:red;'> BSN Incorrect #3</p>";
            } else {
                echo "<p style='color:red;'> BSN Incorrect #2</p>";
            }
        }
    }


?>
