<!DOCTYPE html>
<html>
<head>
	<title>
		Javascript
	</title>




</head>
<body>

<input type="text" name="" id="txt1" onkeyup="btnclick()" >
<input type="text" name="" id="txt2"  onkeyup="btnclick()">


<input type="button" name="" id="btn1" value="btn1" onclick="btnclick()" >


<span id="span1">ads </span>

<br><br>
<input type="text" name="" id="txt3">


</body>
</html>


<script type="text/javascript">
	
function btnclick()
{
	var txt1=document.getElementById('txt1').value;
	var txt2=document.getElementById('txt2').value
	var sum = parseInt(txt1)+parseInt(txt2)


	document.getElementById('span1').innerHTML = sum;
	document.getElementById('txt3').value=sum;
}	


	//document.write ("hello wolrd");

	var a=10;
	var b=20;
	var c=a+b;	
	document.getElementById('span1').innerHTML = c;
</script>
