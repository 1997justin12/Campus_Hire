<?php
	session_start();
	include_once("database_config.php");

	$db_connect = mysqli_connect(servername,username,password,database);

		if(!$db_connect)
		{
			die("Connection TimeOut!");
		}
	
?>