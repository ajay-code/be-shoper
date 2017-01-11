<?php 
	require_once('connection.php');
	class UsersComments{
		public function insertUser($name,$date,$content){
			$query ="INSERT INTO comments(name,date,content) VALUES ('{$name}',{$date},{$content})";
			echo ($query);
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		
		public function updateUser($id,$name,$date,$content){
			$query ="UPDATE comments SET name='{$name}',date={$date},content={$content} WHERE id = ".$id;
			echo ($query);
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		public function fetchAllUsers(){
			$query ="SELECT id,name,product_id,date,content,user_id FROM comments";
			$connect = new Connection();
			$res = $connect->runQuery($query);
			$connect->close_connection();
			return $res;
		}
		}
?>
	