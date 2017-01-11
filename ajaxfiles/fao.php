<?php  require_once('../includes/classes/ordermaster.php');
  
$ord = new Order();
$res = $ord->fetchAllOrders();
$output="";
while($row = mysqli_fetch_assoc($res)){
		$output.= "<div class='row_order'>	
				<div class='order'><div class='order_text'>{$row['status']}</div></div>        
				<div class='order'><div class='order_text'>{$row['OrderId']}</div></div>        
				<div class='order'><div class='order_text'>{$row['mop']}</div></div>        
				<div class='order'><div class='order_text'>{$row['Total']}</div></div>        
				<div class='order'><div class='order_text'>{$row['OrderDate']}</div></div>        
				<div class='order_button'>
				<input type='button' value='Process' class='but but1' id='pro{$row['id']}' name='submit'/>
				<input type='button' value='Cancel' class='but' id='can{$row['id']}' name='submit1'/>
				</div>
				</div>";
}
echo $output;
?>