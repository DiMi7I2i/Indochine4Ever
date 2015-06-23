<div class="row">
<div class="span9">
	<ul class="breadcrumb">
		<li><a href="index.php"><?php echo afficherLibelle('accueil') ?></a> <span
			class="divider">/</span></li>
		<li class="active"><?php echo afficherLibelle('inscription') ?></li>
	</ul>

	<h3><?php echo afficherLibelle('inscription') ?></h3>
	<hr class="soft" />
	<div class="well">
		<form class="form-horizontal" action="index.php" method="get">
			<p style="text-align: right;">
				<sup style="color: red;">*</sup>&nbsp;<?php echo afficherLibelle('champsObligatoires') ?></p>

			<h3><?php echo afficherLibelle('vosInfosPersonnelles') ?></h3>
			<div class="control-group">
				<label class="control-label" for="dob"><?php echo afficherLibelle('civilite') ?>&nbsp;<sup
					style="color: red;">*</sup></label>
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
				<label class="control-label" for="inputFname"><?php echo afficherLibelle('prenom') ?>&nbsp;<sup
					style="color: red;">*</sup></label>
				<div class="controls">
					<input type="text" name="txtPrenom" id="inputFname"
						placeholder="<?php echo afficherLibelle('prenom') ?>"
						required="required">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputLname"><?php echo afficherLibelle('nom') ?>&nbsp;<sup
					style="color: red;">*</sup></label>
				<div class="controls">
					<input type="text" name="txtNom" id="inputLname"
						placeholder="<?php echo afficherLibelle('nom') ?>"
						required="required">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Email &nbsp;<sup
					style="color: red;">*</sup></label>
				<div class="controls">
					<input type="email" name="txtMail" id="inputEmail"
						placeholder="Email" required="required">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Password &nbsp;<sup
					style="color: red;">*</sup></label>
				<div class="controls">
					<input type="password" name="txtPassword" id="inputPassword"
						placeholder="Password" required="required">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="dob"><?php echo afficherLibelle('dateNaissance') ?>&nbsp;<sup
					style="color: red;">*</sup></label>
				<div class="controls">
					<input id="datepicker" type="date" name="naissance"
						placeholder="dd/mm/yyyy" required="required">
				</div>
			</div>



			<h3><?php echo afficherLibelle('votreAdresse') ?></h3>
			<div class="control-group">
				<label class="control-label" for="inputFname"><?php echo afficherLibelle('prenom') ?>&nbsp;<sup
					style="color: red;">*</sup></label>
				<div class="controls">
					<input type="text" name="txtNom" id="inputFname"
						placeholder="<?php echo afficherLibelle('prenom') ?>"
						required="required" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" name="txtPrenom" for="inputLname"><?php echo afficherLibelle('nom') ?>&nbsp;<sup
					style="color: red;">*</sup></label>
				<div class="controls">
					<input type="text" id="inputLname"
						placeholder="<?php echo afficherLibelle('nom') ?>"
						required="required" />
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="company"><?php echo afficherLibelle('societe') ?></label>
				<div class="controls">
					<input type="text" id="company" name="txtEntreprise"
						placeholder="<?php echo afficherLibelle('societe') ?>" />
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="adress"><?php echo afficherLibelle('adresse') ?>&nbsp;<sup
					style="color: red;">*</sup></label>
				<div class="controls">
					<input type="text" id="address" name="txtAdresse"
						placeholder="<?php echo afficherLibelle('adresse') ?>"
						required="required" /> <span><?php echo afficherLibelle('indicationAdresse') ?></span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="adress2"><?php echo afficherLibelle('adresseDeux') ?>&nbsp;<sup
					style="color: red;">*</sup></label>
				<div class="controls">
					<input type="text" id="address2" name="adresseComp"
						placeholder="<?php echo afficherLibelle('adresseDeux') ?> required=" required" "/>
					<span><?php echo afficherLibelle('indicationAdresseDeux') ?></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="city"><?php echo afficherLibelle('ville') ?>&nbsp;<sup
					style="color: red;">*</sup></label>
				<div class="controls">
					<input type="text" id="city" name="ville"
						placeholder="<?php echo afficherLibelle('ville') ?>"
						required="required" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="postcode"><?php echo afficherLibelle('codePostal') ?>&nbsp;<sup
					style="color: red;">*</sup></label>
				<div class="controls">
					<input type="text" name="txtCodePostal" id="postcode"
						placeholder="<?php echo afficherLibelle('codePostal') ?>"
						required="required" />
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="country"><?php echo afficherLibelle('pays') ?>&nbsp;<sup
					style="color: red;">*</sup></label>
				<div class="controls">
					<select type="text" name="lstPays" id="country">
							<option value="">-</option>
							<option value="ZA">Afrique du Sud</option>
							<option value="AL">Albanie</option>
							<option value="DZ">Algérie</option>
							<option value="DE">Allemagne</option>
							<option value="AD">Andorre</option>
							<option value="AO">Angola</option>
							<option value="AI">Anguilla</option>
							<option value="AQ">Antarctique</option>
							<option value="AG">Antigua-et-Barbuda</option>
							<option value="AN">Antilles néerlandaises</option>
							<option value="SA">Arabie Saoudite</option>
							<option value="AR">Argentine</option>
							<option value="AM">Arménie</option>
							<option value="AW">Aruba</option>
							<option value="AU">Australie</option>
							<option value="AT">Autriche</option>
							<option value="AZ">Azerbaïdjan</option>
							<option value="BS">Bahamas</option>
							<option value="BH">Bahreïn</option>
							<option value="BD">Bangladesh</option>
							<option value="BB">Barbade</option>
							<option value="BE">Belgique</option>
							<option value="BZ">Bélize</option>
							<option value="BJ">Bénin</option>
							<option value="BM">Bermudes</option>
							<option value="BT">Bhoutan</option>
							<option value="BY">Biélorussie</option>
							<option value="BO">Bolivie</option>
							<option value="BQ">Bonaire, Saint Eustatius et Saba</option>
							<option value="BA">Bosnie-Herzégovine</option>
							<option value="BW">Botswana</option>
							<option value="BR">Brésil</option>
							<option value="BN">Brunéi Darussalam</option>
							<option value="BG">Bulgarie</option>
							<option value="BF">Burkina Faso</option>
							<option value="BI">Burundi</option>
							<option value="KH">Cambodge</option>
							<option value="CM">Cameroun</option>
							<option value="CA">Canada</option>
							<option value="CV">Cap Vert</option>
							<option value="CL">Chili</option>
							<option value="CN">Chine</option>
							<option value="CY">Chypre</option>
							<option value="CO">Colombie</option>
							<option value="KM">Comores</option>
							<option value="CG">Congo</option>
							<option value="CD">Congo, République démocratique du</option>
							<option value="KR">Corée, République de</option>
							<option value="CR">Costa Rica</option>
							<option value="CI">Côte d'ivoire</option>
							<option value="HR">Croatie</option>
							<option value="CW">Curaçao</option>
							<option value="DK">Danemark</option>
							<option value="DJ">Djibouti</option>
							<option value="DM">Dominique</option>
							<option value="EG">Égypte</option>
							<option value="SV">El Salvador</option>
							<option value="AE">Émirats arabes unis</option>
							<option value="EC">Équateur</option>
							<option value="ER">Érythrée</option>
							<option value="ES">Espagne</option>
							<option value="EE">Estonie</option>
							<option value="US">États-Unis</option>
							<option value="ET">Ethiopie</option>
							<option value="RU">Fédération de Russie</option>
							<option value="FJ">Fidji</option>
							<option value="FI">Finlande</option>
							<option selected="" value="FR">France</option>
							<option value="GA">Gabon</option>
							<option value="GM">Gambie</option>
							<option value="GE">Géorgie</option>
							<option value="GS">Géorgie du Sud et les Îles Sandwich du Sud</option>
							<option value="GH">Ghana</option>
							<option value="GI">Gibraltar</option>
							<option value="GR">Grèce</option>
							<option value="GD">Grenade</option>
							<option value="GL">Groenland</option>
							<option value="GP">Guadeloupe</option>
							<option value="GU">Guam</option>
							<option value="GT">Guatemala</option>
							<option value="GN">Guinée</option>
							<option value="GQ">Guinée équatoriale</option>
							<option value="GW">Guinée-Bissau</option>
							<option value="GY">Guyane</option>
							<option value="GF">Guyane française</option>
							<option value="HT">Haïti</option>
							<option value="HN">Honduras</option>
							<option value="HK">Hong Kong</option>
							<option value="HU">Hongrie</option>
							<option value="BV">Île Bouvet</option>
							<option value="CX">Île Christmas</option>
							<option value="HM">Île Heard et îles McDonald</option>
							<option value="NF">Île Norfolk</option>
							<option value="KY">Îles Caïmans</option>
							<option value="CC">Îles Cocos (Keeling)</option>
							<option value="CK">Îles Cook</option>
							<option value="FK">Îles Falkland (Malouines)</option>
							<option value="FO">Îles Féroé</option>
							<option value="MP">Îles Mariannes du Nord</option>
							<option value="MH">Îles Marshall</option>
							<option value="UM">Îles mineures éloignées des États-Unis</option>
							<option value="SB">Îles Salomon</option>
							<option value="TC">Îles Turques-et-Caïques</option>
							<option value="VI">Îles Vierges américaines</option>
							<option value="VG">Îles Vierges britanniques</option>
							<option value="IN">Inde</option>
							<option value="ID">Indonésie</option>
							<option value="IE">Irlande</option>
							<option value="IS">Islande</option>
							<option value="IL">Israël</option>
							<option value="IT">Italie</option>
							<option value="JM">Jamaïque</option>
							<option value="JP">Japon</option>
							<option value="JO">Jordanie</option>
							<option value="KZ">Kazakhstan</option>
							<option value="KE">Kenya</option>
							<option value="KG">Kirghizistan</option>
							<option value="KI">Kiribati</option>
							<option value="XK">Kosovo</option>
							<option value="KW">Koweït</option>
							<option value="LS">Lesotho</option>
							<option value="LV">Lettonie</option>
							<option value="LB">Liban</option>
							<option value="LR">Liberia</option>
							<option value="LY">Libye</option>
							<option value="LI">Liechtenstein</option>
							<option value="LT">Lituanie</option>
							<option value="LU">Luxembourg</option>
							<option value="MO">Macao</option>
							<option value="MK">Macédoine, Ex-République yougoslave de</option>
							<option value="MG">Madagascar</option>
							<option value="MY">Malaisie</option>
							<option value="MW">Malawi</option>
							<option value="MV">Maldives</option>
							<option value="ML">Mali</option>
							<option value="MT">Malte</option>
							<option value="MA">Maroc</option>
							<option value="MQ">Martinique</option>
							<option value="MU">Maurice</option>
							<option value="MR">Mauritanie</option>
							<option value="YT">Mayotte</option>
							<option value="MX">Mexique</option>
							<option value="FM">Micronésie, États fédérés de</option>
							<option value="MC">Monaco</option>
							<option value="MN">Mongolie</option>
							<option value="ME">Montenegro</option>
							<option value="MS">Montserrat</option>
							<option value="MZ">Mozambique</option>
							<option value="MM">Myanmar</option>
							<option value="NA">Namibie</option>
							<option value="NR">Nauru</option>
							<option value="NP">Népal</option>
							<option value="NI">Nicaragua</option>
							<option value="NE">Niger</option>
							<option value="NG">Nigeria</option>
							<option value="NU">Niué</option>
							<option value="NO">Norvège</option>
							<option value="NC">Nouvelle-Calédonie</option>
							<option value="NZ">Nouvelle-Zélande</option>
							<option value="OM">Oman</option>
							<option value="UG">Ouganda</option>
							<option value="UZ">Ouzbékistan</option>
							<option value="PK">Pakistan</option>
							<option value="PW">Palaos</option>
							<option value="PA">Panama</option>
							<option value="PG">Papouasie-Nouvelle-Guinée</option>
							<option value="PY">Paraguay</option>
							<option value="NL">Pays-Bas</option>
							<option value="PE">Pérou</option>
							<option value="PH">Philippines</option>
							<option value="PN">Pitcairn</option>
							<option value="PL">Pologne</option>
							<option value="PF">Polynésie française</option>
							<option value="PR">Porto Rico</option>
							<option value="PT">Portugal</option>
							<option value="QA">Qatar</option>
							<option value="CF">République centrafricaine</option>
							<option value="MD">République de Moldavie</option>
							<option value="LA">République démocratique populaire lao</option>
							<option value="DO">République dominicaine</option>
							<option value="CZ">République Tchèque</option>
							<option value="RE">Réunion</option>
							<option value="RO">Roumanie</option>
							<option value="GB">Royaume-Uni</option>
							<option value="RW">Rwanda</option>
							<option value="EH">Sahara occidental</option>
							<option value="BL">Saint-Barthélemy</option>
							<option value="KN">Saint-Kitts-et-Nevis</option>
							<option value="SM">Saint-Marin</option>
							<option value="MF">Saint-Martin (France)</option>
							<option value="SX">Saint-Martin (Pays Bas)</option>
							<option value="PM">Saint-Pierre-et-Miquelon</option>
							<option value="VA">Saint-Siège</option>
							<option value="VC">Saint-Vincent-et-les Grenadines</option>
							<option value="SH">Sainte-Hélène, Ascension et Tristan da Cunha</option>
							<option value="LC">Sainte-Lucie</option>
							<option value="WS">Samoa</option>
							<option value="AS">Samoa américaines</option>
							<option value="ST">Sao-Tomé-et-Principe</option>
							<option value="SN">Sénégal</option>
							<option value="RS">Serbie</option>
							<option value="SC">Seychelles</option>
							<option value="SL">Sierra Leone</option>
							<option value="SG">Singapour</option>
							<option value="SK">Slovaquie</option>
							<option value="SI">Slovénie</option>
							<option value="SO">Somalie</option>
							<option value="LK">Sri Lanka</option>
							<option value="SE">Suède</option>
							<option value="CH">Suisse</option>
							<option value="SR">Surinam</option>
							<option value="SJ">Svalbard et Jan Mayen</option>
							<option value="SZ">Swaziland</option>
							<option value="TJ">Tadjikistan</option>
							<option value="TW">Taïwan</option>
							<option value="TZ">Tanzanie, République unie de</option>
							<option value="TD">Tchad</option>
							<option value="TF">Terres australes et antarctiques françaises</option>
							<option value="IO">Territoire britannique de l'océan Indien</option>
							<option value="TH">Thaïlande</option>
							<option value="TL">Timor-leste</option>
							<option value="TG">Togo</option>
							<option value="TK">Tokelau</option>
							<option value="TO">Tonga</option>
							<option value="TT">Trinité-et-Tobago</option>
							<option value="TN">Tunisie</option>
							<option value="TM">Turkménistan</option>
							<option value="TR">Turquie</option>
							<option value="TV">Tuvalu</option>
							<option value="UA">Ukraine</option>
							<option value="UY">Uruguay</option>
							<option value="VU">Vanuatu</option>
							<option value="VE">Venezuela</option>
							<option value="VN">Vietnam</option>
							<option value="WF">Wallis-et-Futuna</option>
							<option value="YE">Yémen</option>
							<option value="ZM">Zambie</option>
							<option value="ZW">Zimbabwe</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="phone"><?php echo afficherLibelle('telFixe') ?>&nbsp;<sup
					style="color: red;">*</sup></label>
				<div class="controls">
					<input type="text" name="phone" id="phone"
						placeholder="<?php echo afficherLibelle('telFixe') ?>"
						required="required" /> <span><?php echo afficherLibelle('indicationTelFixe') ?></span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="mobile"><?php echo afficherLibelle('telMobile') ?></label>
				<div class="controls">
					<input type="text" name="mobile" id="mobile"
						placeholder="<?php echo afficherLibelle('telMobile') ?>" />
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					<input type="hidden" name="email_create" value="1"> <input
						type="hidden" name="is_new_customer" value="1"> <input
						class="btn btn-large" type="submit"
						value="<?php echo afficherLibelle('enregistrement') ?>" />
				</div>
			</div>
		</form>
	</div>

</div>
</div>
<script>
$(document).ready(function(){
	$( "#datepicker" ).datepicker();
});

</script>