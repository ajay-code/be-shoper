<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header('location:login.php');
		exit;
	}
?>


<html>
	<head>
		<title>Admin panel</title>
		<link rel="stylesheet" href="css/style.css"/>
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/mine.js"></script>
	</head>
	<body>
	<input type="hidden" value="" id="p_tk_en"/>
	<input type="hidden" id="updateId" value="0"/>
	
	<div id="popup" style="display:none" class="popup">
<div class="row_pop pop_head">
	<div class="box_container inpt_container">
	<center><div class ="pop_text">LOGIN</div></center>
				
			</div>
</div>
<div class="row_pop">
	<center><div id="fill_html">
				
			</div></center>
</div>
<div class="row_pop">			
	<div class="box_container inpt_container">
		<input type="button" value="Submit" name="match" class="pop_btn" id="match"/>
		<input type="button" value="Close" name="close" class="pop_btn" id="close" onclick='popup("close")'/>
				
			</div>
</div>
</div>
<div class="hide" id="hide" style="display:none"></div>
	<div class="parent">
	    <div class="row posfix index2">
			<div class="text">BeShopers:Admin</div>
			     
				 <div id="cred">Welcome <?php echo $_SESSION['uname'];?></div>
				 <div class="out_container index1">
				 <div class="out index2">
				 <div id="options">
						<div class="opt">My Profile</div>
						<div class="opt">Change Password</div>
						<a href="../logout.php"><div class="opt">Logout</div></a>
				</div>
				</div>

				 </div>
				 
		</div>
				 
				 
		
		<div class="col index1">
		<a href="index.php"><div class="box1"><div class="text1">dashboard</div>
		</div></a>
	<a href="create_user.php">	<div class="box1"><div class="text1">user login</div>
		</div></a>
		<a href="user_personal.php">	<div class="box1"><div class="text1">user personal</div>
		</div></a>
	<a href="products.php">		<div class="box1"><div class="text1">products</div>
		</div></a>
	<a href="orders.php">		<div class="box1"><div class="text1">Orders</div>
		</div>	</a>
	<a href="category.php">		<div class="box1"><div class="text1">Category</div>
		</div>	</a>
	<a href="subcategory.php">		<div class="box1"><div class="text1">Sub-Category</div>
		</div>	</a>	
		<div style="clear:both;"></div>
		</div>       
<div class="main_box_container">