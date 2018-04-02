<?php
//connect to database
	$db_servername="localhost";
	$db_username="root";
	$db_password="";
	$db_name="rgp";
	$connect=new mysqli($db_servername,$db_username,$db_password,$db_name);

	if ($connect->connect_error)
	{
		die("Connection Failed ** : " .  $connect->error);
	}
?>