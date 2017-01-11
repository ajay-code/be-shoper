<?php 
foreach($_SESSION['ct_cart'] as $item){
		$query = "select * from products where id = "$item['id'];
				<tr>
				<td width="18%" align="left" valign="middle"><input type="text" value="{$item['quantity']}" readonly name="qty" required/></td>
		
			}
			
?>