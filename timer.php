<!DOCTYPE html>
<html>
<head>
	<title>
		Timer Function
	</title>
</head>
<body>

<input type="button" id="btn1" onclick="btn1click()" value="button ">
<br><br>
<input type="button" onclick="start()" value="start">
<input type="button" onclick="stop()" value="stop">

<br><br>

<span id="timerspan"></span>

</body>
</html>

<script type="text/javascript">
	
function btn1click()
{
	setTimeout(function(){

				alert('in aninymous function')

						} ,3000)			
}



var i=10000;  // 

var t;

function start()
{

	t=setInterval(function(){

			i--;
			var min ,sec

				min = parseInt( i/60); 
				sec = i%60;

			document.getElementById('timerspan').innerHTML =  min +" min " +  sec + " Sec Remaining "

			if(i==0)
				{
					stop();
					document.getElementById('timerspan').innerHTML = "Times Up";
				}
	},1000)

}


function stop()
{
	clearInterval(t);
}
</script>
