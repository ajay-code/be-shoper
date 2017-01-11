<?php 
	require_once('includes/classes/Connection.php');
	require_once('includes/classes/login.php');
	if(isset($_POST['submit'])){
		$email = $_POST['useremail'];
		$password = md5($_POST['userpassword']);
		$obj = new Login();
		$res = $obj->checklogin($email,$password);
		$obj1 = new Connection();
		$row = $obj1->fetchArray($res);
		if($row["email"] ==""){
			echo "<script>alert('Wrong email/password');</script>"; 
			header('location:index.php');
			exit;
		}
		else{
			if($row['isactive'] == 1){
				$_SESSION['email']=$row["email"];
				$_SESSION['uid']=$row["id"];
				$_SESSION['uname']=$row["username"];
				header('location:index.php');
				exit;
			}else{
				echo "You are no more. <a href='index.php'>Click here to go back</a>";
				exit;
			}
		}
	}
?>