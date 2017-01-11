<?php require_once('../includes/classes/UsersLogin.php');
$username = $_POST['email'];
$check = mysql_query("SELECT email FROM usersaccount WHERE email='$username'");
$check_num_rows = mysql_num_rows($check);
if ($username==NULL)
{
	echo "**Choose A Username";
}
else if(!filter_var($username, FILTER_VALIDATE_EMAIL))
{
	echo "**Please Enter A Valid Email Address";
}
else
{
	if($check_num_rows==0)
	echo "1";
	else if($check_num_rows==1)
	echo "0"; 
}	

?>








