<?php
 if ($_COOKIE["administratorCookie"] == 'ja'){
	$a = true;
	echo "Welkom op de administrator pagina";
}
if ($_COOKIE["gebruikerCookie"] == 'ja'){
	$b = true;
	echo "U heeft niet genoeg rechten voor deze pagina";
}
if ($a == false && $b == false){
inloggen($_POST["inlognaam"],$_POST["wachtwoord"]);
}

 function inloggen($naam, $wachtwoord){
	if($naam == "admin"){
		if($wachtwoord == "admin123"){
			$a = true;
			$administrator = 'ja';
			setcookie("administratorCookie", $administrator, time()+3600);
		}
	}
		if($naam == "member"){
			if($wachtwoord == "member123"){
				$b = true;
				$gebruiker = 'ja';
				setcookie("gebruikerCookie", $gebruiker, time()+3600);
			}
		}
		if ($a == true){
			echo "Welkom op de administrator pagina";	
		}
		if ($b == true){
			echo "U heeft niet genoeg rechten voor deze pagina";
		}
		if ($a == false && $b == false){
			echo "Geen goede informatie ingevuld";
		}

	}
		if ($a == true || $b == true){
		echo '<form action="/PHP/adminpagina/formulier.php">';
		echo '<input type="submit" value="Log Uit">';
		echo '</form>';
		}
		if ($a == false && $b == false){
		echo '<form action="/PHP/adminpagina/formulier.php">';
		echo '<input type="submit" value="Ga terug">';
		echo '</form>';
		}

?>