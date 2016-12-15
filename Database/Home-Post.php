<?php
	include_once("Database_Connect.php");

		if(isset($_GET['check']))
		{
			$check_rows = mysqli_query($db_connect,"select * from jobs");
			$rows = mysqli_num_rows($check_rows);
				echo $rows;
		}

		if(isset($_GET['getPost']))
		{
			$post = array();
			$job_post = mysqli_query($db_connect,"select jobs.*,application.job_id as App_id from jobs left join 
						application on jobs.job_id = application.job_id ORDER BY jobs.date DESC;");
				
				while($rows = mysqli_fetch_assoc($job_post))
				{
					$post [] = $rows;
				}
			echo json_encode($post);
		}

		if(isset($_REQUEST['application']))
		{
			$job_id = $_REQUEST['application']['job_id'];
			$company_id = $_REQUEST['application']['company_id'];
			$applicant_id = $_SESSION['user_id'];

				$check_if_exist = mysqli_query($db_connect,"select * from application where 
								  job_id = '$job_id' && company_id = '$company_id'  && $applicant_id = '$applicant_id'" );
			
			if(mysqli_num_rows($check_if_exist)<1)
			{
					$application = "INSERT into application (job_id,company_id,applicant_id)values(
					'$job_id','$company_id','$applicant_id')";
				
					if(mysqli_query($db_connect,$application))
					{
						echo "Success";
					}
					else
					{
						echo  mysqli_error($db_connect);
					}
			}
			else
			{	
					echo "Submitted Already";
			}
		}

		if(isset($_GET['information']))
		{

		}
?>