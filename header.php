<?php require_once('includes/classes/connection.php');
?>
<html>
	<head>
		<title>Be Shoppers</title>
		<link rel="stylesheet" href="assets/css/style.css"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/slider.js"></script>
		<script type="text/javascript" src="js/front.js"></script>

	</head>
	<body>
	<input type="hidden" value="" id="p_tk_en"/>
			<div class="cart_container" id="cart" style="display:none">
			<div class="cart_inner">
				<div class="cart_data">
					<div class="cart_heading">
					Shopping Cart
						<div class="cart_icon">
							<img src="assets/img/shopping-cart.png" class="pic_cart" />
						</div>
					</div>
				</div>
				<div class="loader"></div>


<a href="checkout.php"><div class="cart_btn"><input type="button" value="Checkout" name="Checkout" class="l_btn width" id="Checkout"/></div></a>
				<div class="cart_btn"><input type="button" value="Close X" name="close" class="l_btn width" id="close" onclick='cart("close")'/></div>


				<div id="fillMe" style="display:none"></div>
			</div>
		</div>

	<form action="login.php" method="post">
	<div class="login" id="login" style="display:none">
	<div class="l_row"> LOGIN </div>
	<div class="l_row1">
	<input type="text" id="useremail" name="useremail" class="l_input" placeholder="Enter Email"/>
	</div>
	<div class="l_row1">
		<input type="password" id="userpassword" name="userpassword" class="l_input" placeholder="Enter password"/>
			</div>
			<div class="l_row1">
					<input type="submit" id="submit" name="submit" class="l_btn" value="Login"/>
				<input type="button" value="Close" name="close" class="l_btn" id="close" onclick='login("close")'/>
			</div>
			<div class="l_row1 pass">
				<center><a href>Forgot password?</a></center>
			</div>
		</div>
		</form>


	<div class="parent">
	<div class="signup" id="signup" style="display:none" >
	<div class="row_pop sign_head">

	<center><div class ="sign_text">SIGNUP</div></center>

			</div>
<div class="row_sign">
	<center><div id="fill_html">

			</div></center>
</div>
<div class="row_sign">
	<center><div id="fill_pass">

			</div></center>
</div>
<div class="row_sign">
	<center><div id="fill_repeat">

			</div></center>
</div>

<div class="row_sign">
		<input type="button" value="Submit" name="match" class="sign_btn" id="match" onclick='insertSignUp()'/>
		<input type="button" value="Close" name="close" class="sign_btn" id="close" onclick='signup("close")'/>

			</div>

</div>
	<div class="hide" id="hide" style="display:none"></div>
		<div class="row bg">
			<div class="options_container">
			<div class="holder_options">
				<div class="options text">Customer Care</div>
					<a href="aboutus.php"><div class="options text">About Us</div></a>
					<div class="menu text">Contact
					<div id="menu_options">
					<div class="opt">Order</div>
						<div class="opt">Change Password</div>
						</div>
					</div>
				<?php
						if(isset($_SESSION['email'])){
							echo "<div class='options text'>Welcome {$_SESSION['email']}</div>";
							echo "<a href='logout.php'><div class='options text'>Logout</div></a>";
						}else{
				?>
				<div class="options text"  onclick="signup('open')">SignUp</div>
				<div class="options text" onclick="login('open')">Login</div>

				<?php }	?>
			</div>
		</div>
		</div>
		<div class="row bg">
			<div class="logo">
			<div class="logo_pic">
			<img src="assets/img/logo.jpg" height="100%" width="90%"/>
			</div>
			</div>
			<div class="cart"  onclick="cart('open')">
			<div class="cart_pic">
			<img src="assets/img/cart.png" height="90%" width="65%"/>
			</div>
			<div class='cart_text'>Cart
			<?php
						if(isset($_SESSION['ct_cart'])){
							$count=0;
							foreach($_SESSION['ct_cart'] as $item){
								$count++;
							}
							echo " <strong style='font-size:16px;'>".$count."</strong>";
						}
			?>
			</div>
			</div>
			</div>
		<div class="row">
			<div class="search">
				<input type="text" autocomplete="off" class="input" id="name" placeholder="Search" onkeyup="check(event,this.value)"/>
				<select id="result" multiple onkeyup="sel(this.value,event)">
				</select>
			</div>
				<div class="img">
				<div class="pic"><img src="assets/img/search.png" height="65%" width="30%" class="pad"/>
	            </div>

			</div>
		</div>
	<div class="row">
	<div class="categories">
		<div class="cat-container">


		</div>
	</div>
	<div class="main_container" id="left_main_container">
