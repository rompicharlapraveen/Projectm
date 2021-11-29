function validate3()
{
	var patientname=document.f4.patientname.value;
	var password=document.f4.password.value;

	if(patientname=="")
	{
		alert("Patient Name Can not be empty");
		document.f4.patientname.focus()
		return false;
	}
	else if(password=="")
	{
		alert("Password Cannot be empty");
		document.f4.password.focus();
		return false;
	}
	else if(password.length<6)
	{
		alert("Password must be atleast 6 characters");
		document.f1.password.focus();
		return false;
	}
	
	else
	{
		return true;
	}
}
