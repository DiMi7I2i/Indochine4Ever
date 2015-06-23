<?php
// Inclusion du header
include 'ini.php';
// Inclusion du header
include 'header.php';
include 'carroussel.php';

$enregistrement=isset($_GET['is_new_customer']) ? $_GET['is_new_customer'] : "";
if($enregistrement!=""){
	/*valeur du get dans le formulaire*/
	$mail=$_GET['txtMail'];
	$prenom=$_GET['txtPrenom'];
	$nom=$_GET['txtNom'];
	$password=$_GET['txtPassword'];
	$adresse=$_GET['txtAdresse'];
	$adresseComp=$_GET['adresseComp'];
	$ville=$_GET['ville'];
	$zip=$_GET['txtCodePostal'];
	$pays=$_GET['lstPays'];
	$telephone=$_GET['phone'];
	//recuperation de l'ip de l'utilisateur
	$userIp=$_SERVER['REMOTE_ADDR'];
	//creation utilisateur
	userCreation($conn,$mail,$prenom,$nom,$password,$adresse,$adresseComp,$ville,$zip,$pays,$telephone,$userIp);
}

// Inclusion des produits
include 'produits.php';
// Inclusion du footer
include 'footer.php';
?>	