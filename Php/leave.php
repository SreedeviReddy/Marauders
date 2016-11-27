<?php
header('Access-Control-Allow-Origin: *'); //To ajax request from cross domains also
mysql_connect("localhost", "root", ""); //connecting to database
mysql_select_db("project");
$user_id = $_POST['user_id'];
$from = $_POST['fdate'];
$to = $_POST['tdate'];
if(isset($user_id))
{
	$query = "INSERT INTO `project`.`leave` (`userid`,`from`, `to`, `status`) VALUES ('$user_id', '$from', '$to', 'pending');";

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