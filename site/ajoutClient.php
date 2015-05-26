<?php

// Inclusion du header
include 'ini.php';

$nom = $_GET['txtNom'];
$prenom = $_GET["txtPrenom"];
echo 1;
echo $_GET['txtNom'];
echo 2;
echo $nom;
userCreation($nom,$conn);
/*
 * valeur du get dans le formulaire
'.$_GET['txtPrenom'].';
'.$_GET['txtNom'].';
'.$_GET['txtMail'].'
'.$_GET['txtPassword'].'
'.$_GET['txtAdresse'].';
'.$_GET['adresseComp'].';
'.$_GET['ville'].';
'.$_GET['lstRegion'].';
'.$_GET['txtCodePostal'].';
'.$_GET['lstPays'].';
'.$_GET['phone'].';
'.$_GET['aditionalInfo'].';
'.$_GET['mobile'].';*/

/**
 * creation d'un utilisateur
 * @param unknown $nom
 * @param unknown $bdd
 */
function userCreation($nom,$bdd){
	$requeteInsertion= 'INSERT INTO users(UserID,UserEmail,UserPassword,UserFirstName,UserLastName,UserCity,UserState,UserZip,UserEmailVerified,UserRegistrationDate,UserVerificationCode,UserIP,UserPhone,UserFax,UserCountry,UserAddress,UserAddress2) 
			VALUES("","'.$_GET['txtMail'].'","'.$_GET['txtPassword'].'","'.$_GET['txtPrenom'].'","'.$_GET['txtNom'].'","'.$_GET['ville'].'","'.$_GET['lstRegion'].'","'.$_GET['txtCodePostal'].'","","","","","'.$_GET['phone'].'","","'.$_GET['lstPays'].'","'.$_GET['txtAdresse'].'","'.$_GET['adresseComp'].'")';
	$resultat = mysql_query($requeteInsertion,$bdd);
	echo $requeteInsertion;
}

?>
