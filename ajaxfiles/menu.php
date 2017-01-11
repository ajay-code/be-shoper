<?php 
require_once('../includes/classes/UsersMenu.php');
	require_once('../includes/functions.php');
$obj = new UsersMenu();
$output="";
if(isset($_POST['active']) && $_POST['active'] == 0) $res=$obj->fetchAll();
else if(isset($_POST['active']) && $_POST['active'] == 1) $res=$obj->fetchAllActive();
else { echo "Try again"; exit;}
if(isset($_POST['wc']) && $_POST['wc'] == "div"){
		while($row=mysqli_fetch_assoc($res)){
		$output.= "<div class='cats'>{$row['MenuName']}</div>";
	}
}else{
	while($row=mysqli_fetch_assoc($res)){
		$output.= "<option title='{$row['isactive']}' value='{$row['id']}'>{$row['MenuName']}</option>";
	}
}
echo $output;

?>