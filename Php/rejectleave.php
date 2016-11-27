<?php
header('Access-Control-Allow-Origin: *'); //To ajax request from cross domains also
mysql_connect("localhost", "root", ""); //connecting to database
mysql_select_db("project");
$id = $_POST['id'];
if(isset($id))
{
	$query = "update `project`.`leave` 
                 set `leave`.`status` = 'rejected'
                 where `leave`.leaveid = $id";

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