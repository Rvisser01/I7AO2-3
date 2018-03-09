<?php

$boeken = array (
    array ("titel" => "stoner", "auteur" => "John Williams" ,
        "genre" => "fictie" , "prijs" => 19.99) ,
    array ("title"=> "De cirkel", "auteur" => "Dave Eggers",
        "genre" => "fictie" , "prijs" => 22.50) ,
    array ("titel"=> "Rayuela", "auteur" => "Julia Cortazar" ,
        "genre" => "fictie", "prijs" => 25.50 )
);


function prijsLijst(&$array) {
    echo "---- Lab 04: Prijslijst:<br>";
    echo "Prijs: ";
    echo $array[0]['prijs'];
    echo "<br>Prijs: ";
    echo $array[1]['prijs'];
    echo "<br>Prijs: ";
    echo $array[2]['prijs'];
}

prijsLijst($boeken);
?>
