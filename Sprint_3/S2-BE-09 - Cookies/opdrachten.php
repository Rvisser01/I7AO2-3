<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Opdrachten</title>
  </head>
  <body>
    <?php

    function Login()

    {
        if(empty($_POST['username']))
        {
            $this->HandleError("UserName is empty!");
            return false;
        }

        if(empty($_POST['password']))
        {
            $this->HandleError("Password is empty!");
            return false;
        }

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if(!$this->CheckLoginInDB($username,$password))
        {
            return false;
        }

        session_start();

        $_SESSION[$this->GetLoginSessionVar()] = $username;

        return true;
    }



    //get info from login form
if(isset($_POST['login'])) {

$username = $_POST['username'];
$password = $_POST['password'];
$rememberme = $_POST['rememberme'];

$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);
//query users table
$query = "SELECT * FROM users WHERE username = '{$username}' ";
$select_user_query = mysqli_query($connection, $query);

if(!$select_user_query) {

    die("Query failed" . mysqli_error($connection));

}
//loop through user info and assigning to variables
while($row = mysqli_fetch_array($select_user_query)) {

    $db_id = $row['user_id'];
    $db_username = $row['username'];
    $db_password = $row['user_password'];
    $db_firstname = $row['user_firstname'];
    $db_lastname = $row['user_lastname'];
    $db_role = $row['user_role'];

}

//validate username and password
if($username === $db_username && $password === $db_password) {
    //create cookie to remember user
    if(isset($rememberme)) {
        //set cookie to last one year
        setcookie('username', $_POST['username'], time()+60*60*24*365, '/', 'localhost');
        setcookie('password', md5($_POST['user_password']), time()+60*60*24*365, '/', 'localhost');
    } else {
        //cookie expires when browser closes
        setcookie('username', $_POST['username'], false, '/', 'localhost');
        setcookie('password', md5($_POST['user_password']), false, '/', 'localhost');
    }

    //if user exists send to dashboard
    $_SESSION['username'] = $db_username;
    $_SESSION['user_firstname'] = $db_firstname;
    $_SESSION['user_lastname'] = $db_lastname;
    $_SESSION['user_role'] = $db_role;

    header("Location: ../dashboard.php ");

} else {

    header("Location: ../index.php");

}

}



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
