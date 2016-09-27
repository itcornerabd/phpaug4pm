<?php 

	$name = "User ";

	$animals = ['dog','cat','parrot','tiger'];


	$fruits=[];
	$fruits = [
				['name'=>'apple','rate'=>40,'location'=>'kashmir'],
				['name'=>'Mango','rate'=>60,'location'=>'maharastra'],
				['name'=>'orange','rate'=>80,'location'=>'kashmir'],
			  ];

 ?>		
<!DOCTYPE html>
<html>
<head>
	<title>Demo </title>
</head>
<body>

<h1>
	Welcome <?=$name; ?> 
</h1>
		
	<?php if(count($animals)>0): ?>
		<ul>
			<?php foreach($animals as $animal ): ?>		
			
					<li> <?=$animal?> </li>
			
			<?php endforeach ?>
		</ul>

	<?php else: ?>

		<h3>No Animals found!!!</h3>

	<?php endif ?>	


	<?php if(count($fruits)>0): ?>
	<table align="center" width="500px" border="1">
		<tr>
			<th>Name</th>
			<th>Location</th>
			<th>Rate</th>
		</tr>
		<?php foreach($fruits as $fruit): ?>	

		<tr>
			<td><?=$fruit['name'];?></td>
			<td><?=$fruit['location'];?></td>
			<td align="right"><?=$fruit['rate'];?></td>
		</tr>
		<?php endforeach ?>

	</table>
	<?php else: ?>
		<h3>No fruits found</h3>
	<?php endif ?>
</body>
</html>

