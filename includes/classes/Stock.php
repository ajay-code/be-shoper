<?php 
	require_once('connection.php');
	class Stock{
		public function insertStock($qty,$prod_id){
			$query ="INSERT INTO stock (quantity,productid) VALUES({$qty},{$prod_id})";
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		public function updateStock($qty,$prodId){
			$query = "UPDATE stock SET quantity = {$qty} WHERE productid = {$prodId}";
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
	}
?>