<?php namespace ThirdWorldProblems;

class Morbid {

	protected $tickers = [
		[
			'el' => '<div id="death"><span class="num">0</span> people have died since you read this, you fuckwit.</div>',
			'increment' => 1,
			'interval' => 1780,
			'tags' => ['death']
		],
		[
			'el' => '<div id="oprah">Oprah has made $<span class="num">0</span> since you got here, pauper.</div>',
			'increment' => 0.9,
			'interval' => 100,
			'tags' => ['oprah', 'rich', 'money']
		],
		[
			'el' => '<div id="banks">The guy who caused the banks to crash, Fred the Shred, makes £39 <strong>per minute</strong> on his pension. Thats £<span class="num">0</span> since you loaded the page.</div>',
			'increment' => 0.065,
			'interval' => 100,
			'tags' => ['fred', 'money', 'rich']
		],
		[
			'el' => '<div id="divorce"><span class="num">0</span> people have got divorced. Being single doesn\' look so bad now does it?</div>',
			'increment' => 0.2,
			'interval' => 1300,
			'tags' => ['divorce']
		],
		[
			'el' => '<div id="hiv"><span class="num">0</span> people have been diagnosed with HIV. Wear a condom, dickhead.</div>',
			'increment' => 1,
			'interval' => 6600,
			'tags' => ['hiv', 'sick', 'ill']
		],
		[
			'el' => '<div id="de">Dan Edwards, of Young Designer of the Year fame, has had <span class="num">0</span> spam mentions on Twitter since you got here.</div>',
			'increment' => 1,
			'interval' => 5000,
			'tags' => ['de', 'dan', 'design']
		],
		[
			'el' => '<div id="bieber">Justin Bieber has gained <span class="num">0</span> followers. Don\'t you wish someone loved <strong>you</strong> that much?</div>',
			'increment' => 1,
			'interval' => 2000,
			'tags' => ['justin', 'bieber']
		]
	];

	function one_rand()
	{
		return $this->tickers[array_rand($this->tickers, 1)];
	}

}
