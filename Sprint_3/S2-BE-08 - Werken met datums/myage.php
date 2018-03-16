<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="myage.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $verjaardag = date_create("2019-03-14");
      echo(strftime(b,$verjaardag));
    ?>
  </body>
</html>
