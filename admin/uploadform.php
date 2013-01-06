<?php 
connect();
define('pageTitle', 'Upload a poster');
include_once(root.'/includes/head.inc.php');
include_once(root.'/includes/header.inc.php');
include_once(root.'/includes/adminnav.inc.php');
?>
<script type="text/javascript" src="js/libs/jquery-1.5.2.js"></script>
<script type="text/javascript" src="js/jquery.tagsinput.js"></script>
<script type="text/javascript">$('#tags').tagsInput();</script>            
        
        <section id="adminpanel">
			<h1><?php echo pageTitle; ?></h1>
			<h4>Upload an image to <?php echo siteTitle; ?></h4>
                        <form enctype="multipart/form-data" action="upload" method="post">
                <fieldset>
                
                    <label>Title of the picture</label>
                
                        <input type="text" placeholder="Image Title" name="title" required>
                                
                    <label>Description</label>                
                        
                        <textarea name="description" placeholder="Image description" required></textarea>

                    <label>Tags (hit , or return) (change these to icons?)</label>
                    
                        <input type="text" name="tags" id="tags" placeholder="Separate tags by a comma">
                        
            
                    <label>Select image (2MB max)</label>
                    
                        <input type="file" name="image">
                        <input type="submit" value="Upload" name="Upload">
        <?
        //If $_POST['tags'] = null {echo "Tags can make an image easier to find whilst searching - are you sure you don't want to fill any in?"};
        ?>            
                </fieldset>
            </form>
		<script>$('#tags').tagsInput();</script>            
        </section>

<!--</div><!--#main-->
<?php include_once(root.'/includes/footer.inc.php'); ?>