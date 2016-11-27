<?php
header('Access-Control-Allow-Origin: *'); //To ajax request from cross domains also
mysql_connect("localhost", "root", ""); //connecting to database
mysql_select_db("project");
$user_id = $_POST['user_id'];
$addr = $_POST['addr'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$DOB = $_POST['DOB'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$hashed_password = base64_encode ( $password );
$role_id = $_POST['role_id'];
if(1)
{
	$query = "INSERT INTO `project`.`details` (`user_id`, `addr`, `name`, `contact`, `DOB`, `Email`, `gender`) VALUES ('$user_id', '$addr', '$name', '$phone', '$DOB', '$email', '$gender')";

	$output = mysql_query($query);

if(isset($user_id) && isset($password) && isset($role_id))
{
	$query = "INSERT INTO `project`.`authentication` (`user_id`, `password`, `role_id`) VALUES('$user_id','$hashed_password', '$role_id')";
	$output = mysql_query($query);
	if($output)
	{
		echo "valid";
	}
	else
	{
		echo "Invalid";
	}
}
}
else
{
echo  "retry";
}
?>