<?php
	include_once("../Database/Database_Connect.php");
	include_once("../Database/User_Info.php");
	if(isset($_SESSION["user_type"]))
	{
		
		if($_SESSION["user_type"] == 1)
		{
			include_once('../Applicant/dashboard.php');
			include_once('../Applicant/sidebar.php');
			include_once('../Applicant/dashboard_body.php');	
		}
		if($_SESSION["user_type"] == 2)
		{
			include_once('../Company/dashboard.php');
		}
	}
	else
	{
		header('location:../index.php');
	}
?>