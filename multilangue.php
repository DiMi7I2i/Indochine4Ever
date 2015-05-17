<?php

$fr = array(
	// Header	
	'accueil' 				=> 'Accueil',
	'contact' 				=> 'Contact',
	'bouton_special_offer' 	=> 'Offre spéciale',
	'compte' 				=> 'Mon compte',
	'detail' 				=> 'Détail',
	'livraison' 			=> 'Livraison',
	'jeCherche'				=> 'Je cherche',	

	// Contact page
	'rendezNousVisite' 		=> 'Rendez-nous visite',
	'horairesOuverture'		=> 'Horaires d\'ouvertures',
	'lundi'					=> 'Lundi',
	'vendredi'				=> 'Vendredi',
	'samedi'				=> 'Samedi',
	'dimanche'				=> 'Dimanche',
	'9H'					=> '09:00H',
	'12H30'					=> '12:30H',
	'18H'					=> '18:00H',
	'19H'					=> '19:00H',
	'21H'					=> '21:00H',
	'ecrivezNous'			=> 'Ecrivez-nous',
	'coordonnees'			=> 'Coordonnées',
	'nom'					=> 'Nom',
	'objet'					=> 'Objet',
	'envoyerMessage'		=> 'Envoyer message',

	// Register page
	'inscription'			=> 'Inscription',
	'vosInfosPersonnelles'	=> 'Vos informations personnelles',
	'civilite'				=> 'Civilité',
	'prenom'				=> 'Prénom',
	'nom'					=> 'Nom',
	'dateNaissance'			=> 'Date de naissance',
	'votreAdresse'			=> 'Votre adresse',
	'societe'				=> 'Société',
	'adresse'				=> 'Adresse',
	'indicationAdresse'		=> 'Rue, BP, Nom de société, C/O',
	'indicationAdresseDeux'	=> 'Appartement, Etage, Bâtiment, etc.',
	'adresseDeux'			=> 'Adresse (ligne 2)',
	'ville'					=> 'Ville',
	'etat'					=> 'Etat',
	'codePostal'			=> 'BP / Code postal',
	'pays'					=> 'Pays',
	'infosAditionnelles'	=> 'Informations aditionnelles',
	'telFixe'				=> 'Téléphone fixe',
	'indicationTelFixe'		=> 'Vous devez enregistrer au moins un numéro',
	'telMobile'				=> 'Téléphone mobile',
	'champsObligatoires'	=> 'Champs obligatoires'		
		
);

$en = array(
	// Header
	'accueil' 				=> 'Home',
	'contact' 				=> 'Contact',
	'bouton_special_offer' 	=> 'Special Offer',
	'compte' 				=> 'Account',
	'detail' 				=> 'Détail',
	'livraison' 			=> 'Delivery',
	'jeCherche'				=> 'I\'m looking for',	
		
	// Contact page
	'rendezNousVisite' 		=> 'Visit Us',
	'horairesOuverture'		=> 'Opening Hours',
	'lundi'					=> 'Monday',
	'vendredi'				=> 'Friday',
	'samedi'				=> 'Samedi',
	'dimanche'				=> 'Dimanche',
	'9H'					=> '09:00AM',
	'12H30'					=> '12:30PM',
	'18H'					=> '06:00PM',
	'19H'					=> '07:00PM',
	'21H'					=> '09:00PM',
	'ecrivezNous'			=> 'Email Us',
	'coordonnees'			=> 'Contact Details',
	'nom'					=> 'Name',
	'objet'					=> 'Subject',
	'envoyerMessage'		=> 'Send Message',
		
	// Register page	
	'inscription'			=> 'Registration',
	'vosInfosPersonnelles'	=> 'Your personal information',
	'civilite'				=> 'Title',
	'prenom'				=> 'First name',
	'nom'					=> 'Last name',
	'dateNaissance'			=> 'Date of Birth',
	'votreAdresse'			=> 'Your address',
	'societe'				=> 'Company',
	'adresse'				=> 'Address',
	'indicationAdresse'		=> 'Street address, P.O. box, company name, c/o',
	'indicationAdresseDeux'	=> 'Apartment, suite, unit, building, floor, etc.',
	'adresseDeux'			=> 'Address (Line 2)',
	'ville'					=> 'City',
	'etat'					=> 'State',
	'codePostal'			=> 'ZIP / Postal Code',
	'pays'					=> 'Country',
	'infosAditionnelles'	=> 'Additional information',
	'telFixe'				=> 'Home phone',
	'indicationTelFixe'		=> 'You must register at least one phone number',
	'telMobile'				=> 'Mobile Phone',
	'champsObligatoires'	=> 'Required field'
		
		
);

function afficherLibelle($key) {
	if (!empty($_SESSION['langue'])){
		if ($_SESSION['langue'] == 'fr'){
			$search = $GLOBALS['fr'];
		} else if ($_SESSION['langue'] == 'en') {
			$search = $GLOBALS['en'];
		} else {
			$search = $GLOBALS['fr'];
		}
	} else {
		$_SESSION['langue'] == 'fr';
		$search = $GLOBALS['fr'];
	}
	
	if (array_key_exists($key, $search)){
		return $search[$key];
	}
}

function choixLangue($langue){
	$_SESSION['langue'] = $langue;
}	

?>