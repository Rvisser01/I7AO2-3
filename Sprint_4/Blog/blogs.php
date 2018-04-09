<?php
$file_handle = fopen("blogs.txt", "r");
while (!feof($file_handle)) {
    $account = fgets($file_handle);
    ?><center><?php echo $account;?></center><?php
}
fclose($file_handle);
?>
<center><a href='welkom.php'><input type='button' name='welkom'
                                value='Terug naar welkoms scherm  '  /></center>
</a>