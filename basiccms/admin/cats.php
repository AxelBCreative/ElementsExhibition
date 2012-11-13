<?php include('includes/functions.php'); ?>
<?php
session_start();
if(isset($_SESSION['user'])) {
?>
<html>
<head>
<title>Basic CMS - Admin Area</title>
</head>
<body>

<span>Logged In! Welcome <?php echo $_SESSION['user']; ?></span>
<a href="logout.php">Logout</a>
<a href="posts.php">Manage Posts</a>
<a href="cats.php">Manage Categories</a>
<br />
<a href="addCat.php">Add A Cateogry</a>
<table cellspacing="0" cellpadding="10">
<thead>
	<tr>
		<td>Title</td>
		<td>Description</td>
		<td>Action</td>
	</tr>
</thead>
<tbody>
<?php getCats(); ?>
</tbody>
</table>
<?php
} else {
	header("Location: login.php");
}
?>
</body>
</html>