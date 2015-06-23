<hr class="soften">
<div>
	<h1><?php echo afficherLibelle('rendezNousVisite') ?></h1>
</div>
<hr class="soften" />
<div class="row">
	<div class="span4">
		<h4><?php echo afficherLibelle('coordonnees') ?></h4>
		<p>
			61 rue Albert Camus,<br /> 68200, Mulhouse <br /> <br />
			info@cnam-alsace.fr<br /> ﻿Tel 03 89 42 67 09<br /> Fax 123-456-5679<br />
			http://www.cnam-alsace.fr/
		</p>
	</div>

	<div class="span4">
		<h4><?php echo afficherLibelle('horairesOuverture') ?></h4>
		<h5><?php echo afficherLibelle('lundi').' - '. afficherLibelle('vendredi')?></h5>
		<p>
			<?php echo afficherLibelle('9H').' - '.afficherLibelle('21H') ?><br />
			<br />
		</p>
		<h5><?php echo afficherLibelle('samedi') ?></h5>
		<p>
			<?php echo afficherLibelle('9H').' - '.afficherLibelle('19H') ?><br />
			<br />
		</p>
		<h5><?php echo afficherLibelle('dimanche') ?></h5>
		<p>
			<?php echo afficherLibelle('12H30').' - '.afficherLibelle('18H') ?><br />
			<br />
		</p>
	</div>
	<div class="span4">
		<h4><?php echo afficherLibelle('ecrivezNous') ?></h4>
		<form class="form-horizontal" action="sendContactMail.php"
			method="post">
			<fieldset>
				<div class="control-group">
					<input type="text" name="txtName"
						placeholder="<?php echo afficherLibelle('nom') ?>"
						class="input-xlarge" required="required" />
				</div>
				<div class="control-group">
					<input type="email" name="txtMail" placeholder="Email"
						class="input-xlarge" required="required" />
				</div>
				<div class="control-group">
					<input type="text" name="txtSubject"
						placeholder="<?php echo afficherLibelle('objet') ?>"
						class="input-xlarge" required="required" />
				</div>
				<div class="control-group">
					<textarea rows="3" id="textarea" name="txtMessage"
						class="input-xlarge" required="required"></textarea>
				</div>
				<button class="btn btn-large" type="submit"><?php echo afficherLibelle('envoyerMessage') ?></button>
			</fieldset>
		</form>
	</div>
</div>
<div class="row">
	<div class="span12">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2683.5672356327354!2d7.3000397!3d47.7316479!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47919b288995f689%3A0xba9c58b016bb658a!2s61+Rue+Albert+Camus%2C+68200+Mulhouse!5e0!3m2!1sfr!2sfr!4v1434924856470" width="1170" height="250" frameborder="0" style="border:0"></iframe>	
	</div>
</div>
<script>
document.getElementById('idPageContact').className = "active";
</script>