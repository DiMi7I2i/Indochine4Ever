<?php
class LigneCommande {
	
	//Variables
	//====================================================
	public $detailID; //id de la ligne commande
	public $detailOrderID; // id de la commande
	public $detailProductID; //total de la commande
	public $detailName; //nom d detail
	public $detailPrice; //prix du detail
	public $detailQuantity; //quantite de la ligne

	//constructeur
	function LigneCommande(){
		$this->detailID="";
		$this->detailOrderID="";
		$this->detailProductID="";
		$this->detailName="";
		$this->detailPrice="";
		$this->detailQuantity="";
	}
	
	
	//GETTER SETTER
	function getDetailID(){
		return $this->detailID;
	}
	
	function setDetailID($detailID){
		return $this->detailID=detailID;
	}
	
	
	function getDetailOrderID(){
		return $this->detailOrderID;
	}
	
	function setDetailOrderID($detailOrderID){
		return $this->detailOrderID=$detailOrderID;
	}
	
	function getDetailProductID(){
		return $this->detailProductID;
	}
	
	function setDetailProductID($detailProductID){
		return $this->detailProductID=$detailProductID;
	}
	
	function getDetailName(){
		return $this->detailName;
	}
	
	function setDetailName($detailName){
		return $this->detailName=$detailName;
	}
	
	function getDetailPrice(){
		return $this->detailPrice;
	}
	
	function setDetailPrice($detailPrice){
		return $this->detailPrice=$detailPrice;
	}
	
	function getDetailQuantity(){
		return $this->detailQuantity;
	}
	
	function setDetailQuantity($detailQuantity){
		return $this->detailQuantity=$detailQuantity;
	}

}

?>
