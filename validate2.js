function validate2()
{
	var problem=document.f3.problem.value;
	var date=document.f3.date.value;
	var patientname=document.f3.patientname.value;
	var gender=document.f3.gender.value;
        var age=document.f3.age.value;
	var city=document.f3.city.value;
	var location=document.f3.location.value;
	var hname=document.f3.location.value;
	if(problem=="")
	{
		alert("Problem Can not be empty");
		document.f3.problem.focus()
		return false;
	}
	else if(date=="")
	{
		alert("Date And Time Cannot be empty");
		document.f3.date.focus();
		return false;
	}
	else if(patientname=="")
	{
		alert("Patient Name Cannot be empty");
		document.f3.patientname.focus();
		return false;
	}
	else if(gender=="")
	{
		alert("Gender Can not be empty");
		document.f3.gender.focus();
		return false;
	}
	else if(age=="")
	{
		alert("Age Can not be empty");
		document.f3.age.focus();
		return false;
	}
	else if(city=="")
	{
		alert("City Can not be empty");
		document.f3.city.focus();
		return false;
	}
	else if(location=="")
	{
		alert("Location Can not be empty");
		document.f3.location.focus();
		return false;
	}
	else if(hname=="")
	{
		alert("Hospital_Name Can not be empty");
		document.f3.hname.focus();
		return false;
	}
	
	else
	{
		return true;
	}
}
