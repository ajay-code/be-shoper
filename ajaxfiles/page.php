<?php 
require_once('../includes/classes/Pages.php');
	require_once('../includes/functions.php');
$obj = new Pages();
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
		$output.= "<option active='{$row['Isactive']}'  value='{$row['id']}' title='{$row['title']}' desc='{$row['description']}' menuid='{$row['menu_id']}'>{$row['p_name']} </option>";
	}
}
echo $output;

?>