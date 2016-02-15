<?php
$leeftijd = 8;
$geld = int;
if ($leeftijd > 65) {
	$geld = 5;
} else if ($leeftijd > 3 && $leeftijd < 12) {
	$geld = 5;
} else if ($leeftijd < 3) {
	$geld = 5;
} else {
	$geld = 10;
}
echo "Het kost " . $geld . " euro";
?>