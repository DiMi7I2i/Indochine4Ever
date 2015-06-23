<?php
// Récupération d'une catégorie produit fonction de son ID
function fetchCategorie($idCategorie,$conn){
	$requete = "SELECT * FROM productcategories WHERE CategoryID = '$idCategorie'";
	try{
		$resultat = mysql_query($requete,$conn);
		$categorie = mysql_fetch_array($resultat);
		$categorie=categorieProduitDatabaseToCategorieProduitObject($categorie);
	}catch (Exception $e){
		print_r('Erreur lors de la recuperation de la categorie: '.$e);
		return null;
	}
	return $categorie;
}

// Retourne la liste des catégories parents + enfants rattachés
function fetchListeCategories(){
	try {
		// Construction et envoi de la requete
		$requeteRechercheCategoriesParents = "SELECT * FROM productcategories WHERE CategoryIDParent IS NULL";
		$resultatCategoriesParents = mysql_query($requeteRechercheCategoriesParents);
		// Construction de la liste a partir des resultats
		$listeCategoriesWithObject = array();
		while ($categorieParent = mysql_fetch_array($resultatCategoriesParents)) {
			$categorieParent = categorieProduitDatabaseToCategorieProduitObject($categorieParent);
			// Enfants
			$idCategorieParent = $categorieParent->getCategorieId();
			$listeCategoriesEnfants = fetchListeCategoriesEnfants($idCategorieParent);
			// On rattache les enfants au parent
			$categorieParent->setListeCategoriesEnfants($listeCategoriesEnfants);
			array_push($listeCategoriesWithObject, $categorieParent);
		}

	} catch (Exception $e){
		print_r('Erreur lors de la recuperation de la liste des categories: '.$e);
		return null;
	}
	return $listeCategoriesWithObject;
}

// Récupération de la liste des sous-catégories d'un catégorie
function fetchListeCategoriesEnfants($idCategorieParent){
	try {
		$requeteCategoriesEnfants = "SELECT * FROM productcategories WHERE CategoryIDParent = '$idCategorieParent'";
		$resultatCategoriesEnfants = mysql_query($requeteCategoriesEnfants);
		
		$listeCategoriesEnfantsWithObject = array();		
		while ($categorieEnfant = mysql_fetch_array($resultatCategoriesEnfants)) {
			$categorieEnfant = categorieProduitDatabaseToCategorieProduitObject($categorieEnfant);
			array_push($listeCategoriesEnfantsWithObject, $categorieEnfant);
		}		
		
	} catch (Exception $e){
		print_r('Erreur lors de la recuperation de la categorie: '.$e);
		return null;
	}
	return $listeCategoriesEnfantsWithObject;
}


// Permet de construire l'element side-bar de la page
function constructionSideBar($listeCategories){
		echo '<div class="row">';
		echo '<div id="sidebar" class="span3">';
		echo '<ul class="nav nav-list bs-docs-sidenav" style="display: block;">';
		$nbLigne=count($listeCategories);
		for ($i=0;$i<$nbLigne;$i++){
			$categorieParent = $listeCategories[$i];
			constructionCategorieParent($categorieParent);
		}
		constructionEtatCaddie();
		echo '</ul>';
		echo '</div>';
}

// Permet de construire un element parent de la side-bar
function constructionCategorieParent($categorieParent){
	echo '<li class="subMenu"><a>'.$categorieParent->getCategorieNom().'</a>';
	$listeEnfants = $categorieParent->getListeCategoriesEnfants();
	$nbLigneEnfants = count($listeEnfants);
	for ($i=0;$i<$nbLigneEnfants;$i++){
		$categorieEnfant = $listeEnfants[$i];
		constructionCategorieEnfant($categorieEnfant);
	}
	echo '</li>';
}

// Permet de construire le ou les elements enfant(s) du parent
function constructionCategorieEnfant($categorieEnfant){
	echo '<ul>';
	echo '<li><a href="catalogue_page.php?idCategorie='.$categorieEnfant->getCategorieId().'&nomCategorie='.$categorieEnfant->getCategorieNom().'">'.$categorieEnfant->getCategorieNom().'</a></li>';
	echo '</ul>';
}

// Permet de construire le ou les elements enfant(s) du parent
function constructionEtatCaddie(){
	$caddie = unserialize($_SESSION['caddie']);
	echo '<li style="border:0"> &nbsp;</li>';
	echo '<li> <a href="produit_sommaire_page.php"><strong>'.nbElementPanier($caddie).' Items in your cart  <span class="badge badge-warning pull-right" style="line-height:18px;">'.formatDevise(calculTotalPrix($caddie)).'</span></strong></a></li>';
	echo '<li style="border:0"> &nbsp;</li>';	
}


?>