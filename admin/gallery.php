<?php 
session_start();
include('bootstrap.inc.php');
$connect = new Connection();
$login = new Login();
	if($login->isadmin() == false) header("Location:login.php?authentication=false");
define('pageTitle', 'Admin Panel');
include('header.php');
?>    
<div class="container">

<div class="hero-unit row">
	
	
	<span class="span6">
		<h1>Gallery</h1>
		<h3>This page shows a preview of all the images that are displayed on the Elements Pages.</h3>
	</span>
	
	<div class="clearfix"></div>
	
</div>
<h2>Earth</h2>
<?php

$sql = "SELECT * FROM `phuck_marketing`.`pages` WHERE `pages`.`name` = 'earth'";
$result = mysql_query($sql);
	$row = mysql_fetch_object($result);

?>
<img src="<?php echo $row->image_one; ?>" width="200" />
<img src="<?php echo $row->image_two; ?>" width="200" />
<img src="<?php echo $row->image_three; ?>" width="200" />
<br /><br />
<a href="../elements/earth" class="btn btn-inverse"><i class="icon-home icon-white"></i> View Page</a>
<a href="earth.php" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit Images</a>

<h2>Water</h2>
<?php

$sql = "SELECT * FROM `phuck_marketing`.`pages` WHERE `pages`.`name` = 'water'";
$result = mysql_query($sql);
	$row = mysql_fetch_object($result);

?>
<img src="<?php echo $row->image_one; ?>" width="200" />
<img src="<?php echo $row->image_two; ?>" width="200" />
<img src="<?php echo $row->image_three; ?>" width="200" />
<br /><br />
<a href="../elements/water" class="btn btn-inverse"><i class="icon-home icon-white"></i> View Page</a>
<a href="water.php" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit Images</a>
<h2>Fire</h2>
<?php

$sql = "SELECT * FROM `phuck_marketing`.`pages` WHERE `pages`.`name` = 'fire'";
$result = mysql_query($sql);
	$row = mysql_fetch_object($result);

?>
<img src="<?php echo $row->image_one; ?>" width="200" />
<img src="<?php echo $row->image_two; ?>" width="200" />
<img src="<?php echo $row->image_three; ?>" width="200" />
<br /><br />
<a href="../elements/fire" class="btn btn-inverse"><i class="icon-home icon-white"></i> View Page</a>
<a href="fire.php" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit Images</a>
<h2>Air</h2>
<?php

$sql = "SELECT * FROM `phuck_marketing`.`pages` WHERE `pages`.`name` = 'air'";
$result = mysql_query($sql);
	$row = mysql_fetch_object($result);

?>
<img src="<?php echo $row->image_one; ?>" width="200" />
<img src="<?php echo $row->image_two; ?>" width="200" />
<img src="<?php echo $row->image_three; ?>" width="200" />
<br /><br />
<a href="../elements/air" class="btn btn-inverse"><i class="icon-home icon-white"></i> View Page</a>
<a href="air.php" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit Images</a>

<br /><br />

<?php include('footer.php');?>