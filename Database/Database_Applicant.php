<?php
	include_once("Database_Connect.php");

	if(isset($_REQUEST['data']))
	{

		$name = $_REQUEST['data']['name'];
		$address = $_REQUEST['data']['address'];
		$gender = $_REQUEST['data']['gender'];
		$school = $_REQUEST['data']['school'];
		$course = $_REQUEST['data']['course'];
		$birthdate = $_REQUEST['data']['birthday'];
			$birthdate = strtotime($birthdate);
			$year = date('Y');

			if(date('Y-m-d') == date('Y-m-d',$birthdate))
			{
				
				$bd = date('Y',$birthdate);
				$age = $year - $birthdate;
			}
			else
			{

				if(date('m')>=date('m',$birthdate))
				{
					if(date('d')>=date('d',$birthdate))
					{
						$bd = date('Y',$birthdate);
						$age = $year - $bd;
					}
					else
					{
						$bd = date('Y',$birthdate);
						$age = ($year - $bd)-1;
					}
					
				}
				else
				{
					$bd = date('Y',$birthdate);
					$age = ($year - $bd)-1;
					
				}
			}

			$birthdate = date('Y-m-d',$birthdate);
		
		$email = $_REQUEST['data']['email'];
		$username = $_REQUEST['data']['user'];
		$password = md5($_REQUEST['data']['pass']);
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

			$db_insert= "INSERT INTO applicant(
			name,
			address,
			birthdate,
			school,
			course,
			email,
			age,
			gender,
			username,
			password,
			type)values(
				'$name',
				'$address',
				'$birthdate',
				'$school',
				'$course',
				'$email',
				'$age',
				'$gender',
				'$username',
				'$password',
				'$type')";
			if(mysqli_query($db_connect,$db_insert))
			{
				$get_user_id = mysqli_query($db_connect,"select applicant_id from applicant where username = '$username'");
				$get_user_id = mysqli_fetch_array($get_user_id);
				 $_SESSION['user_type'] = $type;
				 $_SESSION['user_id'] = $get_user_id['applicant_id'];
				
			}
			else
			{
				var_dump($db_connect);
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