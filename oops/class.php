<?php 

	class movie
	{
       public  $name, $cast,$categoryid,$plot; 	

       // public function __construct($name,$cast,$categoryid,$plot)
       // {
       // 		$this->name =$name;
       // 		$this->cast=$cast;
       // 		$this->categoryid=$categoryid;
       // 		$this->plot=$plot;	
       // }


       public function categoryname()
       {
       		if($this->categoryid==1)
       			return 'ACTION';
       		else
       			return 'COMEDY';
       }
	}

	$newmovie = [ new  movie('some movie','123',1,'12312'),
				new  movie('some movie','123',1,'12312'),
				new  movie('some movie','123',1,'12312')
									];


$con =	new PDO('mysql:host=localhost;dbname=movies_db','root','');							

		
$statement = $con->prepare('select * from movies');

$statement->execute();
		
$newmovie = $statement->fetchall(PDO::FETCH_CLASS,'movie');

//var_dump($newmovie);	
		




//var_dump($newmovie);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<table align="center" width="500px" border="1">
		<tr>
			<th>Name</th>
			<th>cast</th>
			<th>category</th>
		</tr>
		<?php foreach($newmovie as $movie): ?>	

		<tr>
			<td> <?=$movie->name;?> </td>
			<td> <?=$movie->cast;?></td>
			<td> <?=$movie->categoryname();?></td>
		</tr>
		<?php endforeach ?>

	</table>
	


</body>
</html>



