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
		<ul>
		<?php  
		while($rs = mysqli_fetch_array($result)):
		?>
		<li>
			<?=$rs['name'];?>
		</li>
	<?php 		
		endwhile	
	  ?>
	</ul>

</body>
</html>
<?php require 'closestr.php'; ?>