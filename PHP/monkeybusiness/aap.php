<?php
class Aap {
		var $naam;

		function __construct($naam){
			$this->naam = $naam;
		}
		
		function __toString(){
			return $this->naam;
		}
	}
?>