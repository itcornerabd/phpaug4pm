<?php 

	class dog
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

			public function bark()
			{
				echo " bhow";
			}	

	}



	class cat
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

			public function meow()
			{
				echo "meow";
			}	

	} 







	$tommy = new dog('tommy');
	$moti = new dog('moti');

	$moti->setage(4);

	echo $tommy->getage();

	$tommy->bark();


	$tom =  new cat('Tom');

	$tom->meow();


 ?>