<?php
if(isset($_POST["submit"])) {
$bestand=fopen ("blogs.txt", "ab");
if(!$bestand)
{
    echo "kon geen bestand openen!";
}

$naam = htmlspecialchars ($_POST['naam']);
$blog = htmlspecialchars ($_POST['blog']);

$profiel =
    $naam . "<br>" .
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
