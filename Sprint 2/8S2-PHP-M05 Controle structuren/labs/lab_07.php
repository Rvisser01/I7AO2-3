<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta http-equiv="Content-Type"
    content="text/html;
    charset=UTF-8" />
    <title>Mijn Muziek</title>
  </head>
  <body>
  <!--Shoppingcart begint hier-->
    <table border=0 cellpadding=0 cellspacing=0 width=100%>
      <form name="order"
      action=""
      method="POST">
        <tr>
          <td>
          <img src="images/evora.jpg" width="100px" alt="X" />
          </td>
        </tr>
      <tr>
      <td>
      Cesaria Evora "Em Um Concerto" Tracks:10 Prijs 9.99
      </td>
    </tr>
    <tr>
      <td>
      <input type="hidden" name="albumcode[0]"
      value="001" />
      <input type="hidden" name="artiest[0]"
      value="Cesaria Evora" />
      <input type="hidden" name="title[0]"
      value="Em Um Concerto" />
      <input type="hidden" name="tracks[0]"
      value="10" />
      <input type="hidden" name="prijs[0]"
      value="9.99" />
      <input type="hidden" name="genre[0]"
      value="World" />

      Aantal: <input type="text" size=2 maxlength=3
      name="aantal[0]" value="0"
      style="background-color:#f8ce6c" />
      <hr />
      </td>
    </tr>

    <tr>
      <td>Korting:<br />
      <input type="checkbox" name="student"
      value="15" />Student 15%<br />
      <input type="checkbox" name="senior"
      value="10" />Senior 10%<br />
      <input type="checkbox" name="klant"
      value="5" />Klant 5%<br />
      <hr />
      </td>
    </tr>
    <tr>
      <td>
      <input type="submit" width="300px" name="submit"
      value="      Bestellen      " />
      <hr />
      </td>
    </tr>
    </form>
    </table>
  <?php
    if (isset($_POST["student"])  )  $korting = $korting + 15;
    if (isset($_POST["senior"])  )  $korting = $korting + 10;
    if (isset($_POST["klant"])  )  $korting = $korting + 5;
    echo "Aantal is: <br>";
    echo "Korting is: ";
  ?>
<!--Shoppingcart eindigt hier-->
</body>
</html>
