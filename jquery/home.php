<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table,tr,td
		{
			border:1px solid black;
			border-collapse: collapse;
		}	

		table
		{
			width:600px;
		}

	</style>
	<title>Ajax Demo</title>
		
</head>
<body>
<center>
<table>
	<tr>
	<td width="50%">
		<ul>
			<li>
			   <a href="#" id="linka">	A</a>
			</li>
			<li>
				<a href="#" id="linkb"> B </a>
			</li>
			<li>
				<a href="#" id="linkc">C</a>
			</li>
			<li>
				<a href="#" id="linkd"> D </a>
			</li>
		</ul>	


	</td>
	<td>
		<div id="words">
			
		</div>	
	</td>
	</tr>	
</center>
</table>
 	
</body>
</html>

<script type="text/javascript" src="./js/jquery.js"></script>

<script type="text/javascript">
	
$("#linka").click(function(){

	$("#words").load('a.php');
})

$("#linkb").click(function(){

	var param = {'letter':'B' }

	$.get('b.php',param,function(response){
		 
		$("#words").html(response);

	})

})

$("#linkc").click(function(){

	var param = {'letter':'C'};

	$.post('c.php',param,function(response){

		$("#words").html(response);
	})
})


$("#linkd").click(function(){

	$.getJSON('d.php',function(jsonresponse){

		console.log(jsonresponse);	
		var html  = ''; 
		html = '<ul>';
		$.each(jsonresponse , function(key,value) {
			
			 
			 
			html+= '<li> '+value.name+' </li>';
		})
		
		html += '</ul>';
		$("#words").html(html);
	})

})



</script>
	
