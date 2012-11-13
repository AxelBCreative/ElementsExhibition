<?php include('includes/connect.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Basic CMS</title>
<link href="style/admin-style.css" rel="stylesheet" type="text/css" />
</head>

<body id ="addposts">
<div id="outerContainer">
  <div id="header"></div>
  <div id="navigation">
    <ul id="navlist">
      <li><a href="../index.php" id="homenav">home</a><a href="logout.php" id="logoutnav">logout</a><a href="addPost.php" id ="addpostsnav">add post</a><a href="posts.php" id= "postsnav">manage posts</a> <a href="cats.php" id="catsnav">categories</a> </li>
    </ul>
  </div>
  <div class="content">
  <div class="addpostContainer">
  
  <form action="doAddPost.php" method="post">
<table>
	<tr>
		<td><label for="PostName">Name</label></td><td><input type="text" name="PostName" /></td>
	</tr>
	<tr>
		<td><label for="PostAuth">Author</label></td><td><input type="text" name="PostAuth" /></td>
	</tr>
	<tr>
		<td><label for="PostContent">Content</label></td>
		<td><textarea name="PostContent"></textarea></td>
	</tr>
	<tr>
		<td><label for="PostCats">Category</label></td>
		<td>
			<select name="PostCats">
				<?php
					$result = mysql_query("SELECT * FROM categories");
					while($cat = mysql_fetch_assoc($result)) {
				?>
					<option value="<?php echo $cat['ID']; ?>"><?php echo $cat['Title']; ?></option>
				<?php	
					}
					?>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2"><input name="submit" type="submit" value="Add" /></td>
	</tr>
</form>
           
    </div>
 </div>
</div>

</body>
</html>










































