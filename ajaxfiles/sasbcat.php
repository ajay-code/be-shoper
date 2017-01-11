<?php
	require_once('../includes/classes/SubCategory.php');
	$id= $_GET["id"];
	if($id != ""){
		$subcat = new SubCategory();
		$res=$subcat->fetchAllActiveSubCat($id);
		$output="";
		$output = "<div class='cat_subcat' >";
		while($row =mysqli_fetch_assoc($res)){
			$output.="<p>{$row['subcategoryname']}</p>";
		}
		$output.="</div>";
		echo $output;
	}
?>