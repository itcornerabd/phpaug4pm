<?php
	require 'constr.php';


	if(isset($_GET['id']))
	{
		$id=$_GET['id'];

		//$query= "select * from movies where id = $id";
		$query= "select  m.id , m.name, m.cast,m.plot , c.name as categoryname from movies as m  , category as c where 	m.categoryid = c.id and m.id = $id";

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
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Movie Details
	</title>
</head>
<body>
 
<h1> <?=$data['name']?>  </h1>
<h2> <?=$data['cast']?>  </h2>
<p> <?=$data['plot']?>  </p>
<h3> <?=$data['categoryname']?>  </h3>


</body>
</html>
<?php require 'closestr.php'; ?>