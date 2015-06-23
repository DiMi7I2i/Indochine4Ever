<?php

$cfg['page_index'] = 'index.php';
$cfg['page_catalogue'] = 'catalogue_page.php';
$cfg['page_offer'] = 'special_offer_page.php';
$cfg['page_livraison'] = 'delivery_page.php';
$cfg['page_contact'] = 'contact_page.php';
$cfg['page_produit'] = 'produit_liste.php';
$cfg['page_inscription'] = 'register_page.php';

function afficheMenuHeader()
{
 	echo '<ul class="nav">';
	echo '<li id="idPageIndex" class=""><a href="'.$GLOBALS['cfg']['page_index'].'">'.afficherLibelle('accueil').'</a></li>';
	echo '<li id="idPageCatalogue" class=""><a href="'.$GLOBALS['cfg']['page_catalogue'].'">'.afficherLibelle('catalogue').'</a></li>';
	echo '<li id="idPageLivraison" class=""><a href="'.$GLOBALS['cfg']['page_livraison'].'">'.afficherLibelle('livraison').'</a></li>';
	echo '<li id="idPageContact" class=""><a href="'.$GLOBALS['cfg']['page_contact'].'">'.afficherLibelle('contact').'</a></li>';
	echo '</ul>';
}

?>