<?php

	include_once("Database_Connect.php");

	if(isset($_REQUEST['data']))
	{

		$name = $_REQUEST['data']['c_name'];
		$address = $_REQUEST['data']['c_address'];
		$email = $_REQUEST['data']['email'];
		$number = $_REQUEST['data']['c_number'];
		$username = $_REQUEST['data']['username'];
		$password = md5($_REQUEST['data']['password']);
		$type = 2;

			$db_users = mysqli_query($db_connect,"select username from company");
				while($result = mysqli_fetch_array($db_users))
				{
					if($result['username'] == $username)
					{
						echo "User Already Exist";
						return;
					}
				}

			$db_insert= "INSERT INTO company(
			name,
			address,
			email,
			contact,
			username,
			password,
			type)values(
				'$name',
				'$address',
				'$email',
				'$number',
				'$username',
				'$password',
				'$type')";
			if(mysqli_query($db_connect,$db_insert))
			{
				$get_user_id = mysqli_query($db_connect,"select company_id from company where username = '$username'");
				$get_user_id = mysqli_fetch_array($get_user_id);
				 $_SESSION['user_type'] = $type;
				 $_SESSION['user_id'] = $get_user_id['company_id'];
			}	
	}

?>