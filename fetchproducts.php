<?php
require_once('includes/classes/Products.php');

if(isset($_POST['id'])){

$id = $_POST['id'];

$obj = new Products();
$res=$obj->fetchproduct($id);
while($row=mysqli_fetch_assoc($res))
{
	$output.= "<div id='subcat{$row['id']}'>{$row['picture']}</div>";
}
echo $output;
}
?>