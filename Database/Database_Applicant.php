<?php
	include_once("Database_Connect.php");

	if(isset($_REQUEST['data']))
	{
		$name = $_REQUEST['data']['name'];
		$course = $_REQUEST['data']['course'];
		$email = $_REQUEST['data']['email'];
		$username = $_REQUEST['data']['user'];
		$password = md5($_REQUEST['data']['pass']);
		$profile_picture = $_REQUEST['data']['prpic'];
			

			$db_users = mysqli_query($db_connect,"select username from applicant");
				while($result = mysqli_fetch_array($db_users))
				{
					if($result['username'] == $username)
					{
						echo "User Already Exist";
						return;
					}
				}


			$db_insert= "INSERT INTO Applicant(
			applicant_Name,
			course,
			email_Address,
			username,
			password,
			profile_picture)values(
				'$name',
				'$course',
				'$email',
				'$username',
				'$password',
				'$profile_Picture')";
			if(mysqli_query($db_connect,$db_insert))
			{
				 $_SESSION['user_id'] = $username;
				
			}	
	}

	if(isset($_REQUEST['checking']))
	{
		$data = $_REQUEST['checking'];
		$db_checking = mysqli_query($db_connect,"select username from applicant");
			while($result = mysqli_fetch_array($db_checking))
			{
				if($result['username'] == $data)
				{
					echo "User Exist";
					return;
				}
			}
	}


	if ( isset( $_FILES["file"] ) ){
  $dir = '../Pictures/';
  $blob = file_get_contents($_FILES["file"]['tmp_name']);
  file_put_contents($dir.$_FILES["file"]["name"], $blob);
 	
}
				
?>