<?php 
session_start();
$connect = new Connection();
$login = new Login();
	if($login->isadmin() == false) header("Location:login.php?authentication=false");
define('pageTitle', 'Admin Panel');
include('header.php');
?>    
<div class="container">

<div class="hero-unit row">
	
	
	<span class="span5">
		<h1>Admin Panel</h1>
		<h4>Welcome to the administration panel for the Elements Exhibition microsite. Some assembly required.</h4>
		<p>
		This content management system was built for you, the director of the Hassad
		Museum of Science, to be able to edit and tweak pages on the website so that
		viewers are always kept up to date!
		</p>
		<div class="btn-group">
  <a class="btn btn-large btn-inverse dropdown-toggle" data-toggle="dropdown" href="#">
    <i class="icon-pencil icon-white"></i> 
	Get Started
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
		<li><a tabindex="-1" href="home.php">Edit <strong>Homepage</strong></a></li>
		<li class="divider"></li>
		<li><a tabindex="-1" href="earth.php">Edit <strong>Earth Page</strong></a></li>
		<li><a tabindex="-1" href="water.php">Edit <strong>Water Page</strong></a></li>
		<li><a tabindex="-1" href="fire.php">Edit <strong>Fire Page</strong></a></li>
		<li><a tabindex="-1" href="air.php">Edit <strong>Air Page</strong></a></li>	
  </ul>  
</div>
<a class="btn btn-large btn-primary" target="_blank" href="http://www.elementsexhibition.co.uk">
<i class="icon-home icon-white"></i>
Visit Site
</a>
			 
	</span>
	
	<span class="span5">
	<img src="pics/preview.jpg" />
	</span>
	
	<div class="clearfix"></div>
	
</div>



<?php include('footer.php');?>