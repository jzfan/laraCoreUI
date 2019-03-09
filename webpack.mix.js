const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js');

mix.scripts([
	 	"public/js/app.js",
	 	"resources/coreui/vendors/jquery/js/jquery.min.js",
	 	"resources/coreui/vendors/popper.js/js/popper.min.js",
	 	"resources/coreui/vendors/bootstrap/js/bootstrap.min.js",
	 	"resources/coreui/vendors/pace-progress/js/pace.min.js",
	 	"resources/coreui/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js",
	 	"resources/coreui/vendors/@coreui/coreui/js/coreui.min.js",
	], 'public/js/all.js');

mix.styles([
		'resources/coreui/vendors/@coreui/icons/css/coreui-icons.min.css',
		'resources/coreui/vendors/flag-icon-css/css/flag-icon.min.css',
		'resources/coreui/vendors/font-awesome/css/font-awesome.min.css',
		'resources/coreui/vendors/simple-line-icons/css/simple-line-icons.css',
		'resources/coreui/style.css',
		'resources/coreui/vendors/pace-progress/css/pace.min.css',
	], 'public/css/all.css');