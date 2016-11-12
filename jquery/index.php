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

	</style>

</head>
<body>

<div> div 1</div>
<div class="cls">div 2</div>
<div id="div3">div 3</div>

<span class="cls"> span 1 </span>
<span> span 2 </span>


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



</body>
</html>
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript">
// $("div").addClass('yellow');
// $("span").addClass('red');

$(".cls").addClass('red');
	
$("#div3").addClass('yellow');

 //$("td:contains(Action)").next().addClass('red');
//$("td:contains(Action)").parent().addClass('red');

 //$("tr:contains(Action)").addClass('red');

 //$("tr:eq(0)").addClass('red');

 // $("tr:even").addClass('red');

 // $("tr:odd").addClass('yellow');
// numbering starts from 0 irresoetive of parent 

	$("tr:nth-child(odd)").addClass('red');
	$("tr:nth-child(even)").addClass('yellow');
//numbering starts from 1 and respective to parent 

</script>


