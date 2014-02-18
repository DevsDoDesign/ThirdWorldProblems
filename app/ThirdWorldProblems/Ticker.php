<?php namespace ThirdWorldProblems;

class Ticker {

	protected $tickers = [
		[
			'el' => '<div class="block-card"><h1 class="card-intro">Since you\'ve been reading, this many people have died</h1><p class="card-counter" id="deaths">1</p><h1 class="card-insult">So shut your fucking moaning, and get on with life!</h1></div>',
			'increment' => 1,
			'interval' => 1780,
			'tags' => ['death']
		],
		[
			'el' => '<div class="block-card"><h1 class="card-intro">Since you have been here, Oprah has made $</h1><p class="card-counter" id="oprah">1</p><h1 class="card-insult"> since you got here, pauper.</h1></div>',
			'increment' => 0.9,
			'interval' => 100,
			'tags' => ['oprah', 'rich', 'money']
		],
		[
			'el' => '<div class="block-card"><h1 class="card-intro">Fred the Shred, makes £39 per minute on his pension. That\'s £</h1><p class="card-counter" id="fred">1</p><h1 class="card-insult"> since you loaded the page</h1></div>',
			'increment' => 0.065,
			'interval' => 100,
			'tags' => ['fred', 'money', 'rich']
		],
		// [
		// 	'el' => '<div class="block-card"><h1 class="card-intro">Since you\'ve been reading, this many people have got divorced</h1><p class="card-counter" id="divorce">1</p><h1 class="card-insult">Being single doesn\'t look so bad now does it?</h1></div>',
		// 	'increment' => 0.2,
		// 	'interval' => 1300,
		// 	'tags' => ['divorce']
		// ],
		// [
		// 	'el' => '<div class="block-card"><h1 class="card-intro">Since you\'ve been reading, this many people have got divorced</h1><p class="card-counter" id="divorce">1</p><h1 class="card-insult">Being single doesn\' look so bad now does it?</h1></div>',
		// 	'increment' => 0.2,
		// 	'interval' => 1300,
		// 	'tags' => ['divorce']
		// ],
		[
			'el' => '<div class="block-card"><h1 class="card-intro">Since you\'ve been reading, this many people have been diagnosed with HIV</h1><p class="card-counter" id="hiv">1</p><h1 class="card-insult">Wear a condom, dickhead.</h1></div>',
			'increment' => 1,
			'interval' => 6600,
			'tags' => ['hiv', 'sick', 'ill']
		],
		// [
		// 	'el' => '<div class="block-card"><h1 class="card-intro">Dan Edwards, Young Designer of the Year has had</h1><p class="card-counter" id="de">1</p><h1 class="card-insult">spam mentions on Twitter since you got here.</h1></div>',
		// 	'increment' => 1,
		// 	'interval' => 5000,
		// 	'tags' => ['de', 'dan', 'design']
		// ],
		[
			'el' => '<div class="block-card"><h1 class="card-intro">Justin Beiber has gained this many fans since</h1><p class="card-counter" id="justin">1</p><h1 class="card-insult">Don\'t you wish someone loved you that much?</h1></div>',
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
