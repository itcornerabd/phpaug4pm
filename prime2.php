<?php 
$no=17; // sqrt17 - 5 49 7   
	
	$isPrime  = true;
	for ($i=2; $i<= sqrt($no); $i++) 
	{ 
		if($no%$i==0)
			{
				echo "$no is divisible by $i <br>";
				$isPrime=false;
				break;
			}	 	
	}

	if($isPrime)
		echo "no is prime";
	else
		echo "no is not prime";

// 1-100 prime list 
//y
 

 ?>