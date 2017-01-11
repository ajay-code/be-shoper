<?php include('header.php');?>
<head>
<script type="text/javascript" src= "../js/java.js"></script>
<script type="text/javascript" src= "../js/jquery.js"></script>
<script type="text/javascript">
	function insertData(){
			$.post("../ajaxfiles/insertcomments.php",{
			name:$("#name").val(),
			product_id:$("#product_id").val(),
			date:$("#date").val(),
			content:$("#content").val(),
			user_id:$("#user_id").val(),
		    Isactive:$("#Isactive").val(),
			
		},function(data){
			$("input[type=text],input[type=date],input[type=radio]").val("");
			alert(data);
						
		});
	}

</script>
</head>
<div class="row2">
	<div class="box_container inpt_container">
	<div class="text">Dashboard / comments</div>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="text" class="box2" placeholder="Enter name" id="name" name="name"/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="text" class="box2" placeholder="Enter Product Id" id="product_id" name="product_id"/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="date" class="box2" placeholder="Enter Date" id="date" name="date"/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="text" class="box2" placeholder="Enter Content" id="content" name="content"/>
	</div>			
</div>
<div class="row1">
	<div class="box_container inpt_container">
		 		<input type="text" class="box2" placeholder="Enter User Id" id="user_id" name="user_id"/>
	</div>
</div>
<div class="row1">
		<div class="box_container inpt_container">
		<div class="text">Is active
			<input type="radio" id="Isactive" name="Isactive"/> Yes
			<input type="radio" id="Isactive" name="Isactive"/> No
			
		</div>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="button" value="submit" class="button" id="insert" name="submit" onclick="insertData()"/>
	</div>
</div>

<?php include('footer.php');?>