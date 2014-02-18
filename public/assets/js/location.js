(function() {

	var gotWeather = function(weather) {
		alert('In '+weather.city+' it\'s '+weather.weather);
	};

	navigator.geolocation.getCurrentPosition(function(location) {
		var loc = {
			lat: location.coords.latitude,
			lng: location.coords.longitude
		};

		console.debug(loc);
		$.post('/weather', loc).then(gotWeather);
	});

})();