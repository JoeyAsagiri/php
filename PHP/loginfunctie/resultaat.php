<?php
$a = false;
inloggen($_POST["inlognaam"],$_POST["wachtwoord"]);

function inloggen($naam, $wachtwoord){
	if($naam == "piet@worldonline.nl"){
		if($wachtwoord == "doetje123"){
			$a = true;
		}
	}
			if($_POST["inlognaam"] == "klaas@carpets.nl"){
		if($_POST["wachtwoord"] == "snoepje777"){
			$a = true;
		}
	}
		if($_POST["inlognaam"] == "truushendriks@wegweg.nl"){
		if($_POST["wachtwoord"] == "arkiearkie201"){
			$a = true;
		}
	}
	if ($a == false){
		echo "Sorry, geen toegang!";
	} else {
		echo "Welkom!";
	}
}
	echo '<form action="/PHP/loginfunctie/formulier.html">';
    echo '<input type="submit" value="Ga terug naar de vorige pagina">';
	echo '</form>';
?>