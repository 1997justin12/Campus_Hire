var post = 0;
var time = setInterval(check_changes,100);

function check_changes()
{
		
	$.get(
		"../Database/Home-Post.php?check",
		function success(data)
		{
				if(post<data)
				{
					post = data;
					post_the_jobs();
				}
		}
		);
}

function post_the_jobs()
{

	// var loading = '<object data="../Pictures/gears.svg" type="image/svg+xml"></object>';
	// 	$('#posting_jobs').append(loading);
	$.getJSON(
		"../Database/Home-Post.php?getPost",
		function success(data)
		{
			console.log(data);
			$('#posting_jobs').html("");
			$.each(data,function(key,event){

				var tmp_courses = event['courses'].split(",");
				var course = "";
				var post = "";
					if(tmp_courses.length>1)
					{
						for(x=0;x<tmp_courses.length;x++)
						{
							course +='<div class="col-sm-2 label label-success" style="border:1px solid silver;font-size:.8em;padding:0;margin:2px;text-align:center;overflow-y:none">'+tmp_courses[x]+'</div>';
						}
							post +='<div class = "col-sm-12 post">';
							post +='<div class = "col-sm-12 post-name" style="padding:0">'+course+'</div>';
							post +='<div class="col-sm-12 post-body" style="padding:0">'+event['job_description']+'</div>';
							post +='<div class = "col-sm-12 post-bottom" style="padding:0">';
								if(event['App_id']==null)
								post +='<input type = "button" onclick="apply_job('+event['job_id']+','+event['company_id']+',this)" class = "btn btn-success apply-button" value = "Apply" style ="width:80px;margin:2px" >';
								else
								post +='<input type = "button" onclick="apply_job('+event['job_id']+','+event['company_id']+',this)" class = "btn btn-success apply-button" value = "Apply" style ="width:80px;margin:2px" disabled>';	
							post +='<input type = "button" id = "'+event['company_id']+'" class = "btn btn-info" value = "Info" style ="width:80px;margin:2px">';
							post +='</div></div>';
					}
					else
					{
							post +='<div class = "col-sm-12 post">';
							post +='<div class = "col-sm-12 post-name" style="padding:0"><div class="col-sm-2 label label-success" style="border:1px solid silver;font-size:.8em;padding:2px;margin:2px;text-align:center">'+event['courses']+'</div></div>';
							post +='<div class="col-sm-12 post-body" style="padding:0">'+event['job_description']+'</div>';
							post +='<div class = "col-sm-12 post-bottom" style="padding:0">';
								if(event['App_id']==null)
								post +='<input type = "button" onclick="apply_job('+event['job_id']+','+event['company_id']+',this)" class = "btn btn-success apply-button" value = "Apply" style ="width:80px;margin:2px" >';
								else
								post +='<input type = "button" onclick="apply_job('+event['job_id']+','+event['company_id']+',this)" class = "btn btn-success apply-button" value = "Apply" style ="width:80px;margin:2px" disabled>';	
							post +='<input type = "button" id = "'+event['company_id']+'" class = "btn btn-info" value = "Info" style ="width:80px;margin:2px">';
							post +='</div></div>';
					}
				$('#posting_jobs').append(post);
			});
		}
		);
}

function apply_job(e,e1,e2)
{
	e2.disabled = true;
	var application = {
					job_id : e,
					company_id : e1
					};

	$.post(
		"../Database/Home-Post.php",
		{application:application},
		function success(data)
		{
			console.log(data);
		}
		);

}