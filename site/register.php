<div id="mainBody" class="container">
<!-- ==================================================Header End====================================================================== -->
	<?php include 'sidebar.php' ?>

	<div class="span9">
    	<ul class="breadcrumb">
				<li><a href="index.php"><?php echo afficherLibelle('accueil') ?></a> <span class="divider">/</span></li>
				<li class="active"><?php echo afficherLibelle('inscription') ?></li>
    	</ul>
        
	<h3><?php echo afficherLibelle('inscription') ?></h3>	
	<hr class="soft"/>
	<div class="well">
	<form class="form-horizontal" action="ajoutClient.php" method="get">
		<p style="text-align:right;"><sup style="color:red;">*</sup>&nbsp;<?php echo afficherLibelle('champsObligatoires') ?></p>
	
		<h3><?php echo afficherLibelle('vosInfosPersonnelles') ?></h3>
		<div class="control-group">
		<label class="control-label" for="dob"><?php echo afficherLibelle('civilite') ?>&nbsp;<sup style="color:red;">*</sup></label>
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
			<label class="control-label" for="inputFname"><?php echo afficherLibelle('prenom') ?>&nbsp;<sup style="color:red;">*</sup></label>
			<div class="controls">
			  <input type="text" name="txtPrenom" id="inputFname" placeholder="<?php echo afficherLibelle('prenom') ?>" required="required">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLname"><?php echo afficherLibelle('nom') ?>&nbsp;<sup style="color:red;">*</sup></label>
			<div class="controls">
			  <input type="text" name="txtNom" id="inputLname" placeholder="<?php echo afficherLibelle('nom') ?>" required="required">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Email &nbsp;<sup style="color:red;">*</sup></label>
		<div class="controls">
		  <input type="email" name="txtMail" id="inputEmail" placeholder="Email" required="required">
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword">Password &nbsp;<sup style="color:red;">*</sup></label>
		<div class="controls">
		  <input type="password" name="txtPassword" id="inputPassword" placeholder="Password" required="required">
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label" for="dob"><?php echo afficherLibelle('dateNaissance') ?>&nbsp;<sup style="color:red;">*</sup></label>
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
			<label class="control-label" for="inputFname"><?php echo afficherLibelle('prenom') ?>&nbsp;<sup style="color:red;">*</sup></label>
			<div class="controls">
			  <input type="text" name="txtNom" id="inputFname" placeholder="<?php echo afficherLibelle('prenom') ?>" required="required" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" name="txtPrenom" for="inputLname"><?php echo afficherLibelle('nom') ?>&nbsp;<sup style="color:red;">*</sup></label>
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
			<label class="control-label" for="adress"><?php echo afficherLibelle('adresse') ?>&nbsp;<sup style="color:red;">*</sup></label>
			<div class="controls">
			  <input type="text" id="address" name="txtAdresse" placeholder="<?php echo afficherLibelle('adresse') ?>" required="required" /> <span><?php echo afficherLibelle('indicationAdresse') ?></span>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="adress2"><?php echo afficherLibelle('adresseDeux') ?>&nbsp;<sup style="color:red;">*</sup></label>
			<div class="controls">
			  <input type="text" id="address2" name="adresseComp" placeholder="<?php echo afficherLibelle('adresseDeux') ?> required="required" "/> <span><?php echo afficherLibelle('indicationAdresseDeux') ?></span>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="city"><?php echo afficherLibelle('ville') ?>&nbsp;<sup style="color:red;">*</sup></label>
			<div class="controls">
			  <input type="text" id="city" name="ville" placeholder="<?php echo afficherLibelle('ville') ?>" required="required" /> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="state"><?php echo afficherLibelle('etat') ?>&nbsp;<sup style="color:red;">*</sup></label>
			<div class="controls">
			  <select type="text" name="lstRegion" id="state" required="required" >
				<option value="">-</option>
				<option value="1">Alabama</option><option value="2">Alaska</option><option value="3">Arizona</option><option value="4">Arkansas</option><option value="5">California</option><option value="6">Colorado</option><option value="7">Connecticut</option><option value="8">Delaware</option><option value="53">District of Columbia</option><option value="9">Florida</option><option value="10">Georgia</option><option value="11">Hawaii</option><option value="12">Idaho</option><option value="13">Illinois</option><option value="14">Indiana</option><option value="15">Iowa</option><option value="16">Kansas</option><option value="17">Kentucky</option><option value="18">Louisiana</option><option value="19">Maine</option><option value="20">Maryland</option><option value="21">Massachusetts</option><option value="22">Michigan</option><option value="23">Minnesota</option><option value="24">Mississippi</option><option value="25">Missouri</option><option value="26">Montana</option><option value="27">Nebraska</option><option value="28">Nevada</option><option value="29">New Hampshire</option><option value="30">New Jersey</option><option value="31">New Mexico</option><option value="32">New York</option><option value="33">North Carolina</option><option value="34">North Dakota</option><option value="35">Ohio</option><option value="36">Oklahoma</option><option value="37">Oregon</option><option value="38">Pennsylvania</option><option value="51">Puerto Rico</option><option value="39">Rhode Island</option><option value="40">South Carolina</option><option value="41">South Dakota</option><option value="42">Tennessee</option><option value="43">Texas</option><option value="52">US Virgin Islands</option><option value="44">Utah</option><option value="45">Vermont</option><option value="46">Virginia</option><option value="47">Washington</option><option value="48">West Virginia</option><option value="49">Wisconsin</option><option value="50">Wyoming</option></select>
			</div>
		</div>		
		<div class="control-group">
			<label class="control-label" for="postcode"><?php echo afficherLibelle('codePostal') ?>&nbsp;<sup style="color:red;">*</sup></label>
			<div class="controls">
			  <input type="text" name="txtCodePostal"  id="postcode" placeholder="<?php echo afficherLibelle('codePostal') ?>" required="required" /> 
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="country"><?php echo afficherLibelle('pays') ?>&nbsp;<sup style="color:red;">*</sup></label>
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
			<label class="control-label" for="phone"><?php echo afficherLibelle('telFixe') ?>&nbsp;<sup style="color:red;">*</sup></label>
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