<?php

// Récupération d'un utilisateur en fonction de son email (authentification)
function fetchUserByMail($mail,$conn){
	$requete = "SELECT * FROM users WHERE UserEmail = '$mail'";
	$user= null;
	try{
		$resultat = mysql_query($requete,$conn);
		$user=userDatabaseToUserObject(mysql_fetch_array($r1esultat));
	}catch (Exception $e){
		return null;
	}
	return $user;
}

//creation d'une commande dans la base
function creationCommande($commande){
	$userCommande=$commande->getOrderUserID();
	$montantCommande=$commande->getOrderAmount();
	$requeteInsertion= "INSERT INTO orders(OrderID,OrderUserID,OrderAmount) VALUES(,$userCommande,$montantCommande)";
	$resultat = mysql_query($requeteInsertion,$conn);
	//TODO enregistrement des lignde de commande
	//$requeteInsertionDetail= "INSERT INTO orderdetails(OrderID,OrderUserID,OrderAmount) VALUES(,$userCommande,$montantCommande)";
	//$resultatDetail = mysql_query($requeteInsertionDetail,$conn);
	
}
?>