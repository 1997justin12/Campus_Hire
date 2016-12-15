<?php
  $profile = json_decode($_SESSION['applicant-profile']);
  $info = array();
  $index = -1;
  foreach ($profile as $key => $value) {
    $info[]= $value; 
    $index++;
  }
?>

 <div class = "container-fluid ">
        	<div class= "container col-sm-12 row">
        		<div class = "col-sm-8" >
        			<div class = "col-sm-12 bio-container" >
        				<div class= "col-sm-12 list-container" >
        					<div class = "col-sm-4">
        						<img src="../Pictures/ss.jpg" class="img-responsive img-circ1" alt="Cinque Terre">
        					</div>
        					<div class = "col-sm-8 ">
	        					<div class = "pull-left">
	        						<h3>
                                                                   <?php echo $info[$index]->name;?>   
                                                                </h3>
	        						<h5>
                                                                   <?php echo $info[$index]->address;?>         
                                                                </h5>
	        						<h5>
                                                                   <?php  echo $info[$index]->email;?>       
                                                                </h5>
	        						<h5>
                                                                   <?php  echo $info[$index]->school;?>    
                                                                </h5>
	        						<h5>
                                                                   <?php  echo $info[$index]->course;?>  
                                                                </h5>
	        						<h5>
                                                                   <?php  echo $info[$index]->gender;?>   
                                                                </h5>
	        						<h5>
                                                                   <?php echo date_format(date_create($info[$index]->birthdate),"F d, Y");?>  
                                                                </h5>
	        						<h5>
                                                                   <?php  echo $info[$index]->age." years old"?>  
                                                                </h5>
	        					</div>
        					</div>
        				</div>
        				<hr>
        				<div class= "col-sm-12 list-container" >
        				<h4><b>REVIEW:</b> Applicant Ratings</h4>
        				</div>
        				<div class= "col-sm-12">
        					<div id="chartContainer" style="height: 300px; width: 100%;"></div>
        				</div>
        			</div>	 
        		</div>
        		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.js"></script>
        		<script type="text/javascript" src="../script/satisfactory.js"></script>