<?php include('header.php');?>
<script type="text/javascript">
			$(document).ready(function(){
		   
				$.post("getproducts.php",{
					id:1
				},function(data){
					alert(data);
					$(".main_container").html(data).slideDown(1);
				});

			});
</script>

<div class="main_container">


</div>






<?php include('footer.php');?>
