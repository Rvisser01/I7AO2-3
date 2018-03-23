<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cookies</title>
</head>
<body>
  <h2>Opdracht 1 Cookies</h2>
  <form name="login" method="post" action="login.php">
<<<<<<< HEAD
   Username: <input type="text" name="username"><br>
=======
   Username: <input type="text" name="username"><br><?php
   echo $_COOKIE['remember_me']; ?>
>>>>>>> de354d97fbd621b767f3b44b0f19d3b32ae766ba
   Password: <input type="pass" name="password"><br>
   Remember Me: <input type="checkbox" name="remember" value="1"><br>

   <input type="submit" name="submit" value="Login!">
  </form>
  <?php
<<<<<<< HEAD
=======

>>>>>>> de354d97fbd621b767f3b44b0f19d3b32ae766ba

  $users = array('username' => '0279410@student.rocvantwente.nl','0267730@student.rocvantwente.nl'
  ,'0266931@student.rocvantwente.nl','0300838@student.rocvantwente.nl','0297652@student.rocvantwente.nl',
  '0300013@student.rocvantwente.nl','password' => 'Welkom12345!', 'cookie'=> 'akkoord_cookie');



  if (isset($_POST['username']) && isset($_POST['password']))
  {

      if (($_POST['username'] == $users) && ($_POST['password'] == $pass))
      {

          if (isset($_POST['rememberme']))
          {
              setcookie('username', ($_POST['username']), time()+60*60*12, '/account', 'www.aoproject.nl');
              setcookie('password', md5($_POST['password']), time()+60*60*12, '/account', 'www.aoproject.nl');
          }


          else
          {
              setcookie('username', $_POST['username'], false, '/account', 'www.aoproject.nl');
              setcookie('password', md5($_POST['password']), false, '/account', 'www.aoproject.nl');
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
<?php
  if ($_COOKIE['akkoord_cookie']) {
  //doe niks

  }
  else {
    //voer de melding uit.
    //als hij de cookie niet accepteerd header("Location: (site cookies)")
    //als hij de cookies accepteerd verdwijnt de melding en wordt er aangegeven (aan de php code) dat de gebruiker cookies wilt

    // als hij niet op remember me drukt wordt de cookie verwijderd.
    // als hij wel op remember me drukt wordt er een cookie aangemaakt voor 12 uur en wordt alleen de gebruikersnaam onthouden.
    if (isset($_POST['rememberme']))
    {
        setcookie('username', ($_POST['username']), time()+60*60*12, '/account', 'www.aoproject.nl');
        setcookie('password', md5($_POST['password']), time()+60*60*12, '/account', 'www.aoproject.nl');
        echo "Deze site maakt gebruik van cookies.";
    }
    else
    {
        setcookie("username",($_POST['username']),time()-1),
    }


  }
 ?>
