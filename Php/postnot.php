<?php
header('Access-Control-Allow-Origin: *'); //To ajax request from cross domains also
mysql_connect("localhost", "root", ""); //connecting to database
mysql_select_db("project");
$note = $_POST['note'];
$date = date("d-m-Y");
if(isset($note))
{
	$query = "INSERT INTO `project`.`notifications` (`notify`, `date`) VALUES ('$note', '$date')";

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