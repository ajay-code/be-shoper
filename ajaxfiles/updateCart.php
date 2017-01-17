<?php require_once('../includes/classes/Products.php');
		$output="";
		$id = $_POST['id'];
		$qty = $_POST['qty'];
		$_SESSION['ct_cart'][$id]['quantity']=$qty;
		echo "1";
?>