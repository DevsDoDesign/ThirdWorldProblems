window.ExtractData = (function() {


	var parse = function(problem) {
		var parsers = [
			{
				name: 'rich',
			 	regex: /(\s|^)(phone|tablet|iphone|ipad|nexus|samsung|slow|lag|money|computer|web|boss)/gi
			},
			{
				name: 'clothing',
				regex: /(\s|^)(cloth|shirt|tshirt|shoe|trouser|skirt|dress|hat)/gi
			},
			{
				name: 'food',
				regex: /(\s|^)(food|hungry|thirsty)/gi
			}
		];

		return _.find(parsers, function(parser) {
			return problem.match(parser.regex);
		});
	}

	var API = {
		extract: function(problem) {
			return parse(problem);
		}
	};

	return API;

})();