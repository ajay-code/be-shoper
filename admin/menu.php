<?php include('header.php');?>
<div class="row2">
	<div class="box_container inpt_container">
	<div class="text">Dashboard / menu
	<div class="edit" onclick="popup('open','menu')" id="edit"> Edit</div>
	</div>
	</div>
</div>
<input type="hidden" id="menuId" value="0"/>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="text" class="box2" placeholder="Enter Name" id="name" name="name"/>
	</div>
</div>
<div class="row1">
		<div class="box_container inpt_container">
		<div class="txt">Is active
			<input type="radio" id="Isactive" name="Isactive" value="1" checked/> Yes
			<input type="radio" id="Isactive" name="Isactive" value="2"/> No
			
		</div>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="button" value="Insert Menu" class="button" id="insert" name="submit" onclick="validateAll('UserMenu')"/>
	</div>
</div>
<?php include('footer.php');?>