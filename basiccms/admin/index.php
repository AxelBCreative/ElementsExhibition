<?php
session_start();
if(isset($_SESSION['user'])) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Basic CMS</title>
<link href="style/admin-style.css" rel="stylesheet" type="text/css" />
</head>

<body id ="logout">
<div id="outerContainer">
  <div id="header"></div>
  <div id="navigation">
    <ul id="navlist">
      <li> <a href="../index.php" id="homenav">home</a></a><a href="logout.php" id="logoutnav">logout</a><a href="addPost.php" id ="addpostnav">add post</a><a href="posts.php" id= "postsnav">manage posts</a> <a href="cats.php" id="catsnav">categories</a>  </li>
    </ul>
  </div>
  <div class="content">
    <div id ="loggedinText">You are Logged In   .... <?php echo $_SESSION['user']; ?> </div>
  </div>
</div>
<?php
}else{
	header("Location: login.php");
}
?>
</body>
</html>