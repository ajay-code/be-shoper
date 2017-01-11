<?php 
require_once('../includes/classes/Products.php');
require_once('../includes/functions.php');
$obj = new Products();
$output="";
if(isset($_POST['active']) && $_POST['active'] == 0) $res=$obj->fetchAll();
else if(isset($_POST['active']) && $_POST['active'] == 1) $res=$obj->fetchAllActive();
else { echo "Try again"; exit;}
if(isset($_POST['wc']) && $_POST['wc'] == "div"){
		while($row=mysqli_fetch_assoc($res)){
		$output.= "<div class='cats'>{$row['p_name']}</div>";
	}
}else{
	while($row=mysqli_fetch_assoc($res)){
		$output.= "<option sub_cat_id='{$row['sub_cat_id']}' value='{$row['id']}' description='{$row['description']}' picture='{$row['picture']}' price='{$row['price']}' discount='{$row['discount']}' rating='{$row['rating']}' instock='{$row['instock']}'>{$row['productname']} </option>";
	}
}
echo $output;

?>