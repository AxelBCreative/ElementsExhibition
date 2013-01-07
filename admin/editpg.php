<?php
session_start();
include('bootstrap.inc.php');
$connect = new Connection();
$login = new Login();
	if($login->isadmin() == false) header("Location:http://dynamic.artdesignhull.ac.uk/scorazzi/admin.login?authentication=false");
define('pageTitle', 'Edit this poster');
include_once(root.'/includes/head.inc.php');
include_once(root.'/includes/header.inc.php');
include_once(root.'/includes/adminnav.inc.php');

$img_id = $_GET['id'];

$sql = "SELECT * FROM `dyn_scorazzi`.`images` WHERE img_id = $img_id";
$result = mysql_query($sql);

$row = mysql_fetch_object($result);
?>		
		<!--[if gt IE 7]><!-->
        <script src="js/jquery.tagsinput.js"></script>
        <!--<![endif]-->           
        <section id="adminpanel">
			<h1><?php echo pageTitle; ?></h1>
			<h4>You are editing <em><?php echo stripslashes($row->image_title); ?></em></h4>            
        	<a href="pics/full/<?php echo $row->image_filename; ?>" rel="lightbox">
            	<img class="editimg" src="pics/full/<?php echo $row->image_filename;?>" />
            </a>
<form class="inline" name="update" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<input type="hidden" name="poster" value="<?php echo stripslashes($row->img_id); ?>" />
<?php if(isset($_POST['Update'])){?>
<a href="poster/<?php echo str_replace(" ", "", strtolower(stripslashes($row->img_id.'-'.$row->image_title)))?>" class="btn btn-success btn-mini"><i class="icon-ok"></i> Image Updated! <i class="icon-arrow-right"></i></a>
<?php }?>
<h3>Title</h3>
<input type="text" name="title" value="<?php if(!isset($_POST['image_title'])){echo stripslashes($row->image_title);} else echo stripslashes($_POST['image_title']);?>"/>
<h3>Description</h3>
<textarea name="description">
<?php if(!isset($_POST['description'])){echo stripslashes($row->image_description);} else echo stripslashes($_POST['description']);?>
</textarea>
<h3>Tags</h3>
<!--[if gt IE 7]><!-->
<h5>Separate with <img src="img/key-comma.png" alt="comma" title="comma" /> or <img src="img/return.png" alt="return" title="return" /></h5>
<!--<![endif]-->
<?php $tags = explode(" ", $row->image_tags); ?>
<input type="text" name="tags" id="tags" value="<?php foreach($tags as $tag){echo $tag.",";} ?>" />
<button type="submit" name="Update" title="Update" class="btn btn-success"><i class="icon-edit"></i></button>
</form>    
<form class="inline" onSubmit="return confirm('Are you sure you want to delete this <?php echo $row->image_title; ?> poster?')" action="admin.edit" method="get">
	<input type="hidden" name="poster" value="<?php echo $row->img_id; ?>" />
	<input type="hidden" name="image_filename" value="<?php echo $row->image_filename; ?>" />
	<button type="submit" class="btn btn-danger" title="Delete"><i class="icon-trash"></i></button>
</form>

		<!--[if gt IE 7]><!--><script>$('#tags').tagsInput();</script><!--<![endif]-->
        
<?php 
if(isset($_POST['Update']))
{
	$new_title = $_POST['title'];
	$new_descrip = $_POST['description'];
	$new_tags = explode(",",$_POST['tags']);
	$new_tags = implode(" ",$new_tags);
	$id = $row->img_id;
	
	$sql = "UPDATE  `dyn_scorazzi`.`images` SET  `image_title` =  '$new_title',
`image_description` =  '$new_descrip', `image_tags` = '$new_tags' WHERE  `images`.`img_id` = '$id';";

		mysql_query($sql);
	
}
?>        
        </section>
</div><!--#main-->
<?php include_once(root.'/includes/footer.inc.php'); ?>