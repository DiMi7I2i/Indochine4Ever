<?php
class Caddie {
	
	// Variables
	// ====================================================
	public $listeLigne; // liste de la liste de caddie
	public $prixTotal; // prix total du caddie à setter à chaque ajout de produit
	
	//constructeur
	function Caddie($listeLigne, $prixTotal = 0) {
		$this->listeLigne= $listeLigne;
		$this->prixTotal= $prixTotal;
	}
	
	//GETTER SETTER
	function getListeLigne() {
		return $this->listeLigne;
	}
	function setListeLigne($listeLigne) {
		return $this->listeLigne=$listeLigne;
	}
	
	function getPrixTotal() {
		return $this->prixTotal;
	}
	function setPrixTotal($prixCalcule) {
		return $this->prixTotal=$prixCalcule;
	}
}
?>