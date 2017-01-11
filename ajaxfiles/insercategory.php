<?php 
	require_once('../includes/classes/category.php');
	require_once('../includes/functions.php');
	$err="";
	if(isset($_POST['catname'])){
		$catname=$_POST['catname'];
		$isactive=$_POST['isactive'];
		$cat = new category();
		$res=$cat->checkCategory($catname);
		//echo $res['categoryname'];
		if(isset($res['categoryname'])){
			echo"0";
		}else{
			$catname = escapeString(htmlChars($_POST['catname']));
			$isactive = htmlChars($isactive);
			$inputs = array("catname"=>$catname,"isactive"=>$isactive);
			$error = validateAll($inputs);
		if(empty($errors)){
			if($isactive == 2) $isactive =0;
			$cat->insertCategory($catname,$isactive);
			echo "category Inserted";
		}else{
			$err = "Please fill form properly";
			echo $err;
		}
		}
		
	}
?>