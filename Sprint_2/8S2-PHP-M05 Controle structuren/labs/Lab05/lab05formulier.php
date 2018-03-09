<!DOCTYPE html>
<html lang="nl">
  <head>
    <link rel="stylesheet" type="text/css" href="css\lab05.css">
    <meta charset="utf-8">
    <title>Lab05</title>
  </head>
  <body>
    <form action="lab05verwerken.php" method="post">
      <h2>Inschrijfformulier:</h2>
      <br>
    <table style="width:20%">
      <tr>
        <td>Achternaam:</td>
        <td><input type="text" name="achternaam"></td>
      </tr>
      <tr>
        <td>Voornaam:</td>
        <td><input type="text" name="voornaam"></td>
      </tr>
      <tr>
        <td>Adres:</td>
        <td><input type="text" name="adres"></td>
      </tr>
      <tr>
        <td>Postcode:</td>
        <td><input type="text" name="postcode"></td>
      </tr>
      <tr>
        <td>Plaats:</td>
        <td><input type="" name="plaats"></td>
      </tr>
      <tr>
        <td>E-mailadres:</td>
        <td><input type="text" name="email"></td>
      </tr>
      </table>


      <br>
      <br>Kies een opleiding:
      <br><input type="radio" name="vak" value="I"> ICT
      <br><input type="radio" name="vak" value="E"> Engels
      <br><input type="radio" name="vak" value="T"> Techniek
      <br><input type="radio" name="vak" value="N"> Nederlands
      <br>
      <br>
      <input type="submit" name="submit" value="versturen">
      <input type="reset" name="reset" value="reset">

    </form>
  </body>
</html>
