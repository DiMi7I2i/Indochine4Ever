<?php

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
