<?php
session_start();
if(isset($_SESSION['user'])) {
	header("Location: index.php");
} else {
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Basic CMS</title>
<link href="style/admin-style.css" rel="stylesheet" type="text/css" />
</head>
<body id ="admin">
<div id="outerContainer">
  <div id="header"> </div>
  <div id="navigation">
    <ul id="navlist">
      <li><a href="../index.php" id="homenav">home</a><a href="login.php" id="adminnav">admin</a></li>
    </ul>
  </div>
  <div class="content">
    <div class="loginContainer">
      <form action="dologin.php" method="post">
       
       
        <div class="username">Username:
        <input type="text" name="username" />
        </div>
        
        <span>Password:</span>
        <input type="password" name="password" />
        <input type="submit" name="login" value="Login" />
      </form>
    </div>
  </div>
  <?php } ?>
</div>
</body>
</html>
