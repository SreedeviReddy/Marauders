<?php

header('Access-Control-Allow-Origin: *'); //To ajax request from cross domains also

mysql_connect("localhost", "root", ""); //connecting to database
mysql_select_db("warehouse_mg");
$user_id = $_POST['user_id'];

	$query = "select * from `project`.`leave` where `leave`.userid = '$user_id'";

		$output = mysql_query($query);

		$result_array = array();

		if(mysql_num_rows($output))
		{
			while($row=mysql_fetch_assoc($output))
			{
				$result_array[] = $row;
			}
		}

		echo json_encode($result_array); 

?>