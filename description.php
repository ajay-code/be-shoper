<?php
require_once('includes/classes/Products.php');
require_once('includes/functions.php');
$output="";
if(isset($_POST['id'])){
$id = $_POST['id'];
$obj = new Products();
$res=$obj->fetchproductdetail($id);
while($row=mysqli_fetch_assoc($res))
{
	$output.= "	<form action='addCart.php' method='post'>
				<input type='hidden' value='' id='p_tk_en'/>
				<input type='hidden' value='{$row['id']}' id='pid' name='pid'/>
				<div class='pict' id='{$row['id']}'><img src='uploads/products/{$row['picture']}' alt='product description'/>
				<select class='buy' id='qty' name='qty'>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
						<option value='5'>5</option>
						</select>
				<input type='submit' id='submit' name='submit' value='Add to cart' class='buy'/>
		          		
				</div>
				<div class='description'>
					<div class='desc_row newbg'>PRODUCT DETAILS
					</div>
					<div class='desc_row1'><div class='desc_text'>Product Name:</div>
						<div class='desc_text'>{$row['productname']}</div>
					</div>
					<div class='desc_row1'><div class='desc_text'>Description:</div>
						<div class='desc_text'>";
						$desc=explode(",",$row['description']);
						foreach($desc as $detail){
							$output.= $detail."<br/>";
						}
				$output.="</div>
					</div>
					<div class='desc_row1'><div class='desc_text'>Price:</div>
						<div class='desc_text'>Rs {$row['price']}</div>
						<input type='hidden' value='{$row['price']}' name='price'/>
					</div>
					<div class='desc_row1'><div class='desc_text'>Discount:</div>
						<div class='desc_text'>{$row['discount']}</div>
					</div>
					<div class='desc_row1'><div class='desc_text'>Rating:</div>
						<div class='desc_text'>{$row['rating']}</div>
					</div>
				</div>
				</form>
				";
}
echo $output;

}
?>