<?php require_once('../includes/classes/Token.php');
	$ptoken = Token::generate();
	echo $ptoken;
?>