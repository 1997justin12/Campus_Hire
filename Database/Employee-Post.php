<?php
	include_once("Database_Connect.php");
		
		if(isset($_GET['check']))
		{
			$user_id = $_SESSION['user_id'];
				$check_request = mysqli_query($db_connect,"select * from employee where company_id = '$user_id'");
				$rows = mysqli_num_rows($check_request);
					$_SESSION['count-request'] = $rows;
					echo $rows;
		}

		if(isset($_GET['company-employee']))
		{
			$user_id = $_SESSION['user_id'];
				$requests = mysqli_query($db_connect,"select company.company_id, employee.*, applicant.* from employee
					LEFT JOIN company ON company.company_id = employee.company_id
					LEFT JOIN  applicant ON employee.applicant_id = applicant.applicant_id
					 where employee.company_id = '$user_id'");
				$request = array();
					while($row = mysqli_fetch_assoc($requests))
					{
						$request[] = $row;
					}

					echo json_encode($request);
		}

		if(isset($_GET['check-job']))
		{
			$user_id = $_SESSION['user_id'];
				$check_request = mysqli_query($db_connect,"select * from employee where applicant_id = '$user_id'");
				$rows = mysqli_num_rows($check_request);
					$_SESSION['count-request'] = $rows;
					echo $rows;
		}

		if(isset($_GET['applicant-job']))
		{
			$user_id = $_SESSION['user_id'];
				$requests = mysqli_query($db_connect,"select applicant.applicant_id, employee.*, company.* from employee
					LEFT JOIN company ON company.company_id = employee.company_id
					LEFT JOIN  applicant ON employee.applicant_id = applicant.applicant_id
					 where employee.applicant_id = '$user_id'");
				$request = array();
					while($row = mysqli_fetch_assoc($requests))
					{
						$request[] = $row;
					}

					echo json_encode($request);
		}
	?>