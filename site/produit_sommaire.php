<div id="mainBody" class="container">
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active"> SHOPPING CART</li>
    </ul>
	<h3>  SHOPPING CART [ 
		<small>
			<?php $caddie=$_SESSION['caddie'];
			$caddie=unserialize($caddie);
			echo nbElementPanier($caddie);
			echo " ";
			echo afficherLibelle('element');
			?>
		</small>]
		<a href="catalogue_page.php" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
	<hr class="soft"/>
	<table class="table table-bordered">
	<tbody>
		<tr><th colspan="2"> I AM ALREADY REGISTERED  </th></tr>
		 <tr> 
		 <td colspan="2">
			<form class="form-horizontal">
			  <div class="control-group">
				<label class="span2 control-label" for="username">Username</label>
				<div class="controls">
				  <input type="text" id="username" placeholder="Username"> 
				</div>
			  </div>
			 </div>
			  <div class="control-group">
				<label class="span2 control-label" for="inputPassword">Password</label> 
				<div class="controls">
				  <input type="password" id="inputPassword" placeholder="Password"> <a href="forgetpass.html">Forgot your password?</a>
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Sign in</button> <a href="register"> Register now !</a>
				</div>
			  </div>
			</form>				  
		  </td>
		  </tr>
	  </tbody>
	</table>		
			
	<?php
	$caddie=$_SESSION['caddie'];
	$caddie=unserialize($caddie);
	creationTableauPanier($caddie);
	?>
			
	<a href="catalogue_page.php" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
	<a href="login.html" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>
	
</div>
</div>
