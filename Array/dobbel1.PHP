<!DOCTYPE html>
<html>
<body>

<?php
$Dobbelsteen1=array("<img src=\"img/Dobbelsteen_1oog.jpg\" />","2"=>"2","3"=>"3","4"=>"4");
print_r(array_rand($Dobbelsteen1,1));
"<br>";
$Dobbelsteen2=array("1"=>"1","2"=>"2","3"=>"3","4"=>"4");
print_r(array_rand($Dobbelsteen2,1));
"<br>";
$Dobbelsteen3=array("1"=>"1","2"=>"2","3"=>"3","4"=>"4");
print_r(array_rand($Dobbelsteen3,1));
"<br>";
$Dobbelsteen4=array("1"=>"1","2"=>"2","3"=>"3","4"=>"4");
print_r(array_rand($Dobbelsteen4,1));
"<br>";
$Dobbelsteen5=array("1"=>"1","2"=>"2","3"=>"3","4"=>"4");
print_r(array_rand($Dobbelsteen5,1));
"<br>";
?>



<button onclick="myFunction()">Dobbel</button>

<script>
function myFunction() {
    location.reload();
}
</script>

</body>
</html>
