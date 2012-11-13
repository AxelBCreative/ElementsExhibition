<?php include('includes/connect.php'); ?>
<?php 
	$query = mysql_query("SELECT * FROM posts WHERE ID =" . (int) $_GET['id']);
	$post = mysql_fetch_assoc($query);
?>	
<html>
<head>
<title>Basic CMS - Admin Area</title>
</head>
<body>
<form action="doEditPost.php" method="post">
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
<table>
	<tr>
		<td><label for="PostName">Name</label></td><td><input type="text" name="PostName" value="<?php echo $post['Title']; ?>" /></td>
	</tr>
	<tr>
		<td><label for="PostAuth">Author</label></td><td><input type="text" name="PostAuth" value="<?php echo $post['Author']; ?>" /></td>
	</tr>
	<tr>
		<td><label for="PostContent">Content</label></td>
		<td><textarea name="PostContent"><?php echo $post['Content']; ?></textarea></td>
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
		<td colspan="2"><input name="submit" type="submit" value="Update" /></td>
	</tr>
</form>
</body>
</html>