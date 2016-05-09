<?php
class Car {
	var $merk;
	var $type;
	var $prijs;
	var $foto;

	function __construct( $par1, $par2, $par3, $par4){
		$this->merk = $par1;
		$this->type = $par2;
		$this->prijs = $par3;
		$this->foto = $par4;
	}
	
	function getMerk() {
		return $this->merk;		
	}
	
	function getPrijs() {
		return $this->prijs;
	}
	
	function getFoto() {
		return $this->foto;
	}
}
?>