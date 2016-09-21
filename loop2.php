<?php 
	// init cond  increment
	echo "for loop";
	for($i=2;$i<=10;$i+=2)
	{
		echo $i ."<br>" ;
	}	

	$j=1;
	echo "while loop";
	while($j<=10)
	{
		echo $j . "<br>";
		$j++;
	}

	$k=1;
	echo "do while loop";
	do
	{
		echo $k."<br>";
		$k++;
	}while($k<=10);

?>