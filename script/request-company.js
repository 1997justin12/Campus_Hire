var check_request = setInterval(check_the_request,100);
var request_count = 0;
var applicant_id = 0;
var application_id = 0;
function check_the_request()
{
	$.get(
		"../Database/Request-Post.php?check",
		function success(data)
		{
			if(request_count<data){
				request_count = data;
				display_request();
			}
		
		}
		);
}

function display_request()
{
	$("#table-request").html("");
	$.getJSON(
			"../Database/Request-Post.php?request-applicant",
			function success(data)
			{
				
					$.each(data,function(key,event){
					var row = "";
						    row ="<tr>";
		                    row +="<td>"+event['name']+"</td>";
		                    row +="<td>"+event['address']+"</td>";
		                    row +="<td>"+event['email']+"</td>";
		   					row +="<td>"+event['gender']+"</td>";
		   					row +="<td><a href = '../Controller/Profile.php?applicant-profile="+event['applicant_id']+"'>info</td>";
		   					row +="<td data-toggle='modal' data-target='#myReview' onmousedown='set_applicant_id("+event['applicant_id']+","+event['application_id']+")'>Review</td>";
		                    row +="</tr>";

		                    $("#table-request").append(row);
					});
				  console.log(data);
			}
			);
}

function set_applicant_id(e,e1)
{
	applicant_id = e;
	application_id = e1;
}

function applicant_request(e)
{
	var request = {
				applicant_id : applicant_id,
				application_id :application_id,
				status : e
					};

		$.post(
			"../Database/Request-Post.php",
			{status_request : request},
			function success(data)
			{
				console.log(data);
			}
			);
}	
