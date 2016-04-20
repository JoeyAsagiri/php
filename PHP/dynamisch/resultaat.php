<?php
	if($_GET["inlognaam"] != null){
		if($_GET["wachtwoord"] != null){
			echo "Het inlognaam is: ".$_GET["inlognaam"];
			echo "<br>";
			echo "Het wachtwoord is: ".$_GET["wachtwoord"];
		}
		else {
			echo "Er is geen wachtwoord ingevult";
		}
	}
	else {
		echo "Er is geen inlognaam ingevult";
	}
	echo '<form action="/PHP/dynamisch/form.html">';
    echo '<input type="submit" value="Ga terug naar de vorige pagina">';
	echo '</form>';
?>