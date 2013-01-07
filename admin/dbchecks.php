<?php 
session_start();
include('bootstrap.inc.php');
$connect = new Connection();
$login = new Login();
	if($login->isadmin() == false) header("Location:http://dynamic.artdesignhull.ac.uk/scorazzi/admin.login?authentication=false");
define('pageTitle', 'Database checks');
include_once(root.'/includes/head.inc.php');
include_once(root.'/includes/header.inc.php');
include_once(root.'/includes/adminnav.inc.php');
?>
        
        <section id="adminpanel">
			<h1><?php echo pageTitle; ?></h1>
            	<p>This page offers some insight to why some database-related functions may not be working.</p>
                <p>For more detailed information, visit the <a href="admin/errorlogs.php"><i class="icon-flag"></i>Error logs</a>.</p>
	            <h3>Connected to database?</h3>
		            <?php if ($connect) { ?> 
		            <p>Successfully connected to <strong><?php echo $db_name ?></strong> with the user <strong><?php echo $db_user ?></strong>.</p>
	            <h3>What tables do we have?</h3>
		            <ol>
			            <?php 
				            $sql = "SHOW TABLES FROM $db_name";
				            $result = mysql_query($sql);
					            while ($row = mysql_fetch_row($result)) 
								{
					                echo "<li>" . "{$row[0]}" . "</li>";
        					    }
        			    ?>
		            </ol>
            
            <?php } else {echo "No";} ?>
        </section>

<!--</div><!--#main-->
<?php include_once(root.'/includes/footer.inc.php'); ?>