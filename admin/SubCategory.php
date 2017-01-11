<?php require_once('header.php')?>
<?php require_once('../includes /classes/Category.php')?>
<div class="row2">
		<div class="box_container inpt_container">
		<div class="text">Dashboard / Category
		<div class="edit" onclick="popup('open','subcategory1')" id="edit"> Edit</div>
		</div>
		</div>
	</div>
	<div class="row1">
	<div class="box_container inpt_container inpt_container">
			<select class="box2" id="categoryId" name="categoryId">
				<option value="0" >Select Category</option>;
					<?php 
						$cat = new Category();
						$res=$cat->fetchAll();
						while($row=mysqli_fetch_assoc($res)){
							echo "<option value='{$row['id']}'>{$row['categoryname']}</option>";
						}
					?>
			</select> 
	</div>

</div>

	<div class="row1">
	<div class="box_container inpt_container inpt_container">
			<input type="text" class="box2" placeholder="SubCategory Name"  name="subcategory" id="subcategory" />
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
				<input type="button" name="submit" id="insert" value="Save Records" onclick="validateAll('subcategory')" class="button"/>
	</div>
</div>

<?php require_once('footer.php')?>
<?php require_once('footer.php')?>