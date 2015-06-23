<?php
class CategorieProduit {
	
	// Variables
	// ====================================================
	public $categorieId; // Identifiant de la categorie d'un produit
	public $categorieNom; // Libelle de la categorie d'un produit
	public $categorieIdParent; // Identifiant parent de la categorie d'un produit (Ex: CD < Musique, Vinyles < Musique)
	public $listeCategoriesEnfants; // Liste catégories enfants	
	
	//constructeur
	function CategorieProduit(){
		$this->categorieId="";
		$this->categorieNom="";
		$this->categorieIdParent="";
		$this->listeCategoriesEnfants=array();
	}
	
	//GETTER SETTER
	//SETTER on ne modifie pas cet objet
	function getCategorieId() {
		return $this->categorieId;
	}
	
	function setCategorieId($id) {
		return $this->categorieId=$id;
	}
	
	function getCategorieNom() {
		return $this->categorieNom;
	}
	
	function setCategorieNom($nom) {
		return $this->categorieNom=$nom;
	}
	
	function getCategorieIdParent(){
		return $this->categorieIdParent;
	}
	
	function setCategorieIdParent($idParent){
		return $this->categorieIdParent=$idParent;
	}
	
	function getListeCategoriesEnfants(){
		return $this->listeCategoriesEnfants;
	}
	
	function setListeCategoriesEnfants($liste){
		return $this->listeCategoriesEnfants = $liste;
	}
}
?>