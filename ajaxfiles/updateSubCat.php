<?php
	require_once('../includes/classes/SubCategory.php');
	require_once('../includes/functions.php');
	$err="";
	if(isset($_POST['subcategory'])){
		$id = $_POST['id'];
		$categoryId = $_POST['categoryId'];
		$subcategory = $_POST['subcategory'];
		$Isactive = $_POST['Isactive'];
		$inputs=array("id"=>$id,"categoryId"=>$categoryId,"subcategory"=>$subcategory,"Isactive"=>$Isactive);
		//echo $inputs;
		$errors=validateAll($inputs);
		if(empty($errors)){
			if($Isactive == 2)$Isactive =0;
			$SubCat = new SubCategory();
			$SubCat->updateSubCategory($id,$categoryId,$subcategory,$Isactive);
			echo "SubCategory Updated";
		}
		else{
			$err = "there is error in form";
			echo $err;
		}
	}
?>