<?php
  if (isset($_POST["submit"])) {
    $fotoNaam = $_FILES["foto"]["name"];
    global $uploadsMap;
    function upload(){
      global $uploadsMap;
      $uploadsMap = "uploads/";
      $uploadsMap = $uploadsMap . $_FILES["foto"]["name"];
      $fotoType = pathinfo($uploadsMap,PATHINFO_EXTENSION);
      $FotoNaamTemp = $_FILES["foto"]["tmp_name"];

      //controleer of deze foto al bestaat
      $RandomFotoId = uniqid(".JPG");

      move_uploaded_file($FotoNaamTemp,"uploads/" . $RandomFotoId);

      //valideer fotosize
      if ($_FILES["foto"]["size"] > 500000) {
        echo "Deze foto is te groot.";
        return false;
      }

      //valideer formaat
      if ($fotoType != "jpg" &&
      $fotoType != "png" &&
      $fotoType != "jpeg" &&
      $fotoType != "gif" ){
      echo "Foto moet JPG, JPEG, PNG of GIF zijn.";
      return false;
      }
      return true;
    }
    //verplaats foto van temp-map naar uploadsMap
    if (upload()) {
      //gebruiker opslaan
      $bestand=fopen("gebruikers.txt","ab");
      if (!$bestand)
      {
        echo "Kon geen bestand openen!";
      }

      $naam = htmlspecialchars($_POST['naam']);
      $email = htmlspecialchars($_POST['email']);
      $wachtwoord = htmlspecialchars($_POST['password']);
      $profielFoto = $fotoNaam;

      $profiel =
      $naam . "*" .
      $email . "*" .
      $wachtwoord . "*" .
      $profielFoto."\n";

      fwrite($bestand,$profiel,strlen($profiel));

      if(fclose($bestand)) {
        echo "Account is aangemaakt";
      }else {
        echo "Kon bestand niet afsluiten";
      }
  }
}
?>
<br>
<a href="aanmelden.html"><input type="button" name="terug" value=" Terug " />
</a>
