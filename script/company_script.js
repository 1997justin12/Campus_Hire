var elements = [];

function post_job()
{
	var job_title = document.getElementsByName('job')[0];
	var job_description = document.getElementsByName('job-description')[0];

		console.log(job_title.value+" "+job_description.value);
}

function company_verification_signup()
{
	console.log("test");
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