<?php include('header.php');?>

<div class="row2">
	<div class="box_container inpt_container">
	<div class="text">Dashboard / user personal details
	<div class="edit" onclick="popup('open','fetchUserPersonal')" id="edit"> Edit</div>
	</div>
	</div>
</div>

<div class="row1">
	<div class="box_container inpt_container">
				<input type="email" class="box2" placeholder="Enter Email and press Enter" id="personalemail" name="personalemail"/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="text" class="box2" placeholder="Enter Firstname" id="firstname" name="firstname"/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="text" class="box2" placeholder="Enter Lastname" id="lastname" name="lastname"/>
	</div>
</div>

<div class="row1">
	<div class="box_container inpt_container">
				<input type="text" class="box2" placeholder="Enter Phone Number" id="phone" name="phone"/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="text" class="box2" placeholder="Enter Address" id="address" name="address"/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="text" class="box2" placeholder="Enter State" id="state" name="state"/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="text" class="box2" placeholder="Enter City" id="city" name="city"/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="text" class="box2" placeholder="Enter Country" id="country" name="country"/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="date" class="box2" placeholder="Enter date of birth" id="dob" name="dob"/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
		<select class="box2" id="gender" name="gender">
						<option value="0">Gender</option>
						<option value="male">male</option>
						<option value="female">female</option>
		</select>  		
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="button" value="Insert Record" class="button" id="insert" name="insert" onclick="validateAll('userpersonal')"/>
	</div>
</div>
<script>
	$("input[type=text],textarea,input[type=date],select").css("display","none");
</script>
<?php include('footer.php');?>