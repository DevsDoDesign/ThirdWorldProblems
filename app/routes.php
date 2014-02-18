<?php

// App::bind('ThirdWorldProblems\IWeather', 'ThirdWorldProblems\WeatherMapWeather');
App::bind('ThirdWorldProblems\IWeather', 'ThirdWorldProblems\FakeWeather');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/data', function()
{
	return [
		App::make('ThirdWorldProblems\IWeather')->weatherInLocation('London'), // ['lat' => x, 'lng' => x] or just city name
		App::make('ThirdWorldProblems\Morbid')->one(),
	];
});

Route::get('/', function()
{
	return View::make('home', [
		'tickers' => json_encode(App::make('ThirdWorldProblems\Ticker')->all())
	]);
});

Route::get('/tickers', function()
{
	return View::make('tickers');
});

Route::post('/weather', function() {
	$loc = [
		'lat' => Input::get('lat'),
		'lng' => Input::get('lng'),
	];

	return App::make('ThirdWorldProblems\IWeather')->weatherInLocation($loc);
});
