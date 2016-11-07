<?php require('constr.php'); ?>
<?php 

	if(!isset($_SESSION['userid']))
	{
		header("location:login.php");
	}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Movies List </title>
</head>
<body>


<h1>
	
	Welcome <?=$_SESSION['username'];?>
</h1>


<a href="addmovie.php">Add new Movie</a>

<a href="logout.php">logout</a>

<form method="GET" >
<input type="text" name="search">
<input type="submit" name="" value="Search">
</form>

	<?php 



		$query = "select m.id , m.name, m.cast,m.active , c.name as categoryname from movies as m  , category as c where 	m.categoryid = c.id  ";

		if(isset($_GET['search']))
		{
		$query .=  " and  ( m.name like '%". $_GET['search'] ."%' or m.cast like '%".$_GET['search']."%' )  ";
		}

	

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
			<th>Details</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php  
		while($rs = mysqli_fetch_array($result)):

			if($rs['active'])
				$bgcolor="#FFFFFF";
			else
				$bgcolor="#CCCCCC";



		?>
		<tr bgcolor="<?=$bgcolor?>">
			<td> <?=$rs['id']?> </td>
			<td> <?=$rs['name']?> </td>
			<td> <?=$rs['categoryname']?> </td>
			<td> <?=$rs['cast']?> </td>
			<td>
				<a href="details.php?id=<?=$rs['id']?>">Details</a>
			</td>
			<td>
				<a href="editmovie.php?id=<?=$rs['id']?>">Edit</a>
			</td>
			<td>
					<?php if($rs['active']): ?>
				<a href="delete.php?action=delete&id=<?=$rs['id']?>">Delete</a>
					<?php else: ?>
				<a href="delete.php?action=revert&id=<?=$rs['id']?>">Revert</a>
					<?php endif ?>	
			</td>
		</tr>
	<?php 		
		endwhile	
	  ?>
	</table>

</body>
</html>
<?php require 'closestr.php'; ?>