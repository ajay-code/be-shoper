<?php require_once('header.php')?>
<?php require_once('../includes/classes/Stock.php')?>
<?php if(isset($_POST['submit'])){
echo "<script>alert('Entered');</script>";
				$qty= $_POST['qty'];
				$prodid= $_POST['prodid'];
				$stk = new Stock();
				$res=$stk->insertStock($qty,$prodid);
				if($res){
					echo "<script>alert('Records Inserted');</script>";
				}else{
					echo "<script>alert('Records Not Inserted');</script>";
				}
}

?>
<form action="stock.php" method="post">
	<div class="row2">
	<div class="box_container inpt_container">
	<div class="text">Dashboard / Stock</div>
	</div>
</div>
	<div class="row1">
	<div class="box_container inpt_container inpt_container">
			<input type="text" class="box2" placeholder="Quantity" name="qty" title="Quantity" />
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
		<select class="box2" name="prodid">
			<option value="0">Product</option>
			<option value="1">Product</option>
			<option value="2">Product</option>
		</select>  		
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="submit" name="submit" value="Save Records" class="button"/>
	</div>
</div>
</form>
<?php require_once('footer.php')?>