<!DOCTYPE html>
<html>
<head>
<title>Mr Wheely</title>
<link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css">
</head>
<body>
<form action="index.php" method="POST">
	<label>min prijs</label>
	<input id="minprijsvak" type="text" name="prijsmin" value="9499">
	<br>
	<label>max prijs</label>
	<input id="maxprijsvak" type="text" name="prijsmax" value="222651">
	<br>
	<input id="knop" type="submit" name="knop" value="OK">
	<select name="merk">
		<option value="Alle merken">Alle Merken</option>
		<option value="Audi">Audi</option>
		<option value="Ferrari">Ferrari</option>
		<option value="Fiat">Fiat</option>
		<option value="Mercedes">Mercedes</option>
		<option value="Opel">Opel</option>
		<option value="Volkswagen">Volkswagen</option>
	</select>
</form>

<?php
include("car.php");
include("array.php");

$merken = $_POST["merk"];
$prijsmin = $_POST["prijsmin"];
$prijsmax = $_POST["prijsmax"];
	
	if ($merken == ""){
		$prijsmin = 9499;
		$prijsmax = 222651;
	}
	
	foreach ($carList as $value) {
		if ($merken == "" || $merken == "Alle merken" || $merken == $value->getMerk()){	
			if ($value->getPrijs() > $prijsmin && $value->getPrijs() < $prijsmax) {
				echo '<div class="auto">';
				echo "Merk: ". $value->getMerk();
				echo "<br>";
				echo "Prijs: ". $value->getPrijs();
				echo "<br>";
				echo "<img src=images/".$value->getFoto().' alt="Car">';
				echo '</div>';
				
			}
		}
	}
?>	
</body>
</html>