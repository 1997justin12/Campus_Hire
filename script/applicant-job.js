var check_employee = setInterval(check_the_employee,100);
var count_employee = 0;
function check_the_employee()
{
	$.get(
		"../Database/Employee-Post.php?check-job",
		function success(data)
		{
			if(count_employee<data)
			{
				count_employee = data;
				display_the_employee();
			}
			
		}
		);
}

function display_the_employee()
{
	$("#table-job").html("");
	$.getJSON(
			"../Database/Employee-Post.php?applicant-job",
			function success(data)
			{
				
					$.each(data,function(key,event){
					var row = "";
						    row ="<tr>";
		                    row +="<td>"+event['name']+"</td>";
		                    row +="<td>"+event['address']+"</td>";
		                    row +="<td>"+event['email']+"</td>";
		   					row +="<td>"+event['contact']+"</td>";
		   					row +="<td><a data-toggle='modal' data-target='#myTask'>view</a></td>";
		   					row +="<td>"+event['date']+"</td>";
		                    row +="</tr>";

		                    $("#table-job").append(row);
					});
				  console.log(data);
			}
			);
}