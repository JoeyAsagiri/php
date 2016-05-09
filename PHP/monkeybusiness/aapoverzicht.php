<?php
	class AapOverzicht {
		var $ApenLijst = array();
		
		function voegAapToe($naam){
			$this->ApenLijst[] = $naam;
		}
		
		function getAap(){
			return $this->ApenLijst;	
		}		
	}
	
	$ao = new AapOverzicht();
    $ao->voegAapToe(new Aap("Baviaan"));
    $ao->voegAapToe(new Aap("Guereza"));
    $ao->voegAapToe(new Aap("Langoer"));
    $ao->voegAapToe(new Aap("Neusaap"));
    $ao->voegAapToe(new Aap("Tamarin"));
    $ao->voegAapToe(new Aap("Brulaap"));
    $ao->voegAapToe(new Aap("Halfaap"));
    $ao->voegAapToe(new Aap("Mandril"));
    $ao->voegAapToe(new Aap("Oeakari"));
    $ao->voegAapToe(new Aap("Faunaap"));
    $ao->voegAapToe(new Aap("Hoelman"));
    $ao->voegAapToe(new Aap("Meerkat"));
    $ao->voegAapToe(new Aap("Oormaki"));
    $ao->voegAapToe(new Aap("Gorilla"));
    $ao->voegAapToe(new Aap("Kuifaap"));
    $ao->voegAapToe(new Aap("Mensaap"));
    $ao->voegAapToe(new Aap("Spinaap"));
?>