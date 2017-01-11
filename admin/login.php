<?php 
	require_once('../includes/classes/Connection.php');
	require_once('../includes/classes/login.php');
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$obj = new Login();
		$res = $obj->checklogin($email,$password);
		$obj1 = new Connection();
		$row = $obj1->fetchArray($res);
		if($row["email"] ==""){
			echo "<script>alert('Wrong email/password');</script>"; 
		}
		else{
			if($row['isadmin']== 1){
			$_SESSION['email']=$row["email"];
			$_SESSION['uid']=$row["id"];
			$_SESSION['uname']=$row["username"];
			header('location:index.php');
			exit;
			}else{
				echo "You don't have the rights to use admin panel. Please contact your boss to do so";
				exit;
			}
		}
	}
?>
<html>
	<head>
		<title>Login panel</title>
		<link rel="stylesheet" href="css/style.css"/>
		</head>
<body>
	<form action="login.php" method="post">
		<div class="login">
			<div class="l_row"> LOGIN </div>
			<div class="l_row1">
				<input type="text" id="email" name="email" class="l_input" placeholder="Enter Email"/>
			</div>
			<div class="l_row1">
				<input type="password" id="password" name="password" class="l_input" placeholder="Enter password"/>
			</div>
			<div class="l_row1">
				<input type="submit" id="submit" name="submit" class="l_btn" value="Login"/>
				<a href='password.php'><input type="button" id="f_pass" name="f_pass" class="l_btn" value="Forgot password?"/></a>
			</div>
		</div>
	</form> 
</body> 
</html>