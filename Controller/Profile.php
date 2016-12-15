<?php
	include_once("../Database/Database_Connect.php");

		if(isset($_GET['applicant-profile']))
		{
			$applicant_id = $_GET['applicant-profile'];

			$applicant_profile = mysqli_query($db_connect, "select * from applicant where applicant_id = '$applicant_id'");
			$profile = array();
				while($row = mysqli_fetch_assoc($applicant_profile))
				{
					$profile[] = $row;
				}
				
			$_SESSION['applicant-profile'] = json_encode($profile);

			include_once("../Company/main_header.php");
			include_once("../Applicant/view_profile.php");
			include_once("../Company/side.php");
		}



?>