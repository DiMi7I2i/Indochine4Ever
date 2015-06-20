<?php
function fetchProduit($idProduit,$conn){
	$requete = "SELECT * FROM products WHERE ProductID = '$idProduit'";
	try{
		$resultat = mysql_query($requete,$conn);
		$produit = mysql_fetch_array($resultat);
		$produit=produitDatabaseToProduitObject($produit);
	}catch (Exception $e){
		return null;
	}
	return $produit;
}

function produitDatabaseToProduitObject($produit){
	$produitRetour= new Produit();
	$produitRetour->setIdProduit($produit['ProductID']);
	$produitRetour->setNomProduit($produit['ProductName']);
	$produitRetour->setPrixProduit($produit['ProductPrice']);
	$produitRetour->setPoidsProduit($produit['ProductWeight']);
	$produitRetour->setDescriptionCaddie($produit['ProductCartDesc']);
	$produitRetour->setDescriptionCourte($produit['ProductShortDesc']);
	$produitRetour->setImageProduit($produit['ProductImage']);
	$produitRetour->setProductCategoryID($produit['ProductCategoryID']);
	$produitRetour->setStatusProduit($produit['ProductLive']);
	
	return $produitRetour;
}

?>