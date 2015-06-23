<?php 
$titrePage="";

if (isset($_GET['idCategorie'])){
	$_SESSION['idCategorieSelectionnee'] = $_GET['idCategorie'];
	$titrePage = $_GET['nomCategorie'];
} else {
	$_SESSION['idCategorieSelectionnee'] = "";
	$titrePage = afficherLibelle('catalogue');
}

if (!isset($_SESSION['nbResultatsCatalogue'])){
	$_SESSION['nbResultatsCatalogue'] = "";
}

?>

<div class="span9">
	<ul class="breadcrumb">
		<li><a href="index.php"><?php echo afficherLibelle('accueil') ?></a><span class="divider">/</span></li>
		<li class="active"><?php echo afficherLibelle('catalogue') ?></li>
	</ul>
	<h3><?php echo $titrePage ?><small class="pull-right"><?php echo $_SESSION['nbResultatsCatalogue'].' '.afficherLibelle('produitsSontDispo') ?></small>
	</h3>
	<hr class="soft" />
	<form id="idFormTypeTriCatalogue" class="form-horizontal span6" action="catalogue_page.php" method="post">
		<div class="control-group">
			<label class="control-label alignL"><?php echo afficherLibelle('trierPar') ?></label>
			<select name="lstTypeTriProduitCatalogue" onChange="catalogResult();">
				<option value="1"><?php echo afficherLibelle('nomDuProduitA_Z') ?></option>
				<option value="2"><?php echo afficherLibelle('nomDuProduitZ_A') ?></option>
				<option value="3"><?php echo afficherLibelle('produitsEnStock') ?></option>
				<option value="4"><?php echo afficherLibelle('prixLePlusBas') ?></option>
			</select>
		</div>
	</form>
	<br class="clr" />
	<div id="idContent" class="tab-content">
		<?php require 'resultatCatalogue.php';?>
	</div>
</div>
<br class="clr" />
</div>
<script type="text/javascript" src="js/affichage_catalogue.js"></script>