<?php
include('bootstrap.inc.php');
$login = new Login();

	$login->check_password($_POST['username'],$_POST['password']);