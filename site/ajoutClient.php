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

function userCreation($nom,$bdd){
	$requeteInsertion= 'INSERT INTO users(UserID,UserFirstName) VALUES("","test")';
	$resultat = mysql_query($requeteInsertion,$bdd);
}

?>