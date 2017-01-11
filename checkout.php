<?php require_once('includes/classes/connection.php');?>
<!doctype html>
<html>
	<head>
		<title>Be Shoppers</title>
		<link rel="stylesheet" href="assets/css/style.css"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/slider.js"></script>
		<script type="text/javascript" src="js/front.js"></script>

	</head>
	<body>
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
			<div class="l_row1">
				<div class="pass">
					<a href="javascript:void(0)" onclick="check_signup()">Singup</a>
				</div>
				<div class="pass">
					<a href="javascript:void(0)" onclick="check_signup()">Forgot password?</a>
				</div>
				
			</div>
		</div>
		</form>
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
			<form action="payment.php" method="post" id="checkMeOut">
			<input type="hidden" value="" id="p_tk_en"/>
		<div class="chekout_container">
					<div class="chek_col float">
				<div class="chek_row bold"><center>Payment Mode<center>
				</div>
				<div class="chek_row"><input type="radio" checked="" name="payment" value="bp">Bank deposit
				</div>
				<div class="chek_row"><input type="radio" name="payment" value="cod">COD (Cash On Delivery)
				</div>
<!--				<div class="chek_row">
					<input type="radio"  name="acc_typ" value="1" checked>Create Account
					<input type="radio"  name="acc_typ" value="2">Have Password
				</div>-->
			<div class="cart_btn"><input type="submit" value="Order Now" name="order" class="order_btn" id="order"/></div>
			</div>

			<div class="chek_col">
				<div class="chek_row bold"><center>Billing Information<center>
				<input type="checkbox" checked id="aho" name="shipping" value="shipping">Shipping same as billing
				</div>
				
				<div class="chek_row">
					<div class="chek_text">First Name</div>
					<div class="box_container">
					<input type="text" required  placeholder="Enter Firstname" class="chek_box" id="firstname" name="firstname"/>
				</div>
				</div>
				<div class="chek_row"><div class="chek_text" >Last Name</div>
				<div class="box_container">	<input type="text"required placeholder="Enter Lastname" class="chek_box" id="lastname" name="lastname"/>
				</div>
				</div>
				<div class="chek_row"><div class="chek_text" >Address</div>
				<div class="box_container">	<textarea rows="4"required cols="25" id="address" name="address"></textarea></div>
				</div>
				
				<div class="chek_row"><div class="chek_text">City</div>
				<div class="box_container">	<input type="text" required placeholder="Enter City" class="chek_box" id="city" name="city"/>
				
				</div>
				</div>
					<div class="chek_row"><div class="chek_text">State</div>
				<div class="chek_box_containertext"><input type="text" required placeholder="Enter State" class="chek_box" id="state" name="state"/>
				</div>
				</div>
				<div class="chek_row"><div class="chek_text">Zip/Postal Code</div>
				<div class="box_container">	<input type="text" required placeholder="Enter Postal Code" class="chek_box" id="code" name="code"/>
				</div>
				</div>
				<div class="chek_row"><div class="chek_text">Country</div>
				<div class="box_container">	<input type="text" required class="chek_box" placeholder="Enter Country" id="country" name="country"/>
				</div>
				</div>
				<div class="chek_row"><div class="chek_text">Phone</div>
				<div class="box_container">	<input type="text" required class="chek_box" placeholder="Enter Phone Number" id="phone" name="phone"/>
				</div>
				</div>
				<div class="chek_row"><div class="chek_text">Email</div>
				<div class="box_container">	<input type="email" class="chek_box" required placeholder="Enter Email" id="email" name="email"/>
				</div>
				</div>
			</div>
			<div class="chek_col" id='ship'>
				
			</div>
			</form>




<?php include('footer.php');?>	