<?php 
session_start();
include('bootstrap.inc.php');
$connect = new Connection();
$login = new Login();
	if($login->isadmin() == false) header("Location:http://dynamic.artdesignhull.ac.uk/scorazzi/admin.login?authentication=false");
define('pageTitle', 'Create a table');
include_once(root.'/includes/head.inc.php');
include_once(root.'/includes/header.inc.php');
include_once(root.'/includes/adminnav.inc.php');
?>
        
        <section id="adminpanel">
			<h1><?php echo pageTitle; ?></h1>
            <form action="create_table.php" method="post">
                <fieldset>
                
                    <label>Set the table's name</label>
                
                        <input type="text" placeholder="Table name" name="table_name" required>
                    
                    <label>Authorise with a password</label>
                
                        <input type="password" placeholder="Password" required>
                        <input type="submit" value="Create table" class="btn btn-success">
                    
                </fieldset>
            </form>
            
            <h3>About this tool</h3>
	            <p>This tool, although functional, really only serves to show the ability to create a table through a form.</p>
                <p>I've made it very simple - the only variable the user gets to decide is the table name.</p>
                <p>The following is what the table will look like once created - it is the same as the main <em>images</em> table.</p>
                <table class="table">
                	<tr>
                    	<th>ID</th>
                        <th>Column</th>
                        <th>Type</th>
                        <th>Null</th>
                        <th>Extra</th>
                    </tr>
                    <tr>
                    	<td>1</td>
                        <td>img_id</td>
                        <td>int(9)</td>                        
                        <td>No</td>
                        <td>AUTO_INCREMENT</td>                                                
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>image_filename</td>
                        <td>varchar(255)</td>
                        <td>Yes</td>
                        <td></td>                                                                                                                    	
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>image_title</td>
                        <td>varchar(100)</td>
                        <td>Yes</td>
                        <td></td>                                                                                                                    	
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>image_description</td>
                        <td>text</td>
                        <td>Yes</td>
                        <td></td>                                                                                                                    	
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>date_uploaded</td>
                        <td>date</td>
                        <td>Yes</td>
                        <td></td>                                                                                                                    	
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>views</td>
                        <td>int(9)</td>
                        <td>Yes</td>
                        <td></td>                                                                                                                    	
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>image_tags</td>
                        <td>text</td>
                        <td>Yes</td>
                        <td></td>                                                                                                                    	
                    </tr>                                                                                                    
                </table>
        </section>

<!--</div><!--#main-->
<?php include_once(root.'/includes/footer.inc.php'); ?>