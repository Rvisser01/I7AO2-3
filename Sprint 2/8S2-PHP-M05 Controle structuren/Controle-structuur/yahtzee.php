<?php


  function Dobbelsteen1()
  {
    $Dobbelsteen = array("1","2","3","4","5","6");
    $RandomDobbelsteen = array_rand($Dobbelsteen,1);
    $RandomDobbelsteen++;
    echo "$RandomDobbelsteen";
  }
  $Uitkomst = array("");
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dobbel Opdracht 2</title>
	</head>
	<body>
    <?php
      array_push($Uitkomst,Dobbelsteen1());
      array_push($Uitkomst,Dobbelsteen1());
      array_push($Uitkomst,Dobbelsteen1());
      array_push($Uitkomst,Dobbelsteen1());
      array_push($Uitkomst,Dobbelsteen1());

      switch ($Uitkomst) {
        case '$Uitkomst[0] == $Uitkomst[1] == $Uitkomst[2] == $Uitkomst[3] == $Uitkomst[4] == 1':
          echo "Je hebt Yahtzee met 1";
          break;

        case '$Uitkomst[0]==$Uitkomst[1]==$Uitkomst[2]==$Uitkomst[3]==$Uitkomst[4] == 2':
          echo "Je hebt Yahtzee met 2";
          break;

        case '$Uitkomst[0]==$Uitkomst[1]==$Uitkomst[2]==$Uitkomst[3]==$Uitkomst[4]==3':
          echo "Je hebt Yahtzee met 3";
          break;

        case '$Uitkomst[0]==$Uitkomst[1]==$Uitkomst[2]==$Uitkomst[3]==$Uitkomst[4]==4':
          echo "Je hebt Yahtzee met 4";
          break;

        case '$Uitkomst[0]==$Uitkomst[1]==$Uitkomst[2]==$Uitkomst[3]==$Uitkomst[4]==5':
          echo "Je hebt Yahtzee met 5";
          break;

        default:

          break;
      }
    ?>
	</body>
</html>
