<?php

function afficherDebuginfo($libelle) {
	if (DEBUG == 1)
		echo "<div class=\"alert alert-success\" role=\"alert\">". $libelle ."</div>";
}

function afficherDebugalert($libelle) {
	if (DEBUG == 1)
		echo "<div class=\"alert alert-danger\" role=\"alert\">". $libelle ."</div>";
}

function connecterDatabase() {
	try
	{
		$connexion = mysql_connect(SQL_DSN,SQL_USERNAME,SQL_PASSWORD);
		if (DEBUG == 1)
			afficherDebuginfo('Connection réussie');
	}
	catch (Exception $e)
	{
			afficherDebugalert($e->getMessage());
	}

	return $connexion;
}

function connecterDatabaseBdd($bdd) {
	try
	{
		$connectBdd = mysql_select_db(SQL_BDD,$bdd);
		if (DEBUG == 1)
			afficherDebuginfo('Connection réussie à la base');
	}
	catch (Exception $e)
	{
			afficherDebugalert($e->getMessage());
	}

	return $connectBdd;
}

//liste les produits de la base
function listerProduit($bdd) {
	try
	{
		$requete = "SELECT * FROM products";
		$resultat = mysql_query($requete,$bdd);
		afficheListeProduit($resultat);
	}
	catch (Exception $e)
	{
			afficherDebugalert($e->getMessage());
	}

	return $resultat;
}

//affiche une liste de produit
function afficheListeProduit($produitBase){
		$aucunProduit=true;
		while ($produit = mysql_fetch_array($produitBase)) {
			$aucunProduit=false;
			afficheProduit($produit);
		}
		if($aucunProduit){
			echo "Aucun produit trouvé";
		}
	
}

//affiche un produit
function afficheProduit($produit){
	echo '<li class="span3">';
  	echo '<div class="thumbnail">';
  	echo '<a href="#" class="tag" src="bootsshop/assets/products/new.png"></a>';
	echo '<a href="product_details.php?id_produit="'.$produit['ProductID'].'><img src="bootsshop/assets/products/1.jpg" alt=""></a>';
	echo '<div class="caption">';
	echo '<h5>'.$produit['ProductName'].'</h5>';
	echo '<p> ';
	echo 'Lorem Ipsum is simply dummy text. ';
	echo '</p>';
	echo '<h4><a class="btn" href="product_details.php?id_produit='.$produit['ProductID'].'&product_price='.$produit['ProductPrice'].'">'.afficherLibelle('detail').'</a> <span class="pull-right">'.number_format($produit['ProductPrice'],2,',',' ').'</span></h4>';
	echo '</div>';
  	echo '</div>';
	echo '</li>';
}

//requete en base recherchant le detail d'un produit avec un idproduit
function listeDetailProduit($conn,$productID){
    $requete = 'SELECT * FROM products WHERE ProductID ='.$productID;
    $resultat = mysql_query($requete,$conn);
    $produit = mysql_fetch_array($resultat);
    return $produit;
}

//format du prix
function formatDevise($prix){
    $money = number_format($prix, 3);
    return $money;
}

//recherche un produit par id et nom
function rechercheProduit($terme,$conn){
	try
	{
		$requete = "SELECT * FROM products WHERE ProductName LIKE '%$terme%' or ProductID LIKE '%$terme%'";
    	$resultat = mysql_query($requete,$conn);
		afficheListeProduit($resultat);
	}
	catch (Exception $e)
	{
			afficherDebugalert($e->getMessage());
	}
	
	return $resultat;
	
}

function initLangue(){
	if (!isset($_SESSION['langue'])){
		$_SESSION['langue'] = 'en';
	}
}

function initCaddie(){
	if (!isset($_SESSION['caddie'])){
		$caddie = serialize(new Caddie(array()));
		//print_r($caddie);
		$_SESSION['caddie']=$caddie;
	}
}
?>
