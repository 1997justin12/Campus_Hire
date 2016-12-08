<?php
	if(isset($_SESSION['user']))
	{
		$user = $_SESSION['user'];
		$user_info = mysqli_query($db_connect,"select * from applicant where username = '$user'");
			while($info = mysqli_fetch_array($user_info))
			{

				$_SESSION['user_information'] = array(
												'name' => $info['applicant_Name'],
												'age' => $info['age'],
												'gender' => $info['gender'],
												'course' => $info['course'],
												'email' => $info['email_Address'],
												'profile_picture' => $info['profile_Picture']
													);
			}
	}
	
?>