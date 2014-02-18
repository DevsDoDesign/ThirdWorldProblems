$(function() {

	var BackView = Backbone.View.extend({
		template: function(data) {
			var w = data.category ? data.category.name+' ' : '';
			if (data.weather) {
				w += 'In '+data.weather.city+' it\'s '+data.weather.weather;
			}
			return 'Something... '+w;
		},
		render: function(data) {
			this.$el.append(this.template(data));
			return this;
		}
	});

	var $wrap = $('#wrap');

	var flipIt = function(text, category) {
		$wrap.empty();
		var data = {
			text: text,
			category: category,
			weather: window.TheWeather
		};
		var view = new BackView();
		$wrap.append(view.render(data).el);
	};

	$('textarea').autogrow();

	$('#submitBtn').click(function(e) {
		e.preventDefault();
		var text = $('textarea').val().trim();
		if ( ! text) return alert("Enter something then, knob");
		var category = ExtractData.extract(text);
		flipIt(text, category);
	});


});