function allchecked(list,checkall)
{
	if(!list.length)
	{
		if(list.value!='')
		{
			if(checkall.checked==true)
				list.checked=true;
			else
				list.checked=false;
		}
	}
	for(i=0;i < list.length;i++)
	{
		if(checkall.checked==true)
			list[i].checked=true;
		else
			list[i].checked=false;
	}
}

function validate(theform)
{
	delflag=false;

		for(i=0;i <= theform.del.length-1;i++)
		{

			if(theform.del[i].checked==true)delflag=true;
		}
	
		if(!theform.del.length && theform.del.checked)delflag=true;
	
		if(delflag==false)
		{
		alert("Please select any record to delete.");
		return false;
		}

		var agree=confirm("Are you sure you want to delete the selected record(s)?");
		if (agree)
		{
			theform.deleterec.value="";
			if(!theform.del.length && theform.del.checked)
			{
				if(theform.del.value!='')
				{	
					theform.deleterec.value=theform.del.value;
					//alert(theform.deleterec.value);
					theform.submit()
					return true;
				}
			}

			for(i=0;i < theform.del.length;i++)
			{
				if(theform.del[i].checked==true)
				{
					if(theform.deleterec.value=="")
					theform.deleterec.value=theform.del[i].value;
					else
					theform.deleterec.value=theform.deleterec.value +','+ theform.del[i].value;
				}
			}
				if(theform.deleterec.value=="")
				return false;
				else
				theform.submit();
				return true;
		}
		else
		{
		return false ;
		}
}
function validatesend(theform)
{
	delflag=false;

		for(i=0;i <= theform.del.length-1;i++)
		{

			if(theform.del[i].checked==true)delflag=true;
		}
	
		if(!theform.del.length && theform.del.checked)delflag=true;
	
		if(delflag==false)
		{
		alert("Please select any record to send message.");
		return false;
		}

		var agree=confirm("Are you sure you want to send message?");
		if (agree)
		{
			theform.sendrec.value="";
			if(!theform.del.length && theform.del.checked)
			{
				if(theform.del.value!='')
				{	
					theform.sendrec.value=theform.del.value;
					//alert(theform.deleterec.value);
					theform.submit()
					return true;
				}
			}

			for(i=0;i < theform.del.length;i++)
			{
				if(theform.del[i].checked==true)
				{
					if(theform.sendrec.value=="")
					theform.sendrec.value=theform.del[i].value;
					else
					theform.sendrec.value=theform.sendrec.value +','+ theform.del[i].value;
				}
			}
				if(theform.sendrec.value=="")
				return false;
				else
				theform.submit();
				return true;
		}
		else
		{
		return false ;
		}
}