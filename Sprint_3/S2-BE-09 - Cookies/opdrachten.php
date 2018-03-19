<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Opdrachten</title>
  </head>
  <body>
    <?php
        setcookie("user", "",time()-3600);
        if (isset($_COOKIE["user"]))
          {
          echo $_COOKIE["user"];
          }
        else {
          echo "Cookie  is verwijderd";
        }
    ?>
  </body>
</html>
