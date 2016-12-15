<?php
	include_once('Database_Connect.php');

	if(isset($_REQUEST['login']))
	{
		$username = $_REQUEST['login']['username'];
		$password = $_REQUEST['login']['password'];
		$flag = 0;
			$validate_user = mysqli_query($db_connect,"select * from validate_user");
			while($users = mysqli_fetch_array($validate_user))
			{
				if($username == $users['Username'] && md5($password) == $users['Password'])
				{
						if($users['Type'] == 1)
						{
							$_SESSION['user_type'] = 1;
							$_SESSION['user_id'] = $users['ID'];
						}
						if($users['Type'] == 2)
						{
							$_SESSION['user_type'] = 2;
							$_SESSION['user_id'] = $users['ID'];
						}
						$flag++;
						break;
				}
			}

			if($flag != 0)
			{
				$url = "../Controller/Dashboard.php";
				echo $url;
			}
			else
			{
				echo "false";
			}
			
						
	}
?>