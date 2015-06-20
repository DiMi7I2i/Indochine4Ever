<?php 

function creationTableauPanier($caddie){
	echo "<table class=\"table table-bordered\">";
	creationEnteteTableauPanier();
	creationCorpTableauPanier($caddie);
	echo "</table>";
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
	echo afficherLibelle('reduction');
	echo "</td>";
	echo "<td>";
	echo afficherLibelle('taxe');
	echo "</td>";
	echo "<td>";
	echo afficherLibelle('total');
	echo "</td>";
	echo "</thead>";
}

function creationColonneQuantitePanier(){
	echo "<div class=\"input-append\">";
	echo "<input type=\"text\" size=\"16\" id=\"appendedInputButtons\" placeholder=\"1\" style=\"max-width:34px\" class=\"span1\">";
	echo "<button type=\"button\" class=\"btn\"><i class=\"icon-minus\"></i></button>";
	echo "<button type=\"button\" class=\"btn\"><i class=\"icon-plus\"></i></button>";
	echo "<button type=\"button\" class=\"btn btn-danger\"><i class=\"icon-remove icon-white\"></i></button>";
	echo "</div>";
}

function creationContenuColonnePanier($ligne){
	$produit=$ligne->getProduit();
	echo "<td>";
	echo "image produit";
	echo "</td>";
	echo "<td>";
	echo "".$produit->getDescriptionCaddie();
	echo "</td>";
	echo "<td>";
	echo "quantite produit";
	echo "</td>";
	echo "<td>";
	creationColonneQuantitePanier();
	echo "</td>";
	echo "<td>";
	echo "".$produit->getPrixProduit();
	echo "</td>";
	echo "<td>";
	echo "test";
	echo "</td>";
	echo "<td>";
	echo "$120.00";
	echo "</td>";
}

function creationTotalCorpTableauPanier(){
	echo "<tr>";
	echo "<td align=\"right\" colspan=\"6\">";
	echo afficherLibelle('prixTotal');
	echo "</td>";
	echo "<td>";
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align=\"right\" colspan=\"6\">";
	echo afficherLibelle('prixReduction');
	echo "</td>";
	echo "<td>";
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align=\"right\" colspan=\"6\">";
	echo afficherLibelle('prixTax');
	echo "</td>";
	echo "<td>";
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align=\"right\" colspan=\"6\">";
	echo afficherLibelle('prixTotalTTC');
	echo "</td>";
	echo "<td class=\"label label-important\">";
	echo "<strong>"."155RP"."</strong>";
	echo "</td>";
	echo "</tr>";
}

function creationCorpTableauPanier($ligneCaddie){
	echo "<tbody>";
	//liste des lignes du caddie en parametre
	$nbLigne=count($ligneCaddie);
	print_r($nbLigne);
	for($i=0;$i<$nbLigne;$i++){
		echo "<tr>";
		creationContenuColonnePanier($ligneCaddie[$i]);
		echo "</tr>";
	}
	creationTotalCorpTableauPanier();
	echo "</tbody>";
}

?>