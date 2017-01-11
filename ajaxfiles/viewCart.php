<?php require_once('../includes/classes/products.php');
		$output="";
if(isset($_SESSION['ct_cart'])){
		foreach($_SESSION['ct_cart'] as $item){
		$prod= new Products();
		//print_r($item);
		$res = $prod->fetchproductdetail($item['id']);
		while($row = mysqli_fetch_assoc($res)){
		$output.="<div class='product'>
				<div class='product_pic'>
					<img src='uploads/products/{$row['picture']}' class='pic_pro' />
				</div>
				<div class='pro_info'>
					{$row['productname']}
				</div>
				<div class='quantity'>Quantity:
					<input type='text' readonly name='qty' id='qty{$item['id']}' value='".$item['quantity']."' onclick='updatecart({$item['id']})'/>
					<div id='fillsave{$item['id']}' class='save' style='display:none' onclick='updateqty({$item['id']})'>save</div>
				</div>
				<div class='price'>
					<div class='amount'>{$row['price']}</div>
				</div>
			</div>";
		}
}
echo $output.="<div style='width:100%;clear:both;'></div>";
}else{
	echo $output.="<div class='show'> No Product Selected</div>";
}
?>