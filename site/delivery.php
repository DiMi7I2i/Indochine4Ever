<?php include 'sidebar.php' ?>

	<div class="span9" id="mainCol">
    <ul class="breadcrumb">
		<li><a href="index.php"><?php echo afficherLibelle('accueil') ?></a> <span class="divider">/</span></li>
		<li class="active"><?php echo afficherLibelle('livraison') ?></li>
    </ul>
	<h3><?php echo afficherLibelle('conditionsEtFraisLiv') ?></h3>	
	<hr class="soft"/>
	
	
	<h4><?php echo afficherLibelle('livraison1JOuvre') ?></h4>
	<p>
		<?php echo afficherLibelle('livraisonLendemain').', '.afficherLibelle('entre9hEt18h').', '.afficherLibelle('pourCmdLundiAuVendredi').', '.afficherLibelle('ouLivraisonJourSortie').'.'  ?>
	</p>
	<table border="2" width="100%">
		<tr style="background-color:#E6E6E6;">
			<td width="50%"><b><?php echo afficherLibelle('frais') ?></b></b></td><td width="50%"><b><?php echo afficherLibelle('delais') ?></b></td>		
		</tr>
		<tr>
			<td>
				<p><?php echo afficherLibelle('7.99EnvoiMedia') ?></p>
				<p><?php echo afficherLibelle('9.99AutresArticlesElig') ?></p>
				<p><?php echo afficherLibelle('2.99ParEnvoiLivJourSor') ?></p>
			</td>
			<td>
				<?php echo afficherLibelle('commentaireDelais1JOuv') ?>.
			</td>
		</tr>
	</table>
	
	<h4><?php echo afficherLibelle('livraison2JOuvres') ?></h4>
	<p>
		<?php echo afficherLibelle('livraison2JOuvres').', '.afficherLibelle('entre9hEt18h').', '.afficherLibelle('pourCmdLundiAuVendredi').'.' ?>
	</p>
	<table border="2" width="100%">
		<tr style="background-color:#E6E6E6;">
			<td width="50%"><b><?php echo afficherLibelle('frais') ?></b></b></td><td width="50%"><b><?php echo afficherLibelle('delais') ?></b></td>
		</tr>
		<tr>
			<td>
				<p><?php echo afficherLibelle('7.99EnvoiMedia') ?></p>
				<p><?php echo afficherLibelle('9.99AutresArticlesElig') ?></p>
			</td>
			<td>
				<?php echo afficherLibelle('commentaireDelais2JOuv') ?>.
			</td>
		</tr>
	</table>
	
	<h4><?php echo afficherLibelle('livraisonPrioritaire') ?></h4>
	<p>
		<?php echo afficherLibelle('livraison2A3JOuvres') ?>.
	</p>
	<table border="2" width="100%">
		<tr style="background-color:#E6E6E6;">
			<td width="50%"><b><?php echo afficherLibelle('frais') ?></b></b></td><td width="50%"><b><?php echo afficherLibelle('delais') ?></b></td>
		</tr>
		<tr>
			<td>
				<p><?php echo afficherLibelle('7.99EnvoiMedia') ?></p>
				<p><?php echo afficherLibelle('9.99AutresArticlesElig') ?></p>
			</td>
			<td>
				<?php echo afficherLibelle('commentaireDelaisPrior') ?>
			</td>
		</tr>
	</table>

</div>
</div>
<script>
document.getElementById('idPageLivraison').className = "active";
</script>