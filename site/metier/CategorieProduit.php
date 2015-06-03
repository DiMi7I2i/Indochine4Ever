<?php
class CategorieProduit {
	
	// Variables
	// ====================================================
	public $categorieId; // liste de la liste de caddie
	public $categorieNom; // prix total du caddie à setter à chaque ajout de produit
	
	//constructeur
	function CategorieProduit($categorieId, $categorieNom) {
		$this->$categorieId;
		$this->$categorieNom;
	}
	
	//GETTER SETTER
	//SETTER on ne modifie pas cet objet
	function getCategorieId() {
		return $this->categorieId;
	}
	function getCategorieNom() {
		return $this->categorieNom;
	}
}
?>