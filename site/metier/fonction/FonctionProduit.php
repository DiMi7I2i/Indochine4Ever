<?php
// Récupération d'un produit en fonction de son ID
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


// Récupération des vignette d'un produit (page de detail)
function fetchListeProduitVignette($idProduit,$conn){
	$requete = "SELECT * FROM productsVignette WHERE idProduit = '$idProduit'";
	try{
		$resultat = mysql_query($requete,$conn);
		$listeProduitVignette= array();
		while ($produitVignette = mysql_fetch_array($resultat)) {
			$produitVignette=produitVignetteDatabaseToProduitVignetteObject($produitVignette);
			array_push($listeProduitVignette,$produitVignette);
		}
	}catch (Exception $e){
		return null;
	}
	return $listeProduitVignette;
}


// Retourne le nombre de produits en BDD
function nbProduits(){
	$requete = 'SELECT * FROM products';
	$resultat = mysql_query($requete);
	$nbLigne = mysql_num_rows($resultat);
	return $nbLigne;
}
	
//retourne la TVA a partir d'un prix
function calculPrixTVA($prix){
	return $prix-(((100-PRIX_TVA)*$prix)/100);
}

// Retourne une liste de produits en fonction d'un tri
function listeProduitTriee($tri,$idCat){
	$requete = "";
	if ($tri == "1" || $tri == ""){ // Croissant
		$requete = 'SELECT * FROM products ORDER BY ProductName ASC';
		if (isset($idCat)  && $idCat != ""){
			$requete = 'SELECT * FROM products WHERE ProductCategoryID='.$idCat.' ORDER BY ProductName ASC';
		}
	} else if ($tri == "2"){ // Decroissant
		$requete = 'SELECT * FROM products ORDER BY ProductName DESC';
		if (isset($idCat) && $idCat != ""){
			$requete = 'SELECT * FROM products WHERE ProductCategoryID='.$idCat.' ORDER BY ProductName ASC';
		}
	} else if ($tri == "3"){ // En stock
		$requete = 'SELECT * FROM products ORDER BY ProductStock DESC';
		if (isset($idCat) && $idCat != ""){
			$requete = 'SELECT * FROM products WHERE ProductCategoryID='.$idCat.' ORDER BY ProductName ASC';
		}
	} else if ($tri == "4"){ // Prix le plus bas
		$requete = 'SELECT * FROM products ORDER BY ProductPrice ASC';
		if (isset($idCat) && $idCat != ""){
			$requete = 'SELECT * FROM products WHERE ProductCategoryID='.$idCat.' ORDER BY ProductName ASC';
		}
	}
	$resultat = mysql_query($requete);
	$_SESSION['nbResultatsCatalogue'] = mysql_num_rows($resultat);
	afficheListeProduit($resultat);
}
?>
