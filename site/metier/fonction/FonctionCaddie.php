<?php
function nbElementPanier($caddie){
	$nbLigne = 0;
	if (isset($caddie) && $caddie != null){
		//liste des lignes du caddie en parametre
		$ligneCaddie=$caddie->getListeLigne();
		$nbLigne=count($ligneCaddie);
	}
	//print_r($nbLigne);
	return $nbLigne;
}

function calculTotalPrix($caddie){
	$prixTotal = 0;
	if (isset($caddie) && $caddie != null){
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

function ajoutProduitDansCaddie($caddie,$produit,$quantiteAjout){
		$listeLigne=$caddie->getListeLigne();
		$idProduitAjout=$produit->getIdProduit();
		$ligneCaddie= new LigneCaddie($produit,$quantiteAjout);
		if(is_null(getIndexProduitDansCaddie($listeLigne,$idProduitAjout))){
			//recuperation liste de ligne du caddie
			$arrayCaddie= $caddie->getListeLigne();
			//ajout du produit courant
			array_push($arrayCaddie,$ligneCaddie);
			//on set la liste dans le caddie
			$caddie->setListeLigne($arrayCaddie);		
		}else{
			//print_r("FUKKKK");
			//on recupere l'index du produit trouver dans la liste du caddie
			$indexProduit=getIndexProduitDansCaddie($listeLigne,$idProduitAjout);
			//on recupere la quantite de la ligneCaddie
			$quantite=$listeLigne[$indexProduit]->getQuantite();
			//si la quantite est null on l'initialise à 1
			if($quantite==null){
				$quantite=1;
			}
			//on incremente avec la quantite saisie dans le formulaire
			$quantite=$quantite+$quantiteAjout;
			//on set la quantite dans la liste
			$listeLigne[$indexProduit]->setQuantite($quantite);
			$caddie->setListeLigne($listeLigne);
			
		}
		
		return $caddie;
}

function getIndexProduitDansCaddie($listeLigne,$idProduitAjout){
	//nombre d'element du caddie
	$nbLigne=count($listeLigne);
	$indexProduit=null;
	for($i=0;$i<$nbLigne;$i++){
		//on recupere la ligne du caddie courante
		$ligne=$listeLigne[$i];
		$produitLigne=$ligne->getProduit();
		//id produit courant
		$idProduitLigne=$produitLigne->getIdProduit();
		if($idProduitLigne==$idProduitAjout){
			$indexProduit=$i;
			break;
		}
	}
	return $indexProduit;
}

function ajoutQuantiteDansLigne($caddie,$indexLigne){
	$listeLigne=$caddie->getListeLigne();
	$nbLigne=count($listeLigne);
	//test pour ne pas être hors-borne dans le tableau
	if($indexLigne<$nbLigne){
		$ligne=$listeLigne[$indexLigne];
		//operation sur la quantite
		$quantiteLigne=$ligne->getQuantite();
		$quantiteLigne=$quantiteLigne+1;
		//on set la quantite dans la liste et la liste dans le caddie
		$ligne->setQuantite($quantiteLigne); //ligne a jour
		$caddie->setListeLigne($listeLigne);
	}
	return $caddie;
}

function retraitQuantiteDansLigne($caddie,$indexLigne){
	$listeLigne=$caddie->getListeLigne();
	$nbLigne=count($listeLigne);
	//test pour ne pas être hors-borne dans le tableau
	if($indexLigne<$nbLigne){
		$ligne=$listeLigne[$indexLigne];
		//operation sur la quantite
		$quantiteLigne=$ligne->getQuantite();
		$quantiteLigne=$quantiteLigne-1;
		//on set la quantite dans la liste et la liste dans le caddie
		$ligne->setQuantite($quantiteLigne); //ligne a jour
		$caddie->setListeLigne($listeLigne);
	}
	return $caddie;
}	

function suppressionProduitDansLigne($caddie,$indexLigne){
	$listeLigne=$caddie->getListeLigne();
	$nbLigne=count($listeLigne);
	//test pour ne pas être hors-borne dans le tableau
	if($indexLigne<$nbLigne){
		//on détruit l'element dans la liste
		unset($listeLigne[$indexLigne]);
		$listeLigne=array_values($listeLigne);
		$caddie->setListeLigne($listeLigne);
	}
	return $caddie;
}

?>