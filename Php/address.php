<?php
header('Access-Control-Allow-Origin: *'); //To ajax request from cross domains also
mysql_connect("localhost", "root", ""); //connecting to database
mysql_select_db("project");
$user_id = $_POST['user_id'];
$addr = $_POST['addr'];
if(isset($user_id))
{
	$query = "UPDATE `project`.`details` SET `addr`='$addr' WHERE  `user_id`='$user_id';";

	$output = mysql_query($query);

	if($output)
	{
		echo "changed";
	}
	else
	{
		echo "notdone";
	}
}
?>