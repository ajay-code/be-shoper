<?php 
	require_once('../includes/classes/UsersLogin.php');
	require_once('../includes/functions.php');
	$err="";
	if(!isset($_POST['p_tk_en']) || $_SESSION['token'] != $_POST['p_tk_en']){
		echo '-1';
		exit;
	}
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$email = $_POST['email'];
		$Isadmin = $_POST['Isadmin'];
		$Isactive = $_POST['Isactive'];
		$sq = $_POST['sq'];
		$sa = $_POST['sa'];
		$inputs=array("id"=>$id,"Username"=>$username,"Email"=>$email,"Password"=>$password,"Isadmin"=>$Isadmin,"Isactive"=>$Isactive,"Sq"=>$sq,"Sa"=>$sa);
		$errors=validateAll($inputs);
		if(empty($errors)){
			if($Isadmin == 2)$Isadmin =0; 
			if($Isactive == 2)$Isactive =0; 
			$user = new UsersLogin();
			$user->updateUser($id,$username,$email,$password,$Isadmin,$Isactive,$sq,$sa);
			echo "User Updated";
		}else{
			$err = "Please fill form properly";
			echo $err;
		}
		
	
	}
?>