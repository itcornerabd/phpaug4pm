<?php 
	$price =10.67;

	echo ceil($price). "<br>";
	echo floor($price)."<br>";
	echo round($price)."<br>";	

	$fruits=[9=>'Mango',4=>'Apple',2=>'Banana',7=>'Orange'];

	var_dump($fruits);

	//sort($fruits); // sort in acending order and reassign index

	//rsort($fruits);// sort in decending order and reassign index

	//asort($fruits); // sort in acending order and preserving index

	//arsort($fruits); // sort in decending order and preserving index

	ksort($fruits); // sort according to key/index  order and preserving index
	//krsort

	var_dump($fruits);
	
	$str =implode(",",$fruits); // array to string 

	echo $str;

	$newFruits = explode(",", $str); //string to array

	var_dump($newFruits);


	$name = "Ram Ganesh Gadakari";

	$namearray = explode(" ", $name);

	echo $namearray[0] . " ".$namearray[2] ;
	var_dump($namearray);

	$date = "27/08/2014"; // 2014-08-27 // date[2]-date[1]-date[0]

 ?>