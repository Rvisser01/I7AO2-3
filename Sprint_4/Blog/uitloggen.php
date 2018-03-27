<?php
//Vind de sessie
  session_start();
  //Einde sessie aanmelden
  echo "Tot ziens " . $_SESSION['user'];
  //Verwijder sessie
  session_destroy();
 ?>
