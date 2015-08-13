var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

 elixir(function(mix) {
 	mix
 	.phpUnit()
 	.sass('app.scss')
 	.copy(
 		'vendor/bower_components/fontawesome/fonts',
 		'public/fonts/'
 		)
 	.copy(
 		'vendor/bower_components/highlightjs/styles',
 		'public/hljs/styles'
 		)
 	.scripts([
 		'../../../vendor/bower_components/highlightjs/highlight.pack.js',
 		'../../../vendor/bower_components/jquery/dist/jquery.min.js',
 		'../../../vendor/bower_components/vue/dist/vue.js',
 		'../../../vendor/bower_components/typeahead.js/dist/typeahead.jquery.js',
 		'../../../vendor/bower_components/algoliasearch/dist/algoliasearch.js',
 		'../../../vendor/bower_components/sweetalert/dist/sweetalert-dev.js',
 		], 'public/js/vendor.js')
 	.scripts([
 		'config.js'
 		], 'public/js/config.js')
 	.scripts([
 		'app.js',
 		'snippetSearch.js'
 		])
 	.styles([
 		'../../../vendor/bower_components/fontawesome/css/font-awesome.css',
 		'../../../vendor/bower_components/sweetalert/dist/sweetalert.css',
 		],'public/css/vendor.css');
 });
