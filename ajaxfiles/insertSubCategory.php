<?php 
	require_once('../includes/classes/category.php');
	require_once('../includes/functions.php');
	$err="";
	if(isset($_POST['categoryname'])){
		$categoryname=$_POST['categoryname'];
		$subcategoryname=$_POST['subcategoryname'];
		$Isactive=$_POST['Isactive'];
		$subcat = new SubCategory();
		$res=$subcat->checkSubCategory($subcategoryname);
		//echo $res['categoryname'];
		if(isset($res['subcategoryname'])){
			echo"0";
		}else{
			$categoryname = escapeString(htmlChars($_POST['categoryname']));
			$subcategoryname = escapeString(htmlChars($_POST['subcategoryname']));
			$Isactive = htmlChars($Isactive);
			$inputs = array("categoryname"=>$categoryname,"subcategoryname"=>$subcategoryname,"Isactive"=>$Isactive);
			$error = validateAll($inputs);
		if(empty($errors)){
			if($Isactive == 2) $Isactive =0;
			$cat->insertSubCategory($categoryname,$subcategoryname,$Isactive);
			echo "SubCategory Inserted";
		}else{
			$err = "Please fill form properly";
			echo $err;
		}
		}
		
	}
?>