/**
 * Classe JS propre au fonctionnement de la transaction catalogue
 */

function refreshPanierAjout(quantite,indexLigne,caddie){
	$('#txtIndexLigneAjout').val(indexLigne);
	$('#formAjoutPanier').submit();
}

function refreshPanierRetrait(quantite,indexLigne,caddie){	
	if(quantite==1){
		alert("La quantité d'un produit ne peut pas être inférieure à 1");
	}else{
		$('#txtIndexLigneRetrait').val(indexLigne);
		$('#formRetraitPanier').submit();
	}
}

function refreshPanierSuppression(indexLigne){
	$('#txtIndexLigneSuppression').val(indexLigne);
	if(confirm("Etes-vous sur de vouloir supprimer la produit?")){
		$('#formSuppressionPanier').submit();
	}
}

