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
	function getNomProduit(){
		return $this->productName;
	}
	
	function getPrixProduit(){
		return $this->productPrice;
	}
	
	function getPoidsProduit(){
		return $this>productWeight;
	}
	
	function getDescriptionCaddie(){
		return $this->productCartDesc;
	}
	
	function getDescriptionCourte(){
		return $this->productShortDesc;
	}
	
	function getImageProduit(){
		return $this->productImage;
	}
	
	function getProductCategoryID(){
		return $this->productCategoryID;
	}
	
	function getStatusProduit(){
		return $this->productLive;
	}
}

?>