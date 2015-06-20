<?php
$tri = "";
$resultatParPage=10;

if (isset($_POST['lstTypeTriProduitCatalogue'])){
	include 'ini.php';
	$tri = $_POST['lstTypeTriProduitCatalogue'];
}
listeProduitTriee($tri);

?>