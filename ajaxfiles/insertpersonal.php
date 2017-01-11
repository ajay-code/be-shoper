<?php 
	require_once('../includes/classes/UsersPersonal.php');
	require_once('../includes/functions.php');
	$err="";
	if(!isset($_POST['p_tk_en']) || $_SESSION['token'] != $_POST['p_tk_en']){
	echo '-1';
	exit;
	}
	if(isset($_POST['personalemail'])){
		$personalemail = htmlChars($_POST['personalemail']);
		$firstname = escapeString(htmlChars($_POST['firstname']));
		$lastname = escapeString(htmlChars($_POST['lastname']));
		$phone = escapeString(htmlChars($_POST['phone']));
		$address = escapeString(htmlChars($_POST['address']));
		$state = escapeString(htmlChars($_POST['state']));
		$city = escapeString(htmlChars($_POST['city']));
		$country = escapeString(htmlChars($_POST['country']));
		$dob = escapeString(htmlChars($_POST['dob']));
		$gender = htmlChars($_POST['gender']);
		$inputs=array("Personalemail"=>$personalemail,"Firstname"=>$firstname,"Lastname"=>$lastname,"Phone"=>$phone,"Address"=>$address,"State"=>$state,"City"=>$city,"Country"=>$country,"Dob"=>$dob,"Gender"=>$gender);
		$errors=validateAll($inputs);
		if(empty($errors)){
			$obj = new UsersPersonal();
			$obj->insertUser($personalemail,$firstname,$lastname,$phone,$address,$state,$city,$country,$dob,$gender);
			echo "User Inserted";
		}else{
			$err = displayErrors($errors);
			echo $err;
		}
	}
?>