<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <?php
     ini_set('display_errors', 1);
     error_reporting(E_ALL);
     if($_SERVER['REQUEST_METHOD']  ==  "POST"){
          $aantal = intval($_POST['invoer']);
          }
     else{
         $aantal = 5; // standaard aantal
         }
     $max = 20;
     if($aantal == 0){
         echo 'Met 0 dobbelstenen kan je niet gooien';
         }
     elseif($aantal <= $max){
         // dobbelsteen initialiseren om een waarschuwing te voorkomen.
         $dobbelsteen = array();
         for($i = 1; $i <= $aantal; $i++){
             $dobbelsteen[$i] = rand(1,6);
             }
         foreach($dobbelsteen as $steennummer => $waarde){
             echo 'Dobbelsteen '.$steennummer.': '. $waarde.'<br />';
             }
         }
     else{
         echo 'Er kunnen niet meer dan '.$max.' dobbelstenen in 1 keer worden geworpen';
         }
 ?>
  </body>
</html>
