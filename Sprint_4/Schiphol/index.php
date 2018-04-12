<?php
//Connect to DB
$con = mysqli_connect("vserver49.axc.nl", "robbiwn275_schiphol", "robbin", "robbiwn275_schiphol") or die("couldn't connect to the database!");

$SQLselectAll = "SELECT * FROM klachten";
$runSelectAll = mysqli_query($con, $SQLselectAll);
$row = mysqli_fetch_array($runSelectAll);

$naam = htmlspecialchars($row["naam"], ENT_QUOTES, 'UTF-8');
echo "$naam";
?>
