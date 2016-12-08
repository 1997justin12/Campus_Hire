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
		$type = 1;

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
			profile_Picture,
			type)values(
				'$name',
				'$course',
				'$email',
				'$username',
				'$password',
				'$profile_picture',
				'$type')";
			if(mysqli_query($db_connect,$db_insert))
			{
				 $_SESSION['user_type'] = $type;
				 $_SESSION['user'] = $username;
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
 	$target_dir = "../Pictures/";
	$target_file = $target_dir . basename($_FILES["file"]['name']);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["file"]['tmp_name'], $target_file)) {
        echo "The file ". basename($_FILES["file"]['tmp_name']). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    
}
	print_r($_FILES["file"]["size"]);
}
				
?>