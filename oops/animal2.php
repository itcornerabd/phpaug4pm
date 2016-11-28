<?php 


	class Animal 
	{
		protected $name,$age,$wight,$nail;

			public function  __construct($name)
		{
			$this->name = $name;
		}

		public function getage()
		{
			return $this->age;
		}

		public function setage($age=1)
		{
			if($age<1)
				$age=1;
			$this->age=$age;
		}

	}



	class dog extends Animal
	{
			public function talk()
			{
				echo " bhow";
			}	

	}



	class cat extends Animal
	{
		
			public function talk()
			{
				echo "meow";
			}	

	} 

	$tommy = new dog('tommy');
	$moti = new dog('moti');

	$moti->setage(4);

	echo $tommy->getage();

	$tommy->talk();


	$tom =  new cat('Tom');

	$tom->talk();


 ?>