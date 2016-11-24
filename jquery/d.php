<?php 
	$con = mysqli_connect('localhost','root','','movies_db');
	if(!$con)
		die("error in connection");


	$query = "select * from movies";

	$rows = mysqli_query($con,$query);
	if(!$rows)
		die("error in selection");	

	$data = mysqli_fetch_all($rows,MYSQLI_ASSOC);

	echo json_encode($data);


 ?>

