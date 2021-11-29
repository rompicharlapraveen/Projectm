function validate1()
{
	var doctorname=document.f2.doctorname.value;
	var department=document.f2.department.value;
	var experience=document.f2.experience.value;
	var address=document.f2.address.value;
	var phone=document.f2.phone.value;
        var date=document.f2.date.value;
	if(doctorname=="")
	{
		alert("Doctor Name Can not be empty");
		document.f2.doctorname.focus()
		return false;
	}
	else if(department=="")
	{
		alert("Department Cannot be empty");
		document.f2.department.focus();
		return false;
	}
	else if(experience=="")
	{
		alert("Experience Cannot be empty");
		document.f2.experience.focus();
		return false;
	}
	else if(address=="")
	{
		alert("Address Cannot be empty");
		document.f2.address.focus();
		return false;
	}
	else if(phone=="")
	{
		alert("Phone Number Can not be empty");
		document.f2.phone.focus();
		return false;
	}
	else if(isNaN(phone) || phone.indexOf(" ")!=-1)
	{
		alert("Phone Number must be numeric");
		document.f2.phone.focus();
        		return false;
	}
	else if (phone.length!=10)
  	{
                alert("Phone number must be 10 digits");
		document.f2.phone.focus();
       		return false;
	}
	else if(date=="")
	{
		alert("DOB Cannot be empty");
		document.f2.date.focus();
		return false;
	}
	else
	{
		return true;
	}
}
