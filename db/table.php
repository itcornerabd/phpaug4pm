<?php require('constr.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Movies List </title>
</head>
<body>


<a href="addmovie.php">Add new Movie</a>



	<?php 
		$query = "select m.id , m.name, m.cast,m.active , c.name as categoryname from movies as m  , category as c where 	m.categoryid = c.id 	 ";

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
			<th>Delete</th>
		</tr>
		<?php  
		while($rs = mysqli_fetch_array($result)):
		?>
		<tr>
			<td> <?=$rs['id']?> </td>
			<td> <?=$rs['name']?> </td>
			<td> <?=$rs['categoryname']?> </td>
			<td> <?=$rs['cast']?> </td>
			<td>
				<a href="details.php?id=<?=$rs['id']?>">Details</a>
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