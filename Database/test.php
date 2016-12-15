<?php
	
	$bd = strtotime("6 October 2010");

	if(date('Y-m-d') == date('Y-m-d',$bd))
	{
		echo "true";
	}
	else
	{
		$year = date('Y');
		

		if(date('m')>=date('m',$bd))
		{
			if(date('d')>=date('d',$bd))
			{
				$bd = date('Y',$bd);
				$age = $year - $bd;
			}
			else
			{
				$bd = date('Y',$bd);
				$age = ($year - $bd)-1;
			}
			echo $age; 
		}
		else
		{
			$bd = date('Y',$bd);
			$age = ($year - $bd)-1;
			echo $age; 
		}
	}
?>