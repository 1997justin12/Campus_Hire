var elements = [];
var profile_pic = "";
var formData = new FormData();
var loadFile = function (event) 
 				{
                var output = document.getElementById('preview');
                    output.src = URL.createObjectURL(event.target.files[0]);
 					    formData.append('file', event.target.files[0]);
 					    	 profile_pic = event.target.files[0];
 					    	 profile_pic = profile_pic['name'];
 					    	 console.log(profile_pic);
                }

function verification_signup()
{
		var name = document.getElementsByName('app-name')[0];
		var email = document.getElementsByName('app-email')[0];
		var course = document.getElementsByName('app-course')[0];
		var username = document.getElementsByName('app-username')[0];
		var password = document.getElementsByName('app-pass')[0];
		

			if(name.value == "")
			{
				name.style.transition = "all 2s";
				name.style.border = "1px solid red";
				setTimeout(backto_normal,3000);
				elements.push(name);
			}
			if(email.value == "")
			{
				email.style.transition = "all 2s";
				email.style.border = "1px solid red";
				setTimeout(backto_normal,3000);
				elements.push(email);
			}
			if(course.value == "")
			{
				course.style.transition = "all 2s";
				course.style.border = "1px solid red";
				setTimeout(backto_normal,3000);
				elements.push(course);
			}
			if(username.value == "")
			{
				username.style.transition = "all 2s";
				username.style.border = "1px solid red";
				setTimeout(backto_normal,3000);
				elements.push(username);
			}
			if(password.value == ""|| password.value.length<8)
			{
				password.style.transition = "all 2s";
				password.style.border = "1px solid red";
				setTimeout(backto_normal,3000);
				elements.push(password);	
			}
			else
			{
				var array_info = {
								 	name : name.value,
								 	email : email.value,
								 	course : course.value,
								 	user : username.value,
								 	pass : password.value,
								 	prpic : profile_pic
								 };

					send_info(array_info);
			}
}


function check_user(e)
{
	if(e.value.length>4)
	{
		$.post
		(
			"../Database/Database_Applicant.php",
			{checking:e.value},
			function success(data)
			{
				if(data == "User Exist")
				{
					e.style.transition = "all 2s";
					e.style.border = "1px solid red";
				}
				else
				{
					e.style.transition = "all 2s";
					e.style.border = "1px solid #ccc";
				}
			}
		);
	}
	else
	{
		e.style.transition = "all 2s";
		e.style.border = "1px solid red";
	}

}

function login()
{
	var username = document.getElementById('inputEmail');
	var password = document.getElementById('inputPassword');

		if(username.value == "")
		{
			username.style.transition = "all 2s";
			username.style.border = "1px solid red";
			setTimeout(backto_normal,3000);
			elements.push(username);
		}
		if(password.value == "")
		{
			password.style.transition = "all 2s";
			password.style.border = "1px solid red";
			setTimeout(backto_normal,3000);
			elements.push(password);	
		}
		else
		{
			var array_info = {
							  	username : username.value,
							  	password : password.value
							 };
				send_info1(array_info);
		}
}

function backto_normal()
{
		for(x= 0; x<elements.length; x++)
		{
			elements[x].style.transition = "all 2s";
			elements[x].style.border = "1px solid #ccc";
		}
		elements = [];
		return;
}

function send_info1(e)
{
	$.post
	(
		"../Database/Database_Login.php",
		{login:e},
		function success(data)
		{
			if(data == "false")
			{
				console.log(data); 
			}
			else
			{
				window.location = data;
			}
		}
	);
}

function send_info(e)
{

        $.ajax({
		    url: "../Database/Database_Applicant.php",
		    data: formData,
		    processData: false,
		    contentType: false,
		    type: 'POST',
		    success:function(data)
		    {
		    	console.log(data);
		    }
	    });

		$.post
		(
			"../Database/Database_Applicant.php",
			{data:e},
			function success(data)
			{
					 window.location = "../Controller/Dashboard.php";
			}
		);
}
