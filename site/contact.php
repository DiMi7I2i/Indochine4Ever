<hr class="soften">
<div>
	<h1><?php echo afficherLibelle('rendezNousVisite') ?></h1>
</div>
<hr class="soften" />
<div class="row">
	<div class="span4">
		<h4><?php echo afficherLibelle('coordonnees') ?></h4>
		<p>
			61 rue Albert Camus,<br /> 68200, Mulhouse <br />
			<br /> info@cnam-alsace.fr<br /> ﻿Tel 03 89 42 67 09<br /> Fax
			123-456-5679<br /> http://www.cnam-alsace.fr/
		</p>
	</div>

	<div class="span4">
		<h4><?php echo afficherLibelle('horairesOuverture') ?></h4>
		<h5><?php echo afficherLibelle('lundi').' - '. afficherLibelle('vendredi')?></h5>
		<p>
			<?php echo afficherLibelle('9H').' - '.afficherLibelle('21H') ?><br /><br />
		</p>
		<h5><?php echo afficherLibelle('samedi') ?></h5>
		<p>
			<?php echo afficherLibelle('9H').' - '.afficherLibelle('19H') ?><br /><br />
		</p>
		<h5><?php echo afficherLibelle('dimanche') ?></h5>
		<p>
			<?php echo afficherLibelle('12H30').' - '.afficherLibelle('18H') ?><br /><br />
		</p>
	</div>
	<div class="span4">
		<h4><?php echo afficherLibelle('ecrivezNous') ?></h4>
			<form class="form-horizontal" action="sendContactMail.php" method="post">
			<fieldset>
				<div class="control-group">
					<input type="text" name="txtName" placeholder="<?php echo afficherLibelle('nom') ?>" class="input-xlarge" required="required"/>
				</div>
				<div class="control-group">
					<input type="email" name="txtMail" placeholder="Email" class="input-xlarge" required="required"/>
				</div>
				<div class="control-group">
					<input type="text" name="txtSubject" placeholder="<?php echo afficherLibelle('objet') ?>" class="input-xlarge" required="required"/>
				</div>
				<div class="control-group">
					<textarea rows="3" id="textarea" name="txtMessage" class="input-xlarge" required="required"></textarea>
				</div>
				<button class="btn btn-large" type="submit"><?php echo afficherLibelle('envoyerMessage') ?></button>
			</fieldset>
		</form>			
	</div>
</div>
<div class="row">
	<div class="span12">
		<iframe width="1170" height="250" frameborder="0" scrolling="no"
			marginheight="0" marginwidth="0"
			src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=18+California,+Fresno,+CA,+United+States&amp;aq=0&amp;oq=18+California+united+state&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=18,+Fresno,+California+93727,+United+States&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=14&amp;output=embed"></iframe>
		<br />
		<small><a
			href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=18+California,+Fresno,+CA,+United+States&amp;aq=0&amp;oq=18+California+united+state&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=18,+Fresno,+California+93727,+United+States&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=14"
			style="color: #0000FF; text-align: left">View Larger Map</a></small>
	</div>
</div>
<script>
document.getElementById('idPageContact').className = "active";
</script>