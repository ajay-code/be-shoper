<?php require_once('header.php')?>
<?php require_once('../includes/classes/category.php');?>


	<div class="row2">
		<div class="box_container inpt_container">
		<div class="text">Dashboard / Category
		<div class="edit" onclick="popup('open','category')" id="edit"> Edit</div>
		</div>
		</div>
	</div>
	<div class="row1">
		<div class="box_container inpt_container">
				<input type="text" class="box2" name="categoryname" id="categoryname" placeholder="Category Name" title="Category name" />
		</div>
	</div>
	<div class="row1">
	<div class="box_container inpt_container">
			<div class="txt">Is Active
			<input type="radio" name="Isactive" id="Isactive" value="1" checked/> Yes
			<input type="radio" name="Isactive" id="Isactive" value="2"/> No
		</div> 		
		</div>
	</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="button" name="submit" id="insert" value="Save Records" onclick="validateAll('categoryname')" class="button"/>
	</div>
</div>

<?php require_once('footer.php')?>