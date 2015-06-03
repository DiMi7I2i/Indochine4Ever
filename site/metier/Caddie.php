<?php
class Caddie {
	
	// Variables
	// ====================================================
	public $listeLigne; // liste de la liste de caddie
	public $prixTotal; // prix total du caddie à setter à chaque ajout de produit
	
	//constructeur
	function Caddie($listeLigne = array(), $prixTotal = 0) {
		$this->$listeLigne;
		$this->$prixTotal;
	}
	
	//GETTER SETTER
	function getListeLigne() {
		return $this->listeLigne;
	}
	function getPrixTotal() {
		return $this->prixTotal;
	}
}
?>