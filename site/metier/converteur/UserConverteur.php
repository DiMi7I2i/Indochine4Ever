<?php
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

function userDatabaseToUserObject($user){
	$produitRetour= new Produit();
	
	$produitRetour.setNomProduit($produit['ProductName']);
	$produitRetour.setPrixProduit($produit['ProductPrice']);
	$produitRetour.setPoidsProduit($produit['ProductWeight']);
	$produitRetour.setDescriptionCaddie($produit['ProductCartDesc']);
	$produitRetour.setDescriptionCourte($produit['ProductShortDesc']);
	$produitRetour.setImageProduit($produit['ProductImage']);
	$produitRetour.setProductCategoryID($produit['ProductCategoryID']);
	$produitRetour.setStatusProduit($produit['ProductLive']);
	
	return $produitRetour;
}

?>