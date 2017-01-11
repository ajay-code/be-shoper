<?php 
	require_once('../includes/classes/UsersMenu.php');
	require_once('../includes/functions.php');
	$err="";
	if(!isset($_POST['p_tk_en']) || $_SESSION['token'] != $_POST['p_tk_en']){
	echo '-1';
	exit;
	}
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		//echo ($id);
		$name = $_POST['name'];
		$Isactive = $_POST['Isactive'];
		$inputs=array("id"=>$id,"MenuName"=>$name,"Isactive"=>$Isactive);
		$errors=validateAll($inputs);
		if(empty($errors)){
			if($Isactive == 2)$Isactive =0; 
			$user = new UsersMenu();
			$user->updateMenu($id,$name,$Isactive);
			echo "Menu Updated";
		}else{
			$err = "Please fill form properly";
			echo $err;
		}
		
	
	}
?>