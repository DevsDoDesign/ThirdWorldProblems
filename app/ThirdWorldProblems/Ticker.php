<?php namespace ThirdWorldProblems;

class Ticker {

	protected $tickers = [
		[
			'beforeText' => 'Since you\'ve been reading, this many people have died',
			'afterText' => 'So shut your fucking moaning, and get on with life!',
			'id' => 'deaths',
			'increment' => 1,
			'interval' => 1780,
			'tags' => ['death']
		],
		[
			'beforeText' => 'Since you have been here, Oprah has made',
			'afterText' => 'since you got here, pauper',
			'id' => 'oprah',
			'increment' => 0.9,
			'interval' => 100,
			'tags' => ['oprah', 'rich', 'money']
		],
		[
			'beforeText' => 'Fred the Shred, makes £39 per minute on his pension. That\'s',
			'afterText' => 'since you loaded the page',
			'id' => 'fred',
			'increment' => 0.065,
			'interval' => 100,
			'tags' => ['fred', 'money', 'rich']
		],
		// [
		// 	'beforeText' => 'Since you\'ve been reading, this many people have got divorced',
		// 	'afterText' => 'Being single doesn\'t look so bad now does it?',
		// 	'id' => 'divorce',
		// 	'increment' => 0.2,
		// 	'interval' => 1300,
		// 	'tags' => ['divorce']
		// ],
		[
			'beforeText' => 'Since you\'ve been reading, this many people have been diagnosed with HIV',
			'afterText' => 'Wear a condom, dickhead.',
			'id' => 'hiv',
			'increment' => 1,
			'interval' => 6600,
			'tags' => ['hiv', 'sick', 'ill']
		],
		// [
		// 	'beforeText' => 'Dan Edwards, Young Designer of the Year has had',
		// 	'afterText' => 'spam mentions on Twitter since you got here.',
		// 	'id' => 'de',
		// 	'increment' => 1,
		// 	'interval' => 5000,
		// 	'tags' => ['de', 'dan', 'design']
		// ],
		[
			'beforeText' => 'Justin Beiber has gained this many fans since',
			'afterText' => 'Don\'t you wish someone loved you that much?',
			'id' => 'justin',
			'increment' => 1,
			'interval' => 2000,
			'tags' => ['justin', 'bieber']
		]
	];

	function one_rand()
	{
		return $this->tickers[array_rand($this->tickers, 1)];
	}

	function all()
	{
		return $this->tickers;
	}

}
