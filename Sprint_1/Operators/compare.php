<?php
$getal1 = (rand(1,1000));
$getal2 = (rand(1,1000));

if ($getal1 > $getal2) {
  echo $getal1. " > " .$getal2 ."  = True " ;
} else {
    echo $getal2. " < " .$getal1 ."  = False " ;
}

echo "<br>";

if ($getal1 == $getal2) {
  echo $getal1. " == " .$getal2 ."  = True " ;
} else {
    echo $getal2. " == " .$getal1 ."  = False " ;
}

echo "<br>";

if ($getal1 === $getal2) {
  echo $getal1. " === " .$getal2 ."  = True " ;
} else {
    echo $getal2. " === " .$getal1 ."  = False " ;
}

echo "<br>";

if ($getal1 >= $getal2) {
  echo $getal1. " >= " .$getal2 ."  = True " ;
} else {
    echo $getal2. " >= " .$getal1 ."  = False " ;
}

echo "<br>";

if ($getal1 <= $getal2) {
  echo $getal1. " <= " .$getal2 ."  = True " ;
} else {
    echo $getal2. " <= " .$getal1 ."  = False " ;
}

echo "<br>";

if ($getal1 != $getal2) {
  echo $getal1. " != " .$getal2 ."  = True " ;
} else {
    echo $getal2. " != " .$getal1 ."  = False " ;
}

echo "<br>";



?>
