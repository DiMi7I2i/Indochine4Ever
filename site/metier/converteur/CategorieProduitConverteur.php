<?php
// Converti le resultat de la BDD en objet Produit
function categorieProduitDatabaseToCategorieProduitObject($categorieProduit){
	$categorieProduitRetour = new CategorieProduit();
	$categorieProduitRetour->setCategorieId($categorieProduit['CategoryID']);
	$categorieProduitRetour->setCategorieNom($categorieProduit['CategoryName']);
	$categorieProduitRetour->setCategorieIdParent($categorieProduit['CategoryIDParent']);
	return $categorieProduitRetour;
}
?>