<?php 
	require_once('../includes/classes/UsersMenu.php');
	require_once('../includes/functions.php');
	$err="";
	if(!isset($_POST['p_tk_en']) || $_SESSION['token'] != $_POST['p_tk_en']){
	echo '-1';
	exit;
	}
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$Isactive = $_POST['Isactive'];
		$inputs=array("Name"=>$name,"Isactive"=>$Isactive);
		$errors=validateAll($inputs);
		if(empty($errors)){
			$obj = new UsersMenu();
			$obj->insertUser($name,$Isactive);
			echo "Menu Inserted";
		}else{
			$err = displayErrors($errors);
			echo $err;
		}
	}
?>