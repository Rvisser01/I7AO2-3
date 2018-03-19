<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cookies</title>
</head>
<body>
<form name="login" method="post">
    Gebruikersnaam:<br>
    <input type="text" name="user"/><br><br>
    <input type="submit" name="submit" value="Inloggen">
    <input type="submit" name="remove" value="Remove">
    <input type="submit" name="cookies" value="Show">
</form>
<?php

if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    welkom($user);
}

if (isset($_POST['remove'])) {
    $user = $_POST['user'];
    RemoveCookie($user);
}

if (isset($_POST['cookies'])) {
    showCookies();
}

function welkom($gebruiker) {
    if(isset($_COOKIE[$gebruiker])) {
        $number = $_COOKIE[$gebruiker] + 1;
        setcookie($gebruiker, $number);
        echo "<script>alert('Hallo $gebruiker, welkom terug - $number');</script>";
    } else {
        setcookie($gebruiker, 1);
        $number = $_COOKIE[$gebruiker];
        echo "<script>window.alert('Hallo $gebruiker, u bent onze nieuwste gebruiker - $number');</script>";
    }
}

function RemoveCookie($gebruiker) {

    unset($_COOKIE[$gebruiker]);
    setcookie($gebruiker, '', time() - 3600);
    if(isset($_COOKIE[$gebruiker])) {
        echo "<script>alert('Cookie $gebruiker bestaat nog');</script>";
    } else {
        echo "<script>alert('Cookie $gebruiker verwijderd');</script>";
    }
}

function showCookies() {
    print_r($_COOKIE);
}
?>
</body>
</html>
