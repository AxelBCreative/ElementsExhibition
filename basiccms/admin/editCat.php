<html>
<?php 

include('includes/functions.php');
$cat = getCat($_GET['id']);

?>
<head>
<title>Basic CMS - Admin Area</title>
</head>
<body>
<form action="doEditC.php" method="post">
<table>
	<tr>
		<td><label for="CatName">Name</label></td><td><input type="text" name="CatName" value="<?php echo $cat['Title']; ?>"/></td>
	</tr>
	<tr>
		<td><label for="CatDesc">Description</label></td><td><input type="text" name="CatDesc" value="<?php echo $cat['Description']; ?>" /></td>
	</tr>
	<tr>
		<td colspan="2"><input name="submit" type="submit" value="Update" /></td><td><input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
	</tr>
</form>
</body>
</html>