<?php
$bestand=fopen ("blogs.txt","r");
{
    $account = fgets($bestand);
?><center><?php echo $account . "<br>";?></center>
<?php
}
fclose($bestand);
?>
<center><a href='welkom.php'><input type='button' name='welkom'
                                value='Terug naar welkoms scherm  '  /></center>
</a>