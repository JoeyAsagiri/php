<?php
$a = false;
	if($_POST["inlognaam"] == "piet@worldonline.nl"){
		if($_POST["wachtwoord"] == "doetje123"){
			$a = true;
			echo "Welkom!";
		}
	}
		if($_POST["inlognaam"] == "klaas@carpets.nl"){
		if($_POST["wachtwoord"] == "snoepje777"){
			$a = true;
			echo "Welkom!";
		}
	}
		if($_POST["inlognaam"] == "truushendriks@wegweg.nl"){
		if($_POST["wachtwoord"] == "arkiearkie201"){
			$a = true;
			echo "Welkom!";
		}
	}

	if ($a == false) {
		echo "Sorry, geen toegang!";
	}
	echo '<form action="/PHP/login/formulier.html">';
    echo '<input type="submit" value="Ga terug naar de vorige pagina">';
	echo '</form>';
?>