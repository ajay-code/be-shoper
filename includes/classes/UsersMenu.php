<?php 
	require_once('Connection.php');
	class UsersMenu{
		public function insertUser($name,$Isactive){
			$query ="INSERT INTO menu (MenuName,Isactive) VALUES ('{$name}',{$Isactive})";
			//echo ($query);
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		
		public function updateMenu($id,$name,$Isactive){
			$query ="UPDATE menu SET MenuName='{$name}',Isactive={$Isactive} WHERE id = ".$id;
			//echo ($query);
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		public function fetchAll(){
			$query = "SELECT id,MenuName,isactive FROM menu";
			//echo "<script>alert({$query});</script>";
			$connect= new Connection();
			$res =$connect->runQuery($query);
			$connect->close_connection();
			return $res;
		}
		
	}
?>