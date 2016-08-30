<?php 

 include_once 'inc.php';

 include_once 'inc.php';

// warning on wrong file execution will continue 


 //require 'inc.php';

 // require_once 'inc.php'

// fatal error on wrong file , execution will stop
 
echo "in function file";


$p =1000;
$r=2;
$t=2;

 
echo si($p,$r,$t);

echo "<br>". si(2000);
echo "<br>". si(3000,2);
echo "<br>". si(4000,2,2);
echo "<br>". si(2000,3,2);
echo "<br>". si(2000,4,3);




 ?>