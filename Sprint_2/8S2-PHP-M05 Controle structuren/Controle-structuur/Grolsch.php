    <?php

      $leeftijd = rand(10,30);

      if ($leeftijd > 18)
      {
        header("Location: http://www.grolsch.nl");

      } else {

            header("Location: https://www.alcoholinfo.nl/publiek");
    }

  ?>
