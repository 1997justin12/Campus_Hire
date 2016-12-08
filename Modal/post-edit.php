<!-- FORM FOR POSTING JOB -->
<form>
  <div class="modal fade" id="select-action7" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <b><h3 class="modal-title" id="log-inLabel">Edit Post</h3></b>
         </div>
           <div class="modal-body">
              <label for="job-title" class="col-sm-2 control-label">Job Title</label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" name="job-title" placeholder="Job Title" required>
                <br>
              </div>
            <label for="job-description" class="col-sm-2 control-label">Job Description</label>
            <div class="col-sm-10">
                <textarea class="col-md-12" rows="10" placeholder="Job Description" style="margin-bottom:3%" required></textarea>
                <br>  
              </div>     
            <button type="submit" class="btn btn-success" onclick="dashboard()">Save</button>         
         </div>
     </div>
   </div>
  </div>
</form>
