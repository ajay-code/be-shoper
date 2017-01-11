<?php 
	require_once('connection.php');
	class UsersPersonal{
		public function insertUser($personalemail,$firstname,$lastname,$phone,$address,$state,$city,$country,$dob,$gender){
			$query ="INSERT INTO userspersonal(personalemail,firstname,lastname,phone,address,state,city,country,dob,gender) VALUES ('{$personalemail}','{$firstname}','{$lastname}',{$phone},'{$address}','{$state}','{$city}','{$country}',{$dob},'{$gender}')";
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		
		public function updateUser($id,$personalemail,$firstname,$lastname,$phone,$address,$state,$city,$country,$dob,$gender){
			$query ="UPDATE userspersonal SET personalemail='{$personalemail}',firstname='{$firstname}',lastname='{$lastname}',phone={$phone},address='{$address}',state='{$state}',city='{$city}',country='{$country}',dob={$dob},gender='{$gender}' WHERE id = ".$id;
			//echo ($query);
			$connect = new Connection();
			$connect->runQuery($query);
			$connect->close_connection();
			return 1;
		}
		
	public function checkUserByEmail($personalemail){
			$query ="SELECT id,personalemail,firstname,lastname,phone,address,state,city,country,dob,gender FROM userspersonal WHERE personalemail='{$personalemail}'";
			//echo ($query);
			$connect = new Connection();
			$result=$connect->runQuery($query);
			$result= $connect->fetchArray($result);
			$connect->close_connection();
			return $result;
		}
		
	}
	
?>