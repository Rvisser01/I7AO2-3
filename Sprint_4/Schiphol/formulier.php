<?php
//Connect to DB
$con = mysqli_connect("vserver275.axc.nl", "robbiwn275_schiphol", "robbin", "robbiwn275_schiphol") or die("couldn't connect to the database!");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Schiphol</title>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<!-- Bootstrap core CSS -->
<link href="https://mdbootstrap.com/previews/docs/latest/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://mdbootstrap.com/previews/docs/latest/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<meta charset="utf-8">
</head>
<body>
  <div class="view overlay zoom">
      <img src="img/header-schiphol.jpg" class="img-fluid" alt="zoom" width="100%">
      <div class="mask flex-center waves-effect waves-light"></div>
  </div>
<div class="container">
<div class="view overlay zoom">
</div>
<!-- Default klacht -->
              <form method="post">
                <br>
                <center>
                  <p class="h4 mb-4">Klachten Formulier</p>
                  <?php

                  if (isset($_POST['terug'])) {
                    echo "<script>setTimeout(function () {location.href = 'index.html'; }, 0);</script>";
                  }

                  if (isset($_POST['send'])) {
                    $naam = $_POST['naam'];
                    $tussen = $_POST['tussen'];
                    $achternaam = $_POST['achternaam'];
                    $adres = $_POST['adres'];
                    $postcode = $_POST['postcode'];
                    $email = $_POST['email'];
                    $klachtText = $_POST['klacht'];

                    $error = false;

                    if (!($naam == "")) {

                    } else {
                      //naam leeg
                      $error = true;
                    }

                    if (!($achternaam == "")) {

                    } else {
                      //achternaam leeg
                      $error = true;
                    }

                    if (!($adres == "")) {

                    } else {
                      //adres leeg
                      $error = true;
                    }

                    if (!($postcode == "")) {

                    } else {
                      //postcode leeg
                      $error = true;
                    }

                    if (!($email == "")) {

                    } else {
                      //email leeg
                      $error = true;
                    }

                    if (!($klachtText == "")) {

                    } else {
                      //klacht leeg
                      $error = true;
                    }

                    if ($error == false) {
                      $sql = "INSERT INTO `klachten`(`naam`, `tussenvoegsel`, `achternaam`, `adres`, `postcode`, `email`,`klacht`) VALUES ('$naam','$tussen','$achternaam','$adres', '$postcode', '$email', '$klachtText')";
                      $run = mysqli_query($con, $sql);

                      echo "<script>setTimeout(function () {location.href = 'klachten.php'; }, 0);</script>";
                    } else {
                      echo "<br>";
                      echo "<p>Vul alle vakken in met een *!</p>";
                    }
                  }

                   ?>
                </center>
                  <!-- Default input name -->
                  <label for="defaultFormContactNameEx" class="grey-text">Naam</label>
                  <input type="text" id="defaultFormContactNameEx" class="form-control" name="naam">
                  <br>
                  <!-- Default input email -->
                  <label for="defaultFormContactEmailEx" class="grey-text">Tussenvoegsel</label>
                    <input type="Text" id="defaultFormContactEmailEx" class="form-control" name="tussen">
                  <br>
                  <!-- Default input email -->
                  <label for="defaultFormContactEmailEx" class="grey-text">Achternaam</label>
                    <input type="Text" id="defaultFormContactEmailEx" class="form-control" name="achternaam">
                  <br>
                  <!-- Default input subject -->
                  <label for="defaultFormContactSubjectEx" class="grey-text">Adres</label>
                    <input type="text" id="defaultFormContactSubjectEx" class="form-control" name="adres">
                  <br>
				          <!-- Default input name -->
                  <label for="defaultFormContactNameEx" class="grey-text">Postcode</label>
                    <input type="text" id="defaultFormContactNEx" class="form-control" name="postcode">
				          <br>
                  <!-- Default input name -->
                  <label for="defaultFormContactNameEx" class="grey-text">Email</label>
                    <input type="text" id="defaultFormContactNaeEx" class="form-control" name="email">
				          <br>
                  <!-- Default textarea message -->
                  <label for="defaultFormContactMessageEx" class="grey-text">Klacht</label>
                    <textarea type="text" id="defaultFormContactMessageEx" class="form-control" rows="3" name="klacht"></textarea>

                  <!-- Buttons -->
                  <div class="text-center mt-4">
                      <input type="submit" class="btn btn-outline-default" name="terug" value="Terug">
                      <input type="submit" class="btn btn-outline-default" name="send" value="Verzend">
				          </div>
              </form>
              <!-- Default klacht -->
              <br>
            </div>
	   <footer class="page-footer font-small stylish-color-dark pt-4 mt-4">

          <!--Footer Links-->
          <div class="container text-center text-md-left">
            <h6 class="text-uppercase mb-4 font-weight-bold">Groep 3</h6>
              <!-- Footer links -->
              <div class="row text-center text-md-left mt-3 pb-3">

                  <!--First column-->
                      <br>
                      <p>Wij zijn een groep voor een school project. <p>De groep bestaat uit 5 leden:
                         Damian Trojak, Robbin Visser, Arben Hajrizaj, Pim Hoomans, Peter Kuipers en de scrummaster Laurence van der Wel.</p></p>
                  <!--/.First column-->
                  <!--Grid column-->
                  <div class="col-md-8 col-lg-8">

                      <!--Copyright-->
                      <p class="text-center text-md-left grey-text">© 2018 Copyright: <strong>Laurence van der Wel</strong></p>
                      <!--/.Copyright-->

                  </div>
                  <!--Grid column-->
              </div>
            </div>

</footer>
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
