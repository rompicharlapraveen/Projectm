function validate4()
{
	var doctorname=document.f1.doctorname.value;
	var fathername=document.f1.fathername.value;
	var gender=document.f1.gender.value;
	var experience=document.f1.experience.value;
	var specialist=document.f1.specialist.value;
	var timings=document.f1.timings.value;
	var address=document.f1.address.value;
	var phone=document.f1.phone.value;
	var password=document.f1.password.value;
	var confirmpassword=document.f1.confirmpassword.value;
        var email=document.f1.email.value;

	if(doctorname=="")
	{
		alert("Doctor Name Can not be empty");
		document.f1.doctorname.focus()
		return false;
	}
	else if(fathername=="")
	{
		alert("Father Name Can not be empty");
		document.f1.fathername.focus()
		return false;
	}
	
	else if(gender=="")
	{
		alert("Gender Can not be empty");
		document.f1.gender.focus()
		return false;
	}
	else if(experience=="")
	{
		alert("Experience Can not be empty");
		document.f1.experience.focus()
		return false;
	}
	else if(specialist=="")
	{
		alert("Specialist Can not be empty");
		document.f1.specialist.focus()
		return false;
	}
	else if(timings=="")
	{
		alert("Timings Can not be empty");
		document.f1.timings.focus()
		return false;
	}
	else if(address=="")
	{
		alert("Address Can not be empty");
		document.f1.fathername.focus()
		return false;
	}
	else if(phone=="")
	{
		alert("Phone Number Can not be empty");
		document.f1.phone.focus();
		return false;
	}
	else if(isNaN(phone) || phone.indexOf(" ")!=-1)
	{
		alert("Phone Number must be numeric");
		document.f1.phone.focus();
        		return false;
	}
	else if (phone.length!=10)
  	{
                 alert("Phone number must be 10 digits");
		 document.f1.phone.focus();
       		 return false;
	}
	else if(password=="")
	{
		alert("Password cannot be empty");
		document.f1.password.focus();
		return false;
	}
	else if(password.length<6)
	{
		alert("Password must be atleast 6 characters");
		document.f1.password.focus();
		return false;
	}
	
               else if(password!=confirmpassword)
	{
		alert("Password and Confirm Password must be equal");
		document.f1.confirmpassword.focus();
		return false;
	}
	    else if(email=="")
        {
             alert("Enter your email!");
             document.f1.email.focus();
             return false;
         }
         

         
	else
	{
		return true;
	}
}
