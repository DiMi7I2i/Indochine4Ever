<div class="row">
<div class="span9">
	<div>
		<h3><?php echo afficherLibelle('nouveauxProduits') ?></h3>
		
		<div class="row-fluid">
		<div id="myCarousel1" class="carousel slide">
            <div class="carousel-inner">
            
              <div class="item active">
			  	<ul class="thumbnails">
					<?php
					listerNouveauProduit($conn);
					?>
				</ul>
				</div>
			</div>
			</div>
		</div>
		</div>
	</div>
</div>			