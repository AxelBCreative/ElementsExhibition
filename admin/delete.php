<?php
session_start(); 
// This snippet comes first because headers can't be set after any other output is sent.
// This is essentially a little tidying up on the front-end - when a delete is requested the URI contains the details ?poster=27 (for example) from the form GET.
// By redirecting, it basically hides this from this user but keeps the functionality of a URL delete.
//
// There are, of course, security issues with that - but I'll come to them later.
if ($_SERVER['REQUEST_URI'] != "/scorazzi/admin.delete") {
	header("Location: http://dynamic.artdesignhull.ac.uk/scorazzi/admin.delete");
	}
$connect = new Connection();
$login = new Login();
	if($login->isadmin() == false) header("Location:http://dynamic.artdesignhull.ac.uk/scorazzi/admin.login?authentication=false");
define('pageTitle', 'Delete a poster');
include_once(root.'/includes/head.inc.php');
include_once(root.'/includes/header.inc.php');
include_once(root.'/includes/adminnav.inc.php');
?>		
        
        <section id="adminpanel">
			<h1><?php echo pageTitle; ?></h1>
			<h4>Delete a poster from <?php echo siteTitle; ?></h4>
<?php 
$sql = "SELECT * FROM `dyn_scorazzi`.`images`";
$result = mysql_query($sql);
$numrows = mysql_num_rows($result);
	if ($numrows == 0) 
	{
		echo "\n<p>There are no images left - why not <a href=\"admin/upload\">upload</a> one?</p>";
	}
	else {
?>
<table id="delete" class="table">
<th>ID</th>
<th>Title</th>
<th>Date Uploaded</th>
<th>Actions</th>
<a href="gallery" class="btn btn-primary icon-picture" title="View gallery"></a>&nbsp;
<form onSubmit="return confirm('Are you sure you want to delete ALL posters?')" action="admin/delete" method="get">
<button type="submit" name="deleteall" title="Delete All" class="btn btn-danger exc"><i class="icon-trash"></i> *</button>
</form>
<?php
	while ($row = mysql_fetch_object($result)) {
		
		$image_filename = "pics/full/".$row->image_filename;
?>
<form onSubmit="return confirm('Are you sure you want to delete this <?php echo $row->image_title; ?> poster?')" action="admin/delete" method="get">
<input type="hidden" name="poster" value="<?php echo $row->img_id; ?>" />
<input type="hidden" name="image_filename" value="<?php echo $row->image_filename; ?>" />
	<tr>
    	<td><a href="poster/<?php echo $row->img_id."-".strtolower(stripslashes(str_replace(" ", '', $row->image_title))); ?>"><?php echo $row->img_id; ?></a></td>
		<td><a href="pics/full/<?php echo stripslashes($row->image_filename); ?>" rel="lightbox" title="<?php echo stripslashes($row->image_title); ?>"><i class="icon-picture"></i> <?php echo stripslashes($row->image_title); ?></a></td>
		<td><?php echo date('M d, Y',(strtotime($row->date_uploaded))); ?></td>
        <td>
        	<button type="submit" title="Delete" class="btn btn-danger icon-trash"></button>
            <a href="admin.edit.php?id=<?php echo $row->img_id; ?>" title="Edit" class="btn" type="submit"><i class="icon-edit"></i></a>
        </td>
	</tr>
</form>    
<?php 
	} 
	// Deletes an image if requested
	$delete->deleteimage(); 
	// Deletes all images if requested
	$delete->deleteall();
}
?>
</table>
        </section>

<!--</div><!--#main-->
<?php include_once(root.'/includes/footer.inc.php'); ?>