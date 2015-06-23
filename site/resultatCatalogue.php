<?php
$tri = "";
$idCategorie="";
$resultatParPage=10;

if (isset($_POST['lstTypeTriProduitCatalogue'])){
	include 'ini.php';
	$tri = $_POST['lstTypeTriProduitCatalogue'];
}

if (isset($_SESSION['idCategorieSelectionnee'])){
	$idCategorie = $_SESSION['idCategorieSelectionnee'];
}

listeProduitTriee($tri,$idCategorie);
?>