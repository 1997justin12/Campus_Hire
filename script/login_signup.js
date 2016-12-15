var elements = [];
// var profile_pic = "";
// var formData = new FormData();
// var loadFile = function (event) 
//  				{
//                 var output = document.getElementById('preview');
//                     output.src = URL.createObjectURL(event.target.files[0]);
//  					    formData.append('file', event.target.files[0]);
//  					    	 profile_pic = event.target.files[0];
//  					    	 profile_pic = profile_pic['name'];
//  					    	 console.log(profile_pic);
//                 }
		

function verification_signup()
{

		var name = document.getElementsByName('app-name')[0];
		var address = document.getElementsByName('app-address')[0];
		var month = document.getElementsByName('app-birthday')[0];
		var day = document.getElementsByName('app-birthday')[1];
		var year = document.getElementsByName('app-birthday')[2]; 
		var gender = document.getElementsByName('app-gender')[0];
		var email = document.getElementsByName('app-email')[0];
		var school = document.getElementsByName('app-school')[0];
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
			if(address.value == "")
			{
				address.style.transition = "all 2s";
				address.style.border = "1px solid red";
				setTimeout(backto_normal,3000);
				elements.push(address);
			}
			if(month.value == "Month" || day.value == "Day" || year.value == "Year")
			{
				month.style.transition = "all 2s";
				day.style.transition = "all 2s";
				year.style.transition = "all 2s";
				month.style.border = "1px solid red";
				day.style.border = "1px solid red";
				year.style.border = "1px solid red";
				setTimeout(backto_normal,3000);
				elements.push(month);
				elements.push(day);
				elements.push(year);
			}
			if(gender.value == "Gender")
			{
				gender.style.transition = "all 2s";
				gender.style.border = "1px solid red";
				setTimeout(backto_normal,3000);
				elements.push(gender);
			}
			if(school.value == "")
			{
				school.style.transition = "all 2s";
				school.style.border = "1px solid red";
				setTimeout(backto_normal,3000);
				elements.push(school);
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
			var birthday = day.value+" "+month.value+" "+year.value;
			    gender = gender.options[gender.selectedIndex].value;
				var array_info = {
								 	name : name.value,
								 	address : address.value,
									gender : gender,
								 	birthday : birthday,
								 	email : email.value,
								 	school : school.value,
								 	course : course.value,
								 	user : username.value,
								 	pass : password.value
								 };
								 console.log(birthday);
					send_info(array_info);
			}
}

function company_verification_signup()
{
	
	var c_name = document.getElementsByName('comp-name')[0];
	var c_address = document.getElementsByName('comp-add')[0];
	var email = document.getElementsByName('comp-email')[0];
	var c_number = document.getElementsByName('comp-num')[0];
	var username = document.getElementsByName('comp-username')[0];
	var password = document.getElementsByName('comp-pass')[0];

		if(c_name.value == "")
			{
				c_name.style.transition = "all 2s";
				c_name.style.border = "1px solid red";
				setTimeout(backto_normal,3000);
				elements.push(c_name);
			}
		if(c_address.value == "")
			{
				c_address.style.transition = "all 2s";
				c_address.style.border = "1px solid red";
				setTimeout(backto_normal,3000);
				elements.push(c_address);
			}
		if(email.value == "")
			{
				email.style.transition = "all 2s";
				email.style.border = "1px solid red";
				setTimeout(backto_normal,3000);
				elements.push(email);
			}
		if(c_number.value == "")
			{
				c_number.style.transition = "all 2s";
				c_number.style.border = "1px solid red";
				setTimeout(backto_normal,3000);
				elements.push(c_number);
			}
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
								 	c_name : c_name.value,
								 	c_address : c_address.value,
								 	email : email.value,
								 	c_number : c_number.value,
								 	username : username.value,
								 	password : password.value
								 };

					send_company_info(array_info);
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

     //    $.ajax({
		   //  url: "../Database/Database_Applicant.php",
		   //  data: formData,
		   //  processData: false,
		   //  contentType: false,
		   //  type: 'POST',
		   //  success:function(data)
		   //  {
		   //  	console.log(data);
		   //  }
	    // });

		$.post
		(
			"../Database/Database_Applicant.php",
			{data:e},
			function success(data)
			{
					console.log(data);
			}
		);
	
}


function send_company_info(e)
{
		$.post
		(
			"../Database/Database_Company.php",
			{data:e},
			function success(data)
			{
				console.log(data);
			}
		);
}



