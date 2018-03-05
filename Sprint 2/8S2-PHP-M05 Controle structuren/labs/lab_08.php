<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type"
          content="text/html"
          charset="UTF-8">
    <title>Mijn Muziek</title>
</head>

<body>
<!--Shoppingcartbegint hier-->
<form action="bestellen.php" method="post">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td>
                <img src="/" width="100px" alt="X" />
            </td>
        </tr>
        <tr>
            <td>
                Cesaria Evora "Em Um Concerto" Tracks:10 Prijs:9,99
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="Albumcode[0]" value="001" />
                <input type="hidden" name="Artiest[0]" value="Cesaria Evora" />
                <input type="hidden" name="Titel[0]" value="Em Um Concerto" />
                <input type="hidden" name="Tracks[0]" value="10" />
                <input type="hidden" name="Prijs[0]" value="9,99" />
                <input type="hidden" name="Genre [0]" value="World" />

                Aantal: <input type="text" size="2" maxlength="3" name="aantal" value="0"
                               style="background-color: #f8ce6c" />
                <hr />
            </td>
        </tr>
        <tr>
            <td>
                <img src="" width="100px" alt="X" />
            </td>
        </tr>
        <tr>
            <td>
                Manu Chao "Clandestino" Tracks:12 Prijs: 9,50
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="Albumcode[1]" value="002" />
                <input type="hidden" name="Artiest[1]" value="Man Chao" />
                <input type="hidden" name="Titel[1]" value="Clandestino" />
                <input type="hidden" name="Tracks[1]" value="12" />
                <input type="hidden" name="Prijs[1]" value="9,50" />
                <input type="hidden" name="Genre [1]" value="Latin" />

                Aantal: <input type="text" size="2" maxlength="3" name="album" value="0"
                               style="background-color: #f8ce6c" />
                <hr />
            </td>
        </tr>

        <tr>
            <td>
                Korting:<br />
                <input type="checkbox" name="student" value="15" />Student 15%<br />
                <input type="checkbox" name="senior" value="10" />Senior 10%<br />
                <input type="checkbox" name="klant" value="5" />Klant 5%<br />
                <hr />
            </td>
        </tr>
        <tr>
            <td>
                <p>Selecteer een betalingswijze</p>

            </td>
        </tr>
</table>
<select name="betalinswijze" value="true">
    <option value=""></option>
    <option value="visa">Visa</option>
    <option value="mastercard">Mastercard</option>
    <option value="paypal">PayPal</option>
    <option value="ideal">Ideal</option>
    <input type="submit" width="300px" name="submit"
           value="       Bestellen       "/>
<!--Shoppingcart eindigt hier-->
</body>
</form>
</html>
<?php
$x = $_POST["album"];
if(isset($_POST["submit"])){
    if(empty($_POST["aantal"])) {
        echo "";
    }
    else{
        $aantal = $_POST["aantal"];
        $aantal1 = $_POST["album"];
        $aantaltot = $aantal + $aantal1;
        $aantaltot = $aantal + $aantal1;
        }
    }

if(isset($_POST["submit"])) {
    if (empty($_POST["album"])) {
        echo "";
    } else {
        $aantal = $_POST["aantal"];
        $aantal1 = $_POST["album"];
        $aantaltot = $aantal + $aantal1;
    }
    }
echo "<br>Aantal totaal is: $aantaltot";
    $kortingtot = 0;
    $korting1 = 0;
    $korting2 = 0;
    $korting3 = 0;

    if (isset($_POST["submit"])) {
        if (isset($_POST["student"]))
            $korting1 = $korting1 + 15;

        if (isset($_POST["submit"])) {
            if (isset($_POST["senior"]))
                $korting2 = $korting2 + 10;
            if (isset($_POST["submit"])) {
                if (isset($_POST["klant"]))
                    $korting3 = $korting3 + 5;

                $kortingtot = $korting1 + $korting2 + $korting3;
                echo "<br>Korting is: $kortingtot%";
            }
        }

}
include ("externefunctions.php");
$servicekosten = ($betalinswijze);
echo "<br>Servicekosten:" . $servicekosten;
?>
