<?php 
	require_once('../includes/classes/UsersPersonal.php');
	require_once('../includes/functions.php');
	$err="";
	if(!isset($_POST['p_tk_en']) || $_SESSION['token'] != $_POST['p_tk_en']){
	echo '-1';
	exit;
	}
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$personalemail = $_POST['personalemail'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$inputs=array("id"=>$id,"Firstname"=>$firstname,"Lastname"=>$lastname,"personalemail"=>$personalemail,"Phone"=>$phone,"Address"=>$address,"State"=>$state,"City"=>$city,"Country"=>$country,"Dob"=>$dob,"Gender"=>$gender);
		$errors=validateAll($inputs);
		if(empty($errors)){
			$user = new UsersPersonal();
			$user->updateUser($id,$personalemail,$firstname,$lastname,$phone,$address,$state,$city,$country,$dob,$gender);
			echo "User Updated";
		}else{
			$err = "Please fill form properly";
			echo $err;
		}
	}
?>