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
                                                                   <?php echo $_SESSION['user_information']['name']?>   
                                                                </h3>
	        						<h5>
                                                                   <?php echo $_SESSION['user_information']['address']?>         
                                                                </h5>
	        						<h5>
                                                                   <?php echo $_SESSION['user_information']['email']?>       
                                                                </h5>
	        						<h5>
                                                                   <?php echo $_SESSION['user_information']['school']?>    
                                                                </h5>
	        						<h5>
                                                                   <?php echo $_SESSION['user_information']['course']?>  
                                                                </h5>
	        						<h5>
                                                                   <?php echo $_SESSION['user_information']['gender']?>   
                                                                </h5>
	        						<h5>
                                                                   <?php echo date_format(date_create($_SESSION['user_information']['birthdate']),"F d, Y");?>  
                                                                </h5>
	        						<h5>
                                                                   <?php echo $_SESSION['user_information']['age']." years old"?>  
                                                                </h5>
	        						<h5>
                                                                   <?php echo $_SESSION['user_information']['gender'];?> 
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