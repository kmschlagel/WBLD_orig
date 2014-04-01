function checkme()
{
	var error = "";
	
	
	if(document.getElementById('name').value == "")
	{
		error = "Please enter your name.\n";
	}
		

	var user_email = document.getElementById('email').value;
	
	var reg_exp_email = /[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/;
	
	var valid_email = reg_exp_email.test(user_email);
	
	if(!valid_email)
	{
		error += "Please enter a valid email address.\n";
	}

	
	//don't change this part
	if(error == "")
	{
		return true;
	
	}
	else alert(error);
	{
		return false;	
	}
}