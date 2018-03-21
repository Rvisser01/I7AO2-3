<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cookies</title>
</head>
<body>
  <h2>Opdracht 1 Cookies</h2>
  <form name="login" method="post" action="login.php">
   Username: <input type="text" name="username"><br><?php
   echo $_COOKIE['remember_me']; ?>">
   Password: <input type="pass" name="password"><br>
   Remember Me: <input type="checkbox" name="remember" value="1"><br>
   <input type="submit" name="submit" value="Login!">
  </form>
  <?php
<<<<<<< HEAD

=======
>>>>>>> a834db28a7d4fc4ed544d4014ba6c62e9f8c5737


  $users = array("username" => "0279410@student.rocvantwente.nl","0267730@student.rocvantwente.nl"
  ,"0266931@student.rocvantwente.nl","0300838@student.rocvantwente.nl","0297652@student.rocvantwente.nl",
  "password" => "Welkom12345!" );



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
