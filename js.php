<!DOCTYPE html>
<html>
<head>
	<title>
		Javascript
	</title>




</head>
<body>

<input type="text" name="" id="txt1" class="txt"  >
<input type="text" name="" id="txt2"   class="txt">


<input type="button" name="" id="btn1" value="btn1"  >

<input type="button" name="" id="btn2" value="btn2" >

<span id="span1">ads </span>

<br><br>
<input type="text" name="" id="txt3">


</body>
</html>
<script type="text/javascript" src="./js/jquery.js"></script>


<script type="text/javascript">

 $("#txt1").keyup(function(){

 	 var txt1=  $("#txt1").val()
 	 var txt2=  $("#txt2").val()
 	 var total = parseInt(txt1)+parseInt(txt2)

 	 $("#txt3").val(total);
 	 $("#span1").html(total);
 })

$("#btn1").click(function(){

	$("#txt1").keyup()
})





// function btn2click()
// {
	
// 	alert('button clicked');
// }
	
// function btnclick()
// {
// 	var txt1=document.getElementById('txt1').value;
// 	var txt2=document.getElementById('txt2').value
// 	var sum = parseInt(txt1)+parseInt(txt2)


// 	document.getElementById('span1').innerHTML = sum;
// 	document.getElementById('txt3').value=sum;
// }	


// 	//document.write ("hello wolrd");

// 	var a=10;
// 	var b=20;
// 	var c=a+b;	
// 	document.getElementById('span1').innerHTML = c;
</script>
