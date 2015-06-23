<?php
// Converti le resultat de la BDD en objet Produit
function ligneCommandeDatabaseToLigneCommandeObject($ligneCommande){
	$produitRetour= new LigneCommande();
	$produitRetour->setDetailID($ligneCommande['DetailID']);
	$produitRetour->setDetailOrderID($ligneCommande['DetailOrderID']);
	$produitRetour->setDetailProductID($ligneCommande['DetailProductID']);
	$produitRetour->setDetailName($ligneCommande['DetailName']);
	$produitRetour->setDetailPrice($ligneCommande['DetailPrice']);
	$produitRetour->setDetailQuantity($ligneCommande['DetailQuantity']);
	
	return $produitRetour;
}
?>