<?php
	if(isset($_SESSION['user_id']))
	{

		if($_SESSION['user_type'] == 1)
		{
			$user = $_SESSION['user_id'];
			$user_info = mysqli_query($db_connect,"select * from applicant where applicant_id = '$user'");
			while($info = mysqli_fetch_array($user_info))
			{

				$_SESSION['user_information'] = array(
												'name' => $info['name'],
												'address' => $info['address'],
												'birthdate' => $info['birthdate'],
												'school' => $info['school'],
												'course' => $info['course'],
												'gender' => $info['gender'],
												'age' => $info['age'],
												'email' => $info['email'],
												'picture' => $info['picture']
													);
			}	
		}

		if($_SESSION['user_type'] == 2)
		{
			$user = $_SESSION['user_id'];
			$user_info = mysqli_query($db_connect,"select * from company where company_id = '$user'");
			while($info = mysqli_fetch_array($user_info))
			{
				$_SESSION['user_information'] = array(
												'name' => $info['name'],
												'address' => $info['address'],
												'email' => $info['email'],
												'contact' => $info['contact']
													);
			}	
		}
	}
	
?>