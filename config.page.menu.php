<?php

$cfg['page_index'] = 'index.php';
$cfg['page_offer'] = 'index.php';
$cfg['page_livraison'] = 'index.php';
$cfg['page_contact'] = 'bootsshop/contact.html';
$cfg['page_produit'] = 'produit_liste.php';

function afficheMenuHeader()
{

 	echo '<ul class="nav">';
	echo '<li class="active"><a href="'.$GLOBALS['cfg']['page_index'].'">'.afficherLibelle('accueil').'</a></li>';
	echo '<li class=""><a href="'.$GLOBALS['cfg']['page_offer'].'">'.afficherLibelle('bouton_special_offer').'</a></li>';
	echo '<li class=""><a href="'.$GLOBALS['cfg']['page_livraison'].'">'.afficherLibelle('livraison').'</a></li>';
	echo '<li class=""><a href="'.$GLOBALS['cfg']['page_contact'].'">'.afficherLibelle('contact').'</a></li>';
	echo '</ul>';
}

?>