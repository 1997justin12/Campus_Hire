var selected = [];
	function choose_works(e)
	{
		var display= document.getElementById("selected-options");
		var works = "";
		selected.push(e.value);
	
		for(x=0;x<selected.length;x++)
			works+="<div class='the_select' style='display:inline-block;border:1px solid silver;margin:2px;padding:5px;text-align:center'>"+selected[x]+"</div>";
		display.innerHTML = works;
	}

function post_the_jobs(e)
{
	var description = document.getElementById("job_description");
	var courses = document.getElementsByClassName("the_select");
	var course = "";

		for(x=0;x<courses.length;x++)
		{
			if(x == courses.length - 1)
				course += courses[x].innerHTML;
			else
				course += courses[x].innerHTML+",";
		}

	var post_job = {
					id : e,
					course : course,
					description : description.value
					};
					console.log(post_job);
		$.post(
			"../Database/Database_Modal.php",
			{job:post_job},
			function success(data)
			{
				console.log(data);
			}
			);
}

window.onload = search_work;
function search_work()
{
	$.getJSON(
		"../Database/Database_Modal.php?work",
		function success(data)
		{
			
			$.each(data,function(key,event){
				var options = "";
					options += "<option>"+event['name']+"</option>";

					$("#job_for").append(options);
			});
		}
		);
}
