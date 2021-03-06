var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss', 'resources/assets/css')
    	.styles([
    		'normalize.css',
    		'bootstrap.min.css',
            'font-awesome.css',
            'owl.carousel.css',
            'owl.theme.css',
    		'app.css'
    		])
    	.scripts([
    		'jquery.js',
    		'bootstrap.min.js',
    		'owl.carousel.min.js',
            'modernizr.js',
    		'app.js'
    		])
    	.version(['css/all.css','js/all.js'])
});

