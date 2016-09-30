<?php require('constr.php'); ?>

<?php 
	var_dump($_POST);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Movie Form</title>

<style type="text/css">
		
		table,tr,td,th
		{
			border:1px solid black;
			border-collapse: collapse;
		}
		table
		{
			width: 500px;
		}


</style>

</head>
<body>

<form method="POST">
		<table align="center">
			<tr>
				<td>Name</td>
				<td>
					<input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td>Cast</td>
				<td>
				<input type="text" name="cast">
				</td>
			</tr>
			<tr>
				<td>
					category
				</td>
				<td>
					<select name="categoryid">
						<option value="">select Category</option>
						<?php
							 $query = "select * from category order by name";

							 $rows = mysqli_query($con,$query);

							 if(!$rows)
							 	die("error in category selection");
							 while($rs=mysqli_fetch_array($rows)):
						 ?>	
							<option value="<?=$rs['id']?>" ><?=$rs['name'];?>  </option>

						<?php endwhile ?>	
					</select>
				</td>
			</tr>
			<tr>
				<td>plot</td>
				<td>
					<textarea name="plot"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="">
				</td>
			</tr>
		</table>

</form>


</body>
</html>
<?php require('closestr.php'); ?>
