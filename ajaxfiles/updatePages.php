<?php 
	require_once('../includes/classes/Pages.php');
	require_once('../includes/functions.php');
	$err="";
	if(!isset($_POST['p_tk_en']) || $_SESSION['token'] != $_POST['p_tk_en']){
	echo '-1';
	exit;
	}
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		echo ($id);
		$menuid = $_POST['menuid'];
		$title = $_POST['title'];
		$p_name = $_POST['p_name'];
		$description = $_POST['description'];
		$Isactive = $_POST['Isactive'];
		$inputs=array("id"=>$id,"MenuId"=>$menuid,"Title"=>$title,"P_name"=>$p_name,"Description"=>$description,"Isactive"=>$Isactive);
		$errors=validateAll($inputs);
		if(empty($errors)){
			if($Isactive == 2)$Isactive =0; 
			$user = new Pages();
			$user->updatePage($id,$menuid,$title,$p_name,$description,$Isactive);
			echo "User Updated";
		}else{
			$err = "Please fill form properly";
			echo $err;
		}
		
	
	}
?>