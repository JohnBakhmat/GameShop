<?php
class Game
{
	public int $Id;
	public string $Name;
	public string $Developer;
	public string $Publisher;
	public string $Engine;

	public int $Year;
	public float $Price;

	public function __construct(int $id, string $name, string $dev, string $publ, string $engine, int $year, float $price)
	{
		$this->Id = $id;
		$this->Name = $name;
		$this->Developer = $dev;
		$this->Publisher = $publ;
		$this->Engine = $engine;
		$this->Year = $year;
		$this->Price = $price;
	}
	public function __toString()
	{
		return "" . $this->id . ","
			. $this->Name . ","
			. $this->Developer . ","
			. $this->Publisher . ","
			. $this->Engine . ","
			. $this->Year . ","
			. $this->Price;
	}
}
