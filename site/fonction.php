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

//liste les produits de la base
function listerNouveauProduit($bdd) {
	try
	{
		$requete = "SELECT * FROM products where ProductUnlimited=1";
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
		echo "	<ul class=\"unstyled\">";
		while ($produit = mysql_fetch_array($produitBase)) {
			$aucunProduit=false;
			$produitObject = produitDatabaseToProduitObject($produit);
			afficheProduit($produitObject);
		}
		if($aucunProduit){
			echo "Aucun produit trouvé";
		}else{
			echo "</ul>";
		}
	
}

//affiche un produit
function afficheProduit($produit){
	echo '<li class="span3">';
  	echo '<div class="thumbnail">';
  	if($produit->getEstNouveauProduit()==1){
  		echo '<a href="#" class="tag" src="bootsshop/assets/products/new.png"></a>';
  	}
	echo "<a href=product_details.php?id_produit=".$produit->getIdProduit().">"."<img src=".$produit->getVignetteProduit()." alt=></a>";
	echo '<div class="caption">';
	echo '<h5>'.$produit->getNomProduit().'</h5>';
	echo '<p> ';
	echo $produit->getDescriptionLongue();
	echo '</p>';
	echo '<h4><a class="btn" href="product_details.php?id_produit='.$produit->getIdProduit().'&product_price='.$produit->getPrixProduit().'">'.afficherLibelle('detail').'</a> <span class="pull-right">'.formatDevise($produit->getPrixProduit()).'</span></h4>';
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

/**
 * creation d'un utilisateur
 * @param unknown $nom
 * @param unknown $bdd
 */
function userCreation($bdd,$mail,$prenom,$nom,$password,$adresse,$adresseComp,$ville,$zip,$pays,$telephone,$userIp){
	$date = date('d-m-Y H:i:s');
	$requeteInsertion= "INSERT INTO users(UserID,UserEmail,UserPassword,UserFirstName,UserLastName,UserCity,UserZip,UserEmailVerified,UserRegistrationDate,UserIP,UserPhone,UserCountry,UserAddress,UserAddress2)
			VALUES(\"\",'".$mail."','".$password."','".$prenom."','".$nom."','".$ville."','".$zip."','','".$date."','".$userIp."','".$telephone."','".$pays."','".$adresse."','".$adresseComp."')";
	$resultat = mysql_query($requeteInsertion,$bdd);
}

function choixDevise($devise){
	$_SESSION['devise'] = $devise;
}

//format du prix
function formatDevise($prix){
	$nbTotal = $prix;
	if (!empty($_SESSION['devise'])){
		if ($_SESSION['devise'] == "dollar"){
			$nbTotal = number_format($prix * TX_CONVERSION_EURO_VERS_DOLLAR,2) ."$";
		} else if($_SESSION['devise'] == "euro"){
			$nbTotal = ($prix) ."€";
		}
	} else {
		$_SESSION['devise'] == "euro";
	}
	return $nbTotal;
}

// Initialisation de la langue (Anglais par defaut)
function initLangue(){
	if (!isset($_SESSION['langue'])){
		$_SESSION['langue'] = 'en';
	}
}

// Initialisation de la devise (Euro par defaut)
function initDevise(){
	if (!isset($_SESSION['devise'])){
		$_SESSION['devise'] = 'euro';
	}
}

// Initialisation du panier
function initCaddie(){
	if (!isset($_SESSION['caddie'])){
		$caddie = serialize(new Caddie(array()));
		//print_r($caddie);
		$_SESSION['caddie']=$caddie;
	}
}
// Initialisation de la liste des categories produit
function initCategories(){
	if (!isset($_SESSION['categories'])){
		$listeCategories = fetchListeCategories();
		$_SESSION['categories']= serialize($listeCategories);
	}
}

?>
