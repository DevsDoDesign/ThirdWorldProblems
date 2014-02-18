<?php namespace ThirdWorldProblems;

class FakeWeather implements IWeather {

	protected $weather = [
		'sunny'
	];

	function weatherInLocation($location)
	{
		return [
			'city' => 'Portsmouth',
			'temperature' => 282.45,
			'humidity' => 84,
			'weather' => $this->weather[array_rand($this->weather, 1)],
		];
	}

}
