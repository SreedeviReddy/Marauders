<?php
header('Access-Control-Allow-Origin: *'); //To ajax request from cross domains also
mysql_connect("localhost", "root", ""); //connecting to database
mysql_select_db("project");
$user_id = $_POST['user_id'];
$ip = $_SERVER['REMOTE_ADDR'];
$date = date("Y-m-d");
$time = date("H:i");
if(isset($user_id))
{
	$query = "INSERT INTO `project`.`attendance` (`user_id`, `IP`, `time`, `date`, `status`) VALUES ('$user_id', '$ip', '$time', '$date', 'p')";

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
?>