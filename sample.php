<?php 
session_start();
$_SESSION['ct_cart'][4]=array(
				"quantity"=>5,
				"price"=>1000
				);
				
echo "<pre>";
				print_r($_SESSION['ct_cart']);
echo "</pre>";

foreach($_SESSION['ct_cart'] as $item){
	echo "<br/>";
	print_r($item);
}
				
?>