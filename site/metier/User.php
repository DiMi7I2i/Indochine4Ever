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
	public $userZip;
	public $userPhone;
	public $userCountry;
	public $userAddress;
	public $userAddress2;
	
	// constructeur
	function User() {
		$this->userId="";
		$this->userEmail="";
		$this->userPassword="";
		$this->userFirstName="";
		$this->userLastName="";
		$this->userCity="";
		$this->userZip="";
		$this->userPhone="";
		$this->userCountry="";
		$this->userAddress="";
		$this->userAddress2="";
	}
	
	// GETTER SETTER
	function getUserId() {
		return $this->userId;
	}
	
	function setUserId($IdUser) {
		return $this->userId = $IdUser;
	}
	
	function getMail() {
		return $this->userEmail;
	}
	
	function setMail($mail) {
		return $this->userEmail = $mail;
	}
	
	function getNom() {
		return $this->userFirstName;
	}
	
	function setNom($nom) {
		return $this->userFirstName=$nom;
	}
	
	function getPrenom() {
		return $this->userLastName;
	}
	
	function setPrenom($prenom) {
		return $this->userLastName=$prenom;
	}
	
	function getMotDePasse() {
		return $this->userPassword;
	}
	
	function setMotDePasse($motDePasse) {
		return $this->userPassword=$motDePasse;
	}
	
	function getVille() {
		return $this->userCity;
	}
	
	function setVille($ville) {
		return $this->userCity=$ville;
	}
	
	function getCodePostal() {
		return $this->userZip;
	}
	
	function setCodePostal($codePostal) {
		return $this->userZip=$codePostal;
	}
	
	function getNumeroTel() {
		return $this->userPhone;
	}
	
	function setNumeroTel($numeroTel) {
		return $this->userPhone=$numeroTel;
	}
	
	function getPays() {
		return $this->userCountry;
	}
	
	function setPays($pays) {
		return $this->userCountry=$pays;
	}
	
	function getAdresse() {
		return $this->userAdress;
	}
	
	function setAdresse($adresse) {
		return $this->userAdress=$adresse;
	}
	
	function getAdresseComp() {
		return $this->userAdress2;
	}
	
	function setAdresseComp($adresseComp) {
		return $this->userAdress2=$adresseComp;
	}
}
?>