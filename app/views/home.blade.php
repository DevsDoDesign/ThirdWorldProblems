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
				<div style="overflow:hidden;">
					<!-- LOL, devs do design!. cba to fuck with Ed's SASS as he's rewriting it all... -->
					<div style="width:48%;float:left;margin-right:4%;">
						<a class="button" href="" id="mechanicalSubmit">Mechanical</a>
					</div><div style="width:48%;float:left;">
						<a class="button" href="" id="sweatshopSubmit">Sweatshop*</a>
					</div>
				</div>
				<p style="font-size:.7em;color:#999;margin-top:1em;text-align:right;">
					*100% Poverty Guaranteed&trade;
				</p>
			</div>
		</div>
	</section>

	<script id="ticker-strings">
		var Tickers = {{$tickers}};
		var Morbid = {{$morbid}};
	</script>

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
			<% _.each(tickers, function(ticker) { %>
				<%= ticker.el %>
			<% }); %>
		</div>
		<div class="death-count">
			<p>By the way<span>24</span> people have died whilst you have been reading this</p>
		</div>
	</script>

	@include('_app')

</body>
</html>