<!DOCTYPE html>
<html>
	<head>
		<title>Dobbel Opdracht 1</title>
	</head>
	<body>
		<form action="" method="post">
			<input type="submit" name="dobbel" value="Dobbel">
		</form>
		<?php
    $array = array();
			if(isset($_POST['dobbel'])){


				for($x = 0; $x < 5; $x++){
					array_push($array,rand(1,6));
				}
			}
		?>
		<hr>er
		<?php
			$totaal = 0;

			echo '<p>Dobbels Gegooid: ';

			foreach($array as $worp){
				echo '<b>'.$worp.'</b> ';
				$totaal = $totaal + $worp;
			}

			echo 'totaal: <b>'.$totaal.'</b></p>';
		?>
	</body>
</html>
