<?php
	$fruits = ['Mango', 'apple','orange'];

	$fruits[]="Pinapple";		

	var_dump($fruits);
	print_r($fruits);
	
	$size = count($fruits);

	echo $size;

	for($i=0;$i<$size;$i++)
	{
		echo "<br>".$fruits[$i];	
	}

		// associative array
	$details = [ 'name'    =>'Dhiraj', 
				 'age'     => 26,
				 'location'=>'a.bad',
				 'color'   =>'black'];
	//var_dump($details);
	
	echo $details['location'];
	$size = count($details);
	echo $size;

	foreach($details as $feature => $value)
	{
		echo "<br>". $feature . " is "  .  $value;
	}









 ?>	