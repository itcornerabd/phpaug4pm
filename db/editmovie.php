<?php
	require 'constr.php';

	//var_dump($_POST);
	if(isset($_POST['name']))
	{
		$name = $_POST['name'];
		$cast =$_POST['cast'];
		$categoryid	=$_POST['categoryid'];
		$plot=$_POST['plot'];
		$id=$_POST['id'];

		if(!empty($name))
		{
			$query = "update movies set name ='$name', cast='$cast' , categoryid=$categoryid, plot='$plot' where id =$id   ";

			$result = mysqli_query($con,$query);
			if(!$result)
			{
				die("error in update");
			}
			else
			{
				header("location:table.php");
			}
		}
	}


	if(isset($_GET['id']))
	{
		$id=$_GET['id'];

		$query= "select * from movies where id = $id";
		
		$rows= mysqli_query($con,$query);
		if(!$rows)
			die("Error in fetching data");
	
		if(!$data=mysqli_fetch_array($rows))
		{
			die("Movie does not exits ");
		}	
	}
	else
	{
		die("Invalid Request");
	}

	//var_dump($data);

echo $data['categoryid'];

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
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
					<input type="text" name="name" value="<?=$data['name']?>"  >
				</td>
			</tr>
			<tr>
				<td>Cast</td>
				<td>
				<input type="text" name="cast" value="<?=$data['cast']?>" >
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

							 	if($rs['id']==$data['categoryid']) 
							 		$selected= "selected";	
							 	else
							 		$selected="";
						 ?>	
							<option value="<?=$rs['id']?>" <?=$selected?> ><?=$rs['name'];?>  </option>

						<?php endwhile ?>	
					</select>
				</td>
			</tr>
			<tr>
				<td>plot</td>
				<td>
					<textarea name="plot"><?=$data['plot']?></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="">
					<input type="hidden" name="id" value="<?=$id?>"> 
				</td>
			</tr>
		</table>

</form>

 	
</body>
</html>