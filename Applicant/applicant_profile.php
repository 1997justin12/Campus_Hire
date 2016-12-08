  <div id="applicant-profile" >
                <h1 class="page-header"><span class="glyphicon glyphicon-home"></span> Profile</h1>
                <h2 class="sub-header"><span class="glyphicon glyphicon-info-sign"></span> Account Info</h2>
                    <div class="row placeholders">
                       <div class="col-xs-6 col-sm-4 placeholder">
                          <img  src="../Pictures/bg1.jpg" style="width:250px;height:250px" data-src="holder.js/250x250/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail"/>
                          <h4><span class="glyphicon glyphicon-camera"></span></h4>
                            <?php   include_once("../Modal/applicant-form-edit.php");?>
                            <a data-toggle="modal" data-target="#select-action10" ><span >Click to edit info</span></a>
                          </div>
                    <div class="col-xs-6 col-sm-8 placeholder pull-left text-justify">
                          <div style="margin-top:5px"><label><?php echo $_SESSION['user_information']['name'];?></label><br /></div>
                          <div style="margin-top:5px"><label><?php echo $_SESSION['user_information']['course'];?></label><br /></div>
                          <div style="margin-top:5px"><label><?php echo $_SESSION['user_information']['email'];?></label><br /></div>
                          <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Gender :</span><label><?php ?></label><br /></div>
                          <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Program : </span><label><?php ?></label><br /></div>
                          <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Course : </span><label><?php ?></label><br /></div>
                          <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Email Add : </span><label><?php ?></label><br /></div>
                          <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Username : </span><label><?php ?></label><br /></div>
                          <div style="margin-top:5px"><span class="text-muted" style="margin-top:5px">Password : </span><label><?php ?></label><br /></div>
                    </div>
                    </div>      
            </div>
          