<?php 
	require_once('../includes/classes/signup.php');
	require_once('../includes/functions.php');
	$err="";
	if(isset($_POST['email'])){
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$inputs=array("Email"=>$email,"Password"=>$password);
		$errors=validateAll($inputs);
		if(empty($errors)){
			$user = new SignUp();
			$user->signup($email,$password);
			echo "User Inserted";
		}else{
			$err = displayErrors($errors);
			echo $err;
		}
		}
	
?>