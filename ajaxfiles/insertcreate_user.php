<?php 
	require_once('../includes/classes/UsersLogin.php');
	require_once('../includes/functions.php');
	$err="";

	if(!isset($_POST['p_tk_en']) || $_SESSION['token'] != $_POST['p_tk_en']){
		echo '-1';
		exit;
	}
	
	if(isset($_POST['email'])){
		if(isset($_POST['email'])){
		$email = $_POST['email'];
		$user = new UsersLogin();
		$res=$user->checkUserByEmail($email);
		$newres ="";
		if(isset($res['email'])){
			//echo $res['email'];
			echo "0";
		}else{
		$username = escapeString(htmlChars($_POST['username']));
		$password = md5($_POST['password']);
		$email = htmlChars($_POST['email']);
		$Isadmin = htmlChars($_POST['Isadmin']);
		$Isactive = htmlChars($_POST['Isactive']);
		$sq = escapeString(htmlChars($_POST['sq']));
		$sa = escapeString(htmlChars($_POST['sa']));
		$inputs=array("Username"=>$username,"Email"=>$email,"Password"=>$password,"Isadmin"=>$Isadmin,"Isactive"=>$Isactive,"Sq"=>$sq,"Sa"=>$sa);
		$errors=validateAll($inputs);
		if(empty($errors)){
			if($Isadmin == 2)$Isadmin =0; 
			if($Isactive == 2)$Isactive =0; 
			$user->insertUser($username,$email,$password,$Isadmin,$Isactive,$sq,$sa);
			echo "User Inserted";
		}else{
			$err = "Please fill form properly";
			echo $err;
		}
		}
	}
	}
?>