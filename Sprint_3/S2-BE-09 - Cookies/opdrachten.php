<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Opdrachten</title>
  </head>
  <body>
    <?php
      ob_start();

        echo "Maak een cookie";
        setcookie("gebruiker","sanskrit",mktime(0,0,0,1,1,2050));
        $gebruiker = $_COOKIE["gebruiker"];
        echo "<br>Gebruikersnaam is : $gebruiker";
        print_r($_COOKIE);
        ob_end_flush();



    ?>
  </body>
</html>
