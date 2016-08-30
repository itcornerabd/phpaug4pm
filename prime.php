<?php 
$no=3242331113; // 2-- 16  // 15 -- 2 14 
//324233 2 324232
 $flag= true;
	for($i=2;$i<=($no/2);$i++)
	{
		if( $no%$i==0 )
		{
			$flag =false;
			echo "$no is divided by $i <br>";
			break;
		}

	} 

if($flag == true)
{
	echo "$no is prime";
}
else
{
	echo "$no is not prime";
}









 ?>