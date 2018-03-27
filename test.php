<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lab17</title>
    <style>
div {
  border-radius: 25px;
  background: #73AD21;
  padding: 25px;
  width: 200px;
  height: 350px;
  padding: 25px;
}
.grad1 {
    background: red; /* For browsers that do not support gradients */
    background: linear-gradient(red 0% , GreenYellow 100%); /* Standard syntax (must be last) */
}
.grad2 {
    background: red; /* For browsers that do not support gradients */
    background: linear-gradient(red 0% , greenyellow 90%); /* Standard syntax (must be last) */
}
.round {
    border-radius: 25px;
}

#button {
  margin-left: 10px;
  text-decoration: underline;
  display: inline-block;
}
</style>
  </head>
  <body>
    <form method="post">
    <div class="grad1">
      <input class="round" type="text" name="voornaam" placeholder="Voornaam"><br>
      <br>
      <input class="round" type="text" name="achternaam" placeholder="Achternaam"><br>
      <br>
      <input class="round" type="text" name="geboortedatum" placeholder="Geboortedatum"><br>
      <br>
      <input class="round" type="text" name="adres" placeholder="Adres"><br>
      <br>
      <input class="round" type="text" name="postcode" placeholder="Postcode"><br>
      <br>
      <input class="round" type="text" name="plaats" placeholder="Plaats"><br>
      <br>
      <input class="round" type="text" name="email" placeholder="E-mailadres"><br>
      <br>
      <input class="round" type="text" name="wachtwoord" placeholder="Wachtwoord"><br>
      <br>
      Minderjarig: Ja <input type="radio" name="ja" value="ja">
      Nee <input type="radio" name="nee" value="nee"><br>
      <input class="grad2 round" type="submit" name="aanmelden" value="Aanmelden">
      <input class="grad2 round" id="button" type="reset" name="annuleren" value="Annuleren"><br>
    </div>


    </form>
    <?php
      $gebruiker = array("voornaam" =>"Sunny","achternaam" =>"Boy","geboortedatum" =>"11-11-11","adres" =>"Sunnystraat 11","postcode" =>"1111 SU","plaats" =>"Sunnycity","voornaam" =>"Sunny", );
      $jsonObject= json_encode($gebruiker);
      echo "<br><br>". $jsonObject;
    ?>
  </body>
</html>
