<?php 
	require_once('../includes/classes/Products.php');
	require_once('../includes/functions.php');
	$err="";
	if(!isset($_POST['p_tk_en']) || $_SESSION['token'] != $_POST['p_tk_en']){
	echo '-1';
	exit;
	}
	if(isset($_POST['sub_cat_id'])){
		$sub_cat_id = $_POST['sub_cat_id'];
		$productname = $_POST['productname'];
		$description = $_POST['description'];
		$picture = $_POST['picture'];
		$price = $_POST['price'];
		$discount = $_POST['discount'];
		$rating = $_POST['rating'];
		$instock = $_POST['instock'];
		$inputs=array("sub_cat_id"=>$sub_cat_id,"productname"=>$productname,"description"=>$description,"picture"=>$picture,"price"=>$price,"discount"=>$discount,"rating"=>$rating,"instock"=>$instock);
		$errors=validateAll($inputs);
		if(empty($errors)){
			$obj = new Products();
			$obj->insertproduct($sub_cat_id,$productname,$description,$picture,$price,$discount,$rating,$instock);
			echo "ProductInserted";
		}else{
			$err = displayErrors($errors);
			echo $err;
		}
	}
?>