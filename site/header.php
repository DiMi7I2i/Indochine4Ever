﻿<?php
// Inclusion des configs header
include 'config.page.menu.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Online Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles  -->
    <link href="bootsshop/assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="bootsshop/assets/css/bootstrap-responsive.css" rel="stylesheet"/>
	<link href="bootsshop/assets/css/docs.css" rel="stylesheet"/>
	 
    <link href="bootsshop/style.css" rel="stylesheet"/>
	<link href="bootsshop/assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>
	
	<!-- Less styles  
	<link rel="stylesheet/less" type="text/css" href="less/bootsshop.less">
	<script src="less.js" type="text/javascript"></script>
	 -->
	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="bootsshop/assets/ico/favicon.ico">
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
                  <a id="logoM" href="<?php echo $cfg['page_index'];?>"><img src="bootsshop/assets/img/logo.png" alt="Bootsshop"/></a>
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
                    	echo '<input id="srchFld" type="text" placeholder="'.afficherLibelle('jeCherche').'..." class="search-query span5" name="produitname"/>'
                    ?>
                    </form>
                    <ul class="nav pull-right">
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">Login <b class="caret"></b></a>
						<div class="dropdown-menu">
						<form class="form-horizontal loginFrm">
						  <div class="control-group">								
							<input type="text" class="span2" id="inputEmail" placeholder="Email">
						  </div>
						  <div class="control-group">
							<input type="password" class="span2" id="inputPassword" placeholder="Password">
						  </div>
						  <div class="control-group">
							<label class="checkbox">
							<input type="checkbox"> Remember me
							</label>
							<button type="submit" class="btn btn-block">Sign in</button>
						</form>	
							<form action="register_page.php" method="get" class="form-horizontal">
							<button type="submit" class="btn btn-block">Sign up</button>
							</form>					
						  </div>
						</div>
					</li>
					</ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div>
<!-- ======================================================================================================================== -->	
<div id="mainBody" class="container">
<header id="header">
<div class="row">
<div class="span12">
	<a href="<?php echo $cfg['page_index'];?>"><img src="bootsshop/assets/img/logo.png" alt="Bootsshop"/></a>

<div class="pull-right"> <br/>
	<a href=""><?php choixLangue('fr'); ?> <img src="bootsshop/assets/img/fr_drapeau.png" alt="Langue FR"/> </a>
	<a href=""><?php choixLangue('en'); ?> <img src="bootsshop/assets/img/en_drapeau.png" alt="Langue EN"/> </a>

	<a href="produit_sommaire_page.php"> <span class="btn btn-mini btn-warning"> <i class="icon-shopping-cart icon-white"></i> [ 3 ] </span> </a>
	<a href="produit_sommaire_page.php"><span class="btn btn-mini active">$155.00</span></a>
	<span class="btn btn-mini">&pound;</span>
	<span class="btn btn-mini">&euro;</span> 
</div>
</div>
</div>
<div class="clr"></div>
</header>
<!-- ==================================================Header End====================================================================== -->
