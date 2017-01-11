<?php require_once('../includes/classes/UsersMenu.php');
	if(isset($_POST['email'])){
		$email = $_POST['email'];
		$user = new UsersMenu();
		$res=$user->checkUserByEmail($email);
		$newres ="";
		if(isset($res['email'])){
			//$row = mysqli_fetch_array($res);
			$newres = implode(" / ",$res);
			echo $newres;
		}else{
			echo "0";
		}
		
	}

?>