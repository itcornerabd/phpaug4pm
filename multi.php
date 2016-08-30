<?php 

	$fruits = [
			   ['name'=>'Mango', 'rate'=> 12], 
			   ['name'=>'apple','rate'=>20],
			   ['name'=>'orange','rate'=>40]
			  ];


	var_dump($fruits);	

	foreach ($fruits as  $value)
		{
			echo $value['name']. " is at Rs." .  $value['rate'];
			echo "<br>";
		}	



 ?>


  