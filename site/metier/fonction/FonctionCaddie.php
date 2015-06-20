<?php

function nbElementPanier($caddie){
	//liste des lignes du caddie en parametre
	$ligneCaddie=$caddie->getListeLigne();
	$nbLigne=count($ligneCaddie);
	//print_r($nbLigne);
	return $nbLigne;
}

function calculTotalPrix($caddie){
	$listeLigne=$caddie->getListeLigne();
	//nombre d'element du caddie
	$nbLigne=count($listeLigne);
	$prixTotal=0;
	for($i=0;$i<$nbLigne;$i++){
		//on recupere la ligne du caddie courante
		$ligne=$listeLigne[$i];
		$produit=$ligne->getProduit();
		$quantite=$ligne->getQuantite();
		$prixProduit=$produit->getPrixProduit();
		$prixTotal=$prixTotal + ($quantite*$prixProduit);
	}
	return $prixTotal;
}

//calcul prix HT
function calculTaxePrix($caddie){
	$listeLigne=$caddie->getListeLigne();
	//nombre d'element du caddie
	$nbLigne=count($listeLigne);
	$prixTaxe=0;
	for($i=0;$i<$nbLigne;$i++){
		//on recupere la ligne du caddie courante
		$ligne=$listeLigne[$i];
		$produit=$ligne->getProduit();
		$quantite=$ligne->getQuantite();
		$prixProduit=$produit->getPrixProduit();
		$prixTaxe=$prixTaxe + (round(calculPrixTVA($quantite*$prixProduit),2,PHP_ROUND_HALF_UP));
	}

	return $prixTaxe;
}

?>