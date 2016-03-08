<?php
$rijen = 9;
$sterren = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*";
for($i = 0; $i < $rijen; $i++) {
	echo $sterren . "<br>"; 	
	$sterren = substr($sterren, 6) . "*";
} 
?>