<?php 

	$str = "Hello World";

	echo "<br> $str ";
	printf("<br>the string is %s" , $str);

	$len = strlen($str);

	echo "<br>length is $len";

	echo "<br>".strpos($str, "World"); // case sensative
	echo "<br>".stripos($str, "world"); //case insensative
	echo "<br>".strrpos($str, "o"); // reverse
	echo "<br>".strripos($str, "O"); //reverse case insesative


	echo "<br> ".str_replace("World", "PHP", $str); // case senstive
	echo "<br> ".str_ireplace("world", "PHP", $str);//case insensative

	echo "<br>" . substr($str, 6,5);

	echo "<br>".strtoupper($str);
	echo "<br>".strtolower($str);

	$str1= "hello";
	$str2= "HELLO";

	if(strcasecmp($str1,$str2)==0) //strcmp ==
	{
		echo "<br>strings are equal";
	}
	else
	{
		echo "<br>strings are not equal";
	}

	$name = "Nehaasd as";

	$spacepos = strpos($name," ");
	$strlen = strlen($name);


	echo "<br> First Name is ".substr($name,0,$spacepos) ;
	echo "<br> Last Name is ".substr($name,$spacepos+1,$strlen-$spacepos);



 ?>