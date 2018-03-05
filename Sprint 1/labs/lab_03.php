<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>php lab 03</title>
</head>
<body>
<?php
function printarray($playlist,$key){echo "key: <i>$playlist</i><br>";}
$playlist = array (
    array("genre" => "Hiphop","Auteur" => "John Williams", "Titel" => "My Girl"),
    array("genre" => "Jazz","Auteur" => "John Coltrane", "Titel" => "New York"),
    array("genre" => "Hiphop","Auteur" => "Shakira", "Titel" => "Obsession")

);

$track1 = ["Track 0:" , "Hiphop" , "John Williams" , "My Girl"];
$track2 = ["Track 1:" , "Jazz" , "John Coltrane" , "New York"];
$track3 = ["Track 2:" , "Hiphop" , "Shakira" , "Obsession"];
$track4 = ["Track 3:" , "Latin" , "Caetano Veloso" , "Cafe Atlantico"];

function printarray1($playlist,$key){echo "key: <i>$playlist</i><br>";}
$playlist = array (
    array("genre" => "Latin","Auteur" => "Caetano Veloso", "Titel" => "Cafe Atlantico"));

echo "<br>---Stap 1:Mijn Playlist</br>";
array_walk_recursive($playlist, "printArray");

echo "<br>---Stap 2:Track Toevoegen</br>";
array_walk_recursive($playlist, "printArray1");
array_walk_recursive($playlist, "printArray");

function printTracks($playlist, $key){echo "$key: <i>$playlist</i>";}

$track1 = implode("|", $track1);
$track2 = implode("|", $track2);
$track3 = implode("|", $track3);
$track4 = implode("|", $track4);

echo "<br>---Stap 3:Track Doorlopen</br>";
echo "<br>$track1";
echo "<br>$track2";
echo "<br>$track3";
echo "<br>$track4";

 ?>
</html>
