<?php
  if (isset($_POST["submit"])) {
    $fotoNaam = basename($_FILES["foto"]["name"]);
    global $uploadsMap;
    function upload(){
      global $uploadsMap;
      $uploadsMap = "uploads/";
      $uploadsMap = $uploadsMap . basename($_FILES["foto"]["name"]);
      $fotoType = pathinfo($uploadsMap,PATHINFO_EXTENSION);

      //controleer of deze foto al bestaat
      {$RandomAccountNumber = uniqid();
      echo "$RandomAccountNumber";
      }

      // Geef random naam aan image (Arben)
      if(isset($_post{"submit"})){
        $name = $_FILES['file']['Name'];
        $random = rand (0.99999999)
        $name_new = sha1($name.$random);
         echo $name_new

      }



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
      echo "U moet een Foto selecteren en het moet een JPG, JPEG, PNG of GIF zijn.";
      return false;
      }
      return true;
    }
    //verplaats foto van temp-map naar uploadsMap
    if (upload()) {
      if (move_uploaded_file($_FILES["foto"]["tmp_name"],
      $uploadsMap)) {
        echo "Foto is geupload.";

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
    }else{
      echo "Probleem bij het uploaden. Foto niet geupload";
    }
  }
}



<br>
<a href="aanmelden.html"><input type="button" name="terug" value=" Terug " />
</a>
