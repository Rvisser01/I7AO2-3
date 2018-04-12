<?php
//Connect to DB
$con = mysqli_connect("vserver275.axc.nl", "robbiwn275_schiphol", "robbin", "robbiwn275_schiphol") or die("couldn't connect to the database!");
?>

<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://mdbootstrap.com/previews/docs/latest/css/bootstrap.min.css">

   <!-- Material Design Bootstrap -->
   <link rel="stylesheet" href="https://mdbootstrap.com/previews/docs/latest/css/mdb.min.css">

    <meta charset="utf-8">
    <title>Schiphol</title>
  </head>
  <body>
    <!--Zoom effect-->
    <div class="view overlay zoom">
        <img src="img/header-schiphol.jpg" class="img-fluid" alt="zoom" width="100%">
        <div class="mask flex-center waves-effect waves-light">
        </div>
    </div>
    <center>
      <br>
    <img src="img/foto1.jpg" alt="klacht" height="100px">
    <img src="img/foto2.jpg" alt="klacht" height="100px">
    <img src="img/foto3.jpg" alt="klacht" height="100px">
    <br>
    <br>
    <div class="btn-group" role="group" aria-label="Basic example">
      <a href="about.html"><button type="button" class="btn blue btn-rounded">Over ons</button></a>
      <a href="formulier.php"><button type="button" class="btn blue btn-rounded">Meld klacht</button></a>
      <a href="klachten.php"><button type="button" class="btn blue btn-rounded">klachten</button></a>
    </div>
    </center>
    <?php
    $SQLselectAll = "SELECT * FROM klachten";
    $runSelectAll = mysqli_query($con, $SQLselectAll);

    while($row = mysqli_fetch_array($runSelectAll)) {
      $naam = htmlspecialchars($row["naam"], ENT_QUOTES, 'UTF-8');
      $tussen = htmlspecialchars($row["tussenvoegsel"], ENT_QUOTES, 'UTF-8');
      $achternaam = htmlspecialchars($row["achternaam"], ENT_QUOTES, 'UTF-8');
      $adres = htmlspecialchars($row["adres"], ENT_QUOTES, 'UTF-8');
      $postcode = htmlspecialchars($row["postcode"], ENT_QUOTES, 'UTF-8');
      $email = htmlspecialchars($row["email"], ENT_QUOTES, 'UTF-8');
      $klachtText = htmlspecialchars($row["klacht"], ENT_QUOTES, 'UTF-8');

      echo "
      <div class='card'>
        <h3 class='card-header primary-color white-text'>$naam $tussen $achternaam</h3>
          <div class='card-body'>
              <h4 class='card-title'>$email</h4>

              <h5 class='card-subtitle mb-2 text-muted'>$adres $postcode</h5>
              <hr>
              <p class='card-text'>$klachtText</p>
          </div>
      </div>
      <br>
      ";
    }
     ?>
        <img src="f" alt="">
    <!--Footer-->
    <!--Footer-->
    <footer class="page-footer font-small stylish-color-dark pt-4 mt-4">

        <!--Footer Links-->
        <div class="container text-center text-md-left">
          <h6 class="text-uppercase mb-4 font-weight-bold">Schiphol</h6>
            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3">

                <!--First column-->
                    <br>
                    <p>Meldpunt schiphol. Op onze webpagina kunt u klachten bekijken van omwonenden. Ook kunt u zelf hier klachten indienen als u rondom vliegveld Schiphol woont.</p>
                <!--/.First column-->
            </div>
            <!-- Footer links -->

            <hr>

            <div class="row py-3 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-8 col-lg-8">

                    <!--Copyright-->
                    <p class="text-center text-md-left grey-text">© 2018 Copyright: <strong>Groep 3</strong></p>
                    <!--/.Copyright-->

                </div>
                <!--Grid column-->

            </div>

        </div>

    </footer>
    <!--/.Footer-->




    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/docs/latest/js/jquery-3.2.1.min.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/docs/latest/js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/docs/latest/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/docs/latest/js/mdb.min.js"></script>
  </body>
</html>
