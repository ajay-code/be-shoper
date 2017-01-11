<?php
	require_once('../includes/classes/Category.php');
	require_once('../includes/functions.php');
	$err="";
	if(!isset($_POST['p_tk_en']) || $_SESSION['token'] != $_POST['p_tk_en']){
	echo '-1';
	exit;
	}
	if(isset($_POST['categoryname'])){
		$id = $_POST['id'];
		$categoryname = $_POST['categoryname'];
		$Isactive = $_POST['Isactive'];
		$inputs=array("Id"=>$id,"categoryname"=>$categoryname,"Isactive"=>$Isactive);
		$errors=validateAll($inputs);
		if(empty($errors)){
			if($Isactive == 2)$Isactive =0;
			$users = new category();
			$users->updateCategory($id,$categoryname,$Isactive);
			echo "Category Updated";
		}
		else{
			$err = "Please fill form Properly";
			echo $err;
		}
	}
?>