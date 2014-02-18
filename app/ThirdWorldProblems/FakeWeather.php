<?php namespace ThirdWorldProblems;

class FakeWeather implements IWeather {

	protected $weather = [
		'sunny'
	];

	function weatherInLocation($location)
	{
		return $this->weather[array_rand($this->weather, 1)];
	}

}
