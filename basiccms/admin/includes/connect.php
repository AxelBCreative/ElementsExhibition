<?php
define('DB_HOST','localhost');
define('DB_USER','dyn_shared');
define('DB_PASS','WX8JVZ7SQX');
define('DB_NAME','dyn_shared');

$connection = mysql_connect(DB_HOST,DB_USER,DB_PASS) or die(mysql_error());
mysql_select_db(DB_NAME) or die(mysql_error());

?>