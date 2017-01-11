<?php 
	require_once('connection.php');
	class SubCategory{
		public function insertsubcategory($subcategory,$isactive,$categoryid){
			$query ="INSERT INTO subcategory (CategoryId,SubCategoryName,isactive) VALUES({$categoryid},'{$subcategory}',{$isactive})";
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		public function updateSubCategory($categoryname,$subcategory,$isactive){
			$query="UPDATE subcategory SET categoryname=({$categoryname}),subcategory=({$subcategory}), isactive=({$isactive}) ";
			//echo $query;
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		public function checkSubCategory($subcategory){
			$query ="SELECT id,subcategoryname,isactive FROM subcategory where subcategoryname='{$subcategory}'";
			//echo $query;
			$connect = new Connection();
			$result=$connect->runQuery($query);
			$result= $connect->fetchArray($result);
			$connect->close_connection();
			return $result;
		}
		public function fetchAllSubCat(){
			$query ="SELECT id,categoryid,subcategoryname,isactive FROM subcategory ";
			//echo $query;
			$connect = new Connection();
			$result=$connect->runQuery($query);
			$connect->close_connection();
			return $result;
		}
		public function fetchAllActiveSubCat($id){
			$query ="SELECT id,categoryid,subcategoryname FROM subcategory  where categoryid=".$id." and isactive =1";
			//echo $query;
			$connect = new Connection();
			$result=$connect->runQuery($query);
			$connect->close_connection();
			return $result;
		}
	}
	

 ?>