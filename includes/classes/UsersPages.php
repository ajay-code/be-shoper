<?php 
	require_once('connection.php');
	class UsersPages{
		public function insertUser($title,$page_name,$description,$Isactive){
			$query ="INSERT INTO comments(title,page_name,description,Isactive) VALUES ('{$title}','{$page_name}',{$description},{$Isactive})";
			echo ($query);
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		public function updateUser($id,$title,$Page_name,$description,$Isactive){
			$query ="UPDATE comments SET title='{$title}',page_name='{$page_name}',description={$description},Isactive={$Isactive} WHERE id = ".$id;
			echo ($query);
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		
		
	}
?>