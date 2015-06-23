<?php

$productID = isset($_GET['id_produit']) ? $_GET['id_produit'] : "";

$produit=fetchProduit($productID,$conn);


?>
<div class="row">	 
<div id="gallery" class="span3">
<style>
#jquery-overlay {position: absolute;top: 0;left: 0;z-index: 90;width: 100%;height: 500px;}
#jquery-lightbox {position: absolute;top: 0;left: 0;width: 100%;z-index: 100;text-align: center;line-height: 0;}
#jquery-lightbox a img { border: none; }#lightbox-container-image-box {position: relative;background-color: #fff;width: 250px;height: 250px;margin: 0 auto;}
#lightbox-container-image { padding: 10px; }#lightbox-loading {position: absolute;top: 40%;left: 0%;height: 25%;width: 100%;text-align: center;line-height: 0;}
#lightbox-nav {	position: absolute;top: 0;left: 0;height: 100%;width: 100%;z-index: 10;}#lightbox-container-image-box > #lightbox-nav { left: 0; }#lightbox-nav a { outline: none;}
#lightbox-nav-btnPrev, #lightbox-nav-btnNext {width: 49%;height: 100%;zoom: 1;display: block;}
#lightbox-nav-btnPrev { left: 0; float: left;}#lightbox-nav-btnNext { right: 0; float: right;}
#lightbox-container-image-data-box {font: 10px Verdana, Helvetica, sans-serif;background-color: #fff;margin: 0 auto;line-height: 1.4em;overflow: auto;width: 100%;padding: 0 10px 0;}
#lightbox-container-image-data {	padding: 0 10px; color: #666; }
#lightbox-container-image-data #lightbox-image-details {width: 70%; float: left; text-align: left; }	
#lightbox-image-details-caption { font-weight: bold; }#lightbox-image-details-currentNumber {display: block; clear: left; padding-bottom: 1.0em;}
#lightbox-secNav-btnClose {width: 66px; float: right;padding-bottom: 0.7em;	}
</style>
<?php 
	echo         "<a href=".$produit->getVignetteProduit()." title=".$produit->getNomProduit().">
<img src=".$produit->getImageProduit()." width=\"100%\" alt=".$produit->getNomProduit()."/>
        </a>";
?>
<div id="myCarousel" class="moreOptopm carousel slide">
            <div class="carousel-inner">
              <div class="item active">
              <?php
				//recuperation des vignettes du produit
              	$listeProduitVignette=fetchListeProduitVignette($productID, $conn);
              	foreach ($listeProduitVignette as $produitVignette){
              		echo "<a href=\"".$produitVignette->getUrl()."\"> <img width=\"29%\" src=\"".$produitVignette->getUrl()."\" alt=\"\"/></a>";
              	}
               ?>
              </div>
            </div>
          <!--  
 <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> 
 -->
</div>
 
<div class="btn-toolbar">
 <div class="btn-group">
 </div>
</div>
</div>
<div class="span6">
<?php echo '<h3>'.$produit->getNomProduit().'</h3>';?>  
<small>
<?php
$categorie=fetchCategorie($produit->getProductCategoryID(),$conn);
echo $categorie->getCategorieNom();
?>
</small>
<hr class="soft"/>
<form class="form-horizontal qtyFrm" action="catalogue_page.php" method="get">
 <div class="control-group">
<label class="control-label"><span>
    <?php
    	echo '<span>'.formatDevise($produit->getPrixProduit()).'</span>';
    ?>
</span></label>
<div class="controls">
<input type="number" class="span1" name="quantite_caddie" placeholder="Qty."/>
<input type="hidden" name="id_produit_caddie" value="<?php echo $produit->getIdProduit(); ?>">
 <button type="submit" class="btn btn-large pull-right"><i class=" icon-shopping-cart"></i> Add to cart</button>
</div>
 </div>
</form>
<hr class="soft clr"/>
<p class="descriptionLongueDetail">
    <?php
    	echo '<span>'.$produit->getDescriptionLongue().'</span>';
    ?>
</p>
<br class="clr"/>
<a name="detail"></a>
<hr class="soft"/>
</div>
<div class="span9">
</div>
</div>