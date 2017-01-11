<?php 
	session_start();
	if(isset($_SESSION['email']) && !empty($_SESSION['email'])) echo 1;
	else echo 2;
?>