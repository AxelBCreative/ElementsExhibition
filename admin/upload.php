<?php 
session_start();
include('bootstrap.inc.php');
$connect = new Connection();
$login = new Login();
	if($login->isadmin() == false) header("Location:http://dynamic.artdesignhull.ac.uk/scorazzi/admin.login?authentication=false");
define('pageTitle', 'Upload a poster');
include_once(root.'/includes/head.inc.php');
include_once(root.'/includes/header.inc.php');
include_once(root.'/includes/adminnav.inc.php');
?>
		<!--[if gt IE 7]><!-->
        <script src="js/jquery.tagsinput.js"></script>
        <!--<![endif]-->        						        
        <section id="adminpanel">
			<h1><?php echo pageTitle; ?></h1>
                        <form enctype="multipart/form-data" action="upload" method="post">
                <fieldset>
                
                    <h3>Title</h3>
                
                        <input type="text" placeholder="Image Title" name="title" required>
                                
                    <h3>Description</h3>
                        <div id="format-buttons">
                        	<a class="btn exc" title="Bold"><i class="icon-bold"></i></a>
                        	<a class="btn exc" title="Italic"><i class="icon-italic"></i></a>
                        	<a class="btn exc" title="Link"><i class="icon-external-link"></i></a>                                                        
                        </div>
                        <textarea id="description" name="description" placeholder="Image description" required></textarea>
<?php //echo wysiwyg('description', 'description', $description); ?>
                    <h3>Tags</h3>
                    <!--[if gt IE 7]><!-->
                    <h5>Separate with <img src="img/key-comma.png" alt="comma" title="comma" /> or <img src="img/return.png" alt="return" title="return" /></h5>
                    <!--<![endif]-->
                    
                        <input type="text" name="tags" id="tags" placeholder="Separate tags by a comma">
                        
            
                    <label>Select image (2MB max)</label>
                    
                        <input type="file" name="image">
                        <button type="submit" name="Upload" class="btn btn-success" title="Upload"><i class="icon-upload icon-large"></i> Upload</button>
                </fieldset>
            </form>            
		<!--[if gt IE 7]><!--><script>$('#tags').tagsInput();</script><!--<![endif]-->
        </section>
</div><!--/main-->
<?php include_once(root.'/includes/footer.inc.php'); ?>