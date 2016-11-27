<?php
header('Access-Control-Allow-Origin: *');
mysql_connect("localhost", "root", "");
mysql_select_db("project");

$user_id = $_POST['user_id'];
$password = $_POST['password'];
$hashed_password = base64_encode ( $password );
$role_id = $_POST['role_id'];
if(isset($user_id) && isset($password) && isset($role_id))
{
	$query = "select * from project.authentication where user_id = '$user_id' and password = '$hashed_password' and role_id = '$role_id'";
	$output = mysql_query($query);
	$outputrow = mysql_num_rows($output);
	$row = mysql_fetch_array($output);
	if($outputrow == 1)
	{
		echo json_encode($row);
	}
	else
	{
		echo "Invalid";
	}
}
?>