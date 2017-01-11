<?php
	require_once('../includes/classes/SubCategory.php');
	require_once('../includes/functions.php');
	$err="";
	if(!isset($_POST['p_tk_en']) || $_SESSION['token'] != $_POST['p_tk_en']){
	echo '-1';
	exit;
	}
	if(isset($_POST['subcategory']))
	{
		$categoryId = $_POST['categoryId'];
		$SubCategory = $_POST['subcategory'];
		$isactive = $_POST['Isactive'];
		
		
		$Sub= new subcategory();
		$res = $Sub->checkSubCategory($SubCategory);
		//echo $res['SubCategoryName'];
		
		if(isset($res['SubCategoryName']))
		{
			echo "0";
		}
		else
		{
			$subcategory = escapeString(htmlChars($_POST['subcategory']));
			$isactive = htmlChars($isactive);
			$inputs = array("categoryname"=>$categoryId,"SubCategory Name"=>$SubCategory,"isactive"=>$isactive);
			$error = validateAll($inputs);
		}
		if(empty($error))
		{
			if($isactive == 2) $isactive = 0;
			$Sub->insertsubcategory($subcategory,$isactive,$categoryId);
			echo "SubCategory INSERTED";
		}
		else
		{
			$err = "Please fill form properly";
			echo $err;
		}
	}
?>