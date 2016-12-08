  <div class="modal fade" id="select-action10" role="dialog">
  	<div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <b><h3 class="modal-title" id="log-inLabel">Edit Applicant Account</h3></b>
         </div>
         <div class="modal-body">
            <div class="col-sm-12">
                    <label for="app-name" class="col-sm-2 control-label">Applicant Name</label>
              <div class="col-sm-10">
                <input type="text"  class="form-control" name="app-name" placeholder="Applicant Name" required>
                <br>
              </div>
            </div>
            <div class="col-sm-12">
              <label for="app-birth" class="col-sm-2 control-label">Birthdate</label>
              <div class="col-sm-10">
                <input type="date"  class="form-control" name="app-birth" placeholder="Birthdate" required>
                <br>
              </div>
            </div>

            <div class="col-sm-12">
              <label for="app-gender" class="col-sm-2 control-label">Gender</label>
              <div class="col-sm-3">
                <input type="radio" name="gender" value="male" checked> Male
              </div> 
              <div class="col-sm-3">
              <input type="radio" name="gender" value="female"> Female<br>
              </div>
              <div class="col-sm-8"></div>
            </div>

            <br>
            <div class="col-sm-12">
              <label for="app-program" class="col-sm-2 control-label">Program</label>
              <div class="col-sm-3">
                <input type="radio" name="program" value="undergraduate" checked>Undergrad
              </div>
              <div class="col-sm-3">
                <input type="radio" name="program" value="graduate">Graduate<br>
              </div>
              <div class="col-sm-8"></div>
            </div>
            <br>
            <div class="col-sm-12">
              <label for="app-course" class="col-sm-2 control-label">Course</label>
              <div class="col-sm-10">
                <input type="text"  class="form-control" name="app-course" placeholder="Course" required>
                <br>
              </div>
            </div>
            <br>
            <div class="col-sm-12">
              <label for="app-email" class="col-sm-2 control-label">Email Add</label>
              <div class="col-sm-10">
                <input type="text"  class="form-control" name="app-email" placeholder="Email Add" required>
                <br>
              </div>
            </div>
            <br>
            <div class="col-sm-12">
              <label for="app-username" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
                <input type="text"  class="form-control" name="app-username" placeholder="Username" required>
                <br>
              </div>
            </div>
            <br>
            <div class="col-sm-12">
              <label for="app-pass" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password"  class="form-control" name="app-pass" placeholder="Password" required>
                <br>
              </div>
            </div> 
            <br>
            <div class="col-sm-12">
              
              <label for="app-image" class="col-sm-2 control-label">Upload Image
                        </label>
                        <div class="col-sm-2">
                          <span><input type="file" id="imgfile" name="imgfile" onchange="loadFile(event)" required/></span>
                        </div>
                        <div class="col-sm-5">
                          <img id="preview" style="width:100px;height:100px;margin-left:70%;margin-top:5%" data-src="holder.js" class="img-responsive" alt="Generic placeholder thumbnail" class="col-sm-5" />
                        </div>
                        <script>
                            var loadFile = function (event) {
                                var output = document.getElementById('preview');
                                output.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
            </div>
            <button type="submit" class="btn btn-success">Register</button>
          </div>
     </div>
    </div>
  </div>
