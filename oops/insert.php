<?php 	
	
$con =	new PDO('mysql:host=localhost;dbname=movies_db','root','');							

	$name = 'new movie';
	$cast = 'some cast ';
	$plot = 'asdasda';
	$categoryid=2;

$statement= $con->prepare('insert into movies (name,cast,categoryid,plot) values (?,?,?,?)');

//$statement= $con->prepare('update movies set name = ? ,cast = ?,categoryid=? ,plot = ?  where id=? ');


 $result = $statement->execute([$name,$cast,$categoryid,$plot]);

 	var_dump(	$result	);	
	





 ?>