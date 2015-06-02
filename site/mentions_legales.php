<?php include 'sidebar.php' ?>

	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php"><?php echo afficherLibelle('accueil') ?></a> <span class="divider">/</span></li>
		<li class="active"><?php echo afficherLibelle('mentionLegale') ?></li>
    </ul>
	<h3><?php echo afficherLibelle('mentionLegale') ?></h3>	
	<hr class="soft"/>
	<div id="legalNotice">
	
		<table width="100%">
			<tr>
				<td style="vertical-align: top;">
					<h5><?php echo afficherLibelle('raisonSociale') ?></h5>
					<p>
						Indochine4Ever.
					</p>
				</td>
				<td>
					<h5><?php echo afficherLibelle('siegeSocial') ?></h5>
					<p>
						Cnam Alsace - IUT Mulhouse.<br>
						61 rue Albert Camus.<br>
						Tel: 03 89 42 67 09.
					</p>
				</td>
			</tr>
			<tr>
				<td style="vertical-align: top;">
					<h5><?php echo afficherLibelle('auteursDuSite') ?></h5>
					<p>
						Matthieu D.<br>
						Dimitri F.
					</p>	
				</td>
			</tr>
		</table>

	</div>
	</div>
</div>
