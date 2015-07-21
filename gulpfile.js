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
 	.sass('app.scss')
 	.copy(
 		'vendor/bower_components/fontawesome/css/font-awesome.css',
 		'resources/vendor/font-awesome.css'
 		)
 	.copy(
 		'vendor/bower_components/fontawesome/fonts',
 		'public/fonts/'
 		)
 	.copy(
 		'vendor/bower_components/highlightjs/styles',
 		'public/hljs/styles'
 		)
 	.copy(
 		'vendor/bower_components/highlightjs/highlight.pack.js',
 		'resources/vendor/highlightjs.js'
 		)
 	.scripts([
 		'app.js'
 		])
 	.scripts([
 		'../../vendor/highlightjs.js'
 		], 'public/js/vendor.js')
 	.styles([
 		'../../vendor/font-awesome.css',
 		],'public/css/vendor.css');
 });
