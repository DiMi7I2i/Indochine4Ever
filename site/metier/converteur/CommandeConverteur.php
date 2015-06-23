<?php
// Converti le resultat de la BDD en objet Produit
function commandeDatabaseToCommandeObject($commande){
	$commandeRetour= new Commande();
	$commandeRetour->setOrderID($produit['OrderID']);
	$commandeRetour->setOrderUserID($produit['OrderUserID']);
	$commandeRetour->setOrderAmount($produit['OrderAmount']);
	//VOIR RECUPERATION LISTE ligne commande
	//$commandeRetour->setListeLigneCommande($produit['ProductWeight']);
	return $commandeRetour;
}
?>