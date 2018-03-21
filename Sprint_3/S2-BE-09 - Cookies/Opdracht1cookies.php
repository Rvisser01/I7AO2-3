<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/Cookies1.css">
    <meta charset="utf-8">
    <title>Cookie Inlog</title>
  </head>
  <body>
    <div class="inlog">
      <img src="img/Logo.png" id="logo"></img>
      <br>
      <center>
        <form method="post">
          <label id="gn">Gebruikersnaam</label>
          <div class="text-input">
            <input type="text" id="input1" name="gebruiker">
          </div>
          <label id="pw">Wachtwoord</label>
          <div class="text-input">
            <input type="password" id="input2" name="wachtwoord">
          </div>
          <input type="submit" name="submit" class="button button1" value="Login"><br>
          <p class="rememberme">Remember Me: <input type="checkbox" name="rememberme" value="1"></p>
        </form>
      </center>
    </div>
    <?php
    $users = array(
    array("username" => "0279410@student.rocvantwente.nl","0267730@student.rocvantwente.nl"
    ,"0266931@student.rocvantwente.nl","0300838@student.rocvantwente.nl","0297652@student.rocvantwente.nl",
    "password" => "Welkom12345!" ));

    if (isset($_POST['username']) && isset($_POST['password'])) {
        if (($_POST['username'] == $users) && ($_POST['password'] == $pass)) {
            if (isset($_POST['rememberme'])) {
                setcookie('username', $_POST['username'], time()+60*60*24*365, '/account', 'www.ao-project.nl');
                setcookie('password', md5($_POST['password']), time()+60*60*24*365, '/account', 'www.ao-project.nl');
            } else {
                setcookie('username', $_POST['username'], false, '/account', 'www.ao-project.nl');
                setcookie('password', md5($_POST['password']), false, '/account', 'www.ao-project.nl');
            }
            header('Location: index.php');
        } else {
            echo 'Username/Password Invalid';
        }
    } else {
        echo 'You must supply a username and password.';
    }
    ?>
  </body>
</html>
