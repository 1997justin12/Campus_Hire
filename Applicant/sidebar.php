 <!-- sidebar -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="dashboard.php" >Menu<?php ?><span class="sr-only">(current)</span></a></li>
            <li style = "text-transform: uppercase;"><a href="?Success" ><?php echo $_SESSION['user_information']['name'];?></a></li>
            <li><a href="#" onclick="jobvacany()">Find Job</a></li>
            <li><a href="#" onclick="dashboardA()">History</a></li>
            
          </ul>
        </div>