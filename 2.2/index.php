<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Классы</title>
</head>
<body>
	<?php
	interface AbstractAnimal
	{
		public function getKingdom();
		public function getPawAmount();
		public function getTailAmount();
		public function getWingAmount();
	}
	class BaseAnimal implements AbstractAnimal
	{
		protected $kingdom;
		protected $pawAmount;
		protected $tailAmount;
		protected $wingAmount;

		public function __construct($pawAmount, $tailAmount, $wingAmount)
		{
			$this->pawAmount = $pawAmount;
			$this->tailAmount = $tailAmount;
			$this->wingAmount = $wingAmount;
		}
		public function getKingdom()
		{
			return $this->kingdom;
		}
		public function getPawAmount()
		{
			return $this->pawAmount;
		}
		public function getTailAmount()
		{
			return $this->tailAmount;
		}
		public function getWingAmount()
		{
			return $this->wingAmount;
		}
	}
	class Animal extends BaseAnimal
	{
		protected $kingdom = 'Animal';
	}
	class Fish extends BaseAnimal
	{
		protected $kingdom = 'Fish';
	}
	class Bird extends BaseAnimal
	{
		protected $kingdom = 'Bird';
	}
	class AnimalFactory
	{
		public static function createAnimal($pawAmount, $wingAmount, $tailAmount)
		{
			return new Animal($pawAmount, $wingAmount, $tailAmount);
		}
		public static function createFish($pawAmount, $wingAmount, $tailAmount)
		{
			return new Fish($pawAmount, $wingAmount, $tailAmount);
		}
		public static function createBird($pawAmount, $wingAmount, $tailAmount)
		{
			return new Bird($pawAmount, $wingAmount, $tailAmount);
		}
	}
	$riba = AnimalFactory::createAnimal(2,2,2);
	echo $riba->getKingdom();
	?>
</body>
</html>