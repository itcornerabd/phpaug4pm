<?php 
	require 'constr.php';
	//delete query 
	if(isset($_GET['id']) && isset($_GET['action']))
	{
		$action=$_GET['action'];
		$id= $_GET['id'];

		//$query= "delete from movies where id =$id";
		
		if($action=="delete")
		$query= "update movies set active=0 where id =$id";
		else
		$query= "update movies set active=1 where id =$id";
				

		$result = mysqli_query($con,$query);

		if(!$result)
			die("error in delete");
	}
	header("location:table.php");
require 'closestr.php';
 ?>