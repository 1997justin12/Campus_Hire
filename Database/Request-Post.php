<?php
	include_once("Database_Connect.php");
		
		if(isset($_GET['check']))
		{
			$user_id = $_SESSION['user_id'];
				$check_request = mysqli_query($db_connect,"select * from application where company_id = '$user_id'");
				$rows = mysqli_num_rows($check_request);
					$_SESSION['count-request'] = $rows;
					echo $rows;
		}

		if(isset($_GET['request-applicant']))
		{
			$user_id = $_SESSION['user_id'];
				$requests = mysqli_query($db_connect,"select application.*, applicant.* from application 
					INNER JOIN applicant ON application.applicant_id = applicant.applicant_id where application.company_id = '$user_id'");
				$request = array();
					while($row = mysqli_fetch_assoc($requests))
					{
						$request[] = $row;
					}

					echo json_encode($request);
		}

		if(isset($_REQUEST['status_request']))
		{
			$company_id = $_SESSION['user_id'];
			$applicant_id = $_REQUEST['status_request']['applicant_id'];
			$application_id = $_REQUEST['status_request']['application_id'];
				if($_REQUEST['status_request']['status'] == "approved")
				{
					$insert_employee = "INSERT into employee(
												company_id,
												applicant_id)values(
												'$company_id',
												'$applicant_id'
												)";

						if(mysqli_query($db_connect,$insert_employee))
						{
							$delete_request = "DELETE from application where company_id = '$company_id' && applicant_id = '$applicant_id' && application_id = '$application_id'";
									if(mysqli_query($db_connect,$delete_request))
									{
										echo "Success";
									}
									else
									{
										echo "Error";
									}
						}
						else
						{
							echo "Error";
						}
				}
				else if($_REQUEST['status_request']['status'] == "delete")
				{
					$delete_request = "DELETE from application where company_id = '$company_id' && applicant_id = '$applicant_id' && application_id = '$application_id'";
						if(mysqli_query($db_connect,$delete_request))
						{
							echo "Success";
						}
						else
						{
							echo "Error";
						}
				}	
		}



?>