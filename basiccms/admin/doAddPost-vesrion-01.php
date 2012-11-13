<?php
include('includes/functions.php');


if(!empty($_POST['PostAuth'])) {
	
	if(!empty($_POST['PostName'])) {
		
		if(!empty($_POST['PostContent'])) {
			
			addPost($_POST['PostName'],$_POST['PostAuth'],$_POST['PostContent'],$_POST['PostCats']);
			header("Location: posts.php");
			
		}
		
		else{ 
		
			header("Location: addPost.php");
			}		
		
		}
		
		else{ 
	
			header("Location: addPost.php");	
			}
				
		}
		
		else { 
	
			header("Location: addPost.php");		
		}


			
			
			
		 
		

		
		
	
	
	
	
	