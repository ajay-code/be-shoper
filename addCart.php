<?php
	session_start();
		if(isset($_POST['submit'])){
		if(isset($_POST['qty']) && isset($_POST['pid'])){
			$qty = is_numeric($_POST['qty']) ? $_POST['qty']:0;
			//echo $qty;
			$id = is_numeric($_POST['pid']) ? $_POST['pid']:0;
			//echo $id;
			$price = is_numeric($_POST['price']) ? $_POST['price']:0;
			if($qty <0 || $id <0){ 
				echo "Please Refresh your page";
				exit;
			}
			if ($qty == 0){
			 echo "Please select quantity of product";
			}
			else{
			if(isset($_SESSION['ct_cart'][$id])){
                 $_SESSION['ct_cart'][$id]['quantity']=$qty;
            }else{
				$_SESSION['ct_cart'][$id]=array(
				"quantity"=>$qty,
				"price"=>$price,
				"id"=>$id,
				);
			}
			header('location:index.php');
			exit;
		}
		        }
		}
?>