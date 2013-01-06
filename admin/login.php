<?php 
// Connects to the database
$connect = new Connection();
define ('pageTitle', 'Admin Login');
?>
<div id="main" role="main">
	<h1><?php echo pageTitle; ?></h1>
	<form name="login" action="login_check.php" method="post">
    	<input type="text" name="username" placeholder="Username" />
        <input type="password" name="password" placeholder="Password" />
        <button type="submit" value="Log in" class="button"><i class="icon-signin"></i>Login</button>
    </form>
</div><!--/main-->