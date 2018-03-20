<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cookies</title>
  </head>
    <body>
      <form name="login" method="post">
      <input type="submit" name="submit" value="Inloggen">
      </form>
<?php

$users = array(
  array("userName" => "123", "password" => "rimpelsteeltje"),

)


/* dit moet in een methode{
  if($users[$i] => userName == "waarde in de textbox" && $users[$i] => password == "waarde uit de textbox password"){
    //door sturen naar pagina
  }
}
*/
$msg = '';

if (isset($_POST['login']) && !empty($_POST['username'])
   && !empty($_POST['password'])) {

   if ($_POST['username'] == '0279410@student.rocvantwente.nl', "0267730@student.rocvantwente.nl",
   "0266931@student.rocvantwente.nl", "0300838@student.rocvantwente.nl", "0297652@student.rocvantwente.nl"
   ,"0300013@student.rocvantwente.nl" &&
      $_POST['password'] == 'Welkom12345!') {
      $_SESSION['valid'] = true;
      $_SESSION['timeout'] = time();
      $_SESSION['username'] = 'tutorialspoint';

      echo 'You have entered valid use name and password';
   }else {
      $msg = 'Wrong username or password';
   }
}

<div> <!-- /container -->

<div class = "container">

<form class = "form-signin" role = "form"
action = "echo htmlspecialchars"($_SERVER['PHP_SELF']);




?>

  </body>

</html>
