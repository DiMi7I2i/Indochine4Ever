<?php include 'sidebar.php' ?>

	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php"><?php echo afficherLibelle('accueil') ?></a> <span class="divider">/</span></li>
		<li class="active"><?php echo afficherLibelle('catalogue') ?></li>
    </ul>
	<h3><?php echo afficherLibelle('catalogue') ?><small class="pull-right"><?php echo nbProduits().' '.afficherLibelle('produitsSontDispo') ?></small></h3>	
	<hr class="soft"/>
	<form class="form-horizontal span6">
		<div class="control-group">
		  <label class="control-label alignL"><?php echo afficherLibelle('trierPar') ?></label>
			<select>
              <option><?php echo afficherLibelle('nomDuProduitA_Z') ?></option>
              <option><?php echo afficherLibelle('nomDuProduitZ_A') ?></option>
              <option><?php echo afficherLibelle('produitEnStock') ?></option>
              <option><?php echo afficherLibelle('prixLePlusBas') ?></option>
            </select>
		</div>
	  </form>
	<div id="myTab" class="pull-right">
	 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
	 <a href="#blockView" data-toggle="tab"><span class="btn btn-large active"><i class="icon-th-large icon-white"></i></span></a>
	</div>
<br class="clr"/>
<div class="tab-content">	
	<?php include 'produits.php'; ?>

	<hr class="soft"/>
	</div>
</div>
<a href="bootsshop/compair.html" class="btn btn-large pull-right">Compair Product</a>
	<div class="pagination">
		<ul>
		<li><a href="#">&lsaquo;</a></li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">...</a></li>
		<li><a href="#">&rsaquo;</a></li>
		</ul>
	</div>
<br class="clr"/>
</div>
</div>
<script>
document.getElementById('idPageCatalogue').className = "active";
</script>