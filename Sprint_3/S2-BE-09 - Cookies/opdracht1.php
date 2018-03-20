<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cookies</title>
</head>
<body>
  <h2>Opdracht 1 Cookies</h2>
  <form name="login" method="post" action="login.php">
   Username: <input type="text" name="username"><br>
   Password: <input type="password" name="password"><br>
   Remember Me: <input type="checkbox" name="rememberme" value="1"><br>
   <input type="submit" name="submit" value="Login!">
  </form>
  <?php
  /* These are our valid username and passwords */
  $user = "0279410@student.rocvantwente.nl","0267730@student.rocvantwente.nl"
  ,"0266931@student.rocvantwente.nl","0300838@student.rocvantwente.nl","0297652@student.rocvantwente.nl";
  $pass = 'Welkom12345!';

  if (isset($_POST['username']) && isset($_POST['password')) {

      if (($_POST['username'] == $user) && ($_POST['password'] == $pass)) {

          if (isset($_POST['rememberme'])) {
              /* Set cookie to last 1 year */
              setcookie('username', $_POST['username'], time()+60*60*24*365, '/account', 'www.example.com');
              setcookie('password', md5($_POST['password']), time()+60*60*24*365, '/account', 'www.example.com');

          } else {
              /* Cookie expires when browser closes */
              setcookie('username', $_POST['username'], false, '/account', 'www.example.com');
              setcookie('password', md5($_POST['password']), false, '/account', 'www.example.com');
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
