<?php
if(isset($_POST["submit"])) {
    $fotonaam = basename($_FILES["foto"]["name"]);
    global $uploadsMap;
    function upload(){
        global $uploadsMap;
        $uploadsMap = "uploads/";
        $uploadsMap = $uploadsMap . basename($_FILES["foto"]["name"]);
        $fotoType = pathinfo($uploadsMap,PATHINFO_EXTENSION);

        // controleer of deze foto al bestaat
        if (file_exists($uploadsMap)) {
            echo "Deze foto betstaat al.";
            return false;
        }

        //valideer fotoSize
        if ($_FILES["foto"]["size"] > 500000) {
            echo "Deze foto is te groot.";
            return false;
        }

        //valideer formaat
        if($fotoType != "jpg" &&
            $fotoType != "png" &&
            $fotoType != "jpeg" &&
            $fotoType != "gif") {
            echo "Foto moet JPG, JPEG, PNG of GIF zijn.";
            return false;
        }
        return true;
    }

    //verplaats foto van temp-map naar uploadsMap
    if (upload()) {
        if(move_uploaded_file($_FILES["foto"]["tmp_name"],
            $uploadsMap)) {
            echo "Foto is geupload.";

            //gebruiker opslaan
            $bestand=fopen ("gebruikers.txt", "ab");
            if(!$bestand)
            {
                echo "kon geen bestand openen!";
            }

            $naam = htmlspecialchars ($_POST['naam']);
            $email = htmlspecialchars ($_POST['email']);
            $wachtwoord = htmlspecialchars ($_POST['password']);
            $profielFoto = $fotonaam;

            $profiel =
                $naam . "*" .
                $email . "*" .
                $wachtwoord . "*" .
                $profielFoto . "\n";

            fwrite($bestand,$profiel,strlen($profiel));

            if(fclose($bestand)){
                echo "Account is aangemaakt";
            }else {
                echo "Kon bestand niet afsluiten";
            }
        } else {
            echo "probleem bij het uploaden. Foto niet geupload";
        }
    }
}
?>
<a href="aanmelden.html"><input type="button"
name="terug" value=" Terug " />
</a>
