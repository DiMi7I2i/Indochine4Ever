<?php
class ProduitVignette {
	
	//Variables
	//====================================================
	public $idVignette; //identifiant de la vignette
	public $idProduit; // id du produit
	public $url; //url de la vignette
	
	
	//constructeur
	function ProduitVignette(){
		$this->idVignette="";
		$this->idProduit="";
		$this->url="";
	}
	
	
	//GETTER SETTER
	function getIdVignette(){
		return $this->idVignette;
	}
	
	function setIdVignette($IdVignette){
		return $this->idVignette=$IdVignette;
	}
	
	
	function getIdProduit(){
		return $this->idProduit;
	}
	
	function setIdProduit($idProduit){
		return $this->idProduit=$idProduit;
	}
	
	function getUrl(){
		return $this->url;
	}
	
	function setUrl($url){
		return $this->url=$url;
	}
}

?>
