<?php
	include_once('../Database/Database_Connect.php');
	
	if(!(isset($_SESSION['user'])))
	{
		 include_once("../Welcome_Page/header.php");
		 include_once("../Welcome_Page/body.php");
		 include_once("../Welcome_Page/footer.php");
	}
	else
	{
		header('location:Dashboard.php');
	}

?>