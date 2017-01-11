<?php
	if(is_array($_FILES)){
		if ($_FILES["file"]["error"] > 0) {
		  echo "Error: " . $_FILES["file"]["error"] . "<br>";
		}else{
		  /*echo "Upload: " . $_FILES["file"]["name"] . "<br>";
		  echo "Type: " . $_FILES["file"]["type"] . "<br>";
		  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";*/
		  //echo "Stored in: " . $_FILES["file"]["tmp_name"]."<br/>";  
		  if (file_exists("../uploads/products/" . $_FILES["file"]["name"])) {	
			  echo $_FILES["file"]["name"] . " already exists. ";
			} else {
			$_FILES["file"]["name"]= uniqid('img', true).'.jpg';
			  move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/products/" . $_FILES["file"]["name"]);
			  //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
			  echo $_FILES['file']['name'];
			 // echo "file stored";
			 }
		}
	}
?>