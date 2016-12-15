<?php
	include_once("Database_Connect.php");

		if(isset($_REQUEST['job']))
		{

			$id = $_REQUEST['job']['id'];
			$course = $_REQUEST['job']['course'];
			$description = $_REQUEST['job']['description'];		

				$job = "call insertIntoJob('$id','$course','$description')";

				if(mysqli_query($db_connect,$job))
				{
					echo "Success";
				}		
				else
				{
					echo "error";
				}
		}

		if(isset($_GET['work']))
		{
			$works = mysqli_query($db_connect,"call getAllWorks()");
			$work = array();
				while($row = mysqli_fetch_assoc($works))
				{
					$work[] = $row;
				}
			echo json_encode($work);		
		}
?>