<?php

$muziek["band1"] = album1;
$muziek["band2"] = album2;

	foreach ($muziek as $label => $waarde) {
		echo "De band ".$label." hun laatse album is: ".$waarde."<br>";
	}
?>