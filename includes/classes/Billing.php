<?php
	require_once('connection.php');
	class Billing{
		public function insertBilling($firstname,$lastname,$email,$address,$phone,$userid,$pin,$state,$city,$country,$oid){
			$query ="INSERT INTO billing(firstname,lastname,email,address,phone,userid,pin,state,city,country,oid) VALUES ('{$firstname}','{$lastname}','{$email}','{$address}','{$phone}',{$userid},{$pin},'{$state}','{$city}','{$country}',{$oid})";
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		public function update($id,$firstname,$lastname,$address,$city,$state,$zipcode,$country,$phone,$email){
			$query ="UPDATE billinginformation SET firstname='{$firstname}',lastname='{$lastname}',address='{$address}',city='{$city}',state='{$state}',zipcode={$zipcode},country='{$country}',phone={$phone},email='{$email}' WHERE id = ".id;
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}	
	}	
?>