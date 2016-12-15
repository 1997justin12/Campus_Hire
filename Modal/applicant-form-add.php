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
                <input type="text"  class="form-control" name="app-address" placeholder="Address" required>
                 <br>
              </div>
            </div>
            <br>

            <div class="col-sm-12">
              <div class="col-sm-3">
                <select class="form-control  col-sm-12"  name="app-birthday">
                  <option selected hidden>Month</option>
                  <option>January</option>
                  <option>February</option>
                  <option>March</option>
                  <option>April</option>
                  <option>May</option>
                  <option>June</option>
                  <option>July</option>
                  <option>August</option>
                  <option>September</option>
                  <option>October</option>
                  <option>November</option>
                  <option>December</option>
              </select>
                  <br>
              </div>
               <div class="col-sm-3">
                <select class="form-control col-sm-12"  name="app-birthday">
                  <option selected hidden>Day</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                  <option>04</option>
                  <option>05</option>
                  <option>06</option>
                  <option>07</option>
                  <option>08</option>
                  <option>09</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                  <option>15</option>
                  <option>16</option>
                  <option>17</option>
                  <option>18</option>
                  <option>19</option>
                  <option>20</option>
                  <option>21</option>
                  <option>22</option>
                  <option>23</option>
                  <option>24</option>
                  <option>25</option>
                  <option>26</option>
                  <option>27</option>
                  <option>28</option>
                  <option>29</option>
                  <option>30</option>
                  <option>31</option>
              </select>
                  <br>
              </div>
               <div class="col-sm-3">
                <select class="form-control" name="app-birthday">
                  <option selected hidden>Year</option>
                  <option>1990</option>
                  <option>1991</option>
                  <option>1992</option>
                  <option>1993</option>
                  <option>1994</option>
                  <option>1995</option>
                  <option>1996</option>
                  <option>1997</option>
                  <option>1998</option>
                  <option>1999</option>
                  <option>2000</option>
                  <option>2001</option>
                  <option>2002</option>
                  <option>2003</option>
                  <option>2004</option>
                  <option>2005</option>
                  <option>2006</option>
                  <option>2007</option>
                  <option>2008</option>
                  <option>2009</option>
                  <option>2010</option>
                  <option>2011</option>
                  <option>2012</option>
                  <option>2013</option>
                  <option>2014</option>
                  <option>2015</option>
                  <option>2016</option>
              </select>
                  <br>
              </div>
               <div class="col-sm-3">
                <select class="form-control" name="app-gender">
                  <option selected hidden>Gender</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
                <br>
                </div>
            </div>
            <br>

            <div class="col-sm-12">
              <div class="col-sm-12">
                <input type="text"  class="form-control" name="app-school" placeholder="School" required>
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

            <button  onclick="verification_signup()" name="forms" class="btn btn-lg btn-success">Register</button>
           </div>
     </div>
    </div>
  </div>

             