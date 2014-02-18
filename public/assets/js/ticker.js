
var runDeaths = function() {
	var totalDeaths = 0, $deaths = $('#deaths');
	var ticker = function() {
		totalDeaths++;
		$deaths.text(totalDeaths);
	};
	setInterval(ticker, 1780);
};

var runOprah = function() {
	var oprahMade = 0, $oprah = $('#oprah');
	var ticker = function() {
		oprahMade += 9;
		$oprah.text(oprahMade);
	};
	setInterval(ticker, 1000);
};

var runDivorce = function() {
	var divorces = 2, $divorce = $('#divorce');
	var ticker = function() {
		divorces += 2;
		$divorce.text(divorces);
	};
	setInterval(ticker, 13000);
};

var runHiv = function() {
	var hiv = 0, $hiv = $('#hiv');
	var ticker = function() {
		hiv += 1;
		$hiv.text(hiv);
	};
	setInterval(ticker, 6600);
};
	
$(function() {
	runDeaths();
	runOprah();
	runDivorce();
	runHiv();
});
