<?php 
session_start();
include('bootstrap.inc.php');
$connect = new Connection();
$login = new Login();
	if($login->isadmin() == false) header("Location:login.php?authentication=false");
define('pageTitle', 'Admin Panel');
include('header.php');
?>    
<div class="container">

<div class="hero-unit row">
<?php

$sql = "SELECT * FROM `phuck_marketing`.`pages` WHERE `pages`.`name` = 'homepage'";
$result = mysql_query($sql);
	$row = mysql_fetch_object($result);

?>	
	
	<span class="span5">
		<h1>"Homepage"</h1>
		<h4>You are now editing:<br /> <a href="http://www.elementsexhibition.co.uk">www.elementsexhibition.co.uk</a></h4>
		<form action="home.php" name="submit" method="post" class="row">
			<label>title</label>
			<input class="regular-html" type="text" name="home-title" value="<?php echo $row->title ?>"/>
			<label>meta-description</label>
			<input class="regular-html" type="text" name="home-meta" value="<?php echo $row->meta ?>" />
			<label>heading</label>
			<textarea class="regular-html" name="home-heading"><?php echo $row->heading ?></textarea>
			<label>body text</label>
			<textarea class="body-text" name="body"><?php echo $row->body ?></textarea>
			<input type="submit" class="btn btn-large btn-success" value="Submit" name="submit" title="submit" />
			<?php if(isset($_POST['submit']))
{
	$title = $_POST['home-title'];
	$meta = $_POST['home-meta'];
	$heading = $_POST['home-heading'];
	$body = $_POST['body'];
	
	$sql = "UPDATE  `phuck_marketing`.`pages` SET  `title` =  '$title',
`meta` =  '$meta', `heading` = '$heading', `body` = '$body' WHERE  `pages`.`name` = 'homepage';";

		mysql_query($sql); header("Location: http://localhost/ElementsExhibition/admin/home.php");
		}
		?>
		</form>	 
	</span>
	
	<div class="clearfix"></div>
	
</div>



<?php include('footer.php');?>