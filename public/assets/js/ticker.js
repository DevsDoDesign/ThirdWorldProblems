
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
		oprahMade += .9;
		$oprah.text(oprahMade.toFixed(2));
	};
	setInterval(ticker, 100);
};

var runDivorce = function() {
	var divorces = 2, $divorce = $('#divorce');
	var ticker = function() {
		divorces += .2;
		$divorce.text(parseInt(divorces, 10));
	};
	setInterval(ticker, 1300);
};

var runHiv = function() {
	var hiv = 0, $hiv = $('#hiv');
	var ticker = function() {
		hiv += 1;
		$hiv.text(hiv);
	};
	setInterval(ticker, 6600);
};

var runJustin = function() {
	var justin = 0, $justin = $('#justin');
	var ticker = function() {
		justin += 1;
		$justin.text(justin);
	};
	setInterval(ticker, 2000);
});

var runFred = function() {
	var made = 0, $oprah = $('#fred');
	var ticker = function() {
		made += .065;
		$oprah.text(made.toFixed(2));
	};
	setInterval(ticker, 100);
};
	
$(function() {
	runDeaths();
	runOprah();
	runDivorce();
	runHiv();
	runJustin();
	runFred();
});
