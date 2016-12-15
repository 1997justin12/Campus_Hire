<?php
	include_once("../Database/Database_Connect.php");
	include_once("../Database/User_Info.php");

	if(isset($_SESSION["user_type"]))
	{
		
		if($_SESSION["user_type"] == 1)
		{
			
			if(isset($_GET['job']))
			{
				$_SESSION['page'] = "job";

				include_once('../Applicant/main_header.php');
				include_once('../Applicant/my_job.php');
				include_once('../Applicant/side.php');	
				
			}
			else if(isset($_GET['profile']))
			{
				$_SESSION['page'] = "profile";

				include_once('../Applicant/main_header.php');
				include_once('../Applicant/my_profile.php');
				include_once('../Applicant/side.php');	
			}
			else
			{
				$_SESSION['page'] = "home";

				include_once('../Applicant/main_header.php');
				include_once('../Applicant/home.php');
				include_once('../Applicant/side.php');	
			}
		}
		if($_SESSION["user_type"] == 2)
		{	
			if(isset($_GET['request']))
			{

				$_SESSION['page'] = "request";
				
				include_once('../Company/main_header.php');
				include_once('../Company/request.php');
				include_once('../Company/side.php');
			}
			else if(isset($_GET['profile']))
			{

				$_SESSION['page'] = "profile";
				
				include_once('../Company/main_header.php');
				include_once('../Company/my_profile.php');
				include_once('../Company/side.php');
			}
			else if(isset($_GET['employee']))
			{

				$_SESSION['page'] = "employee";
				
				include_once('../Company/main_header.php');
				include_once('../Company/employee.php');
				include_once('../Company/side.php');
			}
			else
			{

				$_SESSION['page'] = "home";
				
				include_once('../Company/main_header.php');
				include_once('../Company/home.php');
				include_once('../Company/side.php');
			}


			
		}
	}
	else
	{
		header('location:../index.php');
	}


?>