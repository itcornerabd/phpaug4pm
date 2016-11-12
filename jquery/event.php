<!DOCTYPE html>
<html>
<head>
	<title>
		Jquery Demo
	</title>

	<style type="text/css">
		
		.yellow
		{
			background-color: yellow;
		}

		.red
		{
			background-color: red;
			color: white;
		}
		.blue	
		{
			background-color: blue;
			color: white;
		}

	</style>

</head>
<body>




<table width="500px" align="center" border="1">
		
			<tr bgcolor="#FFFFFF">
			<td> 1 </td>
			<td> Raaz Rebbot </td>
			<td> Action </td>
			<td> Emran  </td>
			
		</tr>
			<tr bgcolor="#FFFFFF">
			<td> 2 </td>
			<td> Flying Jat </td>
			<td> Comedy </td>
			<td> Tiger  </td>
			
		</tr>
			<tr bgcolor="#FFFFFF">
			<td> 3 </td>
			<td> updated movie </td>
			<td> Comedy </td>
			<td> sonme cast </td>
			
		</tr>
			<tr bgcolor="#FFFFFF">
			<td> 4 </td>
			<td> new movie </td>
			<td> Action </td>
			<td> asd </td>
			
		</tr>
			<tr bgcolor="#FFFFFF">
			<td> 5 </td>
			<td> another movie </td>
			<td> Comedy </td>
			<td> asasd </td>
			
		</tr>
		</table>

		<hr> 
		<button id="btn1" class="btn" data-cls="yellow" >yellow</button>
		<button id="btn2" class="btn" data-cls="red">red</button>
		<button id="btn3" class="btn" data-cls="blue"> blue</button>
</body>
</html>
<script type="text/javascript" src="./js/jquery.js"></script>

<script type="text/javascript">
		
		// $("#btn1").click(function(){
		// 	$("tr").removeClass();
		// 	$("tr").addClass('yellow');

		// })

		// $("#btn2").click(function(){
		// 	$("tr").removeClass();
		// 	$("tr").addClass('red');
		// })


		$(".btn").click(function(){
			var cls = $(this).attr('data-cls')
			
			//alert(cls);

			$("tr").removeClass();
			$("tr").addClass(cls);
		})

		$("tr").hover(function(){
			$(this).addClass('yellow');	
		})

		$("tr").mouseout(function(){
		$(this).removeClass('yellow');	
		})





</script>

