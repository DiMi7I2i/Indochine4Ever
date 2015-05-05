<?php

$fr = array(
	'accueil' => 'Accueil',
	'contact' => 'Contact',
	'bouton_special_offer' => 'Offre spéciale',
	'compte' => 'Mon compte',
	'detail' => 'Détail',
	'livraison' => 'Livraison'
);

$en = array(
	'accueil' => 'Home',
	'contact' => 'Contact',
	'bouton_special_offer' => 'Special Offer',
	'compte' => 'Account',
	'detail' => 'Détail',
	'livraison' => 'Delivery'
);

function afficherLibelle ($key) {

	$search = $GLOBALS['fr'];

	if (array_key_exists($key, $search))
	{
		return $search[$key];
	}
}

?>