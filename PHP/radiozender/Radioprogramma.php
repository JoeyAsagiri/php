<?php
class Radioprogramma {
	var $Programmanaam = "Kanaal 1";
	var $Omschrijving = "Een programma dat leuke liedjes afspeelt";
	var $Liedjes = array('The moon','Beats','Electric', 'The last night');
	
	function getLiedjes(){
		echo "Liedjes op het programma: ";
		foreach ($this->Liedjes as $lied){
		echo "<br>"
		. $lied;		
		}
	}
	function getProgramma(){
		return "Het programmanaam is: "
		. $this->Programmanaam
		. "<br>"
		. "De omschrijving van het programma: "
		. $this->Omschrijving;
	}
}

$Kanaal1 = new Radioprogramma();

echo $Kanaal1->getProgramma();
echo "<br>";
echo $Kanaal1->getLiedjes();
?>