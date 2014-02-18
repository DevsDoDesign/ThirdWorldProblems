<?php namespace ThirdWorldProblems;

use Cmfcmf\OpenWeatherMap;

class WeatherMapWeather implements IWeather {

	public function __construct(OpenWeatherMap $owm)
	{
		$this->owm = $owm;
	}

	public function weatherInLocation($location)
	{
		$weather = $this->owm->getWeather($location, 'en', 'metric');
		return [
			'city' => $weather->city->name,
			'temperature' => $weather->temperature->now->getValue(),
			'humidity' => $weather->humidity->getValue(),
			'weather' => $weather->weather->description,
		];
	}

}
