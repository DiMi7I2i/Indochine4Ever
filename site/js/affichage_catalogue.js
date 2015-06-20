/**
 * Classe JS propre au fonctionnement de la transaction catalogue
 */

// Requête AJAX permettant de récupérer la liste des produits en fonction d'un tri
function catalogResult(){
	   $.ajax({
		      type: 'POST',
		      url: 'resultatCatalogue.php',
		      data: $('#idFormTypeTriCatalogue').serialize()
		   }).done(function(html){
		      $('#idContent').html(html);
		   });
}

// MAJ selection onglet du header
document.getElementById('idPageCatalogue').className = "active";

