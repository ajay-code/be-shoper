<?php 
	require_once('../includes/classes/Pages.php');
	require_once('../includes/functions.php');
	$err="";
	if(!isset($_POST['p_tk_en']) || $_SESSION['token'] != $_POST['p_tk_en']){
	echo '-1';
	exit;
	}
	if(isset($_POST['menuid'])){
		$menuid = $_POST['menuid'];
		//echo ($menuid);
		$title = $_POST['title'];
		$p_name = $_POST['p_name'];
		$description = $_POST['description'];
		$Isactive = $_POST['Isactive'];
		$inputs=array("MenuId"=>$menuid,"Title"=>$title,"P_name"=>$p_name,"Description"=>$description,"Isactive"=>$Isactive);
		$errors=validateAll($inputs);
		if(empty($errors)){
			$obj = new Pages();
			$obj->insertPage($menuid,$title,$p_name,$description,$Isactive);
			echo "Page Inserted";
		}else{
			$err = displayErrors($errors);
			echo $err;
		}
	}
?>