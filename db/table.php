<?php require('constr.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Movies List </title>
</head>
<body>


	<?php 
		$query = "SELECT * FROM movies ";

		$result = mysqli_query($con,$query); 

		if(!$result)
			die("error in fetching data"); 
		?>
		<table width="500px" align="center" border="1">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Category</th>
			<th>Cast</th>
		</tr>
		<?php  
		while($rs = mysqli_fetch_array($result)):
		?>
		<tr>
			<td> <?=$rs['id']?> </td>
			<td> <?=$rs['name']?> </td>
			<td> <?=$rs['categoryid']?> </td>
			<td> <?=$rs['cast']?> </td>
		</tr>
	<?php 		
		endwhile	
	  ?>
	</table>

</body>
</html>
<?php require 'closestr.php'; ?>