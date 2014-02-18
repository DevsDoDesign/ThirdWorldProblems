$(function() {

	var BackView = Backbone.View.extend({
		template: function(data) {
			var w = data.category ? data.category.name+' ' : '';
			if (data.weather) {
				w += 'In '+data.weather.city+' it\'s '+data.weather.weather;
			}
			// return 'Something... '+w;
			var template = $('#t-flip').html();
			return _.template(template, {
				problem: data.text,
				weather: data.weather,
				category: data.category ? data.category.name : null,
				tickers: data.tickers
			});
		},
		render: function(data) {
			this.$el.append(this.template(data));
			_.defer(this.afterRender.bind(this));
			return this;
		},
		afterRender: function() {
			// console.debug('foo');
		}
	});

	var $wrap = $('#wrap');

	var sendItToTheSweatshop = function(text, category) {
		var data = {
			text: text,
			category: category
		};

		$.post('/sweatshop', data).then(function() {
			$wrap.empty();
			$wrap.html('<div class="block-submitted">\
				<div class="dotted-wrapper">\
					<div class="hero-submitted">\
						<p class="submitted-quote">Thanks, we\'ll get back to you!</p>\
					</div>\
				</div>\
			</div>');
		});
	};

	var flipIt = function(text, category) {
		$wrap.empty();
		var foundTickers = [];
		while (_.keys(foundTickers).length < 3) {
			var random = _.random(1, 5);
			foundTickers[random] = Tickers[random];
		}

		var data = {
			text: text,
			category: category,
			weather: window.TheWeather,
			tickers: foundTickers
		};

		var view = new BackView();
		$wrap.append(view.render(data).el);
	};

	$('textarea').autogrow();

	var outData = function(callback) {
		var text = $('textarea').val().trim();
		if ( ! text) return alert("Enter something then, knob");
		var category = ExtractData.extract(text);
		callback(text, category);
	};

	$('#mechanicalSubmit').click(function(e) {
		e.preventDefault();

		outData(flipIt);
	});

	$('#sweatshopSubmit').click(function(e) {
		e.preventDefault();
		var text = $('textarea').val().trim();
		if ( ! text) return alert("Enter something then, knob");
		var category = ExtractData.extract(text);

		outData(sendItToTheSweatshop);
	});


});