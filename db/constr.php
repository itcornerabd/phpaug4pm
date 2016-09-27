<?php
	//error_reporting(0);
	$con = @mysqli_connect('localhost','root','','movies_db');
	if(!$con)
	{
		die("Error in connection please try again");
	}

	
 ?>