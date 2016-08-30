<?php 
$a=9;

	if($a>=10)
	{
		$b=20;
	}

	if(isset($b)) // to check given variable is defined or not
	{
		echo $b;	
	}
	else
	{	

		die("some error occured please try again");
		 // program stop , parameter will print 
		// echo "b is not defined";
		// exit(1688); //program stop , parameter reported to os

	}	
	
	echo "<br>";	
	if(is_int($b)) // to check given var is integer or not
	{
		echo "b is integer";
	}
	else
	{
		echo "b is not integer";
	}

	echo "<br>";
	if(is_numeric($b))// to check given var is numeric or not
	{
		echo "b is numeric";
	}
	else
	{
		echo "b is not numeric";
	}
	// is_string is_real is_array is_bool	

 ?>	
