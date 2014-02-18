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
		'tickers' => json_encode(App::make('ThirdWorldProblems\Ticker')->all()),
		'morbid' => json_encode(App::make('ThirdWorldProblems\Morbid')->all())
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

Route::post('/sweatshop', function() {
	$data = [ 'text' => Crypt::encrypt(Input::get('text')) ];
	Mail::send('emails.results', $data, function($mail) {
		$mail->to('someone@danharper.me');
	});
});

Route::get('/results/{text}', function($text) {
	$text = Crypt::decrypt($text);
	return View::make('flipped', ['text' => $text]);
});
