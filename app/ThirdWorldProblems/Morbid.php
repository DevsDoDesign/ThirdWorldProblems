<?php namespace ThirdWorldProblems;

class Morbid {

	protected $news = [
		// [
		// 	'url' => 'http://www.nytimes.com/2014/02/18/world/middleeast/bombings-in-syria-force-wave-of-civilians-to-flee.html?hp&_r=1',
		// 	'title' => 'Bombings in Syria Force Wave of Civilians to Flee',
		// 	'description' => '', // description from the page
		// 	'head' => '', // our version of the headline
		// ],
		[
			'url' => 'http://www.independent.co.uk/news/world/africa/cannibal-restaurant-with-roasted-human-heads-on-the-menu-shut-down-by-police-9123693.html',
			'title' => "Cannibal restaurant 'with roasted human heads on the menu' shut down by police",
			'description' => '',
			'head' => 'This poor man selling human meat had his restaurant shut down',
		],
		[
			'url' => 'http://www.independent.co.uk/news/world/americas/dolphins-suffering-miscarriage-lung-disease-losing-teeth-after-bp-oil-spill-researchers-claim-9134045.html',
			'title' => "Dolphins 'suffering miscarriage, lung disease, losing teeth after BP oil spill' researchers claim",
			'description' => '',
			'head' => 'Fucking dolphins are dying of lung cancer without *ANY* healthcare, and people are bitching about Twitter being slow...',
		],
		// [
		// 	'url' => 'http://www.independent.co.uk/news/uk/politics/tories-deliberately-mock-women-mps-for-their-northern-accents-says-pat-glass-9133437.html',
		// 	'title' => "Tories 'deliberately mock women MPs for their northern accents' says Pat Glass",
		// 	'description' => '',
		// 	'head' => '',
		// ],
		[
			'url' => 'http://www.independent.co.uk/news/world/asia/a-land-of-unspeakable-atrocities-un-commission-warns-leader-kim-jongun-he-could-face-trial-for-human-rights-abuses-in-north-korea-9134405.html',
			'title' => "A land of 'unspeakable atrocities': UN commission warns North Korean leader Kim Jong-Un he could face trial for human rights abuses",
			'description' => '',
			'head' => 'North Korean leader is just chilling, toturing his citizens and the FUCKING UN want to imprison him for "human rights violations". That crack in your iPhone is NOT THAT BAD.',
		],
		[
			'url' => 'http://www.telegraph.co.uk/news/worldnews/europe/denmark/10626958/Danish-zoo-shoots-giraffe-and-feeds-carcass-to-carnivores.html',
			'title' => 'Danish zoo shoots giraffe and feeds carcass to carnivores',
			'description' => '',
			'head' => 'The Danes are slaughtering giraffes to entertain children. Is your problem really as bad as giraffe corpses? Thought not. Now shut your trap, dick.',
		],
		[
			'url' => 'http://www.businessinsider.com/flappy-bird-death-threats-2014-2',
			'title' => "To Understand What Upset The Creator Of 'Flappy Bird' So Much, Read These Death Threats",
			'description' => '',
			'head' => 'A guy stops giving away his free game, and people want to MURDER HIM.',
		],
		[
			'url' => 'http://www.theguardian.com/world/video/2014/feb/11/homs-syria-civilians-evacuated-video',
			'title' => 'Homs: chaotic scenes as Syrian civilians evacuated – video',
			'description' => '',
			'head' => 'Honda are showing pre-roll adverts before videos of Syrians having THEIR HEAD BLOWN OFF. They\'ll start doing it to you if you don\'t shut your wingeing trap.',
		],
	];

	function one()
	{
		return $this->news[array_rand($this->news, 1)];
	}

}
