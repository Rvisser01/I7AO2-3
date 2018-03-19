<!DOCTYPE html>
<html lang="nl">
  <head>
    <title>Cookies</title>
  </head>
  <body>
    <form name="login" action="" method="POST">
      Gebruikersnaam:<br>
      <input type="text" name="user" /><br><br>
      <input type="button" name="submit" value="inloggen"  />
    </form>
    <?php
      $Gebruikers = array();
      ob_start();
        setcookie("gebruiker", "Peter", mktime(0, 0, 00, 3, 25, 2018));
        $Peter = ($_POST["gebruiker"]);
        $gebruiker = $_COOKIE["gebruiker"];
      ob_end_flush();
      if( $gebruiker === $Peter) {
        echo "<br> $Peter  welkom terug gebruiker";
      }
      else {
        echo "<br> Hallo ", $Peter, " uw bent onze nieuwste gebruiker";
        array_push($Gebruikers, $Peter);
      }
    ?>
  </body>
</html>
