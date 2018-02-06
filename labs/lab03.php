<!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>php lab 03</title>
   </head>
   <body>
<?php
$playslist =array (
array("genre" => "Hiphop","Auteur" => "John Williams", "Titel" => "My Girl"),
array("genre" => "Jazz","Auteur" => "John Coltrane", "Titel" => "New York"),
array("genre" => "Hiphop","Auteur" => "Shakira", "Titel" => "Obsession")
);
echo
printTracks ($item, $key);{

}

array_walk($playlist, "printTracks");

 ?>
  </body>
</html>
