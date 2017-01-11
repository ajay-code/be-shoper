<?php require_once('../includes/classes/UsersPages.php');
	if(isset($_POST['email'])){
		$email = $_POST['email'];
		$user = new UsersPages();
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