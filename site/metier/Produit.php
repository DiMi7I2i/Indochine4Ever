<?php
class Produit {
	
	//Variables
	//====================================================
	public $productId; //identifiant du produit
	public $productSKU; // ?????//@todo
	public $productName; //nom du produit
	public $productPrice; //prix du produit
	public $productWeight; //poids du produit
	public $productCartDesc; //description pour le caddie du produit
	public $productShortDesc; //description courte du produit
	public $productLongDesc; //description longue du produit
	public $productThumb; //
	public $productImage; //image du produit
	public $productCategoryID; //id de la categorie du prix
	public $productStock; //stock du produit
	public $productLive; // ??? si le produit tu peux être mis en ligne
	public $productUnlimited; // ???
	public $productLocation; //???
	
	
	//constructeur
	function Produit(){
		$this->productId="";
		$this->productName="";
		$this->productPrice="";
		$this->productWeight="";
		$this->productCartDesc="";
		$this->productShortDesc="";
		$this->productImage="";
		$this->productCategoryID="";
		$this->productLive="";
	}
	
	
	//GETTER SETTER
	function getIdProduit(){
		return $this->productId;
	}
	
	function setIdProduit($IdProduit){
		return $this->productId=$IdProduit;
	}
	
	
	function getNomProduit(){
		return $this->productName;
	}
	
	function setNomProduit($nomProduit){
		return $this->productName=$nomProduit;
	}
	
	function getPrixProduit(){
		return $this->productPrice;
	}
	
	function setPrixProduit($prixProduit){
		return $this->productPrice=$prixProduit;
	}
	
	function getPoidsProduit(){
		return $this->productWeight;
	}
	
	function setPoidsProduit($poidsProduit){
		return $this->productWeight=$poidsProduit;
	}
	
	function getDescriptionCaddie(){
		return $this->productCartDesc;
	}
	
	function setDescriptionCaddie($descriptionCaddie){
		return $this->productCartDesc=$descriptionCaddie;
	}
	
	function getDescriptionCourte(){
		return $this->productShortDesc;
	}
	
	function setDescriptionCourte($descriptionCourtes){
		return $this->productShortDesc=$descriptionCourtes;
	}
	
	function getImageProduit(){
		return $this->productImage;
	}
	
	function setImageProduit($imageUrl){
		return $this->productImage=$imageUrl;
	}
	
	function getProductCategoryID(){
		return $this->productCategoryID;
	}
	
	function setProductCategoryID($produitCategorieID){
		return $this->productCategoryID=$produitCategorieID;
	}
	
	function getStatusProduit(){
		return $this->productLive;
	}
	
	function setStatusProduit($statusProduit){
		return $this->productLive=$statusProduit;
	}
}

?>