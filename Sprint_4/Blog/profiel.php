<h1>gebruikers info</h1>
<?php
$bestand=fopen ("gebruikers.txt","r");
{
    $account = fgets($bestand);
    ?><?php echo $account . "<br>";?>
    <?php
}
fclose($bestand);
?>
<h2>geposte blogs</h2>
<?php
$bestand=fopen ("blogs.txt","r");
{
    $account = fgets($bestand);
    ?><?php echo $account . "<br>";?>
    <?php
}
fclose($bestand);
?>
<a href='welkom.php'><input type='button' name='welkom'
                                        value='Terug naar welkoms scherm  '  />
</a>