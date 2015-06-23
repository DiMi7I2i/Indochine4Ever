<?php
// Converti le resultat de la BDD en objet Produit
function produitVignetteDatabaseToProduitVignetteObject($produitVignette){
	$produitRetour= new ProduitVignette();
	$produitRetour->setIdVignette($produitVignette['idVignette']);
	$produitRetour->setIdProduit($produitVignette['idProduit']);
	$produitRetour->setUrl($produitVignette['url']);
	
	return $produitRetour;
}
?>