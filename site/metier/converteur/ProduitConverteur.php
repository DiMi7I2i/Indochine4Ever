<?php
// Converti le resultat de la BDD en objet Produit
function produitDatabaseToProduitObject($produit){
	$produitRetour= new Produit();
	$produitRetour->setIdProduit($produit['ProductID']);
	$produitRetour->setNomProduit($produit['ProductName']);
	$produitRetour->setPrixProduit($produit['ProductPrice']);
	$produitRetour->setPoidsProduit($produit['ProductWeight']);
	$produitRetour->setDescriptionCaddie($produit['ProductCartDesc']);
	$produitRetour->setDescriptionCourte($produit['ProductShortDesc']);
	$produitRetour->setDescriptionLongue($produit['ProductLongDesc']);
	$produitRetour->setImageProduit($produit['ProductImage']);
	$produitRetour->setVignetteProduit($produit['ProductThumb']);
	$produitRetour->setProductCategoryID($produit['ProductCategoryID']);
	$produitRetour->setStatusProduit($produit['ProductLive']);
	$produitRetour->setEstNouveauProduit($produit['ProductUnlimited']);
	
	return $produitRetour;
}
?>