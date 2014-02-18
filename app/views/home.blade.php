<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>First World Problems</title>
	<link rel="stylesheet" href="/assets/css/screen.css">
</head>
<body>
	<section id="wrap">
		<div class="block">
			<div class="dotted-wrapper">
				<div class="hero">
					<h1 class="submit-your">Submit Your</h1>
					<h1 class="first-world">First World</h1>
					<h1 class="problem">problem</h1>
				</div>
				<textarea name="" id="" style="height:38px !important; font-size:.8em;"></textarea>
				<!--
				<label for="decision-m">
					Mechanical <input type="radio" id="decision-m" name="decision" value="mechanical">
				</label>
				<label for="decision-s">
					Sweatshop <input type="radio" id="decision-s" name="decision" value="sweatshop">
				</label>
				-->
				<a class="button" href="" id="submitBtn">Submit</a>
			</div>
		</div>
	</section>

	<script id="t-flip" type="text/template">
		<div class="block-submitted">
			<div class="dotted-wrapper">
				<div class="hero-submitted">
					<p class="submitted-quote">&ldquo;<%= problem %>&rdquo;</p>
				</div> 
			</div>
		</div>
		<div class="block-news-headline">
			<h2>Killer eats monkey on top of eiffel tower</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, dolores, minus perspiciatis suscipit harum quam ipsum omnis quos obcaecati tempore dignissimos aperiam facere dicta dolor fuga et dolorem eaque facilis.</p>
		</div>
		<div class="block-cards">
			<div class="block-card">
				<h1 class="card-intro">Justin Beiber has gained this many followers</h1>
				<p class="card-counter">25</p>
				<h1 class="card-insult">Don't you wish you were this popular?</h1>
			</div>
			<div class="block-card">
				<h1 class="card-intro">Justin Beiber has gained this many followers</h1>
				<p class="card-counter">25</p>
				<h1 class="card-insult">Don't you wish you were this popular?</h1>
			</div>
			<div class="block-card">
				<h1 class="card-intro">Justin Beiber has gained this many followers</h1>
				<p class="card-counter">25</p>
				<h1 class="card-insult">Don't you wish you were this popular?</h1>
			</div>
		</div>
		<div class="death-count">
			<p>By the way<span>24</span> people have died whilst you have been reading this</p>
		</div>
	</script>

	@include('_app')

</body>
</html>