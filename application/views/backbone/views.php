<script>
	var content_view = Backbone.View.extend({
		tagName: "div",
		template: _.template($('#content_template').html()),
		initialize: function() {
			this.render();
		},
		render: function() {
			this.$el.html(this.template(this.model.toJSON()));
			return this;
		},
	});
	
	var content = Backbone.View.extend({
		el: $('#content'),
		initialize: function() {
			this.collection = new content_collection();
			this.render();
		},
		render: function() {
			var that = this;
			_.each(this.collection.models, function(item) {
				var print = new content_view({
					model: item,
				});
				this.$el.append(print.render().el);
			});
		},
	});
</script>