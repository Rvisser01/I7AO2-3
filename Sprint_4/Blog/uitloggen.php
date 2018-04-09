<?php
session_start();
echo "Tot ziens " . $_SESSION['USER'];
session_destroy();
?>
<a href="inloggen.html"><input type="button"
                                  name="inloggen" value=" Terug naar inlog pagina " />