var check_employee = setInterval(check_the_employee,100);
var count_employee = 0;
function check_the_employee()
{
	$.get(
		"../Database/Employee-Post.php?check",
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
	$("#table-employee").html("");
	$.getJSON(
			"../Database/Employee-Post.php?company-employee",
			function success(data)
			{
				
					$.each(data,function(key,event){
					var row = "";
						    row ="<tr>";
		                    row +="<td>"+event['name']+"</td>";
		                    row +="<td>"+event['address']+"</td>";
		                    row +="<td>"+event['email']+"</td>";
		   					row +="<td>create</td>";
		   					row +="<td>view</td>";
		   					row +="<td>rate</td>";
		                    row +="</tr>";

		                    $("#table-employee").append(row);
					});
				  console.log(data);
			}
			);
}