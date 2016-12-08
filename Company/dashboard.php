<?php
  include_once("../Function/functions.php");
  include_once("../Welcome_Page/footer.php");
  include_once("../Modal/company-form-edit.php");
  include_once("../Modal/verification-company.php");
  include_once("../Modal/post-edit.php");
?>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link href="../css/dashboard.css" rel="stylesheet">
<script type="text/javascript" src="../script/jquery-1.12.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<title>Company | Dashboard</title>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../Controller/welcome.php">CampusHire</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
                 <div class="navbar-header pull-right" style="margin-right:1%">
                      <a href="#" class="navbar-brand dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Company &nbsp;<span class="glyphicon glyphicon-user"></span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">  
                           <li><a href="../Database/Logout.php">Log-out</a></li>
                        </ul>
                  </div>
        </div>
      </div>
    </nav>
    <!-- sidebar -->
    <div class="container-fluid">
      <div class="row">
          <!--  beginning-->
        <?php
          include_once("sidebar.php");
          include_once("dashboard_body.php");

        ?>

 
    </div>

   </body>