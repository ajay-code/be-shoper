<?php
	require_once('connection.php');
	class OrderDetail{
		public function insertorder($oid,$productid,$price,$qty,$discount,$total){
			$query ="INSERT INTO orderdetail(oid,productid,price,qty,discount,total) VALUES ({$ordernumber},{$productid},{$quantity},{$price},{$discount},{$total})";
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}	
		public function insertOrderMain($query){
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		public function updateorder($ordernumber,$productid,$quantity,$price,$discount,$total){
			$query ="UPDATE orderdetail SET ordernumber={$ordernumber},productid={$productid},quantity={$quantity},price={$price},discount={$discount},total={$total} WHERE id = ".$orderid;
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}	
	}	
?>