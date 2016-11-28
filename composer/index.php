<?php 
	require './vendor/autoload.php';

	Use Carbon\Carbon;


	$faker = Faker\Factory::create();

	echo $faker->email  ."<br>";

	echo  Carbon::createFromDate(1975, 5, 21)->age;
	 $datestring = '25/10/2014';

	 $date = Carbon::createFromFormat('d/m/Y',$datestring);

	 var_dump($date);

	 echo  $date->diffForHumans(Carbon::now());

 ?>