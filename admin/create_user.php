<?php include('header.php');?>


<div class="row2">
	<div class="box_container inpt_container">
	<div class="text">Dashboard / user login details
	<div class="edit" onclick="popup('open','fetchUserDetails')" id="edit"> Edit</div>
	</div>
	</div>
</div>		

<div class="row1">
	<div class="box_container inpt_container">
				
				<input type="text" class="box2" placeholder="Enter username" title="Username" name="username" id="username" required/>
				
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="password" class="box2" placeholder="Enter Password" name="password" id="password" title="Password" required/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="password" class="box2" placeholder="Confirm Password" name="p2" id="p2" title="Confirm Password" required/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="email" class="box2" placeholder="Enter Email" name="email" id="email" required/>
	</div>
<div class="row1">
		<div class="box_container inpt_container">
		<div class="txt">Is admin
			<input type="radio" name="Isadmin" value="1" checked/> Yes
			<input type="radio" name="Isadmin" value="2"/> No
			
		</div>
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
		<select class="box2" id="sq" name="sq">
			<option value="0">Security Question</option>
			<option value="What is your pet name?">What is your pet name?</option>
			<option value="Which is your favourite color?">Which is your favourite color?</option>
			<option value="What is your school name?">What is your school name?</option>
			<option value="Which is your fovourite dish?">Which is your fovourite dish?</option>
		</select>  		
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="text" class="box2" placeholder="Security Answer" name="sa" id="sa" required/>
	</div>
</div>
<div class="row1">
	<div class="box_container inpt_container">
				<input type="button" value="Insert" name="submit" class="button" id="insert" onclick="validateAll('userlogin')"/>
	</div>
</div>		

<?php include('footer.php');?>
