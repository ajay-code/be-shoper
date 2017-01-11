<?php 
	require_once('connection.php');
	class UsersLogin{
		public function insertUser($username,$email,$password,$Isadmin,$Isactive,$security_question,$security_answer){
			$query ="INSERT INTO usersaccount(username,email,password,Isadmin,Isactive,securityquestion,securityanswer,regdate) VALUES ('{$username}','{$email}','{$password}',{$Isadmin},{$Isactive},'{$security_question}','{$security_answer}',NOW())";
			//echo ($query);
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		
		public function updateUser($id,$username,$email,$password,$Isadmin,$Isactive,$security_question,$security_answer){
			$query ="UPDATE usersaccount SET username='{$username}',email='{$email}',password='{$password}',Isadmin={$Isadmin},Isactive={$Isactive},securityquestion='{$security_question}',securityanswer='{$security_answer}' WHERE id = ".$id;
			//echo ($query);
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		
		//Check User by Email
		public function checkUserByEmail($email){
			$query ="SELECT id,username,email,securityquestion,securityanswer,isactive,isadmin FROM usersaccount WHERE email='{$email}'";
			$connect = new Connection();
			$result=$connect->runQuery($query);
			$result= $connect->fetchArray($result);
			$connect->close_connection();
			return $result;
		}
		
	}
?>