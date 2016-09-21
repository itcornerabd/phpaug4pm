<?php 

	$multi = [ 
				[10,20,30],
				[50,60,70,80],
				[100,200]
			 ];

	var_dump($multi);		 

	echo $multi[0][2];

	for ($i=0; $i<count($multi) ; $i++) // 0 ,1,2
	{ 
		for ($j=0; $j <count($multi[$i]); $j++) 
		{ 
			echo "<br>". $multi[$i][$j]	;
		}
	}
 ?>