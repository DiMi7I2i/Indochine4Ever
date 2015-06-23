<div id="mainBody" class="container">
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html"><?php echo afficherLibelle('accueil') ?></a> <span class="divider">/</span></li>
		<li class="active"><?php echo afficherLibelle('panier') ?></li>
    </ul>
	<h3><?php echo strtoupper(afficherLibelle('panier')) ?> [ 
		<small>
			<?php $caddie=$_SESSION['caddie'];
			$caddie=unserialize($caddie);
			echo nbElementPanier($caddie);
			echo " ";
			echo afficherLibelle('element');
			?>
		</small>]
		<a href="catalogue_page.php" class="btn btn-large pull-right"><i class="icon-arrow-left"></i><?php echo afficherLibelle('continuerAchat') ?></a></h3>	
	<hr class="soft"/>
	<?php 
	$userCheckPanier=isset($_SESSION['user']) ? $_SESSION['user'] : "";
	if($userCheckPanier==""){
	echo	"<table class=\"table table-bordered\">";
	echo	"<tbody>";
	echo		"<tr><th colspan=\"2\"> ". afficherLibelle("connexionPanier")." </th></tr>";
	echo		 "<tr>"; 
	echo		 "<td colspan=\"2\">";
	echo 			"<form class=\"form-horizontal loginFrm\" action=\"#\" method=\"get\">";
	echo			  "<div class=\"control-group\">";
	echo				"<label class=\"span2 control-label\" for=\"username\">Username</label>";
	echo				"<div class=\"controls\">";
	echo				 "<input type=\"text\" id=\"inputEmail\" name=\"inputEmail\" placeholder=\"Username\">"; 
	echo				"</div>";
	echo			  "</div>";
	echo			 "</div>";
	echo			  "<div class=\"control-group\">";
	echo				"<label class=\"span2 control-label\" for=\"inputPassword\">Password</label>"; 
	echo				"<div class=\"controls\">";
	echo				 "<input type=\"password\" id=\"inputPassword\" name=\"inputPassword\" placeholder=\"Password\">";
	echo				"</div>";
	echo			  "</div>";
	echo			  "<div class=\"control-group\">";
	echo				"<div class=\"controls\">";
	echo				  "<button type=\"submit\" class=\"btn\">Sign in</button> <a href=\"register_page.php\"> Register now !</a>";
	echo				"</div>";
	echo			  "</div>";
	echo			"</form>";				  
	echo		  "</td>";
	echo		  "</tr>";
	echo	  "</tbody>";
	echo	"</table>";
	}
	?>
			
	<?php
	$caddie=$_SESSION['caddie'];
	$caddie=unserialize($caddie);
	creationTableauPanier($caddie);
	?>
	<form id="formAjoutPanier" action="produit_sommaire_page.php" method="get" >
		<input type="hidden" name="txtActionFormulairePanier" value="1">
		<input type="hidden"  id="txtIndexLigneAjout" name="txtIndexLigne" >
	</form>
	<form id="formRetraitPanier" action="produit_sommaire_page.php" method="get" >
		<input type="hidden" name="txtActionFormulairePanier" value="2">
		<input type="hidden" id="txtIndexLigneRetrait" name="txtIndexLigne" >
	</form>
	<form id="formSuppressionPanier" action="produit_sommaire_page.php" method="get" >
		<input type="hidden" name="txtActionFormulairePanier" value="3">
		<input type="hidden" id="txtIndexLigneSuppression" name="txtIndexLigne" >
	</form>
	
	<?php require 'paiement_paypal.php' ?>
	
</div>
</div>
<script type="text/javascript" src="js/refresh_panier.js"></script>
