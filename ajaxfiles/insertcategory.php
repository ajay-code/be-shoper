<?php 
	require_once('../includes/classes/category.php');
	require_once('../includes/functions.php');
	$err="";
	if(!isset($_POST['p_tk_en']) || $_SESSION['token'] != $_POST['p_tk_en']){
	echo '-1';
	exit;
	}
	if(isset($_POST['categoryname'])){
		$categoryname=$_POST['categoryname'];
		$Isactive=$_POST['Isactive'];
		$cat = new category();
		$res=$cat->checkCategory($categoryname);
		//echo $res['categoryname'];
		if(isset($res['categoryname'])){
			echo"0";
		}else{
			$categoryname = escapeString(htmlChars($_POST['categoryname']));
			$Isactive = htmlChars($Isactive);
			$inputs = array("categoryname"=>$categoryname,"Isactive"=>$Isactive);
			$error = validateAll($inputs);
		if(empty($errors)){
			if($Isactive == 2) $Isactive =0;
			$cat->insertCategory($categoryname,$Isactive);
			echo "Category Inserted";
		}else{
			$err = "Please fill form properly";
			echo $err;
		}
		}
		
	}
?>