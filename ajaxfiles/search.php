<?php
	require_once('../includes/classes/connection.php');
	$name= $_GET["name"];
	if($name != ""){
		$query="SELECT id,productname FROM  products WHERE productname LIKE '%$name%'";
		$connect = new Connection();
		$res=$connect->runQuery($query);
		$output="";
		while($row =$connect->fetchArray($res)){
			$output.= "<option class='name' value='".$row['productname']."' title='".$row['id']."' onclick='sel(this.value,event)'>".$row['productname']."</option>";
		}
		echo $output;
	}
?>
