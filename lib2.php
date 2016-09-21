<?php 

	$a=5;
	if($a>=10)
	{
		$b="20";
	}


	if(isset($b)) // to check given varible is defined or not
	{
		echo $b;	
	}
	else
	{
		//echo "b is not defined";

		//exit();
		die("b is not defined");
	}
	
	if(is_int($b)) // to check integer or not
	{
		echo "<br> b is integer";
	}
	else
	{
		echo "<br> b is not integer";
	}

	if(is_numeric($b)) // to check data is numeric 
	{
		echo "<br> b is numeric";
	}
	else
	{
		echo "<br> b is not numeric";
	}
	// is_string is_array is_float 


 ?>	
