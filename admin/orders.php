<?php include('header.php');?>

<div class="row_order">
		<div class="order"><div class="order_text">STATUS</div></div>
		<div class="order"><div class="order_text">ORDER</div></div>
		<div class="order"><div class="order_text">MOP</div></div>
		<div class="order"><div class="order_text">TOTAL</div></div>
		<div class="order"><div class="order_text">DATE</div></div>
		<div class="order"><div class="order_text">ACTION</div></div>
</div>
<div class="row_order" id="faod">
	
</div>
<script>
	$(document).ready(function(){
		fetchAllOrders();
		
	});
	function fetchAllOrders(){
		$.post("../ajaxfiles/fao.php",{},function(data){
			alert(data);
			$("#faod").html(data);
		});
	}
</script>	

<?php include('footer.php');?>