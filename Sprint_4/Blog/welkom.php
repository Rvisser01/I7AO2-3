<?php
session_start();
$mijnSession = session_id();
if(isset($_SESSION['ID']) && $_SESSION['ID']=== $mijnSession){
    echo "<h3>Welkom</h3>";
}else{
    echo "U moet eerst inloggen!<br>";
}
?>
<a href='profiel.php'><input type='button' name='profiel' value='Profiel  '  /></a>
<a href='blogs.html'><input type='button' name='blogs' value='Blogs posten '  /></a>
<a href='blogs.php'><input type='button' name='blogs' value='Blogs bekijken '  /></a>
<a href='uitloggen.php'><input type='button' name='terug' value='Uitloggen  '  /></a>
