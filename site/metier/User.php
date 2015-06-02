<?php
class User {
	
	//Variables
	//====================================================
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
	
 function User($edible="toto", $color="green") 
   {
       $this->userId = $edible;
       $this->userEmail = $color;
   }

   function getUserId() 
   {
       return $this->userId;
   }

   function getMail() 
   {
       return $this->userEmail;
   }
}
?>