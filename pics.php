<?php
require_once('includes/classes/Products.php');
require_once('includes/functions.php');
$output="";

$obj = new Products();
$res=$obj->fetchpics();
while($row=mysqli_fetch_assoc($res))
{
	$output.= "<div class='picture wid'><img src='uploads/products/{$row['picture']}' alt='product description'/>
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


?>