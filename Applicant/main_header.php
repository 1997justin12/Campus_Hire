<html>
	<head>
		<title>CampusHire</title>
			<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"/>
			<link rel="stylesheet" type="text/css" href="../css/campushire_style.css"/>
			<script type="text/javascript" src="../script/jquery-1.12.1.min.js"></script>
			<script type="text/javascript" src="../script/applicant_script.js"></script>
			<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>

		<div class="col-sm-12 banner-top">
		<div class = "header-title">
		 <a class="navbar-left title" href="#">CAMPUSHIRE</a>
			<div class="navbar-form navbar-left ">
			  <div class="input-group">
			    <input type="text" class="form-control search-box" placeholder="Find Jobs">
			    <div class="input-group-btn">
			      <button class="btn btn-default" type="submit">
			        <i class="glyphicon glyphicon-search"></i>
			      </button>
			    </div>
			  </div>
			</div>
			</div>	
			   <div class="dropdown pull-right">
				  <span class="caret " data-toggle="dropdown" ></span>
				  <ul class="dropdown-menu">
				    <li><a href="#">Profile</a></li>
				    <li><a href="#">Settings</a></li>
				    <li><a href="../Database/Logout.php">Logout</a></li>
				  </ul>
 				<div class="profile-top">
 					<img src="../Pictures/ss.jpg" class="img-responsive img-circ" alt="Cinque Terre">
 					<div class = "profile-text">
 						<?php echo $_SESSION['user_information']['name']?>
 					</div>
 				</div>	
			   </div>
			   </div>
		<nav class="col-sm-12 navbar navbar-inverse navbar-fixed header-navigator">
        	<div class="navbar-header">
	          <button type="button"
	          		  class="navbar-toggle collapsed" data-toggle="collapse"
	          		  data-target="#navbar" aria-expanded="false" 
	          		  aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>ss
	          </button>
      	    </div>
      	  	  <div class="navbar-collapse navbar-left ">
      	  	  		<ul class= "nav navbar-nav navbar-center">
                 	  <li <?php if(isset($_SESSION['page'])&&$_SESSION['page'] == "home") echo "class = 'active'";?> ><a href="../Controller/Dashboard.php">Home</a></li>
				      <li  <?php if(isset($_SESSION['page'])&&$_SESSION['page'] == "job") echo "class = 'active'";?> ><a href="../Controller/Dashboard.php?job">My Job</a></li>
				      <li  <?php if(isset($_SESSION['page'])&&$_SESSION['page'] == "profile") echo "class = 'active'";?> ><a href="../Controller/Dashboard.php?profile">My Profile</a></li>
                 	</ul>
               </div>
        </nav>
