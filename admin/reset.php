<?php 
session_start();
$connect = new Connection();
$login = new Login();
	if($login->isadmin() == false) header("Location:http://dynamic.artdesignhull.ac.uk/scorazzi/admin.login?authentication=false");
define('pageTitle', 'Reset Everything');
include_once(root.'/includes/head.inc.php');
include_once(root.'/includes/header.inc.php');
include_once(root.'/includes/adminnav.inc.php');
?>
        
        <section id="adminpanel">
			<h1><?php echo pageTitle; ?></h1>
			<h4>Break something, did you?</h4>
            <p>Nevermind! I've planned for this eventuality, so you just reset everything to the way it should be.</p>
            <p>If you're interested in how it works, keep reading. Otherwise you can just skip to the bottom and click "Reset All".</p>
            <h4>How it works</h4>
            <ol>
            	<li>First, either the user or an automated script requests "cron.php";</li>
                <li>The `images` table is truncated (completely cleared);</li>
            	<li>All images are deleted (unlinked) from the <a href="pics/">/pics/</a> directory;</li>
            	<li>There are two zip folders - one containing the original full size images, and the other the thumbnails;</li>
            	<li>Each of their contents are unzipped into their respective folders;</li>
            	<li>A Blue Peter style (one I made earlier) SQL dump is accessed and the table is repopulated with the original data;</li>
            	<li>Success! Keep playing.</li>                                                                                
            </ol>
            <button formaction="cron.php" onclick="alert('Due to time constraints, this was not properly implemented.');" class="btn btn-danger btn-large">
            <i class="icon-refresh"></i> Reset All!
            </button>
        </section>

<!--</div><!--#main-->
<?php include_once(root.'/includes/footer.inc.php'); ?>