<?php 
	require_once('connection.php');
	class Pages{
		public function fetchAllMenu(){
			$query ="SELECT id,MenuName FROM menu WHERE isActive = 1";
			$connect = new Connection();
			$result=$connect->runQuery($query);
			$connect->close_connection();
			return $result;
		}
		public function insertPage($menuid,$title,$p_name,$description,$Isactive){
			$query ="INSERT INTO pages(menu_id,title,p_name,description,Isactive) VALUES ({$menuid},'{$title}','{$p_name}','{$description}',{$Isactive})";
			//echo ($query);
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		public function updatePage($id,$menuid,$title,$p_name,$description,$Isactive){
			$query ="UPDATE pages SET menu_id={$menuid},title='{$title}',p_name='{$p_name}',description='{$description}',Isactive={$Isactive} WHERE id = ".$id;
			//echo ($query);
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		public function fetchAll(){
			$query = "SELECT id,menu_id,title,p_name,description,Isactive FROM pages";
			echo ($query);
			$connect= new Connection();
			$res =$connect->runQuery($query);
			$connect->close_connection();
			return $res;
		}
	}
?>