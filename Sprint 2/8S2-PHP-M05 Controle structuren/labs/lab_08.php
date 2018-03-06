<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type"
          content="text/html"
          charset="UTF-8" />
    <title>Mijn Muziek</title>
</head>

<body>
<!--Shoppingcart begint hier-->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <form name="order"
    action=""
    method="POST">
        <tr>
            <td>
                <img src="rabbit.jpg" width="100px" alt="X" />
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
                Korting:<br />
                <input type="checkbox" name="student" value="15" />Student 15%<br />
                <input type="checkbox" name="senior" value="10" />Senior 10%<br />
                <input type="checkbox" name="klant" value="5" />Klant 5%<br />
            </td>
        </tr>
        <tr>
          <td>


          </td>
        </tr>
        <tr>
            <td>
            <p>Selecteer een betalingswijze:</p>
                <select name="betaling" value="true">
                    <option value=""></option>
                    <option value="visa">Visa</option>
                    <option value="mastercard">Mastercard</option>
                    <option value="paypal">PayPal</option>
                    <option value="ideal">Ideal</option>
                  <input type="submit" width="300px" name="submit"
                         value="       Bestellen       "/>
                       <hr />
            </td>
        </tr>


</table>
<!--Shoppingcart eindigt hier-->
</body>
</html>
<?php
if(isset($_POST["submit"])){
    if(empty($_POST["aantal"])) {
        echo "aantal niet ingevuld";
    }
    else{
        $aantal = $_POST["aantal"];
        if (empty($_POST["aantal"])){
            echo "aantal niet ingevuld";
        }
        elseif (empty($_POST["aantal"])){
            echo "aantal niet ingevuld";
        }
        else {
            echo "Aantal is: $aantal";
        }
    } }

$kortingtot = 0;
$korting1 = 0;
$korting2 = 0;
$korting3 = 0;

if(isset($_POST["submit"])) {
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
if(isset($_POST["submit"]))
{
    switch ($_POST['betaling']):
    case "visa" :
        echo "<p>U heeft visa als betalingswijze gekozen</p>";
        break;
case "mastercard" :
        echo "<p>U heeft mastercard als betalingswijze gekozen</p>";
        break;
        case "paypal" :
        echo "<p>U heeft paypal als betalingswijze gekozen</p>";
        break;
        case "ideal" :
        echo "<p>U heeft ideal als betalingswijze gekozen</p>";
        break;
endswitch; }
?>
