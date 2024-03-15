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
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
