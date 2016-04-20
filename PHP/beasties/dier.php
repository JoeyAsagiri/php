<?php
	if($_GET["dier"] == "aap"){
	echo '<img src="/PHP/beasties/dieren/aap.jpg">';
	}
	if($_GET["dier"] == "muis"){
	echo '<img src="/PHP/beasties/dieren/muis.jpg">';
	}
	if($_GET["dier"] == "konijn"){
	echo '<img src="/PHP/beasties/dieren/konijn.jpg">';
	}
	if($_GET["dier"] == "vogel"){
	echo '<img src="/PHP/beasties/dieren/vogel.jpg">';
	}	
	echo '<br>';
	echo '<form action="/PHP/beasties/formulier.html">';
    echo '<input type="submit" value="Ga terug naar de vorige pagina">';
	echo '</form>';
?>
