<?php
require_once('includes/classes/Products.php');
require_once('includes/functions.php');
$output="";
if(isset($_POST['id'])){
$id = $_POST['id'];
$obj = new Products();
$res=$obj->fetchproduct($id);
while($row=mysqli_fetch_assoc($res))
{
	$output.= "<div class='picture' id='{$row['id']}'><img src='uploads/products/{$row['picture']}' alt='product description'/>
				<div class='top_description'>
					{$row['productname']}
				</div>
				<div class='bottom_description' onclick='product({$row['id']})'>
					<span>Veiw Details</span>
					<span>Rs {$row['price']}</span>
				</div>
	</div>";
}
echo $output;

}
?>