<?php require_once('../includes/classes/UsersMenu.php');

	if(isset($_POST['name'])){
		$name = $_POST['name'];
		//echo $name;
		$user = new UsersMenu();
		$res=$user->checkmenu($name);
		$newres ="";
		if(isset($res['name'])){
			$newres = implode(" / ",$res);
			
			echo $newres;
		}else{
			echo "0";
		}
		
	}

?>