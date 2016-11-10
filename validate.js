function validate()
{
	//alert('form sumitted');

	if( document.getElementById('txtname').value =="")
			{
				alert('please fill your name');
				document.getElementById('txtname').focus();
				return false;
			}

	if(document.getElementById('selcity').value=="")
	{
				alert('please select your city');
				document.getElementById('selcity').focus();
				return false;

	}		

	var radgender1 = document.getElementById('radgender1').checked;
	var radgender2 = document.getElementById('radgender2').checked;

	if (!(radgender1 || radgender2))
	{
		alert('please select gender');
		document.getElementById('radgender1').focus();
		return false;	
	}

	var chkflag =false; 
	for (var i =1; i <= 4; i++) 
	{
		if(document.getElementById('chkhobby'+i).checked)
			{
				chkflag=true;
				break;
			}
	}	
	if(!chkflag)
	{
		alert('please select atleast one hobby');
		document.getElementById('chkhobby1').focus();
		return false;
	}	
	
	return true;
}