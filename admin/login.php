<?php 
include('bootstrap.inc.php');
// Connects to the database
$connect = new Connection();
define ('pageTitle', 'Admin Login');
include('header.php');
?>
<div class="container" id="main" role="main">
<div class="hero-unit row">
	<div class="span12"><h1><?php echo pageTitle; ?></h1></div>
	<div class="clearfix"></div>
	<br />
	<div class="alert alert-error span5">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	You must log in to view the admin panel
	</div>
	<div class="span12">
		<form name="login" action="login_check.php" method="post">
			<input type="text" name="username" placeholder="Username" />
			<input type="password" name="password" placeholder="Password" />
			<button type="submit" class="btn loginbtn"><i class="icon-lock"></i> Login</button>
		</form>
	</div>
</div>	
</div><!--/main-->