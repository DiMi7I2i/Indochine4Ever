<?php
class Commande {
	
	//Variables
	//====================================================
	public $orderID; //identifiant de la commande
	public $orderUserID; // identifiant du user de la commande
	public $orderAmount; //total de la commande
	public $listeLigneCommande; //liste de LigneCommande
	
	//constructeur
	function Commande(){
		$this->orderID="";
		$this->orderUserID="";
		$this->orderAmount="";
		$this->listeLigneCommande="";
	}
	
	
	//GETTER SETTER
	function getOrderID(){
		return $this->orderID;
	}
	
	function setOrderID($orderID){
		return $this->orderID=$orderID;
	}
	
	
	function getOrderUserID(){
		return $this->orderUserID;
	}
	
	function setOrderUserID($orderUserID){
		return $this->orderUserID=$orderUserID;
	}
	
	function getOrderAmount(){
		return $this->orderAmount;
	}
	
	function setOrderAmount($orderAmount){
		return $this->orderAmount=$orderAmount;
	}
	
	function getListeLigneCommande(){
		return $this->listeLigneCommande;
	}
	
	function setListeLigneCommande($listeLigneCommande){
		return $this->listeLigneCommande=$listeLigneCommande;
	}

}

?>
