<?php
// Converti le resultat de la BDD en objet Produit
function userDatabaseToUserObject($user){
	$userRetour= new User();
	$userRetour->setUserId($user['UserID']);
	$userRetour->setMail($user['UserEmail']);
	$userRetour->setNom($user['UserFirstName']);
	$userRetour->setPrenom($user['UserLastName']);
	$userRetour->setMotDePasse($user['UserPassword']);
	$userRetour->setVille($user['UserCity']);
	$userRetour->setCodePostal($user['UserZip']);
	$userRetour->setNumeroTel($user['UserPhone']);
	$userRetour->setPays($user['UserCountry']);
	$userRetour->setAdresse($user['UserAddress']);
	$userRetour->setAdresseComp($user['UserAddress2']);
	
	return $userRetour;
}

?>
