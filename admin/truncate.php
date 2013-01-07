<?php 
session_start();
include('bootstrap.inc.php');
$connect = new Connection();
$login = new Login();
	if($login->isadmin() == false) header("Location:http://dynamic.artdesignhull.ac.uk/scorazzi/admin.login?authentication=false");
define('pageTitle', 'Truncate a table');
include_once(root.'/includes/head.inc.php');
include_once(root.'/includes/header.inc.php');
include_once(root.'/includes/adminnav.inc.php');
?>
        
        <section id="adminpanel">
			<h1><?php echo pageTitle; ?></h1>
			<h4>Truncate (completely empty) a table on <?php echo siteTitle; ?></h4>
            <form action="truncate.php" method="post">
                <fieldset>
                <label>Select a table to truncate</label>
                    <select name="selected_table">
                    <?php 
                        $sql = "SHOW TABLES FROM $db_name";
                        $result = mysql_query($sql);
                    
                            while ($row = mysql_fetch_row($result)) {
                                echo "<option>" . "{$row[0]}" . "</option>";
                            }
                    ?>
                    </select>
                    <input type="password" placeholder="Password" name="password">
                    <input type="submit" value="Truncate" class="btn btn-danger">
                </fieldset>
            </form>
        </section>

<!--</div><!--#main-->
<?php include_once(root.'/includes/footer.inc.php'); ?>