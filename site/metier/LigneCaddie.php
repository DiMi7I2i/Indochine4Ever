<?php
class LigneCaddie {
	//Variables
	//====================================================
	public $quantite; //quantite du produit
	public $produit; //objet produti
	
	//constructeur
	function LigneCaddie($produit= new Produit(),$quantite=1){
		$this->produit=$produit;
		$this->quantite=$quantite;
	}
	
	//GETTER SETTER
	function getProduit(){
		return $this->produit;
	}
	
	function getQuantite(){
		return $this->quantite;
	}
}

?>