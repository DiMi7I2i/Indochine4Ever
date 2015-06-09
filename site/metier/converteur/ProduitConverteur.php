<?php
function fetchProduit($idProduit,$conn){
	$requete = "SELECT * FROM products WHERE ProductID = '%$idProduit%'";
	try{
		$resultat = mysql_query($requete,$conn);
		while ($produit = mysql_fetch_array($produitBase)) {
			produitDatabaseToProduitObject($produit);
		}
	}catch (Exception $e){
		return false;
	}
	return true;
}

function produitDatabaseToProduitObject($produit){
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