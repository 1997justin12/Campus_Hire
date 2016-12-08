   <div id="applicant-profile" class="col-sm-12" style="margin: 0 auto">
                    <h1>My Profile</h1>
                    <div class="row placeholders col-sm-11 " style = "border: 1px solid silver;padding:10px">
                       <div class="col-sm-4 placeholder">

                          <img  src="../Pictures/<?php echo $_SESSION['user_information']['profile_picture']?>"
                           style="width:250px;height:250px" data-src="holder.js/250x250/auto/sky"
                            class="img-responsive" alt="Generic placeholder thumbnail"/>

                          <h4><span class="glyphicon glyphicon-camera"></span></h4>
                            <a data-toggle="modal" data-target="#select-action10" ><span >Click to edit info</span></a>
                          </div>

                    <div class="col-sm-7 placeholder pull-left text-justify" style="float: right">
                          <div style="margin-top:5px;font-size: 3em;"><label><?php echo $_SESSION['user_information']['name'];?></label><br /></div>
                          
                          <div style="margin-top:5px;margin-left: 20px">
                          <span class="glyphicon glyphicon-education"></span>
                          <label><?php echo $_SESSION['user_information']['course'];?></label>
                          <br /></div>

                          <div style="margin-top:5px;margin-left: 20px"><span class="glyphicon glyphicon-envelope"></span>
                          <label><?php echo $_SESSION['user_information']['email'];?></label><br /></div>
                    </div>
                    </div>   
              
                    <div class="row placeholders col-sm-11" style = "border: 1px solid silver">
                    <div class="col-xs-6 col-sm-8 placeholder pull-left text-justify">
                         <div style="margin-top:5px;font-size: 2em;"><label>Overview</label><br /></div>
                         <div style="margin-top:5px;margin-left: 20px"><?php echo "I am willing to learn and understand things on my own"?><br /></div>
                    </div>   
                    </div>

                    <div class="row placeholders col-sm-11" style = "border: 1px solid silver">
                    <div class="col-xs-6 col-sm-8 placeholder pull-left text-justify">
                         <div style="margin-top:5px;font-size: 2em;"><label>Biography</label><br /></div>
                         <div style="margin-top:5px;margin-left: 20px">Studying at<?php?><br /></div>
                         <div style="margin-top:5px;margin-left: 20px">Studied<?php?><br /></div>
                         <div style="margin-top:5px;margin-left: 20px">Lives<?php?><br /></div>
                         <div style="margin-top:5px;margin-left: 20px">Gender<?php?><br /></div>
                         <div style="margin-top:5px;margin-left: 20px">Age<?php?><br /></div>
                         <div style="margin-top:5px;margin-left: 20px">Born in<?php?><br /></div>

                    </div>   
                    </div>

                    <div class="row placeholders col-sm-11" style = "border: 1px solid silver">
                    <div class="col-xs-6 col-sm-8 placeholder pull-left text-justify">
                         <div style="margin-top:5px;font-size: 2em;"><label>Skill</label><br /></div>
                         <div style="margin-top:5px;margin-left: 20px"><?php?><br /></div>
                    </div>   
                    </div>
</div>
          