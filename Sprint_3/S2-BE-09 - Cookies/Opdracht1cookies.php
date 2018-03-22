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
          <label class="label-input" id="gn">Gebruikersnaam</label>
          <div class="text-input">
            <input type="text" id="input1" name="username">
          </div>
          <label class="label-input" id="pw">Wachtwoord</label>
          <div class="text-input">
            <input type="password" id="input2" name="password">
          </div>
          <br>
          <input type="submit" name="submit" class="button button1" value="Login"><br>
          <p class="rememberme">Remember Me: <input type="checkbox" name="rememberme" value="1"></p>
        </form>
        <script>
            function onError(){
              document.getElementById("label-error").style.opacity = "1";
            }

        </script>
        <label id="label-error">
          <?php
            $users = array("username" => "0279410@student.rocvantwente.nl" ,"username" => "0267730@student.rocvantwente.nl"
            ,"username" => "0266931@student.rocvantwente.nl" ,"username" => "0300838@student.rocvantwente.nl" ,"username" =>"0297652@student.rocvantwente.nl");
            $password = array("password" => "Welkom12345!");

            if (isset($_POST['username']) && isset($_POST['password'])) {

              

              if (isset($_POST['username']) && empty($_POST['password'])) {
                echo "<script> onError(); </script>";
                echo "Fill in a username and password";
              }
              elseif (empty($_POST['username'])) {
                echo "<script> onError(); </script>";
                echo "Fill in a username";
              }
              elseif (empty($_POST['password'])) {
                echo "<script> onError(); </script>";
                echo "Fill in a password";
              }
            }
          ?>
        </label>
      </center>
    </div>
  </body>
</html>
