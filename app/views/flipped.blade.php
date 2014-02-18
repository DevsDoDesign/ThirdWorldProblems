<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>First World Problems</title>
	<link rel="stylesheet" href="../assets/css/screen.css">
</head>
<body>
	<section>
		<div class="block-submitted">
			<div class="dotted-wrapper">
				<div class="hero-submitted">
					<p class="submitted-quote">&ldquo;{{ $text }}&rdquo;</p>
				</div> 
			</div>
		</div>
		<div class="block-news-headline">
			<h2><a href="http://www.telegraph.co.uk/news/worldnews/europe/denmark/10626958/Danish-zoo-shoots-giraffe-and-feeds-carcass-to-carnivores.html" style="color:black;text-decoration:none;">The Danes are slaughtering giraffes to entertain children. Is your problem really as bad as giraffe corpses? Thought not. Now shut your trap, dick.</a></h2>
			<br><br>
		</div>
		<div class="block-cards">
			<div class="block-card">
				<h1 class="card-intro">Since you've been reading, this many people have died</h1>
				<p class="card-counter" id="deaths">1</p>
				<h1 class="card-insult">So shut your fucking moaning, and get on with life!</h1>
			</div>
			<div class="block-card">
				<h1 class="card-intro">Justin Beiber has gained this many fans since</h1>
				<p class="card-counter" id="justin">1</p>
				<h1 class="card-insult">Don't you wish someone loved <strong>you</strong> that much?</h1>
			</div>
			<div class="block-card">
				<h1 class="card-intro">Dan Edwards, Young Designer of the Year has had</h1>
				<p class="card-counter" id="de">1</p>
				<h1 class="card-insult">spam mentions on Twitter since you got here.</h1>
			</div>
		</div>
		<div class="death-count">
			<p>Isn't it interesting how every time someone follows Justin Bieber, someone dies?</p>
		</div>
	</section>

	<script src="/assets/js/jquery.js"></script>
	<script>
		var runDeaths = function() {
			var totalDeaths = 0, $deaths = $('#deaths');
			var ticker = function() {
				totalDeaths++;
				$deaths.text(totalDeaths);
			};
			setInterval(ticker, 1780);
		};

		var runDe = function() {
			var de = 0, $de = $('#de');
			var ticker = function() {
				de += 1;
				$de.text(de);
			};
			setInterval(ticker, 5000);
		};

		var runJustin = function() {
			var justin = 0, $justin = $('#justin');
			var ticker = function() {
				justin += 1;
				$justin.text(justin);
			};
			setInterval(ticker, 2000);
		};

		$(function() {
			runDeaths();
			runJustin();
			runDe();
		});
	</script>
</body>
</html>