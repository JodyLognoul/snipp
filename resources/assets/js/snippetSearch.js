var vm = new Vue({
	
	el: ".snippet-index",

	data: {
		query: '',
		snippets: [],
	},
	ready: function(){
		this.client = algoliasearch('G3M23URKQY', '68ac8fb94d2c2df3929d256d607afa36');
		this.index = this.client.initIndex('dev_SNIPPET');
		this.$input = $('.input-search-snippet');
		this.loadTypeahead();
		this.fetchSnippets();
	},
	methods: {
		search: function(){
			this.index.search(this.query, function(error, results){
				this.snippets = results.hits;
				this.$input.typeahead('close');
			}.bind(this));
		},
		fetchSnippets: function(){
			this.$http.get('/api/snippets', function(snippets){
				this.snippets = snippets;
			});				
		},
		loadTypeahead: function(){
			this.$input.typeahead({
				minLength: 1,
				highlight: true,
				hint: false
			}, {
				source: this.index.ttAdapter(),
				displayKey: 'description',
				templates: {
					suggestion: function(hit){
						return (
							'<div class="tt-result">' +
							'<h3 class="description">' + hit._highlightResult.description.value + '</h3>' +
							'<h4 class="content">' + hit._highlightResult.content.value + '</h4>' +
							'</div>');
					},
					empty: function(){
						return '<div class="tt-result-not-found"><p>No data found</p></div>'; 
					},
					pending: function(){
						return '<div class="tt-results-pending"><p><i class="fa fa-spinner fa-spin"></i> Loading...</p></div>';	
					}
				}
			}).on('typeahead:select', function(e, suggestion){
				this.query = suggestion.description;
				this.search();
			}.bind(this));
		}
	}

})

//8598