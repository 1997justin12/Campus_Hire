   <div class="modal fade" id="select-action3" role="dialog">
  	<div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <b><h3 class="modal-title" id="log-inLabel">Add Applicant Account</h3></b>
         </div>
         <div class="modal-body">

            <div class="col-sm-12">
              <div class="col-sm-12">
                <input type="text"  class="form-control" name="app-name" placeholder="Applicant Name" required>
                 <br>
              </div>
            </div>
            <br>

            <div class="col-sm-12">
              <div class="col-sm-12">
                <input type="text"  class="form-control" name="app-course" placeholder="Course" required>
                 <br>
              </div>
            </div>
            <br>

            <div class="col-sm-12">
              <div class="col-sm-12">
                <input type="text"  class="form-control" name="app-email" placeholder="Email Add" required>
                 <br>
              </div>
            </div>
            <br>

           <div class="col-sm-12">
              <div class="col-sm-12">
                <input type="text"  class="form-control" onkeyup = "check_user(this)" name="app-username" placeholder="Username" required>
                 <br>
               </div>
              </div>
            <br>

              
           <div class="col-sm-12">
              <div class="col-sm-12">
                <input type="password"  class="form-control" name="app-pass" placeholder="Password" required>
                 <br>
              </div>
            </div> 
            <br>

            <div class="col-sm-12">
                        <div class="col-sm-2">
                          <span><input type="file" id="imgfile" name="imgfile" onchange="loadFile(event)" required/></span>
                        </div>
                        <div class="col-sm-10">
                          <img id="preview" style="width:100px;height:90px;margin-bottom: 5%; float: right" data-src="holder.js" class="img-responsive" alt="Profile Picture" class="col-sm-5" />
                        </div>
            </div>
            <button  onclick="verification_signup()" name="forms" class="btn btn-lg btn-success">Register</button>
           </div>
     </div>
    </div>
  </div>

             