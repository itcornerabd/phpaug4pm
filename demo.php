Hello world todays date is  <?php echo date('d-m-Y'); ?>

<?php 

	error_reporting(E_WARNING); // 0 no error ,1 -all error E_WARNING E_NOTICE E_ERROR

	define("PI",3.14);
	
	echo PI ;
	$a=10;
	$s ="hello world";
	$b=20;
	//echo '<br>'.$a ;
	//echo $a;

	echo "<br> $a" ;

	echo "<br>".($a/$b); //10/20 = 0.5 10%20 =10 3%5= 3

	$a+=10; //$a=$a+10;

	echo "<br>".a;
 
	$b=$a++ + ++$a ;//	$a+=1;
	//    21 +  21
	echo "<br>".$a;
	echo "<br>".$b;




	//1. save as  .php 
	//2 . <?php ? > <? ? > <% %> 
	// comment // /* */
	// sstment end with ; 

	//parseError
	//Notice continue
	//Fatal stop 
	//warning

 ?>






