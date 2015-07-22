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
 		'app.js'
 		])
 	.scripts([
 		'../../../vendor/bower_components/highlightjs/highlight.pack.js',
 		'../../../vendor/bower_components/jquery/dist/jquery.min.js'
 		], 'public/js/vendor.js')
 	.styles([
 		'../../../vendor/bower_components/fontawesome/css/font-awesome.css',
 		],'public/css/vendor.css');
 });
