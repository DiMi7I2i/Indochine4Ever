<?php
// // Récupération d'un utilisateur en fonction de son ID 
// function fetchUser($idUser,$conn){
// 	$requete = "SELECT * FROM users WHERE UserID = '$idUser'";
// 	try{
// 		$resultat = mysql_query($requete,$conn);
// 		while ($user = mysql_fetch_array($produitBase)) {
// 			userDatabaseToUserObject($produit);
// 		}
// 	}catch (Exception $e){
// 		return false;
// 	}
// 	return true;
// }


// Récupération d'un utilisateur en fonction de son email (authentification)
function fetchUserByMail($mail,$conn){
	$requete = "SELECT * FROM users WHERE UserEmail = '$mail'";
	$user= null;
	try{
		$resultat = mysql_query($requete,$conn);
		$user=userDatabaseToUserObject(mysql_fetch_array($resultat));
	}catch (Exception $e){
		return null;
	}
	return $user;
}

//check si le mdp correspond à celui de la base
function authentificationUser($mail,$password,$conn){
	$userBase= fetchUserByMail($mail,$conn);
	$mdpBase=$userBase->getMotDePasse();
	if($password==$mdpBase){
		return true;
	}else{
		return false;
	}
}


?>