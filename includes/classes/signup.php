<?php 
	require_once('connection.php');
	class SignUp{
		public function signup($email,$password){
			$query ="INSERT INTO signup(email,password) VALUES ('{$email}','{$password}')";
			echo ($query);
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		}
?>