<?php 

$a=10;
foo();


echo "<br>".$a;

function foo()
{
	global $a;
	$a=20; // local var
	echo $a;
} 	
 ?>