<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dobbelsteen</title>
  </head>
  <body>

    <?php
    function displayRandomPhotoArea()
    {
        $Dobbelsteen1 = array("1" => "img/Dobbelsteen_1oog.jpg","2" => "img/Dobbelsteen_2oog.jpg","3" => "img/Dobbelsteen_3oog.jpg",
         "4" => "img/Dobbelsteen_4oog.jpg","5" => "img/Dobbelsteen_5oog.jpg","6" => "img/Dobbelsteen_6oog.jpg");

        global $Dobbelsteen1;
        $randomNumber = array_rand($Dobbelsteen1);
        $randomImage = $Dobbelsteen1[$randomNumber];

        echo "<img src=\"$randomImage\" border=\"5\">";
    }

    displayRandomPhotoArea();

    function displayRandomPhotoArea2()
    {
        $Dobbelsteen2 = array("1" => "img/Dobbelsteen_1oog.jpg","2" => "img/Dobbelsteen_2oog.jpg","3" => "img/Dobbelsteen_3oog.jpg",
         "4" => "img/Dobbelsteen_4oog.jpg","5" => "img/Dobbelsteen_5oog.jpg","6" => "img/Dobbelsteen_6oog.jpg");

         global $Dobbelsteen2;
        $randomNumber = array_rand($Dobbelsteen2);
        $randomImage = $Dobbelsteen2[$randomNumber];

        echo "<img src=\"$randomImage\" border=\"5\">";
    }

    displayRandomPhotoArea2();

    function displayRandomPhotoArea3()
    {
        $Dobbelsteen3 = array("1" => "img/Dobbelsteen_1oog.jpg","2" => "img/Dobbelsteen_2oog.jpg","3" => "img/Dobbelsteen_3oog.jpg",
         "4" => "img/Dobbelsteen_4oog.jpg","5" => "img/Dobbelsteen_5oog.jpg","6" => "img/Dobbelsteen_6oog.jpg");

        global $Dobbelsteen3;
        $randomNumber = array_rand($Dobbelsteen3);
        $randomImage = $Dobbelsteen3[$randomNumber];

        echo "<img src=\"$randomImage\" border=\"5\">";
    }

    displayRandomPhotoArea3();

    function displayRandomPhotoArea4()
    {
        $Dobbelsteen4 = array("1" => "img/Dobbelsteen_1oog.jpg","2" => "img/Dobbelsteen_2oog.jpg","3" => "img/Dobbelsteen_3oog.jpg",
         "4" => "img/Dobbelsteen_4oog.jpg","5" => "img/Dobbelsteen_5oog.jpg","6" => "img/Dobbelsteen_6oog.jpg");

        global $Dobbelsteen4;
        $randomNumber = array_rand($Dobbelsteen4);
        $randomImage = $Dobbelsteen4[$randomNumber];

        echo "<img src=\"$randomImage\" border=\"5\">";
    }

    displayRandomPhotoArea4();

    function displayRandomPhotoArea5()
    {
        $Dobbelsteen5 = array("1" => "img/Dobbelsteen_1oog.jpg","2" => "img/Dobbelsteen_2oog.jpg","3" => "img/Dobbelsteen_3oog.jpg",
         "4" => "img/Dobbelsteen_4oog.jpg","5" => "img/Dobbelsteen_5oog.jpg","6" => "img/Dobbelsteen_6oog.jpg");

        global $Dobbelsteen5;
        $randomNumber = array_rand($Dobbelsteen5);
        $randomImage = $Dobbelsteen5[$randomNumber];

        echo "<img src=\"$randomImage\" border=\"5\">";
    }

    displayRandomPhotoArea5();

    $Totaal = ($Dobbelsteen1 + $Dobbelsteen2 + $Dobbelsteen3 + $Dobbelsteen4 + $Dobbelsteen5);
    echo "$Totaal";
    ?>
    <br />
    <center>
      <button onclick="myFunction()"  width="300" height="300">Dobbel</button>

      <script>
      function myFunction() {
          location.reload();
      }
      </script>
    </center>
  </body>
</html>
