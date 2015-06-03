<?php
class User {
	
	// Variables
	// ====================================================
	public $userId;
	public $userEmail;
	public $userPassword;
	public $userFirstName;
	public $userLastName;
	public $userCity;
	public $userState;
	public $userZip;
	public $userPhone;
	public $userFax;
	public $userCountry;
	public $userAddress;
	public $userAddress2;
	
	// constructeur
	function User($test = "test", $test1) {
		$this->userId = $test;
		$this->userEmail = $test1;
	}
	
	// GETTER SETTER
	function getUserId() {
		return $this->userId;
	}
	function getMail() {
		return $this->userEmail;
	}
	function getNom() {
		return $this->userFirstName;
	}
	function getPrenom() {
		return $this->userLastName;
	}
	function getMotDePasse() {
		return $this->userPassword;
	}
	function getVille() {
		return $this->userCity;
	}
	function getRegion() {
		return $this->userState;
	}
	function getCodePostal() {
		return $this->userZip;
	}
	function getNumeroTel() {
		return $this->userPhone;
	}
	function getPays() {
		return $this->userCountry;
	}
	function getAdresse() {
		return $this->userAdress;
	}
	function getAdresseComp() {
		return $this->userAdress2;
	}
}
?>