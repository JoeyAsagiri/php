<?php
	function graden($a) {
		$b = $a * 1.8 + 32;
		echo $a." celsius = ".$b." fahrenheit";
	}
	function deel($a) {
		$boolean = false;
		for ($i = 3; $i < 1000000; $i += 3) {
			if(($a / $i) == 1) {
				$boolean = true;
			}
		}
		return $boolean;
	}	
	function omkeren($string) {
		echo strrev($string);		
	}
	
	graden(11);
	echo "<br>";
	
	$getal = 39603;
	if (deel($getal)) {
		echo $getal." is deelbaar door 3";
	} else {
		echo $getal." is niet deelbaar door 3";
	}	
	
	echo "<br>";
	omkeren("Kaas is een coole jongen");
	
?>