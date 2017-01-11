<?php 
	require_once('Connection.php');
	class Login{
		public function checklogin($email,$password){
			$query = "SELECT id,username,email,password,isactive,isadmin FROM `usersaccount` WHERE email='".$email."' and password='".$password."'";
		//	echo $query;
			$connect = new Connection();
			$result=$connect->runQuery($query);
			$connect->close_connection();
			return $result;
		}
		
	}

?>

