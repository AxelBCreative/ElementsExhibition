<?php 
session_start();
$connect = new Connection();
$login = new Login();
	if($login->isadmin() == false) header("Location:login.php?authentication=false");
define('pageTitle', 'Admin Panel');
include('header.php');
?>    
<div class="container">

<div class="hero-unit row">
<?php

$sql = "SELECT * FROM `phuck_marketing`.`pages` WHERE `pages`.`name` = 'air'";
$result = mysql_query($sql);
	$row = mysql_fetch_object($result);

?>	
	
	<span class="span7">
		<h1>"Air"</h1>
		<h4>You are now editing: <br /> <a href="http://www.elementsexhibition.co.uk/elements/air">www.elementsexhibition.co.uk/elements/air</a></h4>
		<form action="air.php" name="submit" method="post" class="row">
			<label>title</label>
			<input class="regular-html" type="text" name="home-title" value="<?php echo $row->title ?>"/>
			<label>meta-description</label>
			<input class="regular-html" type="text" name="home-meta" value="<?php echo $row->meta ?>" />
			<label>heading</label>
			<textarea class="regular-html" name="home-heading"><?php echo $row->heading ?></textarea>
			<label>shorturl (for tweeting)</label>
			<input type="text" name="shorturl" value="<?php echo $row->shorturl ?>" />
			<label>image 1 // caption (<a target="_blank" href="<?php echo $row->image_one ?>">preview</a>)</label>
			<input type="text" name="img1" value="<?php echo $row->image_one ?>" />
			<input class="regular-html" type="text" name="img1cap" value="<?php echo $row->image_one_title ?>" />
			<label>image 2 // caption (<a target="_blank" href="<?php echo $row->image_two ?>">preview</a>)</label>
			<input type="text" name="img2" value="<?php echo $row->image_two ?>" />
			<input class="regular-html" type="text" name="img2cap" value="<?php echo $row->image_two_title ?>" />
			<label>image 3 // caption (<a target="_blank" href="<?php echo $row->image_three ?>">preview</a>)</label>
			<input type="text" name="img3" value="<?php echo $row->image_three ?>" />
			<input class="regular-html" type="text" name="img3cap" value="<?php echo $row->image_three_title ?>" />			
			<br />
			<input type="submit" class="btn btn-large btn-success" value="Submit" name="submit" title="submit" />
			<?php if(isset($_POST['submit']))
{
	$title = $_POST['home-title'];
	$meta = $_POST['home-meta'];
	$heading = $_POST['home-heading'];
	$shorturl = $_POST['shorturl'];
	$img1 = $_POST['img1'];
	$img2 = $_POST['img2'];
	$img3 = $_POST['img3'];	
	$img1cap = $_POST['img1cap'];
	$img2cap = $_POST['img2cap'];
	$img3cap = $_POST['img3cap'];
	
	
	$sql = "UPDATE `phuck_marketing`.`pages` SET  `title` =  '$title', `meta` =  '$meta', `heading` = '$heading', `shorturl` = '$shorturl', `image_one` = '$img1', `image_two` = '$img2', `image_three` = '$img3', `image_one_title` = '$img1cap', `image_two_title` = '$img2cap', `image_three_title` = '$img3cap' WHERE  `pages`.`name` = 'air';";

		mysql_query($sql); header("Location: http://localhost/ElementsExhibition/admin/air.php");
		}
		?>
		</form>	 
	</span>
	
	<div class="clearfix"></div>
	
</div>



<?php include('footer.php');?>