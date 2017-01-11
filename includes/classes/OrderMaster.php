<?php
	require_once('connection.php');
	class Order{
		public function insertorder($userid,$qty,$total){
			$query ="INSERT INTO ordermaster(userid,qty,orderdate,status,total,processed) VALUES ({$userid},{$qty},NOW(),'pending',{$total},0)";
			$connect = new Connection();
			$connect->runQuery($query);
			$id = $connect->getId();
			$connect->close_connection();
			return $id;
		}
		public function updateorder($orderid,$userid,$ordernumber,$orderdate,$orderquantity){
			$query ="UPDATE ordermaster SET userid={$userid},ordernumber={$ordernumber},orderdate={$orderdate},orderquantity={$orderquantity} WHERE id = ".$orderid;
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}	
		public function fetchAllOrders(){
			$query ="SELECT id,`status`,CONCAT('ORD',id) AS OrderId,mop,Total,OrderDate FROM ordermaster";
			$connect = new Connection();
			$res = $connect->runQuery($query);
			$connect->close_connection();
			return $res;
		}
	}	
?>