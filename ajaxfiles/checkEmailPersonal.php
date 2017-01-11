<?php require_once('../includes/classes/UsersPersonal.php');
	if(isset($_POST['email'])){
		$personalemail = $_POST['email'];
		//echo ($personalemail);
		$user = new UsersPersonal();
		$res=$user->checkUserByEmail($personalemail);
		$newres ="";
		if(isset($res['personalemail'])){
			//$row = mysqli_fetch_array($res);
			$newres = implode(" / ",$res);
			echo $newres;
		}else{
			echo "0";
		}
		
	}

?>