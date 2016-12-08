      <script type="text/javascript">      
        function profile(){
          document.getElementById("company-profile").style.display = "block";
          document.getElementById("company-activity").style.display = "none";
          document.getElementById("post-job").style.display = "none";
        }
        function applicant1(){
          document.getElementById("applicant-list").style.display = "block";
          document.getElementById("company-activity").style.display = "none";
          document.getElementById("company-profile").style.display = "none";
          document.getElementById("post-job").style.display = "none";
        }
        function postJob(){
          document.getElementById("post-job").style.display = "block";
          document.getElementById("company-activity").style.display = "none";
          document.getElementById("company-profile").style.display = "none";
          document.getElementById("applicant-list").style.display = "none";
        }
        function dashboard(){
          document.getElementById("post-job").style.display = "none";
          document.getElementById("company-activity").style.display = "block";
          document.getElementById("company-profile").style.display = "none";
          document.getElementById("applicant-list").style.display = "none";
        }

        function jobvacany(){
          document.getElementById("list-company").style.display = "none";
          document.getElementById("applicant-profile").style.display = "none";
          document.getElementById("list-job").style.display = "block";
        }
        function dashboardA(){
          document.getElementById("list-company").style.display = "block";
          document.getElementById("applicant-profile").style.display = "none";
          document.getElementById("list-job").style.display = "none";
        }

        function applicant(){
          document.getElementById("applicant").style.display = "block";
          document.getElementById("company").style.display = "none";
        }

        function company(){
          document.getElementById("applicant").style.display = "none";
          document.getElementById("company").style.display = "block";
        }
      </script>