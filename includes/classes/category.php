<?php
	require_once('connection.php');
	class category{
		public function insertCategory($categoryname,$Isactive){
			$query ="INSERT INTO category (categoryname,Isactive) VALUES('{$categoryname}',{$Isactive})";
			//echo $query;
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		public function updateCategory($id,$categoryname,$Isactive){
			$query="UPDATE category SET categoryname=('{$categoryname}'), isactive=({$Isactive}) WHERE id = {$id}";
			//echo $query;
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		public function fetchAllActive(){
			$query = "SELECT id,categoryname FROM category WHERE isactive =True";
			//echo "<script>alert({$query});</script>";
			$connect= new Connection();
			$res =$connect->runQuery($query);
			$connect->close_connection();
			return $res;
		}
		public function fetchAll(){
			$query = "SELECT id,categoryname,isactive FROM category";
			//echo "<script>alert({$query});</script>";
			$connect= new Connection();
			$res =$connect->runQuery($query);
			$connect->close_connection();
			return $res;
		}
		public function checkCategory($categoryname){
			$query ="SELECT id,categoryname,Isactive FROM category where categoryname='{$categoryname}'";
			//echo $query;
			$connect = new Connection();
			$result=$connect->runQuery($query);
			$result= $connect->fetchArray($result);
			$connect->close_connection();
			return $result;
		}

}
 ?>
