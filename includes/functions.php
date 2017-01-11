<?php 
	require_once('classes/connection.php');

	// Validating Values
	function validateAll($inputs){
		$errors="";
		$i=0;
		foreach($inputs as $name => $value){
			if(empty($value)){	
				$errors[$i]="Please fill {$name} properly";
				$i++;
			}
		}
		return $errors;
	}
	// Display Errors
	function displayErrors($errors){
		$output="";
		foreach($errors as $error){
			$output .= "<p>{$error}</p>";
		}
		return $output;
	}
	// For redirecting to particular link
	function redirectTo($location){
		header('Location:'.$location);
		exit;
	}
	// For Escaping Special Characters
	function htmlChars($input){
		return htmlentities($input);		
	}
	// For Escaping Sql Injection
	function escapeString($input){
		return @mysql_real_escape_string($input);
	}
?>