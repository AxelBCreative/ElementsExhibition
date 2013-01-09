<?php
//header.php for the admin pages
$login = new Login();
?>
<!doctype html>
<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css" />
</head>
<body data-spy="scroll">
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php">Admin Panel</a>
          <?php if ($login->isadmin() == true) {?>
		  <div class="nav-collapse collapse">
            <ul class="nav">			  
			  <li class="dropdown">
                      <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-pencil icon-white"></i> Edit Pages <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                        <li><a tabindex="-1" href="home.php">Homepage</a></li>
						<li class="divider"></li>
                        <li><a tabindex="-1" href="earth.php">Earth Page</a></li>
                        <li><a tabindex="-1" href="water.php">Water Page</a></li>
                        <li><a tabindex="-1" href="fire.php">Fire Page</a></li>
                        <li><a tabindex="-1" href="air.php">Air Page</a></li>						
						<li class="divider"></li>
                        <li><a tabindex="-1" href="gallery.php">Image Gallery</a></li>												
                      </ul>
                    </li>
			  <li class="divider-vertical"></li>
			  <li class="">
                <a href="help.php">Help</a>
              </li>
              <li class="">
                <a href="logout.php">Logout</a>
              </li>			  
            </ul>
          </div>
		  <?php }?>
        </div>
      </div>
    </div>