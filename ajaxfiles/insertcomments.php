<?php 
	require_once('../includes/classes/UsersComments.php');
	require_once('../includes/functions.php');
	$err="";
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$product_id = $_POST['product_id'];
		$date = $_POST['date'];
		$content = $_POST['content'];
		$user_id = $_POST['user_id'];
		$Isactive = $_POST['Isactive'];
		$inputs=array("Name"=>$name,"Product_id"=>$product_id,"Date"=>$date,"Content"=>$content,"User_id"=>$user_id,"Isactive"=>$Isactive);
		$errors=validateAll($inputs);
		if(empty($errors)){
			$obj = new UsersComments();
			$obj->insertUser($name,$product_id,$date,$content,$user_id,$Isactive);
			echo "comment Inserted";
		}else{
			$err = displayErrors($errors);
			echo $err;
		}
	}
?>