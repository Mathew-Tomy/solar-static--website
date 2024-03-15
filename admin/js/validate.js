function validate_certificate(thisform)
{
	 with (thisform)
	{
	if(emptyvalidation(sregno,"Please fill Registration Number.")==false)	
    {
		sregno.focus();
		return false;
    }
	if(emptyvalidation(sname,"Please fill Student name.")==false)	
    {
		sname.focus();
		return false;
    }
	
	}
thisform.submit();
return true;
}
function validate_category(thisform)
{
	 with (thisform)
	{
	if(emptyvalidation(category,"Please fill Category.")==false)	
    {
		category.focus();
		return false;
    }
	
	
	}
thisform.submit();
return true;
}
function validate_slider(thisform)
{
	with(thisform)

 {
	if(emptyvalidation(course,"Please select Course.")==false)	
    {
		course.focus();
		return false;
    }
	
	
 }
thisform.submit();
return true;
}
function validate_ads(thisform)
{
thisform.submit();
return true;
}
function validate_about(thisform)
{
thisform.submit();
return true;
}
function validate_auth(thisform)
{
	with(thisform)

 {
	if(emptyvalidation(title,"Please fill Title.")==false)	
    {
		title.focus();
		return false;
    }
	
	
 }
thisform.submit();
return true;
}
function validate_logo(thisform)
{
	
thisform.submit();
return true;
}
function validate_designation(thisform)
{
	 with (thisform)
	{
	if(emptyvalidation(designation,"Please fill Designation.")==false)	
    {
		designation.focus();
		return false;
    }
	
		
	}
thisform.submit();
return true;
}
function validate_news(thisform)
{
	 with (thisform)
	{
	if(emptyvalidation(newsdate,"Please fill Date.")==false)	
    {
		newsdate.focus();
		return false;
    }
	if(emptyvalidation(title,"Please fill Title.")==false)	
    {
		title.focus();
		return false;
    }
		
	}
thisform.submit();
return true;
}
function validate_brochure(thisform)
{	 with (thisform)
	{
	if(emptyvalidation(brochure,"Please select Brochure.")==false)	
		{	
	brochure.focus();
	return false;  
	}	
	}
	thisform.submit();
	return true;
	}
function validate_franchise(thisform)
   {
	   with (thisform)
	{
	if(emptyvalidation(frname,"Please fill Franchise Name.")==false)	
		{	
	frname.focus();
	return false;  
	}	
	}
	thisform.submit();
	return true;
	}
	function validate_branch(thisform)
   {
	   with (thisform)
	{
	if(emptyvalidation(brname,"Please fill Branch Name.")==false)	
		{	
	brname.focus();
	return false;  
	}	
	}
	thisform.submit();
	return true;
	}
function validate_location(thisform)
{
	 with (thisform)
	{
	if(emptyvalidation(location,"Please fill Location.")==false)	
    {
		location.focus();
		return false;
    }
	
		
	}
thisform.submit();
return true;
}
function validate_feature(thisform)
{
	 with (thisform)
	{
	if(emptyvalidation(feature,"Please fill feature.")==false)	
    {
		feature.focus();
		return false;
    }
	
		
	}
thisform.submit();
return true;
}
function validate_quali(thisform)
{
	 with (thisform)
	{
	if(emptyvalidation(qualification,"Please fill Qualification.")==false)	
    {
		qualification.focus();
		return false;
    }
	
		
	}
thisform.submit();
return true;
}
function validate_skills(thisform)
{
	 with (thisform)
	{
	if(emptyvalidation(skills,"Please fill Skill.")==false)	
    {
		skills.focus();
		return false;
    }
	
		
	}
thisform.submit();
return true;
}
function validate_course(thisform)

{
 with (thisform)
	{
	if(emptyvalidation(title,"Please fill Title.")==false)	
    {
		title.focus();
		return false;
    }
	
		
	}

 thisform.submit();
	return true;
}
function validate_testimonials(thisform)

{
 with (thisform)
	{
	
	if(emptyvalidation(posted_by,"Please fill Posted By.")==false)	
    {
		posted_by.focus();
		return false;
    }
	if(emptyvalidation(testimonial,"Please fill Testimonial.")==false)	
    {
		testimonial.focus();
		return false;
    }	
	}

 thisform.submit();
	return true;
}
function validate_vaccancy(thisform)

{
 with (thisform)
	{
	if(emptyvalidation(vaccancy,"Please fill Vaccancy Name.")==false)	
    {
		vaccancy.focus();
		return false;
    }
	if(emptyvalidation(skills,"Please fill Skills.")==false)	
    {
		skills.focus();
		return false;
    }
	if(emptyvalidation(qualification,"Please fill Qualification.")==false)	
    {
		qualification.focus();
		return false;
    }
if(emptyvalidation(location,"Please fill Location.")==false)	
    {
		location.focus();
		return false;
    }	
if(emptyvalidation(gender,"Please select Gender.")==false)	
    {
		gender.focus();
		return false;
    }
if(emptyvalidation(age,"Please fill Age Range.")==false)	
    {
		age.focus();
		return false;
    }
	if(emptyvalidation(salary,"Please fill Salary.")==false)	
    {
		salary.focus();
		return false;
    }
	
	}

 thisform.submit();
	return true;
}
function validate_seeker(thisform)

{
 with (thisform)
	{
	if(emptyvalidation(sregno,"Please fill Register Number.")==false)	
    {
		sregno.focus();
		return false;
    }
	if(emptyvalidation(sname,"Please fill Name.")==false)	
    {
		sname.focus();
		return false;
    }
	if(emptyvalidation(semail,"Please fill Email Address.")==false)	
    {
		semail.focus();
		return false;
    }
	if(emailvalidation(semail,"Sorry, You have entered an Invalid Email Address.")==false)
		        {
			semail.select();
			semail.focus();
			return false;
		        }
	if(emptyvalidation(sphone,"Please fill Mobile Number.")==false)	
    {
		sphone.focus();
		return false;
    }
	if(emptyvalidation(sgender,"Please select Gender.")==false)	
    {
		sgender.focus();
		return false;
    }
	
	if(emptyvalidation(sskills,"Please fill Skills.")==false)	
    {
		sskills.focus();
		return false;
    }
	if(emptyvalidation(squali,"Please fill Qualification.")==false)	
    {
		squali.focus();
		return false;
    }
if(emptyvalidation(slocation,"Please fill Location.")==false)	
    {
		slocation.focus();
		return false;
    }	


	
	}

 thisform.submit();
	return true;
}
function validate_placedstudents(thisform)

{
 with (thisform)
	{
	if(emptyvalidation(sregno,"Please fill Register Number.")==false)	
    {
		sregno.focus();
		return false;
    }
	if(emptyvalidation(sname,"Please fill Name.")==false)	
    {
		sname.focus();
		return false;
    }
	if(emptyvalidation(semail,"Please fill Email Address.")==false)	
    {
		semail.focus();
		return false;
    }
	if(emailvalidation(semail,"Sorry, You have entered an Invalid Email Address.")==false)
		        {
			semail.select();
			semail.focus();
			return false;
		        }
	
	if(emptyvalidation(sgender,"Please select Gender.")==false)	
    {
		sgender.focus();
		return false;
    }
	
	if(emptyvalidation(sskills,"Please fill Skills.")==false)	
    {
		sskills.focus();
		return false;
    }
	if(emptyvalidation(squali,"Please fill Qualification.")==false)	
    {
		squali.focus();
		return false;
    }
if(emptyvalidation(slocation,"Please fill Location.")==false)	
    {
		slocation.focus();
		return false;
    }	


	
	}

 thisform.submit();
	return true;
}
function validate_emails(thisform)
{ 
	with (thisform)
	{
	
		if(email_to.value=="")
		{
	    alert("Please fill in To Email Address.");
		email_to.focus();
		return false;
		}
		if(emailvalidation(email_to,"Sorry, You have entered an Invalid Email Address.")==false)
		        {
			email_to.select();
			email_to.focus();
			return false;
		        }
		if(email_bcc.value!="")
		{
			if(emailvalidation(email_bcc,"Sorry, You have entered an Invalid Email Address.")==false)
		        {
			email_bcc.select();
			email_bcc.focus();
			
			return false;
		        } 
		}
			
			if(email_cc.value!="")
		{
			if(emailvalidation(email_cc,"Sorry, You have entered an Invalid Email Address.")==false)
		        {
			email_cc.select();
			email_cc.focus();
			
			return false;
		        } 
		}		
			
	}

	thisform.submit();
	return true;
}
function validate_pass(thisform)
{ 
	with (thisform)
	{
		
	
	if(emptyvalidation(cPassword,"Please fill in your Current Password.")==false) 
			{
			cPassword.focus();
			return false;
			}
			if(emptyvalidation(nPassword,"Please fill in your New Password.")==false) 
			{
			nPassword.focus();
			return false;
			}
			if (nPassword.value.length<6) 
			{
			alert("Password should contain atleast 6 characters.");
			nPassword.focus();
			return false;
			}
		if (emptyvalidation(confirmPassword,"Please fill in your Confirmation Password.")==false) 
			{
			confirmPassword.focus();
	    	return false;
	    	}
		if (nPassword.value!=confirmPassword.value) 
			{
			alert("Password Mismatch.");
			confirmPassword.focus();
			return false;
			}
					
	}

	thisform.submit();
	return true;
}


function emptyvalidation(entered, alertbox)
{
	with (entered)
	{
		while (value.charAt(0) == ' ')
			value = value.substring(1);
		while (value.charAt(value.length - 1) == ' ')
			value = value.substring(0, value.length - 1);
		if (value==null || value=="")
		{
			if (alertbox!="") alert(alertbox);
			return false;
		}
		else return true;
	}
}
function emailvalidation(entered,alertbox)
{
	with (entered)
	{
		lastpos=value.length-1;//Total Letters
		apos=value.indexOf("@"); //Total letters before @
		dotpos=value.lastIndexOf(".");//Total letters before .
		beforeStr=value.substring(0,apos);
		afterStr=value.substring(apos);
		dotafatpos=afterStr.indexOf(".");
		udslpos=beforeStr.lastIndexOf("_");
		dotfpos=beforeStr.indexOf(".");
		dotlpos=beforeStr.lastIndexOf(".");
		if (apos<1 || dotpos-apos<2 || lastpos-dotpos>3 || lastpos-dotpos<2 || dotfpos!=dotlpos || apos-1==udslpos || dotafatpos==1) 
		{if (alertbox) {alert(alertbox);} return false; }
		else {return true;}
	}

/*----------vaidation contact----*/

}
