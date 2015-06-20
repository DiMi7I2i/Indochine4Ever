<?php
	
	function nbProduits(){
		$requete = 'SELECT * FROM `products`';
		$resultat = mysql_query($requete);
		$nbLigne = mysql_num_rows($resultat);
		return $nbLigne;
	}
	
	//retourne la TVA a partir d'un prix
	function calculPrixTVA($prix){
		return $prix-(((100-PRIX_TVA)*$prix)/100);
	}

// Retourne une liste de produits en fonction d'un tri
function listeProduitTriee($tri){
	$requete = "";
	if ($tri == "1" || $tri == ""){ // Croissant
		$requete = 'SELECT * FROM `products` ORDER BY ProductName ASC';
	} else if ($tri == "2"){ // Decroissant
		$requete = 'SELECT * FROM `products` ORDER BY ProductName DESC';
	} else if ($tri == "3"){ // En stock
		$requete = 'SELECT * FROM `products` ORDER BY ProductStock DESC';
	} else if ($tri == "4"){ // Prix le plus bas
		$requete = 'SELECT * FROM `products` ORDER BY ProductPrice ASC';
	}
	
	$resultat = mysql_query($requete);
	afficheListeProduit($resultat);
}


?>
