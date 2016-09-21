<?php 
	
	$total = 15.67;

	echo "<br>". ceil($total);
	echo "<br>". floor($total);
	echo "<br>". round($total);

	date_default_timezone_set("Asia/Kolkata");

	echo "<br>" . date('Y-m-d H:i:s A');

 ?>