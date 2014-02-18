
var runTicker = function() {
	var totalDeaths = 0, $deaths = $('#deaths');
	var ticker = function() {
		totalDeaths++;
		$deaths.text(totalDeaths);
	};
	setInterval(ticker, 1780);
};
	
$(function() {
	runTicker();
});
