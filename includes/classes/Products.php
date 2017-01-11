<?php
	require_once('connection.php');
	class Products{
		public function insertproduct($sub_cat_id,$productname,$description,$picture,$price,$discount,$rating,$instock){
			$query ="INSERT INTO products(sub_cat_id,productname,description,picture,price,discount,rating,instock) VALUES ({$sub_cat_id},'{$productname}','{$description}','{$picture}',{$price},{$discount},{$rating},{$instock})";
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		public function updateproduct($id,$sub_cat_id,$productname,$description,$picture,$price,$discount,$rating,$instock){
			$query ="UPDATE products SET sub_cat_id={$sub_cat_id},productname='{$productname}',description='{$description}',picture='{$picture}',price={$price},discount={$discount},rating={$rating},instock={$instock} WHERE id = ".$id;
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}	
	
		public function fetchAllcategory(){
			$query ="SELECT id,SubCategoryName FROM subcategory WHERE isactive = 1";
			$connect = new Connection();
			$result=$connect->runQuery($query);
			$connect->close_connection();
			return $result;
		}
		public function fetchAll(){
			$query = "SELECT id,sub_cat_id,productname,description,picture,price,discount,rating,instock FROM products";
			//echo ($query);
			$connect= new Connection();
			$res =$connect->runQuery($query);
			$connect->close_connection();
			return $res;
		}
		public function fetchproduct($id){
			$query = "SELECT id,picture,price,productname FROM products WHERE sub_cat_id = ".$id;
			//echo ($query);
			$connect= new Connection();
			$res =$connect->runQuery($query);
			$connect->close_connection();
			return $res;
		}
		public function fetchpics(){
			$query = "SELECT id,picture,price,productname FROM products order by id desc limit 8";
			//echo ($query);
			$connect= new Connection();
			$res =$connect->runQuery($query);
			$connect->close_connection();
			return $res;
		}
		public function fetchproductdetail($id){
			$query = "SELECT id,productname,description,picture,price,discount,rating FROM products WHERE id = ".$id;
			//echo ($query);
			$connect= new Connection();
			$res =$connect->runQuery($query);
			$connect->close_connection();
			return $res;
		}
		public function fetchproductid($productname){
			$query = "SELECT id,productname,description,picture,price,discount,rating FROM products WHERE productname = '".$productname."'";
			//echo ($query);
			$connect= new Connection();
			$res =$connect->runQuery($query);
			$connect->close_connection();
			return $res;
		}
		
	}
?>