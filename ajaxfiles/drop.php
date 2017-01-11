<?php require_once('../includes/classes/UsersPages.php');
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		echo ($id);
		$MenuName = $_POST['MenuName'];
		$user = new UsersPages();
		$res=$user->fetchMenu($id,$MenuName);
		$newres ="";
		if(isset($res['id'])){
			//$row = mysqli_fetch_array($res);
			$newres = implode(" / ",$res);
			echo $newres;
		}else{
			echo "0";
		}
		
	}
echo '<option value="">Please select...</option>';
while($row = mysqli_fetch_array($res))
  {
  	echo '<option value="'.$row['MenuName'].'">' . $row['MenuName'] . "</option>";
  	//echo $row['drink_type'] ."<br/>";
  }

?>