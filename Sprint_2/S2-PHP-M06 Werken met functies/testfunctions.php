<?php
include 'myfunctions.php';
?>
<link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
<style>
    *{
        padding: 0; margin: 0; margin-left: 20px;
    }
    h1,p{
        font-family: 'Mina', sans-serif;
    }
</style>
<br>
    <h1>Reverse</h1>
        <p>• <?php reverse(); ?></p>
<br>
    <h1>isPrime</h1>
        <p>• Nummer 3 = <?php is_Prime(3); ?></p>
        <p>• Nummer 4 = <?php is_Prime(4) ?></p>
<br>
    <h1>isUppercase</h1>
        <p>• String PRJAO = <?php isUpperCase("PRJAO") ?></p>
        <p>• String prjao = <?php isUpperCase("prjao") ?></p>
<br>
    <h1>isPalindrome</h1>
        <p>• String koortsmeetsysteemstrook = <?php isPalindrome("koortsmeetsysteemstrook") ?></p>
        <p>• String systeem = <?php isPalindrome("systeem") ?></p>
<br>
    <h1>Max</h1>
        <p>• in Array array(10,123,81,555) = <?php MaxF() ?></p>
<br>
<form method="post" style="border: 1px solid black;display: inline-block; padding: 10px;">
    <h1>BSN Nummer</h1>
    <input type="text" name="bsn_nummer">
    <input type="submit" name="knop" value="Check">
</form><br><br>
<div class="errors" style="border: 1px solid black;display: inline-block; padding: 10px;">
    <h1>Error nummers</h1>
    <p>0 Geldig nummer</p>
    <p>#1 Bestaat niet uit 9 tekens</p>
    <p>#2 Het nummer bestaat niet uit alleen cijfers</p>
    <p>#3 Het nummer is niet alleen cijfers en de lengte is niet correct</p>
    <p>#4 Het nummer voldoet niet aan Elfproef</p>
</div>
