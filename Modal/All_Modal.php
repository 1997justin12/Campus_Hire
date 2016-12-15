 <script type="text/javascript" src = "../script/modal-script.js"></script>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content col-sm-12">
        <div class="modal-header col-sm-12">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Post a Job </h4>
        </div>
        <div class="modal-body col-sm-12">
      <select class="form-control" id="job_for" placeholder="Choose" style="margin-bottom: 10px" onchange="choose_works(this)">
		    <option value="" disabled selected>Job For</option>
 	  </select>
 	  	<p  id="selected-options" style="margin-bottom: 10px">
 	  		
 	  	</p>
          <textarea id = "job_description" class="col-sm-12" style="height: 200px;resize:none;padding: 0">
          	
          </textarea>
        
        </div>
        <div class="modal-footer col-sm-12" style="margin-top: 20px" >
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="post_the_jobs(<?php echo $_SESSION['user_id'];?>)">Post</button>
        </div>
      </div>
    </div>
  </div>
  
  <!--Task Modal  -->
   <div class="modal fade" id="myTask" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">To - do - List</h4>
        </div>
        <div class="modal-body col-sm-12">
          <div class = "col-sm-12" style = "padding: 2px">
            <input type="text" name="task-title" class = "form-control" placeholder = "task title" disabled>
          </div>
          <div class = "col-sm-6" style = "padding: 2px">
           <input type="text" name="task-status" class= "form-control col-sm-6" placeholder = "task status" disabled>
          </div>
          <div class = "col-sm-6" style = "padding: 2px">
           <input type="text" name="task-status" class= "form-control col-sm-6" placeholder = "task status" disabled>
          </div>
      
            <textarea class="col-sm-12" style="height: 200px;resize:none;padding: 0; margin-top: 10px" disabled></textarea>
       
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!--Reques Info Modal  -->
   <div class="modal fade" id="myReview" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Request Review</h4>
        </div>
        <div class="modal-body col-sm-12 text-center" >
        This applicant are waiting for your responds.
        </div>

        <div class="modal-footer" style="text-align: center">
          <button type="button" class="btn btn-success" data-dismiss="modal" onclick="applicant_request('approved')" style="width: 80px">Approved</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="applicant_request('delete')" style="width: 80px">Delete</button>
        </div>
      </div>
      
    </div>
  </div>







