<?php
	require_once('../includes/classes/Connection.php');
	$name= $_GET["name"];
	if($name != ""){
		$query="SELECT id,productname FROM  products WHERE productname LIKE '%$name%'";
		$res=mysql_query($query);
		$connect = new Connection();
		$res=$connect->runQuery($query);
		$output="";
		while($row =$connect->fetchArray($res)){
			$output.= "<option class='name' value='".$row['productname']."' title='".$row['id']."' onclick='sel(this.value,event)'>".$row['productname']."</option>";
		}
		echo $output;
	}
?>