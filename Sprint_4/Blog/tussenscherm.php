<?php
if(isset($_POST["submit"])) {
$bestand=fopen ("blogs.txt", "ab");
if(!$bestand)
{
    echo "kon geen bestand openen!";
}

$naam = htmlspecialchars ($_POST['naam']);
$email = htmlspecialchars ($_POST['email']);
$blog = htmlspecialchars ($_POST['blog']);

$profiel =
    $naam . " " .
    $email . "<br>" .
    $blog . "\n";

fwrite($bestand,$profiel,strlen($profiel));

if(fclose($bestand)){
    echo "blog is aangemaakt";}
    else
        echo "er is een error";}
?>
<br><a href='welkom.php'><input type='button' name='welkom'
                                value='Terug naar welkoms scherm  '  />
</a>