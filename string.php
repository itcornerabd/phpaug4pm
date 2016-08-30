<?php 
	
	$str = "Hello World";
	$str = trim($str); // to remove spaces from start and end of 	string  
	$len = strlen($str);

	echo "<br>".strtoupper($str);
	echo "<br>".strtolower($str);


	echo "<br>". $len;

	echo $str;
	printf("<br>string is  %s ",$str);

	echo "<br>". strpos($str,"World"); // case sensative
	echo  "<br>". stripos($str,"world"); //case in sensative

	echo  "<br>". strrpos($str,"o"); // seach from reverse
	echo  "<br>". strripos($str,"O"); //seach from reverse ase in sensative

	echo "<br>". str_replace("World","PHP",$str);// case sensative
	echo "<br>". str_ireplace("world","PHP",$str);//case in sensative

	echo "<br>". substr($str,6,3);

	$name = "Neha Borse";

	$spacepos = strpos($name," ");// 6
	$len =strlen($name); // 14

	echo "<br>" . substr($name,0,$spacepos);
	echo "<br>" . substr($name,$spacepos, $len-$spacepos );		

	// 26/08/1990 -- dispaly year 

	date_default_timezone_set("Asia/Kolkata");
	echo "<br>". date('Y-m-d H:i:s A');
	

 ?>
 