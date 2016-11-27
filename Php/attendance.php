<?php
header('Access-Control-Allow-Origin: *'); //To ajax request from cross domains also
mysql_connect("localhost", "root", ""); //connecting to database
mysql_select_db("project");
$user_id = $_POST['user_id'];
$from = $_POST['fdate'];
$to = $_POST['tdate'];
if(isset($user_id))
{
	$query = "select count(*) as count from attendance where user_id='$user_id' and date>='$from' and date<='$to' and status = 'p'";

	$output = mysql_query($query);
        $total= mysql_result($output,0);

	if($output)
	{
		echo $total;
	}
	else
	{
		echo "Invalid";
	}
}
?>