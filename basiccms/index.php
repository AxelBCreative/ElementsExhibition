<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Basic CMS</title>
<link href="style/site-style.css" rel="stylesheet" type="text/css" />
</head>

<body id ="home">
<div id="outerContainer">
  <div id="header"></div>
  <div id="navigation">
    <ul id="navlist">
      <li><a href="index.php" id="homenav">home</a><a href="admin/index.php" id="adminnav">admin</a></li>
    </ul>
  </div>
  <div class="content">
    
      <div class ="text-01">
        <?php
	include('includes/functions.php');
 	getPosts(); 
	?>
     
    </div>
  </div>
</div>
</body>
</html>