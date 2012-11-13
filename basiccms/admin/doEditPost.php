<?php
include('includes/functions.php');

if(isset($_POST['submit'])) {
	
	
	if(isset($_POST['PostName'])) {
		
		if(isset($_POST['PostContent'])) {
			
			
		
			
			editPost($_POST['PostName'],$_POST['PostAuth'],$_POST['PostContent'],$_POST['PostCats'],$_POST['id']);
			
			
			header("Location: posts.php");
			
		} 
		
		else {
			echo "please enter some content!";	
		}
	}
	
	 else {
		echo "please set a post name!";
		include('addCat.php');
	}
}

 else {
	header("Location: addCat.php");
}
?>