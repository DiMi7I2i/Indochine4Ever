<?php 
function creationTableauPanier($caddie){
	if (isset($caddie) && $caddie != null){
		echo "<table class=\"table table-bordered\">";
		creationEnteteTableauPanier();
		creationCorpTableauPanier($caddie);
		echo "</table>";
	}
}

function creationEnteteTableauPanier(){
	echo "<thead>";
	echo "<td>";	
	echo afficherLibelle('produit');
	echo "</td>";
	echo "<td>";	
	echo afficherLibelle('description');
	echo "</td>";
	echo "<td>";
	echo afficherLibelle('quantite');
	echo "</td>";
	echo "<td>";
	echo afficherLibelle('prix');
	echo "</td>";
	echo "<td>";
	echo afficherLibelle('taxe');
	echo "</td>";
	echo "<td>";
	echo afficherLibelle('total');
	echo "</td>";
	echo "</thead>";
}

function creationColonneQuantitePanier($quantite,$indexLigne,$caddie){
	echo "<div class=\"input-append\">";
	echo "<input type=\"text\" size=\"16\" id=\"appendedInputButtons\" value=\"$quantite\" style=\"max-width:34px\" class=\"span1\" disabled>";
	echo "<button type=\"button\" name=\"btnMoins\" onclick=\"refreshPanierRetrait($quantite,$indexLigne);\" class=\"btn\"><i class=\"icon-minus\"></i></button>";
	echo "<button type=\"button\" name=\"btnPlus\" onclick=\"refreshPanierAjout($quantite,$indexLigne);\" class=\"btn\"><i class=\"icon-plus\"></i></button>";
	echo "<button type=\"button\" name=\"btnSuppr\" onclick=\"refreshPanierSuppression($indexLigne);\" class=\"btn \"><i class=\"icon-remove icon-white\"></i></button>";
	echo "</div>";
}

function creationContenuColonnePanier($ligne,$indexLigne,$caddie){
	//produit
	$produit=$ligne->getProduit();
	//quantite du produit dans la ligne
	$quantite=$ligne->getQuantite();
	//prix du produit
	$prix = $produit->getPrixProduit();
	echo "<td>";
	echo "<img width=\"60\" src=".$produit->getImageProduit()." alt=".$produit->getNomProduit()."/>";
	echo "</td>";
	echo "<td>";
	echo "<b>".$produit->getNomProduit()."</b>";
	echo "<br />";
	echo $produit->getDescriptionCaddie();
	echo "</td>";
	echo "<td>";
	creationColonneQuantitePanier($quantite,$indexLigne,$caddie);
	echo "</td>";
	echo "<td>";
	echo "".formatDevise($prix);
	echo "</td>";
	echo "<td>";
	echo formatDevise(round(calculPrixTVA($prix),2,PHP_ROUND_HALF_UP));
	echo "</td>";
	echo "<td>";
	echo "".formatDevise($prix);
	echo "</td>";
}

function creationTotalCorpTableauPanier($caddie){
	echo "<tr>";
	echo "<td align=\"right\" colspan=\"5\">";
	echo afficherLibelle('prixTax');
	echo "</td>";
	echo "<td>";
	echo formatDevise(calculTaxePrix($caddie));
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align=\"right\" colspan=\"5\">";
	echo afficherLibelle('prixTotal');
	echo "</td>";
	echo "<td class=\"label label-important\">";
	echo "<strong>".formatDevise(calculTotalPrix($caddie))."</strong>";
	echo "</td>";
	echo "</tr>";
}

function creationCorpTableauPanier($caddie){
	echo "<tbody>";
	//liste des lignes du caddie en parametre
	$ligneCaddie=$caddie->getListeLigne();
	$nbLigne=count($ligneCaddie);
	for($i=0;$i<$nbLigne;$i++){
		echo "<tr>";
		creationContenuColonnePanier($ligneCaddie[$i],$i,$caddie);
		echo "</tr>";
	}
	creationTotalCorpTableauPanier($caddie);
	echo "</tbody>";
}

?>
