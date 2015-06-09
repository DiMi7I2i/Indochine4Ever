<?php
	
	function nbProduits(){
		$requete = 'SELECT * FROM `products`';
		$resultat = mysql_query($requete);
		$nbLigne = mysql_num_rows($resultat);
		return $nbLigne;
	}


?>