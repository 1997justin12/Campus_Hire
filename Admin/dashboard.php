<?php
  include_once("../Function/functions.php");
  include_once("../Welcome_Page/footer.php");
?>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link href="../css/dashboard.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<title>Admin | Dashboard</title>
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
                      <a href="#" class="navbar-brand dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Admin &nbsp;<span class="glyphicon glyphicon-user"></span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">  
                           <li><a href="">Log-out</a></li>
                        </ul>
                  </div>
        </div>
    </nav>
    <!-- sidebar -->
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="">Menu<?php ?><span class="sr-only">(current)</span></a></li>
            <li><a href="#" onclick="company()">Company</a></li>
            <li><a href="#" onclick="applicant()">Applicant</a></li>
          </ul>
        </div>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <!-- applicant -->
<div id="applicant" style="display: none;">
          <div class="form-group">
              <h1 class="page-header"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</h1>
              <h2 class="sub-header">List of Applicant</h2>
              <div class="col-md-10">
                        <div class="input-group">
                          <div class="input-group-addon"><span style="color:green" class="glyphicon glyphicon-search"></span></div>
                          <input required title="Search" type="text" class="form-control" id="tags" name="tags" placeholder="Search Applicant Name">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary" style="width:80px">Search</button>
          </div>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Adress</th>
                      <th>Gender</th>
                      <th>Program</th>
                      <th>Course</th>
                      <th>Email Address</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Joyaks</td>
                      <td>1,001</td>
                      <td>Lorem</td>
                      <td>ipsum</td>
                      <td>dolor</td>
                      <td>sit</td>
                      <td>dolor</td>
                      <td>sit</td>
                      <td><?php include("../Modal/applicant-form-edit.php"); include("../Modal/verification-applicant.php");?>
                          <span data-toggle="modal" data-target="#select-action6" class="glyphicon glyphicon-remove" style="color: red">&nbsp;</span>
                          <span data-toggle="modal" data-target="#select-action10" class="glyphicon glyphicon-edit" style="color: blue">&nbsp;</span>
                      </td>
                    </tr>
                    </tbody>
                </table>
              </div>
              <div class="col-sm-12">
                <?php include_once("../Modal/applicant-form-add.php");?>
                <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#select-action3">Add</button>
              </div>
          </div>
        <!-- company -->
<div id="company" style="display: none;">
          <div class="form-group">
              <h1 class="page-header"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</h1>
              <h2 class="sub-header">List of Company</h2>
              <div class="col-md-10">
                        <div class="input-group">
                          <div class="input-group-addon"><span style="color:green" class="glyphicon glyphicon-search"></span></div>
                          <input required title="Search" type="text" class="form-control" id="tags" name="tags" placeholder="Search Company Name">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary" style="width:80px">Search</button>
          </div>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Adress</th>
                      <th>Email</th>
                      <th>Number</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>LifeBit</td>
                      <td>1,001</td>
                      <td>Lorem</td>
                      <td>ipsum</td>
                      <td>dolor</td>
                      <td>sit</td>
                      <td><?php include("../Modal/company-form-edit.php"); include("../Modal/verification-company.php");?>
                            <span data-toggle="modal" data-target="#select-action66" class="glyphicon glyphicon-remove" style="color: red">&nbsp;</span>
                            <span data-toggle="modal" data-target="#select-action9" class="glyphicon glyphicon-edit" style="color: blue">&nbsp;</span>
                      </td>
                    </tr>
                    </tbody>
                </table>
              </div>
              <div class="col-sm-12">
                <?php include_once("../Modal/company-form-add.php"); ?>
                <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#select-action2">Add</button>
              </div>
          </div>
   </body>