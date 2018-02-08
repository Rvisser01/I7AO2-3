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
        $Dobbelsteen = array("1" => "img/Dobbelsteen_1oog.jpg","2" => "img/Dobbelsteen_2oog.jpg","3" => "img/Dobbelsteen_3oog.jpg",
         "4" => "img/Dobbelsteen_4oog.jpg","5" => "img/Dobbelsteen_5oog.jpg","6" => "img/Dobbelsteen_6oog.jpg");

        $randomNumber = array_rand($Dobbelsteen);
        $randomImage = $Dobbelsteen[$randomNumber];

        echo "<img src=\"$randomImage\" border=\"5\">";
    }

    displayRandomPhotoArea();

    function displayRandomPhotoArea2()
    {
        $Dobbelsteen = array("1" => "img/Dobbelsteen_1oog.jpg","2" => "img/Dobbelsteen_2oog.jpg","3" => "img/Dobbelsteen_3oog.jpg",
         "4" => "img/Dobbelsteen_4oog.jpg","5" => "img/Dobbelsteen_5oog.jpg","6" => "img/Dobbelsteen_6oog.jpg");

        $randomNumber = array_rand($Dobbelsteen);
        $randomImage = $Dobbelsteen[$randomNumber];

        echo "<img src=\"$randomImage\" border=\"5\">";
    }

    displayRandomPhotoArea2();

    function displayRandomPhotoArea3()
    {
        $Dobbelsteen= array("1" => "img/Dobbelsteen_1oog.jpg","2" => "img/Dobbelsteen_2oog.jpg","3" => "img/Dobbelsteen_3oog.jpg",
         "4" => "img/Dobbelsteen_4oog.jpg","5" => "img/Dobbelsteen_5oog.jpg","6" => "img/Dobbelsteen_6oog.jpg");

        $randomNumber = array_rand($Dobbelsteen);
        $randomImage = $Dobbelsteen[$randomNumber];

        echo "<img src=\"$randomImage\" border=\"5\">";
    }

    displayRandomPhotoArea3();

    function displayRandomPhotoArea4()
    {
        $Dobbelsteen= array("1" => "img/Dobbelsteen_1oog.jpg","2" => "img/Dobbelsteen_2oog.jpg","3" => "img/Dobbelsteen_3oog.jpg",
         "4" => "img/Dobbelsteen_4oog.jpg","5" => "img/Dobbelsteen_5oog.jpg","6" => "img/Dobbelsteen_6oog.jpg");

        $randomNumber = array_rand($Dobbelsteen);
        $randomImage = $Dobbelsteen[$randomNumber];

        echo "<img src=\"$randomImage\" border=\"5\">";
    }

    displayRandomPhotoArea4();

    function displayRandomPhotoArea5()
    {
        $Dobbelsteen= array("1" => "img/Dobbelsteen_1oog.jpg","2" => "img/Dobbelsteen_2oog.jpg","3" => "img/Dobbelsteen_3oog.jpg",
         "4" => "img/Dobbelsteen_4oog.jpg","5" => "img/Dobbelsteen_5oog.jpg","6" => "img/Dobbelsteen_6oog.jpg");

        $randomNumber = array_rand($Dobbelsteen);
        $randomImage = $Dobbelsteen[$randomNumber];

        echo "<img src=\"$randomImage\" border=\"5\">";
    }

    displayRandomPhotoArea5();
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
