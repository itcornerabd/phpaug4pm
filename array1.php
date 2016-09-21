<?php 

	//$no = array(10,20,40,15,35);
	$a = [10,20,40,15,35];

	var_dump($a);

	print_r($a);

	$size = count($a);
	echo $size;
	// echo $a; invalid stmnt

	for($i=0;$i<$size;$i++)
	{
		echo $a[$i]. "<br>";
	} 
	//associative array
	$cat = [ 'legs'=>4, 'color'=>'black','age'=> 2,'diet'=>'veg']; 

	var_dump($cat);

	echo $cat['age'];
	$size = count($cat);
	foreach($cat as $key => $value )
	{
		echo $key . " is " .  $value . "<br>";
	}
 ?>