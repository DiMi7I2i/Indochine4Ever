<?php
// Inclusion des configs header
include 'config.page.menu.php';
if (isset ($_GET['lang'])){
	choixLangue($_GET['lang']);
}
if (isset ($_GET['devise'])){
	choixDevise($_GET['devise']);
}
if (isset($_GET['resetCaddie'])){
	$_SESSION['caddie'] = initCaddie();
}

$productID = isset($_GET['id_produit_caddie']) ? $_GET['id_produit_caddie'] : "";
$quantite = isset($_GET['quantite_caddie']) ? $_GET['quantite_caddie'] :1;
if($quantite==""){
	$quantite=1;
}
if($productID !=""){
	$produit=fetchProduit($productID,$conn);
	//dans la liste du caddie de session on ajout une ligne caddie contenant un produit
	$caddie= $_SESSION['caddie'];
	$caddie=unserialize($caddie);
	$caddieSession=ajoutProduitDansCaddie($caddie,$produit,$quantite);
	$caddieSession=serialize($caddie);
	//on remet le caddie dans la session
	$_SESSION['caddie']=$caddieSession;
}

$actionPanier = isset($_GET['txtActionFormulairePanier']) ? $_GET['txtActionFormulairePanier'] :"";
if($actionPanier!=""){
	$caddieCourant=$_SESSION['caddie'];
	$caddieCourant=unserialize($caddieCourant);
	$indexLigne = isset($_GET['txtIndexLigne']) ? $_GET['txtIndexLigne'] :"";
	if($actionPanier==1){
		$caddieCourant=ajoutQuantiteDansLigne($caddieCourant,$indexLigne);
		//on remet le caddie dans la session
	}else if($actionPanier==2){
		$caddieCourant=retraitQuantiteDansLigne($caddieCourant,$indexLigne);
	}else if($actionPanier==3){
		$caddieCourant=suppressionProduitDansLigne($caddieCourant,$indexLigne);
	}else{
		//rien
	}
	$caddieCourant=serialize($caddieCourant);
	//on remet le caddie dans la session
	$_SESSION['caddie']=$caddieCourant;
}


/** CHECK LOGIN **/
$userMailLogin = isset($_GET['inputEmail']) ? $_GET['inputEmail'] : "";
$userPasswordLogin = isset($_GET['inputPassword']) ? $_GET['inputPassword'] : "";
if($userMailLogin !=""){
	if(authentificationUser($userMailLogin, $userPasswordLogin, $conn)){
		$userConnecte=fetchUserByMail($userMailLogin, $conn);
		$_SESSION['user']=serialize($userConnecte);
	}else{
		echo "<script>";
		echo "alert(\"Le mot de passe est incorrecte\")";
		echo "</script>";
	}
}
/** DECO USER **/
$deconnexionUser = isset($_GET['btnDeconnexion']) ? $_GET['btnDeconnexion'] : "";
if($deconnexionUser !=""){
	unset($_SESSION['user']);
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Indochine4Ever</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles  -->
    <link href="bootsshop/assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="bootsshop/assets/css/bootstrap-responsive.css" rel="stylesheet"/>
	<link href="bootsshop/assets/css/docs.css" rel="stylesheet"/>
	 
    <link href="bootsshop/style.css" rel="stylesheet"/>
	<link href="bootsshop/assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>
	<link href="bootsshop/assets/css/indochine.css" rel="stylesheet"/>
	
	<!-- Less styles  
	<link rel="stylesheet/less" type="text/css" href="less/bootsshop.less">
	<script src="less.js" type="text/javascript"></script>
	 -->
	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="bootsshop/assets/img/goodies/nav_bar_logo.jpg">
    <link rel="bootsshop/apple-touch-icon-precomposed" sizes="144x144" href="bootsshop/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="bootsshop/apple-touch-icon-precomposed" sizes="114x114" href="bootsshop/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="bootsshop/apple-touch-icon-precomposed" sizes="72x72" href="bootsshop/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="bootsshop/apple-touch-icon-precomposed" href="bootsshop/assets/ico/apple-touch-icon-57-precomposed.png">
	
	
  </head>
<body>
  <!-- Navbar
    ================================================== -->
<div class="navbar navbar-fixed-top">
              <div class="navbar-inner">
                <div class="container">
					<a data-target="#sidebar" data-toggle="collapse" class="btn btn-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <div class="nav-collapse">
                   <?php
                   afficheMenuHeader();
                   ?>
                    <form action="produits_search.php" class="navbar-search pull-left" method="post">
                    <?php 
                    	echo '<input id="srchFld" style="background-color:white;color:black;" type="text" placeholder="'.afficherLibelle('jeCherche').'..." class="search-query span5" name="produitname"/>'
                    ?>
                    </form>
                    
                    <?php               
                    $utilisateurCourant = isset($_SESSION['user']) ? $_SESSION['user'] : "";
                    if($utilisateurCourant !=""){
                    	$utilisateurCourant=unserialize($utilisateurCourant);
                    	$mailUtilisateurCourant=$utilisateurCourant->getMail();
	                    /** BEGIN user logged **/
	                    echo "<ul class=\"nav pull-right\">";
						echo "<li class=\"dropdown\">";
						echo 	"<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">$mailUtilisateurCourant <b class=\"caret\"></b></a>";
						echo 		"<div class=\"dropdown-menu\">";
						echo 				"<form class=\"form-horizontal loginFrm\" action=\"#\" method=\"get\">";
						echo 			"<div class=\"control-group\">";
						echo 					"<button type=\"submit\" name=\"btnDeconnexion\"value=\"1\"class=\"btn btn-block\">Deconnexion</button>";
						echo 				"</form>";				
						echo 			"</div>";
						echo 		"</div>";
						echo 	"</li>";
						echo "</ul>";
						/** END user logged **/
                    }else{
						/** BEGIN user not logged **/
	                    echo "<ul class=\"nav pull-right\">";
						echo 	"<li class=\"dropdown\">";
						echo 		"<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Login <b class=\"caret\"></b></a>";
						echo 		"<div class=\"dropdown-menu\">";
						echo 			"<form class=\"form-horizontal loginFrm\" action=\"#\" method=\"get\">";
						echo 	  			"<div class=\"control-group\">";
						echo 					"<input type=\"text\" class=\"span2\" id=\"inputEmail\" name=\"inputEmail\" placeholder=\"Email\">";
						echo 	  			"</div>";
						echo 	  			"<div class=\"control-group\">";
						echo 					"<input type=\"password\" class=\"span2\" id=\"inputPassword\" name=\"inputPassword\" placeholder=\"Password\">";
						echo 	  			"</div>";
						echo 	  			"<div class=\"control-group\">";
						echo 					"<button type=\"submit\" class=\"btn btn-block\">Sign in</button>";
						echo 			"</form>";
						echo 					"<form action=\"register_page.php\" method=\"get\" class=\"form-horizontal\">";
						echo 						"<button type=\"submit\" class=\"btn btn-block\">Sign up</button>";
						echo 					"</form>";					
						echo 	  			"</div>";
						echo 		"</div>";
						echo 	"</li>";
						echo "</ul>";
						/** END user not logged **/
                    }
					?>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div>
<!-- ======================================================================================================================== -->	
<div id="mainBody" class="container">
<header id="header">
<div class="row">
<div class="span12">
	<a href="<?php echo $cfg['page_index'];?>"><img height="70px !important"src="bootsshop/assets/img/goodies/logo_indochine_boutique.jpg" alt="Bootsshop"/></a>
	<a href="<?php echo $cfg['page_index'];?>"><img style="position:absolute;width:400px;top:47px;left:40%;" height="70px !important"src="bootsshop/assets/img/goodies/logo-entete-indochine.jpg" alt="Bootsshop"/></a>
<div class="pull-right"> <br/>
		<a href="?lang=fr"> <img src="bootsshop/assets/img/fr_drapeau.png" alt="Langue FR" /></a>
		<a href="?lang=en"><img src="bootsshop/assets/img/en_drapeau.png"  alt="Langue EN" /></a>
	
	
	<a href="produit_sommaire_page.php"> 
		<span class="btn btn-mini btn-warning"> 
			<i class="icon-shopping-cart icon-white"></i> 
			[ 
			<?php $caddie=$_SESSION['caddie'];
			$caddie=unserialize($caddie);
			echo nbElementPanier($caddie)
			?> ] 
		</span> 
	</a>
	<a href="produit_sommaire_page.php">
		<span class="btn btn-mini active">
			<?php $caddie=$_SESSION['caddie'];
			$caddie=unserialize($caddie);
			echo formatDevise(calculTotalPrix($caddie));
			?> 		
		</span>
	</a>
	<a href="?devise=dollar"><span class="btn btn-mini">&dollar;</span></a>
	<a href="?devise=euro"><span class="btn btn-mini">&euro;</span></a>
</div>
</div>
</div>
<div class="clr"></div>
</header>
<!-- ==================================================Header End====================================================================== -->

