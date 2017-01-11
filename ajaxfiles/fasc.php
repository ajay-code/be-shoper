<?php  require_once('../includes/classes/SubCategory.php');
require_once('../includes/functions.php');
$sub = new SubCategory();
$output="";
if(isset($_POST['active']) && $_POST['active'] == 0) $res=$sub->fetchAllSubCat();
else if(isset($_POST['active']) && $_POST['active'] == 1) $res=$sub->fetchAllActive();
else { echo "Try again"; exit;}
$output="";
if(isset($_POST['wc']) && $_POST['wc'] == "div"){
		while($row=mysqli_fetch_assoc($res)){
		$output.= "<div class='cats'>{$row['subcategory']}</div>";
	}
}else{
	while($row=mysqli_fetch_assoc($res)){
		$output.= "<option active='{$row['isactive']}' value='{$row['id']}' catid={$row['categoryid']} subcategory='{$row['subcategoryname']}' >{$row['subcategoryname']}</option>";
	}
}

echo $output;
?>