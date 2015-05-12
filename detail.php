<?php
$productID = isset ( $_GET ['id_produit'] ) ? $_GET ['id_produit'] : "";

if ($productID > 0) {
	$detailProduit = listeDetailProduit ( $conn, $productID );
}

?>
<div class="row">
	<div id="gallery" class="span3">
<style>
#jquery-overlay {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 90;
	width: 100%;
	height: 500px;
}

#jquery-lightbox {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	z-index: 100;
	text-align: center;
	line-height: 0;
}

#jquery-lightbox a img {
	border: none;
}

#lightbox-container-image-box {
	position: relative;
	background-color: #fff;
	width: 250px;
	height: 250px;
	margin: 0 auto;
}

#lightbox-container-image {
	padding: 10px;
}

#lightbox-loading {
	position: absolute;
	top: 40%;
	left: 0%;
	height: 25%;
	width: 100%;
	text-align: center;
	line-height: 0;
}

#lightbox-nav {
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	z-index: 10;
}

#lightbox-container-image-box>#lightbox-nav {
	left: 0;
}

#lightbox-nav a {
	outline: none;
}

#lightbox-nav-btnPrev,#lightbox-nav-btnNext {
	width: 49%;
	height: 100%;
	zoom: 1;
	display: block;
}

#lightbox-nav-btnPrev {
	left: 0;
	float: left;
}

#lightbox-nav-btnNext {
	right: 0;
	float: right;
}

#lightbox-container-image-data-box {
	font: 10px Verdana, Helvetica, sans-serif;
	background-color: #fff;
	margin: 0 auto;
	line-height: 1.4em;
	overflow: auto;
	width: 100%;
	padding: 0 10px 0;
}

#lightbox-container-image-data {
	padding: 0 10px;
	color: #666;
}

#lightbox-container-image-data #lightbox-image-details {
	width: 70%;
	float: left;
	text-align: left;
}

#lightbox-image-details-caption {
	font-weight: bold;
}	

#lightbox-image-details-currentNumber {
	display: block;
	clear: left;
	padding-bottom: 1.0em;
}

#lightbox-secNav-btnClose {
	width: 66px;
	float: right;
	padding-bottom: 0.7em;
}
</style>
		<a href="bootsshop/assets/products/large/f1.jpg" title="<h4> Fujifilm
			FinePix S2950 Digital Camera</h4>"> <img
			src="bootsshop/assets/products/large/3.jpg" width="100%"
			alt="Fujifilm FinePix S2950 Digital Camera" /> </a>
		<div id="myCarousel" class="moreOptopm carousel slide">
			<div class="carousel-inner">
				<div class="item active">
					<a href="bootsshop/assets/products/large/f1.jpg"> <img width="29%"
						src="bootsshop/assets/products/large/f1.jpg" alt="" /></a> <a
						href="bootsshop/assets/products/large/f2.jpg"> <img width="29%"
						src="bootsshop/assets/products/large/f2.jpg" alt="" /></a> <a
						href="bootsshop/assets/products/large/f3.jpg"> <img width="29%"
						src="bootsshop/assets/products/large/f3.jpg" alt="" /></a>
				</div>
				<div class="item">
					<a href="bootsshop/assets/products/large/f3.jpg"> <img width="29%"
						src="bootsshop/assets/products/large/f3.jpg" alt="" /></a> <a
						href="bootsshop/assets/products/large/f1.jpg"> <img width="29%"
						src="bootsshop/assets/products/large/f1.jpg" alt="" /></a> <a
						href="bootsshop/assets/products/large/f2.jpg"> <img width="29%"
						src="bootsshop/assets/products/large/f2.jpg" alt="" /></a>
				</div>
			</div>
		</div>

		<div class="btn-toolbar">
			<div class="btn-group">
				<span class="btn"><i class="icon-envelope"></i></span> <span
					class="btn"><i class="icon-print"></i></span> <span class="btn"><i
					class="icon-zoom-in"></i></span> <span class="btn"><i
					class="icon-star"></i></span> <span class="btn"><i
					class=" icon-thumbs-up"></i></span> <span class="btn"><i
					class="icon-thumbs-down"></i></span>
			</div>
		</div>
	</div>
	<div class="span6">
		<?php echo '<h3>'.$detailProduit['ProductName'].'</h3>'?>
		<small>- (14MP, 18x Optical Zoom) 3-inch LCD</small>
		<hr class="soft" />
		<form class="form-horizontal qtyFrm">
			<div class="control-group">
				<label class="control-label">
					<span>
    					<?php echo '<span>'.formatDevise ($detailProduit ['ProductPrice']).'</span>'?>
					</span>
				</label>
				<div class="controls">
					<input type="number" class="span1" placeholder="Qty." />
					<button type="submit" class="btn btn-large pull-right">
						<i class=" icon-shopping-cart"></i> Add to cart
					</button>
				</div>
			</div>
		</form>
		<hr class="soft" />
		<h4>100 items in stock</h4>
		<form class="form-horizontal qtyFrm pull-right">
			<div class="control-group">
				<label class="control-label"><span>Color</span></label>
				<div class="controls">
					<select class="span2">
						<option>Black</option>
						<option>Red</option>
						<option>Blue</option>
						<option>Brown</option>
					</select>
				</div>
			</div>
		</form>
		<hr class="soft clr" />
		<p>14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD
			photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at
			reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face
			Detection technology with Blink detection and Smile and shoot mode. 4
			x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg
			(excluding battery and memory card). Weight 0.437kg (including
			battery and memory card).</p>
		<a class="btn btn-small pull-right" href="#detail">More Details</a> <br
			class="clr" /> <a name="detail"></a>
		<hr class="soft" />
	</div>
	<div class="span9">
		<ul id="productDetail" class="nav nav-tabs">
			<li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
			<li><a href="#profile" data-toggle="tab">Related Products</a></li>
		</ul>
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane fade active in" id="home">
				<h4>Product Information</h4>
				<table class="table table-bordered" cellspacing="0">
					<tbody>
						<tr class="techSpecRow">
							<th colspan="2">Product Details</th>
						</tr>
						<tr class="techSpecRow">
							<td class="techSpecTD1">Brand:</td>
							<td class="techSpecTD2">Fujifilm</td>
						</tr>
						<tr class="techSpecRow">
							<td class="techSpecTD1">Model:</td>
							<td class="techSpecTD2">FinePix S2950HD</td>
						</tr>
						<tr class="techSpecRow">
							<td class="techSpecTD1">Released on:</td>
							<td class="techSpecTD2">2011-01-28</td>
						</tr>
						<tr class="techSpecRow">
							<td class="techSpecTD1">Dimensions:</td>
							<td class="techSpecTD2">5.50" h x 5.50" w x 2.00" l, .75 pounds</td>
						</tr>
						<tr class="techSpecRow">
							<td class="techSpecTD1">Display size:</td>
							<td class="techSpecTD2">3</td>
						</tr>
					</tbody>
				</table>
				<h5>Features</h5>
				<p>
					14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD
					photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at
					reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face
					Detection technology with Blink detection and Smile and shoot mode.
					4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight
					0.341kg (excluding battery and memory card). Weight 0.437kg
					(including battery and memory card).<br /> OND363338
				</p>

				<h4>Editorial Reviews</h4>
				<h5>Manufacturer's Description</h5>
				<p>With a generous 18x Fujinon optical zoom lens, the S2950 really
					packs a punch, especially when matched with its 14 megapixel
					sensor, large 3.0" LCD screen and 720p HD (30fps) movie capture.</p>

				<h5>Electric powered Fujinon 18x zoom lens</h5>
				<p>The S2950 sports an impressive 28mm – 504mm* high precision
					Fujinon optical zoom lens. Simple to operate with an electric
					powered zoom lever, the huge zoom range means that you can capture
					all the detail, even when you're at a considerable distance away.
					You can even operate the zoom during video shooting. Unlike a bulky
					D-SLR, bridge cameras allow you great versatility of zoom, without
					the hassle of carrying a bag of lenses.</p>
				<h5>Impressive panoramas</h5>
				<p>With its easy to use Panoramic shooting mode you can get creative
					on the S2950, however basic your skills, and rest assured that you
					will not risk shooting uneven landscapes or shaky horizons. The
					camera enables you to take three successive shots with a helpful
					tool which automatically releases the shutter once the images are
					fully aligned to seamlessly stitch the shots together in-camera.
					It's so easy and the results are impressive.</p>

				<h5>Sharp, clear shots</h5>
				<p>Even at the longest zoom settings or in the most challenging of
					lighting conditions, the S2950 is able to produce crisp, clean
					results. With its mechanically stabilised 1/2 3", 14 megapixel CCD
					sensor, and high ISO sensitivity settings, Fujifilm's Dual Image
					Stabilisation technology combines to reduce the blurring effects of
					both hand-shake and subject movement to provide superb pictures.</p>
			</div>