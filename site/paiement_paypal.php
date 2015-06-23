<?php
$caddiePaypal=$_SESSION['caddie'];
$caddiePaypal=unserialize($caddiePaypal);
$deviseVersPaypal="EUR";
if (!empty($_SESSION['devise'])){
	if ($_SESSION['devise'] == "dollar"){
		$deviseVersPaypal="USD";
	} else if($_SESSION['devise'] == "euro"){
		$deviseVersPaypal="EUR";
	}
} else {
	$_SESSION['devise'] == "euro";
}
	

if (isset($caddiePaypal) && $caddiePaypal != null){
	//liste des lignes du caddie en parametre
	$ligneCaddie=$caddiePaypal->getListeLigne();
	$nbLigne=count($ligneCaddie);
	if ($nbLigne > 0){
		echo '<form action='.PAYPAL_URL.' method="post">';
		echo 	'<a href="catalogue_page.php" class="btn btn-large"><i class="icon-arrow-left"></i>'.afficherLibelle('continuerAchat').'</a>';
		echo 	"<input name=\"currency_code\" type=\"hidden\" value=$deviseVersPaypal />";
		echo 	'<input name="shipping" type="hidden" value="0.00" />';
		echo 	'<input name="return" type="hidden" value="http://localhost/bootTest/git/siteEcommerce/siteEcommerce/catalogue_page.php?resetCaddie=1" />';
		echo 	'<input name="rm" value="2" type="hidden" />';
		echo 	'<input name="cancel_return" type="hidden" value="http://localhost/bootTest/git/siteEcommerce/siteEcommerce/produit_sommaire_page.php" />';
		echo 	'<input name="cmd" type="hidden" value="_cart" />';
		echo	'<input type="hidden" name="upload" value="1">';
		echo 	'<input name="business" type="hidden" value="dimitrichkopf-facilitator@hotmail.com" />';
		$nbItem=0;
		for($i=0;$i<$nbLigne;$i++){
			$nbItem++;
			// Ligne caddie
			$lignePanier = $ligneCaddie[$i];
			// Produit
			$produitPaypal=$lignePanier->getProduit();
			echo 	'<input type="hidden" name="item_name_'.$nbItem.'" value="'.$produitPaypal->getNomProduit().'">';
			echo	'<input type="hidden" name="amount_'.$nbItem.'" value="'.$produitPaypal->getPrixProduit().'">';
			echo	'<input type="hidden" name="quantity_'.$nbItem.'" value="'.$lignePanier->getQuantite().'">';
		}
		echo 	'<input name="tax_cart" type="hidden" value='.PRIX_TVA.' />';
		echo	'<input name="no_note" type="hidden" value="1" />';
		echo 	'<input name="lc" type="hidden" value="FR" />';
		echo 	'<input name="bn" type="hidden" value="PP-BuyNowBF" />';
		echo	'<input type="hidden" name="cpp_header_image" value="http://www.phpgang.com/wp-content/uploads/gang.jpg">';
		echo	'<input alt="Effectuez vos paiements via PayPal : une solution rapide, gratuite et sécurisée" class="pull-right" name="submit" src="https://www.paypal.com/fr_FR/FR/i/btn/btn_buynow_LG.gif" type="image" />';
		echo 	'<img src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" border="0" alt="" width="1" height="1" />';
		echo '</form>';
	}
}
?>