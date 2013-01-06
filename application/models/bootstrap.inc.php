<?php
/**
 * This file contains many of the functions that are used within the site, 
 * and various other global constants and variables.
 */
 
/*--------------
//	Constants
//-------------*/

// Defines the main title which will be used throughout the website.
const siteTitle = "Elements Exhibition";
// Defines the root of the website (in this case we have concatenate my subdirectory but under normal circumstances this wouldn't be necessary).
define ('root', $_SERVER['DOCUMENT_ROOT'].'/admin/');

/*--------------
//	Database
//-------------*/

$db_user = "phuck_marketing";
$db_pass = "HXI7ITGWWP";
$db_name = "phuck_marketing";

class Connection
{
	public function __construct()
	{
		// Putting 'global' before the variables ensures the variables are ones that have been defined outside of the function (i.e., global variables).
		global $db_user, $db_pass, $db_name;

			$connect = mysql_connect("localhost",$db_user,$db_pass);
			mysql_select_db($db_name);
			return "Connected";
	}
	
	function close()
	{
		mysql_close();
	}
}

/*--------------
//	Uploading
//-------------*/

// Define a maximum file size - I found the /tmp/ directory dislikes files >2MB, so that'll have to do.
$max_file_size = (2097152);

class Upload
{
	// add_image_entry - this adds the image information to the database prior to upload.
	public function add_image_entry($image_name,$image_title,$image_description, $image_tags) 
	{
		$image_name = mysql_real_escape_string($image_name);
		$image_title = mysql_real_escape_string($image_title);
		$image_description = mysql_real_escape_string($image_description);
		$image_tags = implode(" ", $image_tags);
			$image_tags = mysql_real_escape_string($image_tags);
		
		$sql = "INSERT INTO `dyn_scorazzi`.`images` (`img_id`, `image_filename`, `image_title`, `image_description`, `date_uploaded`, `image_tags`, `views`) VALUES (NULL, '$image_name', '$image_title', '$image_description', CURDATE(), '$image_tags', 1);";
		$insert = mysql_query($sql);
			if (!$insert) 
			{
				echo "The image has been uploaded, however it was not successfully entered into the database. You will have to upload again to ensure it appears.";
			}
	}
	// getextension - gets the file extension that has been uploaded.
	public function getextension($filename) 
	{
		$i = strrpos($filename,"."); // Finds the final "." in the filename 
			if (!$i) {return "";} // If there isn't a ".", return null
		$l = strlen($filename) - $i; // Calculates the length of the string, minus the exntension
		$ext = substr($filename,$i+1,$l);
			return $ext;
	 }
	// namegen - generates a random filename upon upload.
	public function namegen($image_name) 
	{	
		$image_name = mt_rand(1e1, 9e9);
		return base_convert($image_name, 10, 32);
	}
	
	public function chmod_dirs($pathname_full,$pathname_thumbs)
	{
		$chmod = chmod($pathname_full, 0777);
		$chmod = chmod($pathname_thumbs, 0777);
	}
}


/*--------------
//	Users
//-------------*/

$salt = "hjGHh7yiuHBH"; // I randomly hit some keys...

class Login
{	
	
	public function generate_authcode($username,$password)
	{
		$authsalt = mt_rand(5e7,1e11);
		return $authcode = md5($username.$authsalt.$email);
	}
	
	public function check_user($username)
	{
		$sql = "SELECT * FROM `phuck_marketing`.`users` WHERE `users`.`username` = '$username'";
		$result = mysql_query($sql);
		if(mysql_num_rows($result) == 0)
		{
			return true;
		}
		else return false;
		header("Location:register?user=exists");		
	}
	
	public function check_email($email)
	{
		$sql = "SELECT * FROM `dyn_scorazzi`.`users` WHERE `users`.`email` = '$email'";
		$result = mysql_query($sql);
		if(mysql_num_rows($result) == 0)
		{
			return true;
		}
		else return false;
		header("Location:register?email=inuse");

	}
	// create_user - creates a user
	public function create_user($username,$password,$email)
	{
		global $salt;
		
		$connect = new Connection();
		
		// Encrypt the password to prepare for population
		$password = crypt(sha1(md5($password)),$salt);
		
		// Check if user exists
		$this->check_user($username);
		
		// Check if email exists
		$this->check_email($email);
		
		// If not, generate an authentication code
		$authcode = $this->generate_authcode($username,$password);
		
		// And email it
		$subject = "Confirm your account on ".siteTitle;
		$message = "<h1>Welcome to Movie Minimalism, ".$username."!</h1>";
		$message .= "<h4>You're receiving this email because you recently used this address to sign up to use Movie Minimalism's Admin Panel</h4>";
		$message .= "<p>Just click the following link to authorise your account, or copy/paste it into your browser:</p>";
		$message .= "<p><a href=\"http://dynamic.artdesignhull.ac.uk/scorazzi/authorise?a=".$authcode."\"></a></p>";
		$message .= "<p>In case you need to copy/paste the code, it's <strong>".$authcode."</strong></p>";
		$message .= "<p>Thanks - Sacha Corazzi</p>";
		
		$headers = "From: sacha.corazzi@gmail.com\r\n";
		$headers .= "Reply-To: noreply@imsacha.co.uk\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";		
		
		mail($email,$subject,$message,$headers);
		
		$insert = "INSERT INTO `dyn_scorazzi`.`users` (`userid`, `username`, `password`, `email`, `confirm_key`, `is_confirmed`) VALUES (NULL, '$username', '$password', '$email', '$authcode', '1');";
		mysql_query($insert);
		// Now redirect to the authorisation page
		//header("Location:http://dynamic.artdesignhull.ac.uk/scorazzi/authorise?e=".$email);
	}
	
	
	public function authorise_user($email,$authcode)
	{
		if(isset($_POST['submit']))
		{			
			$sql = "UPDATE `dyn_scorazzi`.`users` SET `users`.`is_confirmed` = '1' WHERE `users`.`email` = '$email' AND `users`.`confirm_key` = '$authcode'";
			$result = mysql_query($sql);
			if($result) return true;
			else return false;
		}		
	}
	
	// check_password - checks the password against a hashed and salted entry in the database
	public function check_password($username,$password)
	{
		global $database;
		global $salt;
		
		$connect = new Connection();
		$password = crypt(sha1(md5($password)),$salt);
		
		$sql = "SELECT * FROM `phuck_marketing`.`users` WHERE username = '$username' AND password = '$password';";
		$result = mysql_query($sql);

		if (mysql_num_rows($result)==1) 
		{
			session_start();
			$_SESSION["admin"] = $_POST["username"];
			setcookie("admin", "logged_in", (time()+60*60*24*1));
			header("Location:index.php");			
			echo "<h1>Yes</h1>";
		}
		else 
		{
			header("Location:login.php?success=false");
			echo "<h1>No</h1>";		
		}
	}
	
	// isadmin - checks if the user is an admin, so that certain features can be shown
	public function isadmin()
	{
		if (isset($_SESSION["admin"]) && isset($_COOKIE["admin"]))
		{
			return true;
		}
		else return false;
		// need to make if/else on sensitive pages that checks this so that this can be used for other things like delete links
		
	}
	
	public function logout()
	{
		if (isset($_SESSION)) session_destroy();
		header("Location:admin/");
	}
}
/*--------------
//	Misc
//-------------*/

// check_table_name - when creating a table, this checks if one with that name already exists. If so, an error message is produced.
function check_table_name($table_name, $db_name) 
{
	$get_tables = "SHOW TABLES FROM $db_name";
	$alltables = mysql_query($get_tables);
	while (list ($cache) = mysql_fetch_array($alltables)) {
		if ($cache == $table_name) {
				return TRUE;
				}
			return FALSE;
		}
}


// Counts the number of images currently in the database
function countimages ()
{	
	global $db_name;
	
	$num_rows = mysql_query("SELECT * FROM $db_name.`images`");
		$num_rows = mysql_num_rows($num_rows);
		echo '<p><i class="icon-th icon-large"></i>';
		switch($num_rows)
		{
			case 0:
				echo 'There aren\'t any images on '.siteTitle.'! Why not <a href="admin/upload">upload</a> one now?';
				break;
			case 1:
				echo 'There\'s only <strong>'.$num_rows.'</strong> image on '.siteTitle.'. <a href="admin/upload">Upload</a> more, keep it company!';
				break;
			default:
				echo 'There are currently <strong>'.$num_rows.'</strong> images on '.siteTitle.'.';
		}
		echo '</p>';
		if ($num_rows !=0) {
			echo '<p><i class=\"icon-calendar icon-large\"></i> The oldest image is <strong><?php //countoldest();?></strong>	
; 
<p>old, whilst the newest is
<?php //countnewest(); ?> old.</p>
<p></p>';}
		return $num_rows;
}

// errornotfound - writes an error to the log when a requested page has not been found
function errornotfound($url,$ipadd)
{
	global $database;
	$connect = new Connection();
	$sql = "INSERT INTO `dyn_scorazzi`.`error_log` (`error_id`, `error_url`, `error_description`, `error_user_ip`, `error_date`) VALUES (NULL, '$url', '404 Not Found', '$ipadd', CURDATE());";
	$log_error = mysql_query($sql);
	if ($log_error) echo "<h6>Uh, we had a slight weapons malfunction, but uh... everything's perfectly all right now.</h6>\n<h6>We're fine. We're all fine here now, thank you.</h6>";
}


/*--------------
//	Deleting
//-------------*/
class Delete
{
	//deleteimage - self explanatory!
	public function deleteimage()
	{
		//global $image_filename, $image_thumb_filename;
		if (isset($_GET['poster']))
		{
			$sql = "DELETE FROM `dyn_scorazzi`.`images` WHERE img_id=".$_GET['poster'];
			mysql_query($sql);
			// Deletes the physical files from the server :)
			unlink("../pics/full/".$_GET['image_filename']);
			unlink("../pics/thumbs/".$_GET['image_filename']);
		}
	}
	
	public function deleteall()
	{
		if (isset($_GET['deleteall']))
		{
			$sql = "TRUNCATE TABLE `dyn_scorazzi`.`images`;";
			$truncate = mysql_query($sql);
	
				// Because PHP doesn't have the native functionality to empty a directory, nor delete one that is non-empty, 
				// a little workaround has to be achieved.
				$images = glob(root."pics/full/*"); 
				foreach($images as $file)
				{
					 unlink($file);
				}
				$images = glob(root."pics/thumbs/*");
				foreach($images as $file)
				{
					unlink($file);
				}
		}
	}
}
$delete = new Delete();

class DeleteCron extends Delete
{
	public function deleteall()
	{
	$sql = "TRUNCATE TABLE `dyn_scorazzi`.`images`;";
	$truncate = mysql_query($sql);
		
	$images = glob(root."pics/full/*"); 
		foreach($images as $file)
		{
		 unlink($file);
		}
		
	$images = glob(root."pics/thumbs/*");
		foreach($images as $file)
		{
			unlink($file);
		}		
	}
}

/*
	Needs cleaning up a bit - basically a class for error reporting. May need different functions for different types of errors that would occur
	(such as upload errors, 404 errors, delete errors, etc.)
*/
class Error
{
	public function report()
	{
			foreach ($errors as $error)
		{
			echo $error;
			$file = $_SERVER['SCRIPT_NAME'];
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		//	$sql = "INSERT INTO `dyn_scorazzi`.`error_log` (`error_id`, `string`, `file`) VALUES (NULL, `$error`, `$file`)";
		//	mysql_query($sql) or die("Oops");
			$error_log = fopen("error_log", "a");
			fwrite($error_log, "<strong class=\"error\">".$error."</strong> in <strong class=\"file\">".$file."</strong> [".$ipaddress."]\n");
			fclose($error_log);
			/*
				Put this into a function, and make use of the table - much better for searching etc.
				http://php.net/manual/en/function.mysql-error.php
				Make note of this - tried to use a flat file system, but MySQL database proved more effective (and why)
			*/
		}
	}
}
$error_report = new Error();


class Reset
{
	public function unzip($folder,$directory)
	{
		$zip = zip_open($folder);		
		
		$zipped_files = zip_read($zip);
		
		foreach($zipped_files as $file)
		{
			copy($file,$directory);
		}
	}
	
	public function sqldump()
	{
		// Download the images.sql and copy the SQL into here
	}
}