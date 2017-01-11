<?php include('header.php');?>
<?php require_once('../includes/classes/pages.php');?>

<div class="row2">
	<div class="box_container inpt_container">
	<div class="text">Dashboard / Pages
	<div class="edit" onclick="popup('open','pages')" id="edit"> Edit</div>
	</div>
	</div>
</div>
<input type="hidden" id="pageId" value="0"/>
<div class="row1">
	<div class="box_container inpt_container">
		<select class="box2" name="menuid" id="menuid">
			<option value="0">Select Menu Name</option>
			<?php 
				$pages = new pages();
				$res = $pages->fetchAllMenu();
				while($row = mysqli_fetch_array($res)){
					echo "<option value='{$row[0]}'>{$row[1]}</option>";
				}
			?>
		</select>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="text" class="box2" placeholder="Enter Title" id="title" name="title"/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="text" class="box2" placeholder="Enter Page Name" id="p_name" name="p_name"/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="text" class="box2" placeholder="Enter Description" id="description" name="description"/>
	</div>
</div>
<div class="row1">
		<div class="box_container inpt_container">
		<div class="txt">Is active
			<input type="radio" id="Isactive" value="1" name="Isactive" checked/> Yes
			<input type="radio" id="Isactive" value="2" name="Isactive"/> No
			
		</div>
	</div>
</div>

<div class="row1">
	<div class="box_container inpt_container">
				<input type="button" value="submit" class="button" id="insert" name="submit" onclick="validateAll('UserPages')"/>
	</div>
</div>
<?php include('footer.php');?>