<?php  require_once('../includes/classes/category.php');
		require_once('../includes/classes/SubCategory.php');

$sub = new Category();
if(isset($_POST['active']) && $_POST['active'] == 0) $res=$sub->fetchAll();
else if(isset($_POST['active']) && $_POST['active'] == 1) $res=$sub->fetchAllActive();
//else if(isset($_POST['active']) && $_POST['active'] == 1) $res=$sub->fetchsubcat();
else { echo "Try again"; exit;}
$output="";
if(isset($_POST['wc']) && $_POST['wc'] == "div"){
		while($row=mysqli_fetch_assoc($res)){
		$output.= "<div class='cats' id='cat{$row['id']}'>{$row['categoryname']}
				<div class='cat_subcat'>";
				   $sub2 = new SubCategory();
				   $res2 = $sub2->fetchAllActiveSubCat($row['id']);
				   while($rw= mysqli_fetch_assoc($res2)){
						$output.= "<div id='{$rw['id']}' onclick='subcat({$rw['id']})' ><div class='subcategories'><div class='out_container'><div class='out'></div></div>{$rw['subcategoryname']}</div>
						</div>";
				   }

		$output.="</div>";



		$output.="</div>";
	}
}else{
	while($row=mysqli_fetch_assoc($res)){
		$output.= "<option title='{$row['isactive']}' value='{$row['id']}'>{$row['categoryname']}</option>";
	}
}

echo $output;
?>
