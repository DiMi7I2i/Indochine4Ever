<div id="mainBody" class="container">
<!-- ==================================================Header End====================================================================== -->
<div class="row">
<div id="sidebar" class="span3">
	<ul class="nav nav-list bs-docs-sidenav" style="display: block;">											
		<li class="subMenu"><a> ELECTRONICS [230]</a>
			<ul>
			<li><a class="active" href="products.html">Cameras (100)</a></li>
			<li><a href="products.html">Computers, Tablets & laptop (30)</a></li>
			<li><a href="products.html">Mobile Phone (80)</a></li>
			<li><a href="products.html">Sound & Vision (15)</a></li>
			</ul>
		</li>
		<li class="subMenu"><a> CLOTHES [840] </a>
		<ul>
			<li><a href="products.html">Women's Clothing (45)</a></li>
			<li><a href="products.html">Women's Shoes (8)</a></li>												
			<li><a href="products.html">Women's Hand Bags (5)</a></li>	
			<li><a href="products.html">Men's Clothings  (45)</a></li>
			<li><a href="products.html">Men's Shoes (6)</a></li>												
			<li><a href="products.html">Kids Clothing (5)</a></li>												
			<li><a href="products.html">Kids Shoes (3)</a></li>												
		</ul>
		</li>
		<li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
			<ul>
			<li><a href="products.html">Angoves  (35)</a></li>
			<li><a href="products.html">Bouchard Aine & Fils (8)</a></li>												
			<li><a href="products.html">French Rabbit (5)</a></li>	
			<li><a href="products.html">Louis Bernard  (45)</a></li>
			<li><a href="products.html">BIB Wine (Bag in Box) (8)</a></li>												
			<li><a href="products.html">Other Liquors & Wine (5)</a></li>												
			<li><a href="products.html">Garden (3)</a></li>												
			<li><a href="products.html">Khao Shong (11)</a></li>												
		</ul>
		</li>
		<li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
		<li><a href="products.html">SPORTS & LEISURE [58]</a></li>
		<li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
		<li style="border:0"> &nbsp;</li>						
		<li> <a href="product_summary.html"><strong>3 Items in your cart  <span class="badge badge-warning pull-right" style="line-height:18px;">$155.00</span></strong></a></li>
		<li style="border:0"> &nbsp;</li>	
		<li>
		  <div class="thumbnail">
			<img src="assets/products/1.jpg" alt="">
			<div class="caption">
			  <h5>Product name</h5>
			  <p> 
				Lorem Ipsum is simply dummy text. 
			  </p>
			  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
			</div>
		  </div>
		</li>
		<li style="border:0"> &nbsp;</li>		
		<li class="last">
		  <div class="thumbnail">
			<img src="assets/products/2.jpg" alt="">
			<div class="caption">
			  <h5>Product name</h5>
			  <p> 
				Lorem Ipsum is simply dummy text. 
			  </p>
			  <h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
			</div>
		  </div>
		</li> 
	  </ul>
</div>

	<div class="span9">
    	<ul class="breadcrumb">
				<li><a href="index.php"><?php echo afficherLibelle('accueil') ?></a> <span class="divider">/</span></li>
				<li class="active"><?php echo afficherLibelle('inscription') ?></li>
    	</ul>
        
	<h3><?php echo afficherLibelle('inscription') ?></h3>	
	<hr class="soft"/>
	<div class="well">
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<form class="form-horizontal" action="ajoutClient.php" method="get">
		<h3><?php echo afficherLibelle('vosInfosPersonnelles') ?></h3>
		<div class="control-group">
		<label class="control-label" for="dob"><?php echo afficherLibelle('civilite') ?><sup>*</sup></label>
		<div class="controls">
		<select class="span1" name="lstCivilite" required="required">
			<option value="">-</option>
			<option value="1">Mr.</option>
			<option value="2">Mrs</option>
			<option value="3">Miss</option>
		</select>
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputFname"><?php echo afficherLibelle('prenom') ?><sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="txtPrenom" id="inputFname" placeholder="<?php echo afficherLibelle('prenom') ?>" required="required">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLname"><?php echo afficherLibelle('nom') ?><sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="txtNom" id="inputLname" placeholder="<?php echo afficherLibelle('nom') ?>" required="required">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="email" name="txtMail" id="inputEmail" placeholder="Email" required="required">
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="txtPassword" id="inputPassword" placeholder="Password" required="required">
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label" for="dob"><?php echo afficherLibelle('dateNaissance') ?><sup>*</sup></label>
		<div class="controls">
		  <select class="span1" name="jour" required="required">
				<option value="">-</option>
					<option value="1">1&nbsp;&nbsp;</option>
					<option value="2">2&nbsp;&nbsp;</option>
					<option value="3">3&nbsp;&nbsp;</option>
					<option value="4">4&nbsp;&nbsp;</option>
					<option value="5">5&nbsp;&nbsp;</option>
					<option value="6">6&nbsp;&nbsp;</option>
					<option value="7">7&nbsp;&nbsp;</option>
			</select>
			<select class="span1" name="mois" required="required">
				<option value="">-</option>
					<option value="1">1&nbsp;&nbsp;</option>
					<option value="2">2&nbsp;&nbsp;</option>
					<option value="3">3&nbsp;&nbsp;</option>
					<option value="4">4&nbsp;&nbsp;</option>
					<option value="5">5&nbsp;&nbsp;</option>
					<option value="6">6&nbsp;&nbsp;</option>
					<option value="7">7&nbsp;&nbsp;</option>
			</select>
			<select class="span1" name="annee" required="required">
				<option value="">-</option>
					<option value="1">1&nbsp;&nbsp;</option>
					<option value="2">2&nbsp;&nbsp;</option>
					<option value="3">3&nbsp;&nbsp;</option>
					<option value="4">4&nbsp;&nbsp;</option>
					<option value="5">5&nbsp;&nbsp;</option>
					<option value="6">6&nbsp;&nbsp;</option>
					<option value="7">7&nbsp;&nbsp;</option>
			</select>
		</div>
	  </div>

			

		<h3><?php echo afficherLibelle('votreAdresse') ?></h3>
		<div class="control-group">
			<label class="control-label" for="inputFname"><?php echo afficherLibelle('prenom') ?><sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="txtNom" id="inputFname" placeholder="<?php echo afficherLibelle('prenom') ?>" required="required" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" name="txtPrenom" for="inputLname"><?php echo afficherLibelle('nom') ?><sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLname" placeholder="<?php echo afficherLibelle('nom') ?>" required="required" />
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="company"><?php echo afficherLibelle('societe') ?></label>
			<div class="controls">
			  <input type="text" id="company" name="txtEntreprise" placeholder="<?php echo afficherLibelle('societe') ?>"/>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="adress"><?php echo afficherLibelle('adresse') ?><sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="address" name="txtAdresse" placeholder="<?php echo afficherLibelle('adresse') ?>" required="required" /> <span><?php echo afficherLibelle('indicationAdresse') ?></span>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="adress2"><?php echo afficherLibelle('adresseDeux') ?><sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="address2" name="adresseComp" placeholder="<?php echo afficherLibelle('adresseDeux') ?> required="required" "/> <span><?php echo afficherLibelle('indicationAdresseDeux') ?></span>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="city"><?php echo afficherLibelle('ville') ?><sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="city" name="ville" placeholder="<?php echo afficherLibelle('ville') ?>" required="required" /> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="state"><?php echo afficherLibelle('etat') ?><sup>*</sup></label>
			<div class="controls">
			  <select type="text" name="lstRegion" id="state" required="required" >
				<option value="">-</option>
				<option value="1">Alabama</option><option value="2">Alaska</option><option value="3">Arizona</option><option value="4">Arkansas</option><option value="5">California</option><option value="6">Colorado</option><option value="7">Connecticut</option><option value="8">Delaware</option><option value="53">District of Columbia</option><option value="9">Florida</option><option value="10">Georgia</option><option value="11">Hawaii</option><option value="12">Idaho</option><option value="13">Illinois</option><option value="14">Indiana</option><option value="15">Iowa</option><option value="16">Kansas</option><option value="17">Kentucky</option><option value="18">Louisiana</option><option value="19">Maine</option><option value="20">Maryland</option><option value="21">Massachusetts</option><option value="22">Michigan</option><option value="23">Minnesota</option><option value="24">Mississippi</option><option value="25">Missouri</option><option value="26">Montana</option><option value="27">Nebraska</option><option value="28">Nevada</option><option value="29">New Hampshire</option><option value="30">New Jersey</option><option value="31">New Mexico</option><option value="32">New York</option><option value="33">North Carolina</option><option value="34">North Dakota</option><option value="35">Ohio</option><option value="36">Oklahoma</option><option value="37">Oregon</option><option value="38">Pennsylvania</option><option value="51">Puerto Rico</option><option value="39">Rhode Island</option><option value="40">South Carolina</option><option value="41">South Dakota</option><option value="42">Tennessee</option><option value="43">Texas</option><option value="52">US Virgin Islands</option><option value="44">Utah</option><option value="45">Vermont</option><option value="46">Virginia</option><option value="47">Washington</option><option value="48">West Virginia</option><option value="49">Wisconsin</option><option value="50">Wyoming</option></select>
			</div>
		</div>		
		<div class="control-group">
			<label class="control-label" for="postcode"><?php echo afficherLibelle('codePostal') ?><sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="txtCodePostal"  id="postcode" placeholder="<?php echo afficherLibelle('codePostal') ?>" required="required" /> 
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="country"><?php echo afficherLibelle('pays') ?><sup>*</sup></label>
			<div class="controls">
			  <select type="text" name="lstPays" id="country" >
				<option value="">-</option>
				<option value="1">Country</option>
			</select>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="aditionalInfo"><?php echo afficherLibelle('infosAditionnelles') ?></label>
			<div class="controls">
			  <textarea name="aditionalInfo" id="aditionalInfo" cols="26" rows="3"><?php echo afficherLibelle('infosAditionnelles') ?></textarea>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="phone"><?php echo afficherLibelle('telFixe') ?><sup>*</sup></label>
			<div class="controls">
			  <input type="text"  name="phone" id="phone" placeholder="<?php echo afficherLibelle('telFixe') ?>" required="required" /> <span><?php echo afficherLibelle('indicationTelFixe') ?></span>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="mobile"><?php echo afficherLibelle('telMobile') ?></label>
			<div class="controls">
			  <input type="text"  name="mobile" id="mobile" placeholder="<?php echo afficherLibelle('telMobile') ?>"/> 
			</div>
		</div>
		
	<p><sup>*</sup><?php echo afficherLibelle('champsObligatoires') ?></p>
	
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
				<input class="btn btn-large" type="submit" value="Register" />
			</div>
		</div>		
	</form>
</div>

</div>
</div>