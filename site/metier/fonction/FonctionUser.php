<?php
// Récupération d'un utilisateur en fonction de son ID 
function fetchUser($idUser,$conn){
	$requete = "SELECT * FROM users WHERE ProductID = '$idUser'";
	try{
		$resultat = mysql_query($requete,$conn);
		while ($user = mysql_fetch_array($produitBase)) {
			userDatabaseToUserObject($produit);
		}
	}catch (Exception $e){
		return false;
	}
	return true;
}
?>