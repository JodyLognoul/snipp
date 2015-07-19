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
 	.styles([
 		'../../vendor/font-awesome.css'
 		],'public/css/vendor.css')
 });
