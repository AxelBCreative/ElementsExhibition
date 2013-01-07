<?php 
session_start();
include('bootstrap.inc.php');
$connect = new Connection();
$login = new Login();
	if($login->isadmin() == false) header("Location:http://dynamic.artdesignhull.ac.uk/scorazzi/admin.login?authentication=false");
define('pageTitle', 'Error Logs');
include_once(root.'/includes/head.inc.php');
include_once(root.'/includes/header.inc.php');
include_once(root.'/includes/adminnav.inc.php');
?>
        
        <section id="adminpanel">
			<h1><?php echo pageTitle; ?></h1>
			<h4>Error logs produced on <?php echo siteTitle; ?></h4>
            <h2>Logs</h2>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            	<input type="submit" name="clearlogs" value="Clear logs" class="btn btn-danger exc">
            </form>
            <table id="error_logs" class="table">
	            <th>ID</th>
	            <th>Description</th>
            <?php
				$error_log = root."error_log";
				$f = fopen($error_log, r);
				$i = 0;
				while ($line = fgets($f, 1000))
				{
					print "<tr><td>".$i++."</td><td>".$line."</td></tr>";
				}

				if (isset($_POST['clearlogs']))
				{
					unlink(root."error_log");
					fopen(root."error_log", w);
				}
			?>            
            </table>
        </section>

<!--</div><!--#main-->
<?php include_once(root.'/includes/footer.inc.php'); ?>