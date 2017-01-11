<?php include('header.php');?>
<?php require_once('../includes/classes/Products.php');?>

<div class="row2">
	<div class="box_container inpt_container">
	<div class="text">Dashboard / Products
		<div class="edit" onclick="popup('open','products')" id="edit"> Edit</div>
	</div>

	</div>
</div>

<div class="row1">
	<div class="box_container inpt_container">
		<select class="box2" name="sub_cat_id" id="sub_cat_id">
			<option value="0">Select sub-category</option>
			<?php 
				$Products = new Products();
				$res = $Products->fetchAllcategory();
				while($row = mysqli_fetch_array($res)){
					echo "<option value='{$row[0]}'>{$row[1]}</option>";
				}
			?>
			

		</select>
	</div>
</div>

<div class="row1">
	<div class="box_container inpt_container">
		<input type="text" class="box2" placeholder="enter product name" id="productname" name="productname"/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
		<input type="text" class="box2" placeholder="enter description" id="description" name="description"/>
	</div>
</div>

<div class="row1">
	<div class="box_container inpt_container">
		<div class="txt">Upload picture of product</div>
		<form action="" method="post" id="uploadForm" enctype="multipart/form-data">
		<input type="file" name="file" id="file"/>
		<input type="submit" name="submit" value="Upload File"/>
		</form>
		<input type="hidden" id="imgName" value=""/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
		<input type="text" class="box2" placeholder="Enter Price" id="price" name="price"/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
		<input type="text" class="box2" placeholder="enter discount" id="discount" name="discount"/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
		<input type="text" class="box2" placeholder="enter rating" id="rating" name="rating"/>
	</div>
</div>
<div class="row1">
		<div class="box_container inpt_container">
		<div class="txt">Is in stock
			<input type="radio" id="instock" value="1" name="instock" checked/> Yes
			<input type="radio" id="instock" value="2" name="instock"/> No
			
		</div>
	</div>
</div>

<div class="row1">
	<div class="box_container inpt_container">
				<input type="button" value="submit" class="button" id="insert" name="submit" onclick="validateAll('products')"/>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function (e){
	$("#uploadForm").on('submit',(function(e){
	e.preventDefault();
	$.ajax({
	url: "../ajaxfiles/upload.php",
	type: "POST",
	data:  new FormData(this),
	contentType: false,
	cache: false,
	processData:false,
	success: function(data){
	//$("#targetLayer").html(data);
		//alert(data);
		$("#imgName").val(data);
		//$("#uploadForm").fadeOut(1000);
	},
	error: function(){} 	        
	});
	}));
});
</script>
<?php include('footer.php');?>