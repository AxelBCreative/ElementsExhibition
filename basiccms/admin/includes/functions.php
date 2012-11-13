<?php
include('includes/connect.php');

function getPosts() {
	$query = mysql_query("SELECT * FROM posts") or die(mysql_error());
	if(mysql_num_rows($query) == 0) {
		echo "<tr><td colspan=\"3\">No Posts Were Found</td></tr>";
	} else {
		while($post = mysql_fetch_assoc($query)) {
			echo  "<div class=\"titleContainer\">";
			
			echo $post['Title'];
			
			echo "</div>";
			
			echo  "<div class=\"authorContainer\">";
			
			echo $post['Author']; 
			
			echo "</div>";
			
			echo "<div class =\"deleteContainer\">";
			
			
			echo "<a href=\"delete.php?id= ". $post['ID'] . "\">Delete</a>";
			
			echo "</div>";
			
			echo "<div class =\"editContainer\">";
			
			echo "<a href=\"editPost.php?id=" . $post['ID'] . "\">Edit</a>";
			
			echo "</div>";
			
			echo "</br>";	
		}
	}
}

function getCats() {
	$query = mysql_query("SELECT * FROM categories") or die(mysql_error());
	if(mysql_num_rows($query) == 0) {
		echo "<tr><td colspan=\"3\">No Categories Were Found</td></tr>";
	} else {
		while($cat = mysql_fetch_assoc($query)) {
			echo "<tr><td>" . $cat['Title'] . "</td><td>" . $cat['Description'] . "</td><td><a href=\"deleteCat.php?id=" . $cat['ID'] . "\">Delete</a><br /><a href=\"editCat.php?id=" . $cat['ID'] . "\">Edit</a></td></tr>";
		}
	}
}

function getCat($id) {
	$id = (int) $id;
	$query = mysql_query("SELECT * FROM categories WHERE ID = '$id'") or die(mysql_error());
	return mysql_fetch_assoc($query);
}

function addCat($cName, $cDesc) {
	$query = mysql_query("INSERT INTO categories VALUES(null,'$cName','$cDesc')") or die(mysql_error());
}

function editCat($cName, $cDesc, $id) {
	$id = (int) $id;
	$query = mysql_query("UPDATE categories SET Title = '$cName', Description = '$cDesc' WHERE ID = '$id'") or die(mysql_error());
	header("Location: cats.php");
}

function deleteCat($id) {
	$id = (int) $id;
	mysql_query("DELETE FROM categories WHERE ID = '$id'") or die(mysql_error());
	header("Location: cats.php");
}

function addPost($pName, $pAuth, $pContent,$pCat = 1) {
	$query = mysql_query("INSERT INTO posts VALUES(null,'$pName','$pAuth','$pContent','$pCat')") or die(mysql_error());
}

function editPost($pName, $pAuth, $pContent, $pCat = null, $id) {
	
		if(isset($pCat)) {
	$query = "UPDATE posts SET Title = '$pName', Author = '$pAuth', Content = '$pContent', Category_ID = '$pCat' WHERE ID = " . (int) $id;
	
	
	
	}else {
	$query = "UPDATE posts SET Title = '$pName', Author = '$pAuth', Content = '$pContent', WHERE ID = " . (int) $id;
	}
	
	mysql_query($query);
}

function deletePost($id) {
	$id = (int) $id;
	mysql_query("DELETE FROM posts WHERE ID = '$id'") or die(mysql_error());
	header("Location: posts.php");
}
?>